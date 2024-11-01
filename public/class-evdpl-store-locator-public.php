<?php

/**
 * The public-facing functionality of the plugin.
 * 
 * @since      1.0.0
 *
 * @package    EvdplStoreLocator
 * @subpackage EvdplStoreLocator/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    EvdplStoreLocator
 * @subpackage EvdplStoreLocator/public 
 */
class EvdplStoreLocator_Public {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $EvdplStoreLocator    The ID of this plugin.
     */
    private $EvdplStoreLocator;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $EvdplStoreLocator       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($EvdplStoreLocator, $version) {
        $this->EvdplStoreLocator = $EvdplStoreLocator;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {
        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in EvdplStoreLocator_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The EvdplStoreLocator_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_enqueue_style($this->EvdplStoreLocator . '-all-css', EVDPL_URL_PATH . 'public/css/all-css.min.css', array(), $this->version, 'all');
        wp_enqueue_style($this->EvdplStoreLocator . '-asl-responsive', EVDPL_URL_PATH . 'public/css/asl_responsive.css', array(), $this->version, 'all');
        wp_enqueue_style($this->EvdplStoreLocator . '-asl', EVDPL_URL_PATH . 'public/css/asl.css', array(), $this->version, 'all');
    }

    /* Frontend of Plugin */

    public function frontendStoreLocator($atts) {
        //[myshortcode foo="bar" bar="bing"]
        //EVDPL_PLUGIN_PATH.
        wp_enqueue_script($this->EvdplStoreLocator . '-script', EVDPL_URL_PATH . 'public/js/site_script.js', array('jquery'), $this->version, true);

        if (!$atts) {
            $atts = array();
        }

        global $wpdb;
        $configs = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "configs WHERE `key` != 'server_key'");

        $all_configs = array();
        foreach ($configs as $_config)
            $all_configs[$_config->key] = $_config->value;

        $all_configs['URL'] = EVDPL_URL_PATH . 'public/';
        $all_configs['PLUGIN_URL'] = EVDPL_URL_PATH;

        if (!$atts) {
            $atts = array();
        }

        $all_configs = shortcode_atts($all_configs, $atts);

        #add the missing attributes into settings
        $all_configs = array_merge($all_configs, $atts);

        #Get the categories
        $all_categories = array();
        $results = $wpdb->get_results("SELECT id,category_name as name,icon FROM " . EVDPL_PREFIX . "categories WHERE is_active = 1");

        foreach ($results as $_result) {
            $all_categories[$_result->id] = $_result;
        }

        #Get the Markers
        $all_markers = array();
        $results = $wpdb->get_results("SELECT id,marker_name as name,icon FROM " . EVDPL_PREFIX . "markers WHERE is_active = 1");

        foreach ($results as $_result) {
            $all_markers[$_result->id] = $_result;
        }

        $all_configs['map_layout'] = '[]';

        #If the GDPR is enabled, dequeue the Google Maps
        if (isset($all_configs['gdpr']) && $all_configs['gdpr'] == '1') {
            wp_deregister_script('asl_google_maps');
        }

        #For Translation	
        $words = array(
            'direction' => __('Directions', 'store-locator-for-wp'),
            'zoom' => __('Zoom', 'store-locator-for-wp'),
            'detail' => __('Website', 'store-locator-for-wp'),
            'select_option' => __('Select Option', 'store-locator-for-wp'),
            'search' => __('Search', 'store-locator-for-wp'),
            'all_selected' => __('All selected', 'store-locator-for-wp'),
            'none' => __('None', 'store-locator-for-wp'),
            'none_selected' => __('None Selected', 'store-locator-for-wp'),
            'reset_map' => __('Reset Map', 'store-locator-for-wp'),
            'reload_map' => __('Scan Area', 'store-locator-for-wp'),
            'selected' => __('selected', 'store-locator-for-wp'),
            'current_location' => __('Current Location', 'store-locator-for-wp'),
            'your_cur_loc' => __('Your Current Location', 'store-locator-for-wp'),
            /* Template words */
            'Miles' => __('Miles', 'store-locator-for-wp'),
            'Km' => __('Km', 'store-locator-for-wp'),
            'phone' => __('Phone', 'store-locator-for-wp'),
            'fax' => __('Fax', 'store-locator-for-wp'),
            'directions' => __('Directions', 'store-locator-for-wp'),
            'distance' => __('Distance', 'store-locator-for-wp'),
            'read_more' => __('Read more', 'store-locator-for-wp'),
            'hide_more' => __('Hide Details', 'store-locator-for-wp'),
            'select_distance' => __('Select Distance', 'store-locator-for-wp'),
            'none_distance' => __('None', 'store-locator-for-wp'),
            'cur_dir' => __('Current+Location', 'store-locator-for-wp'),
            'radius_circle' => __('Radius Circle', 'store-locator-for-wp')
                /*
                  'carry_out' 			=> __('Carry out:','store-locator-for-wp'),
                  'dine_in' 			=> __('Dine In:','store-locator-for-wp'),
                  'delivery' 			=> __('Delivery:','store-locator-for-wp'),
                 */
        );

        $all_configs['words'] = array_map('esc_attr',$words);
        $all_configs['version'] = EVDPL_CVERSION;
        $all_configs['days'] = array('sun' => __('Sun', 'store-locator-for-wp'), 'mon' => __('Mon', 'store-locator-for-wp'), 'tue' => __('Tues', 'store-locator-for-wp'), 'wed' => __('Wed', 'store-locator-for-wp'), 'thu' => __('Thur', 'store-locator-for-wp'), 'fri' => __('Fri', 'store-locator-for-wp'), 'sat' => __('Sat', 'store-locator-for-wp'));

        $template_file = 'template-frontend.php';

        add_filter('script_loader_tag', array($this, 'removeGoogleMapsTag'), 9999999, 3);

        ob_start();

        #Customization of Template
        if ($template_file) {
            if ($theme_file = locate_template(array($template_file))) {
                $template_path = $theme_file;
            } else {
                $template_path = 'partials/' . $template_file;
            }

            include $template_path;
        }

        $output = ob_get_contents();
        ob_end_clean();

        $title_nonce = wp_create_nonce('asl_remote_nonce');

        wp_localize_script($this->EvdplStoreLocator . '-script', 'ASL_REMOTE', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => $title_nonce // It is common practice to comma after
        ));

        wp_localize_script($this->EvdplStoreLocator . '-script', 'asl_configuration', $all_configs);
        wp_localize_script($this->EvdplStoreLocator . '-script', 'asl_categories', $all_categories);
        wp_localize_script($this->EvdplStoreLocator . '-script', 'asl_markers', array());

        return $output;
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {
        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in EvdplStoreLocator_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The EvdplStoreLocator_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        $title_nonce = wp_create_nonce('asl_remote_nonce');

        global $wp_scripts, $wpdb;

        $sql = "SELECT `key`,`value` FROM " . EVDPL_PREFIX . "configs WHERE `key` = 'api_key'";
        $all_result = $wpdb->get_results($sql);

        $map_url = '//maps.googleapis.com/maps/api/js?libraries=places,drawing';

        if ($all_result[0] && $all_result[0]->value) {
            $api_key = esc_attr($all_result[0]->value);

            $map_url .= '&key=' . $api_key;
        }

        //map language and region
        $sql = "SELECT `key`,`value` FROM " . EVDPL_PREFIX . "configs WHERE `key` = 'map_language' OR `key` = 'map_region' ORDER BY id ASC;";
        $all_result = $wpdb->get_results($sql);

        if (isset($all_result[0]) && $all_result[0]->value) {
            $map_country = esc_attr($all_result[0]->value);
            $map_url .= '&language=' . $map_country;
        }

        if (isset($all_result[1]) && $all_result[1]->value) {
            $map_region = esc_attr($all_result[1]->value);
            $map_url .= '&region=' . $map_region;
        }

        #dd($wp_scripts->registered);
        wp_enqueue_script('asl_google_maps', $map_url, array('jquery'), null, true);
        wp_enqueue_script($this->EvdplStoreLocator . '-lib', EVDPL_URL_PATH . 'public/js/asl_libs.min.js', array('jquery'), $this->version, true);
    }

    public function removeGoogleMapsTag($tag, $handle, $src) {
        if (preg_match('/maps\.google/i', $src)) {
            if ($handle != 'asl_google_maps')
                return '';
        }

        return $tag;
    }

    public function load_stores() {
        #header('Content-Type: application/json');
        global $wpdb;

        $database = $wpdb->dbname;
        $nonce = isset($_GET['nonce']) ? sanitize_text_field($_GET['nonce']) : null;
        /*
          if ( ! wp_verify_nonce( $nonce, 'asl_remote_nonce' ))
          die ( 'CRF check error.');
         */

        $category = (isset($_GET['category'])) ? sanitize_text_field($_GET['category']) : null;
        $stores = (isset($_GET['stores'])) ? sanitize_text_field($_GET['stores']) : null;

        $EVDPL_PREFIX = EVDPL_PREFIX;

        $bound = '';
        $clause = '';

        $extra_sql = '';
        $country_field = '';

        if ($category) {
            $load_categories = explode(',', $category);
            $the_categories = array();

            foreach ($load_categories as $_c) {
                if (is_numeric($_c)) {
                    $the_categories[] = $_c;
                }
            }

            $the_categories = implode(',', $the_categories);
            $category_clause = " AND id IN (" . $the_categories . ')';
            $clause = " AND {$EVDPL_PREFIX}stores_categories.`category_id` IN (" . $the_categories . ")";
        }

        #if marker param exist
        if ($stores) {
            $stores = explode(',', $stores);

            //only number
            $store_ids = array();
            foreach ($stores as $m) {
                if (is_numeric($m)) {
                    $store_ids[] = $m;
                }
            }

            if ($store_ids) {
                $store_ids = implode(',', $store_ids);
                $clause .= " AND s.`id` IN ({$store_ids})";
            }
        }

        $query = "SELECT s.`id`, `title`,  `description`, `street`,  `city`,  `state`, `postal_code`, `lat`,`lng`,`phone`,  `fax`,`email`,`website`,`logo_id`,{$EVDPL_PREFIX}storelogos.`path`,`marker_id`,`description_2`,`open_hours`, `ordr`,`brand`, `custom`, group_concat(category_id) as categories FROM {$EVDPL_PREFIX}stores as s LEFT JOIN {$EVDPL_PREFIX}storelogos ON logo_id = {$EVDPL_PREFIX}storelogos.id LEFT JOIN {$EVDPL_PREFIX}stores_categories ON s.`id` = {$EVDPL_PREFIX}stores_categories.store_id $extra_sql WHERE (is_disabled is NULL || is_disabled = 0) AND (`lat` != '' AND `lng` != '') {$bound} {$clause} GROUP BY s.`id` ORDER BY `title` ";

        $query .= " LIMIT 10000";

        $all_results = $wpdb->get_results($query);
        $err_message = isset($wpdb->last_error) ? $wpdb->last_error : null;

        #Show Error
        if (!$all_results && $err_message) {
            #Check if the new columns are there or not
            $sql = "SELECT count(*) as c FROM information_schema.COLUMNS WHERE TABLE_NAME = '{$EVDPL_PREFIX}stores' AND COLUMN_NAME = 'custom' AND TABLE_SCHEMA = '{$database}'";
            $col_check_result = $wpdb->get_results($sql);

            if ($col_check_result[0]->c == 0) {
                require_once EVDPL_PLUGIN_PATH . 'includes/class-evdpl-store-locator-activator.php';
                #Run the script to add missing tables
                EvdplStoreLocator_Activator::activate();
            }
            echo json_encode([$err_message]);
            die;
        }

        #die($wpdb->last_error);
        $days_in_words = array('sun' => __('Sun', 'store-locator-for-wp'), 'mon' => __('Mon', 'store-locator-for-wp'), 'tue' => __('Tues', 'store-locator-for-wp'), 'wed' => __('Wed', 'store-locator-for-wp'), 'thu' => __('Thur', 'store-locator-for-wp'), 'fri' => __('Fri', 'store-locator-for-wp'), 'sat' => __('Sat', 'store-locator-for-wp'));
        $days = array('mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun');

        foreach ($all_results as $aRow) {
            if ($aRow->open_hours) {
                $days_are = array();
                $open_hours = json_decode($aRow->open_hours);

                foreach ($days as $day) {
                    if (!empty($open_hours->$day)) {
                        $days_are[] = $days_in_words[$day];
                    }
                }

                $aRow->days_str = implode(', ', $days_are);
            }

            #Decode the Custom Fields
            if (isset($aRow->custom) && $aRow->custom) {
                $custom_fields = json_decode($aRow->custom, true);
                if ($custom_fields && is_array($custom_fields) && count($custom_fields) > 0) {
                    foreach ($custom_fields as $custom_key => $custom_value) {
                        $aRow->$custom_key = $custom_value;
                    }
                }
            }

            unset($aRow->custom);
        }

        echo json_encode($all_results);
        die;
    }

}

<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @since      1.0.0
 *
 * @package    EvdplStoreLocator
 * @subpackage EvdplStoreLocator/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    EvdplStoreLocator
 * @subpackage EvdplStoreLocator/admin

 */
class EvdplStoreLocator_Admin {

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
    private $max_img_width = 450;
    private $max_img_height = 450;
    private $max_ico_width = 75;
    private $max_ico_height = 75;
    private $attr_tables = ['brands'];

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $EvdplStoreLocator       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($EvdplStoreLocator, $version) {
        $this->EvdplStoreLocator = $EvdplStoreLocator;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the admin area.
     * @since 1.0.0
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
        wp_enqueue_style($this->EvdplStoreLocator, EVDPL_URL_PATH . 'admin/css/store-locator-admin.min.css', array(), $this->version, 'all'); //$this->version
        wp_enqueue_style('asl_chosen_plugin', EVDPL_URL_PATH . 'admin/css/chosen.min.css', array(), $this->version, 'all');
        wp_enqueue_style('store-locator-for-wp_style', EVDPL_URL_PATH . 'admin/css/style.css', array(), $this->version, 'all');
        wp_enqueue_style('asl_datatable1', EVDPL_URL_PATH . 'admin/datatable/media/css/demo_page.css', array(), $this->version, 'all');
        wp_enqueue_style('asl_datatable2', EVDPL_URL_PATH . 'admin/datatable/media/css/jquery.dataTables.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the admin area.
     * @since 1.0.0
     */
    public function enqueue_scripts() {
        
    }

    /**
     * [_enqueue_scripts a private enqueue scripts]
     * @return [type] [description]
     */
    public function _enqueue_scripts() {
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
        wp_enqueue_script($this->EvdplStoreLocator . '-lib', EVDPL_URL_PATH . 'admin/js/libs.min.js', array('jquery'), $this->version, false);
        wp_enqueue_script($this->EvdplStoreLocator . '-choosen', EVDPL_URL_PATH . 'admin/js/chosen.proto.min.js', array('jquery'), $this->version, false);
        wp_enqueue_script($this->EvdplStoreLocator . '-datatable', EVDPL_URL_PATH . 'admin/datatable/media/js/jquery.dataTables.min.js', array('jquery'), $this->version, false);
        wp_enqueue_script('asl-admin', EVDPL_URL_PATH . 'admin/js/store-locator-admin.js', array('jquery'), $this->version, false);
        wp_enqueue_script($this->EvdplStoreLocator . '-upload', EVDPL_URL_PATH . 'admin/js/jquery.fileupload.min.js', array('jquery'), $this->version, false);
        wp_enqueue_script($this->EvdplStoreLocator . '-jscript', EVDPL_URL_PATH . 'admin/js/jscript.js', array('jquery'), $this->version, false);
        wp_enqueue_script($this->EvdplStoreLocator . '-draw', EVDPL_URL_PATH . 'admin/js/drawing.js', array('jquery'), $this->version, false);

        $langs = array(
            'select_category' => __('Select Some Options', 'store-locator-for-wp'),
            'no_category' => __('Select Some Options', 'store-locator-for-wp'),
            'geocode_fail' => __('Geocode was not Successful:', 'store-locator-for-wp'),
            'upload_fail' => __('Upload Failed! Please try Again.', 'store-locator-for-wp'),
            'delete_category' => __('Delete Category', 'store-locator-for-wp'),
            'delete_categories' => __('Delete Categories', 'store-locator-for-wp'),
            'warn_question' => __('Are you sure you want to ', 'store-locator-for-wp'),
            'delete_it' => __('Delete it!', 'store-locator-for-wp'),
            'duplicate_it' => __('Duplicate it!', 'store-locator-for-wp'),
            'delete_marker' => __('Delete Marker', 'store-locator-for-wp'),
            'delete_markers' => __('Delete Markers', 'store-locator-for-wp'),
            'delete_logo' => __('Delete Logo', 'store-locator-for-wp'),
            'delete_logos' => __('Delete Logos', 'store-locator-for-wp'),
            'delete_logos' => __('Delete Logos', 'store-locator-for-wp'),
            'delete_store' => __('Delete Store', 'store-locator-for-wp'),
            'delete_stores' => __('Delete Stores', 'store-locator-for-wp'),
            'duplicate_stores' => __('Duplicate Selected Store', 'store-locator-for-wp'),
            'start_time' => __('Start Time', 'store-locator-for-wp'),
            'select_logo' => __('Select Logo', 'store-locator-for-wp'),
            'select_marker' => __('Select Marker', 'store-locator-for-wp'),
            'end_time' => __('End Time', 'store-locator-for-wp'),
            'select_country' => __('Select Country', 'store-locator-for-wp'),
            'delete_all_stores' => __('DELETE ALL STORES', 'store-locator-for-wp'),
            'invalid_file_error' => __('Invalid File, Accepts JPG, PNG, GIF or SVG.', 'store-locator-for-wp'),
            'error_try_again' => __('Error Occured, Please try Again.', 'store-locator-for-wp'),
            'delete_all' => __('DELETE ALL', 'store-locator-for-wp'),
            'pur_title' => __('PLEASE VALIDATE PURCHASE CODE!', 'store-locator-for-wp'),
            'pur_text' => __('Thank you for Using', 'store-locator-for-wp'),
        );

        #Plugin Validation
        wp_localize_script($this->EvdplStoreLocator . '-jscript', 'ASL_REMOTE', array('Com' => get_option('asl-compatible'), 'LANG' => $langs, 'URL' => admin_url('admin-ajax.php'), '1.1', true));
    }

    /**
     * [_get_custom_fields Method to Get the Custom Fields]
     * @return [type] [description]
     */
    private function _get_custom_fields() {
        global $wpdb;

        #Fields
        $fields = $wpdb->get_results("SELECT content FROM " . EVDPL_PREFIX . "settings WHERE `type` = 'fields'");
        $fields = ($fields && isset($fields[0])) ? json_decode($fields[0]->content, true) : [];

        if (!empty($fields)) {
            #Filter the JSON for XSS
            $filter_fields = [];
            foreach ($fields as $field_key => $field) {
                $field_key = esc_attr(strip_tags($field_key));
                $field['type'] = esc_attr(strip_tags($field['type']));
                $field['name'] = esc_attr(strip_tags($field['name']));
                $field['label'] = esc_attr(strip_tags($field['label']));
                $filter_fields[$field_key] = $field;
            }
            $fields = $filter_fields;
        }
        return $fields;
    }

    function change_logo_upload_dir($dir) {
        $dir['baseurl'] = EVDPL_URL_PATH . "public";
        $dir['basedir'] = EVDPL_PLUGIN_PATH . "public";
        $dir['subdir'] = "/Logo/";
        $dir['path'] = $dir['basedir'] . $dir['subdir'];
        $dir['url'] = $dir['baseurl'] . $dir['subdir'];

        return $dir;
    }

    /**
     * [upload_logo Upload the Logo]
     * @return [type] [description]
     */
    public function upload_logo() {

        $response = new \stdclass();
        $response->success = false;

        if (empty($_POST['data']['logo_name']) || !$_POST['data']['logo_name']) {
            $response->msg = __("Error! logo name is required.", 'store-locator-for-wp');
            echo json_encode($response);
            die;
        }

        $uniqid = uniqid();
        $target_dir = EVDPL_PLUGIN_PATH . "public/Logo/";
        #$target_file = $uniqid.'_'. strtolower($_FILES["files"]["name"]);

        $imageFileType = explode('.', $_FILES["files"]["name"]);
        $imageFileType = $imageFileType[count($imageFileType) - 1];

        $target_file = $uniqid . '_logo.' . $imageFileType;
        $target_name = isset($_POST['data']['logo_name']) ? sanitize_text_field($_POST['data']['logo_name']) : ('Logo ' . time());

        #Check the Size of the Image //
        $tmp_file = $_FILES["files"]['tmp_name'];
        list($width, $height) = getimagesize($tmp_file);

        add_filter('upload_dir', 'change_logo_upload_dir');

        $upload_overrides = array(
            'test_form' => false
        );
        
        $_FILES["files"]['name'] = $target_file;
        $movefile = wp_handle_upload($_FILES["files"], $upload_overrides);
        
        remove_filter('upload_dir', array($this, 'change_logo_upload_dir'));

        #To big size
        if ($_FILES["files"]["size"] > 5000000) {
            $response->msg = __("Sorry, your file is too large, sized.", 'store-locator-for-wp');
        }

        #Not a valid format
        else if (!in_array($imageFileType, array('jpg', 'png', 'jpeg', 'gif', 'JPG'))) {
            $response->msg = __("Sorry, only JPG, JPEG, PNG & GIF files are allowed.", 'store-locator-for-wp');
        } else if ($width > $this->max_img_width || $height > $this->max_img_width) {
            $response->msg = __("Max Image dimensions Width and Height is {$this->max_img_width} x {$this->max_img_height} px.<br> Recommended Logo size is 250 x 250 px", 'store-locator-for-wp');
        }
        #upload 
        else if ($movefile && ! isset( $movefile['error'] )) {
            global $wpdb;
            $wpdb->insert(EVDPL_PREFIX . 'storelogos', array('path' => $target_file, 'name' => $target_name), array('%s', '%s'));

            $response->list = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "storelogos ORDER BY id DESC");
            $response->msg = __("The file has been uploaded.", 'store-locator-for-wp');
            $response->success = true;
        }
        #error
        else {
            $response->msg = __('Some Error Occured', 'store-locator-for-wp');
        }
        remove_filter('upload_dir', 'change_logo_upload_dir');
        echo json_encode($response);
        die;
    }

    public function change_assets_upload_dir($dir) {
        $dir['baseurl'] = EVDPL_URL_PATH . "public";
        $dir['basedir'] = EVDPL_PLUGIN_PATH . "public";
        $dir['subdir'] = "/export/";
        $dir['path'] = $dir['basedir'] . $dir['subdir'];
        $dir['url'] = $dir['baseurl'] . $dir['subdir'];
        return $dir;
    }
    
    /**
     * [import_assets Import Assets such as Logo, Icons, Markers]
     * @return [type] [description]
     */
    public function import_assets() {

        $response = new \stdclass();
        $response->success = false;

        #Validate Admin
        if (!current_user_can('administrator')) {
            $response->error = __('Please login with Administrator Account.', 'store-locator-for-wp');
            echo json_encode($response);
            die;
        }

        $target_dir = EVDPL_PLUGIN_PATH . "public/export/";
        $target_file = 'assets_' . uniqid() . '.zip';

        add_filter('upload_dir', array($this, 'change_assets_upload_dir'));

        $upload_overrides = array(
            'test_form' => false
        );

        $_FILES["files"]['name'] = $target_file;
        $movefile = wp_handle_upload($_FILES["files"], $upload_overrides);

        remove_filter('upload_dir', array($this, 'change_assets_upload_dir'));

        #Move the File to the Import Folder
        if ($movefile && ! isset( $movefile['error'] )) {
            require_once EVDPL_PLUGIN_PATH . 'includes/class-evdpl-store-locator-helper.php';
            $response->success = true;
            if (EvdplStoreLocator_Helper::extract_assets($target_dir . $target_file)) {
                $response->msg = __('Assets Imported Successfully.', 'store-locator-for-wp');
            } else {
                $response->msg = __('Failed to Imported Assets.', 'store-locator-for-wp');
            }
        }
        #error
        else {
            $response->error = __('Error, file not moved, check permission.', 'store-locator-for-wp');
        }
        echo json_encode($response);
        die;
    }

    public function sanitize_text_or_array_field($array_or_string) {
        if (is_string($array_or_string)) {
            $array_or_string = sanitize_text_field($array_or_string);
        } elseif (is_array($array_or_string)) {
            foreach ($array_or_string as $key => &$value) {
                if (is_array($value)) {
                    $value = sanitize_text_or_array_field($value);
                } else {
                    $value = sanitize_text_field($value);
                }
            }
        }

        return $array_or_string;
    }

    /**
     * [add_new_store POST METHODS for Add New Store]
     */
    public function add_new_store() {

        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $form_data = array_map('sanitize_text_field', stripslashes_deep($_REQUEST['data']));

        #Make them STR :: Attributes
        if (isset($form_data['brand']) && is_array($form_data['brand'])) {
            $form_data['brand'] = implode(',', $form_data['brand']);
        }

        #Custom Field
        if (is_array($_REQUEST['asl-custom'])) {
            $custom_fields = (isset($_REQUEST['asl-custom']) && $_REQUEST['asl-custom']) ? sanitize_text_field(stripslashes_deep($_REQUEST['asl-custom'])) : null;
        } else {
            $custom_fields = (isset($_REQUEST['asl-custom']) && $_REQUEST['asl-custom']) ? array_map('sanitize_text_field', stripslashes_deep($_REQUEST['asl-custom'])) : null;
        }

        $form_data['custom'] = ($custom_fields && is_array($custom_fields) && count($custom_fields) > 0) ? json_encode($custom_fields) : null;

        #Pro version
        $form_data['marker_id'] = '1';
        $form_data['logo_id'] = '1';

        #insert into stores table
        if ($wpdb->insert(EVDPL_PREFIX . 'stores', $form_data)) {
            $response->success = true;
            $store_id = $wpdb->insert_id;

            #Save Categories
            if (is_array($_REQUEST['category']))
                $categories = array_map('sanitize_text_field', $_REQUEST['category']);
            foreach ($categories as $category) {
                $wpdb->insert(EVDPL_PREFIX . 'stores_categories',
                        array('store_id' => $store_id, 'category_id' => $category),
                        array('%s', '%s'));
            }
            $response->msg = __('Store added successfully.', 'store-locator-for-wp');
        } else {
            $wpdb->show_errors = true;
            $response->error = __('Error occurred while saving Store', 'store-locator-for-wp');
            $response->msg = $wpdb->print_error();
        }
        echo json_encode($response);
        die;
    }

    /**
     * [update_store update Store]
     * @return [type] [description]
     */
    public function update_store() {

        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $form_data = array_map('sanitize_text_field', stripslashes_deep($_REQUEST['data']));
        $update_id = isset($_REQUEST['updateid']) ? sanitize_text_field(intval($_REQUEST['updateid'])) : 0;

        #Make them STR :: Attributes
        if (isset($form_data['brand']) && is_array($form_data['brand'])) {
            $form_data['brand'] = implode(',', $form_data['brand']);
        }

        #Custom Field
        if (is_array($_REQUEST['asl-custom'])) {
            $custom_fields = (isset($_REQUEST['asl-custom']) && $_REQUEST['asl-custom']) ? sanitize_text_field(stripslashes_deep($_REQUEST['asl-custom'])) : null;
        } else {
            $custom_fields = (isset($_REQUEST['asl-custom']) && $_REQUEST['asl-custom']) ? array_map('sanitize_text_field', stripslashes_deep($_REQUEST['asl-custom'])) : null;
        }
        $form_data['custom'] = ($custom_fields && is_array($custom_fields) && count($custom_fields) > 0) ? json_encode($custom_fields) : null;

        #update into stores table
        $wpdb->update(EVDPL_PREFIX . "stores",
                array(
                    'title' => sanitize_text_field($form_data['title']),
                    'description' => wp_kses_post($form_data['description']),
                    'phone' => sanitize_text_field($form_data['phone']),
                    'fax' => sanitize_text_field($form_data['fax']),
                    'email' => sanitize_text_field($form_data['email']),
                    'street' => sanitize_text_field($form_data['street']),
                    'postal_code' => sanitize_text_field($form_data['postal_code']),
                    'city' => sanitize_text_field($form_data['city']),
                    'state' => sanitize_text_field($form_data['state']),
                    'lat' => sanitize_text_field($form_data['lat']),
                    'lng' => sanitize_text_field($form_data['lng']),
                    'website' => sanitize_text_field($form_data['website']),
                    'country' => sanitize_text_field($form_data['country']),
                    'is_disabled' => (isset($form_data['is_disabled']) && $form_data['is_disabled']) ? '1' : '0',
                    'description_2' => wp_kses_post($form_data['description_2']),
                    'logo_id' => '1',
                    'marker_id' => '1',
                    'custom' => sanitize_text_field($form_data['custom']),
                    'logo_id' => sanitize_text_field($form_data['logo_id']),
                    'open_hours' => sanitize_text_field($form_data['open_hours']),
                    'ordr' => sanitize_text_field($form_data['ordr']),
                    'updated_on' => date('Y-m-d H:i:s')
                ),
                array('id' => $update_id)
        );

        $sql = "DELETE FROM " . EVDPL_PREFIX . "stores_categories WHERE store_id = " . $update_id;
        $wpdb->query($sql);

        if (is_array($_REQUEST['category']))
            $categories = array_map('sanitize_text_field', stripslashes_deep($_REQUEST['category']));
        foreach ($categories as $category) {
            $wpdb->insert(EVDPL_PREFIX . 'stores_categories',
                    array('store_id' => $update_id, 'category_id' => $category),
                    array('%s', '%s'));
        }

        $response->success = true;
        $response->msg = __('Store Updated Successfully.', 'store-locator-for-wp');

        echo json_encode($response);
        die;
    }

    /**
     * [delete_store To delete the store/stores]
     * @return [type] [description]
     */
    public function delete_store() {

        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $multiple = sanitize_text_field($_REQUEST['multiple']);
        $delete_sql;

        if ($multiple) {
            $item_ids = implode(",", array_map('intval', $_POST['item_ids']));
            $delete_sql = "DELETE FROM " . EVDPL_PREFIX . "stores WHERE id IN (" . $item_ids . ")";
        } else {
            $store_id = sanitize_text_field(intval($_REQUEST['store_id']));
            $delete_sql = "DELETE FROM " . EVDPL_PREFIX . "stores WHERE id = " . $store_id;
        }

        if ($wpdb->query($delete_sql)) {
            $response->success = true;
            $response->msg = ($multiple) ? __('Stores deleted successfully.', 'store-locator-for-wp') : __('Store deleted successfully.', 'store-locator-for-wp');
        } else {
            $response->error = __('Error occurred while saving record', 'store-locator-for-wp'); //$form_data
            $response->msg = $wpdb->show_errors();
        }

        echo json_encode($response);
        die;
    }

    /**
     * [store_status To Change the Status of Store]
     * @return [type] [description]
     */
    public function store_status() {

        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $status = (isset($_REQUEST['status']) && sanitize_text_field($_REQUEST['status']) == '1') ? '0' : '1';
        $status_title = ($status == '1') ? 'Disabled' : 'Enabled';
        $delete_sql;

        $item_ids = implode(",", array_map('intval', $_POST['item_ids']));
        $update_sql = "UPDATE " . EVDPL_PREFIX . "stores SET is_disabled = {$status} WHERE id IN (" . $item_ids . ")";

        if ($wpdb->query($update_sql)) {
            $response->success = true;
            $response->msg = __('Selected Stores', 'store-locator-for-wp') . ' ' . $status_title;
        } else {
            $response->error = __('Error occurred while Changing Status', 'store-locator-for-wp');
            $response->msg = $wpdb->show_errors();
        }

        echo json_encode($response);
        die;
    }

    /**
     * [duplicate_store to  Duplicate the store]
     * @return [type] [description]
     */
    public function duplicate_store() {

        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $store_id = isset($_REQUEST['store_id']) ? sanitize_text_field(intval($_REQUEST['store_id'])) : 0;
        $result = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "stores WHERE id = " . $store_id);

        if ($result && $result[0]) {
            $result = (array) $result[0];

            unset($result['id']);
            unset($result['created_on']);
            unset($result['updated_on']);

            #insert into stores table
            if ($wpdb->insert(EVDPL_PREFIX . 'stores', $result)) {
                $response->success = true;
                $new_store_id = $wpdb->insert_id;

                #get categories and copy them
                $s_categories = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "stores_categories WHERE store_id = " . $store_id);

                #Save Categories
                foreach ($s_categories as $_category) {
                    $wpdb->insert(EVDPL_PREFIX . 'stores_categories',
                            array('store_id' => $new_store_id, 'category_id' => $_category->category_id),
                            array('%s', '%s'));
                }
                #Send the response
                $response->msg = __('Store Duplicated successfully.', 'store-locator-for-wp');
            } else {
                $response->error = __('Error occurred while saving Store', 'store-locator-for-wp'); //$form_data
                $response->msg = $wpdb->show_errors();
            }
        }

        echo json_encode($response);
        die;
    }

    public function change_category_logo_upload_dir($dir) {
        $dir['baseurl'] = EVDPL_URL_PATH . "public";
        $dir['basedir'] = EVDPL_PLUGIN_PATH . "public";
        $dir['subdir'] = "/svg/";
        $dir['path'] = $dir['basedir'] . $dir['subdir'];
        $dir['url'] = $dir['baseurl'] . $dir['subdir'];
        return $dir;
    }

    #ATTRIBUTE
    #ALL Category Methods

    /**
     * [add_category Add Category Method]
     */
    public function add_category() {

        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $target_dir = EVDPL_PLUGIN_PATH . "public/svg/";
        $namefile = substr(sanitize_text_field(strtolower($_FILES["files"]["name"])), 0, sanitize_text_field(strpos(strtolower($_FILES["files"]["name"])), '.'));

        $imageFileType = pathinfo(sanitize_text_field($_FILES["files"]["name"]), PATHINFO_EXTENSION);
        $target_name = uniqid();

        #add extension
        $target_name .= '.' . $imageFileType;

        #CREATE DIRECTORY IF NOT EXISTS
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0775, true);
        }

        add_filter('upload_dir', array($this, 'change_category_logo_upload_dir'));

        $upload_overrides = array(
            'test_form' => false
        );

        $_FILES["files"]['name'] = $target_name;
        $movefile = wp_handle_upload($_FILES["files"], $upload_overrides);
        

        remove_filter('upload_dir', array($this, 'change_category_logo_upload_dir'));

        #Check the Size of the Image //
        $tmp_file = sanitize_text_field($_FILES["files"]['tmp_name']);
        list($width, $height) = getimagesize($tmp_file);

        #too big size
        if (sanitize_text_field($_FILES["files"]["size"]) > 5000000) {
            $response->msg = __("Sorry, your file is too large.", 'store-locator-for-wp');
        }
        #not a valid format
        else if (!in_array($imageFileType, array('jpg', 'png', 'jpeg', 'JPG', 'gif', 'svg', 'SVG'))) {
            $response->msg = __("Sorry, only JPG, JPEG, PNG & GIF files are allowed.", 'store-locator-for-wp');
        } else if ($width > $this->max_ico_width || $height > $this->max_ico_width) {
            $response->msg = __("Max Image dimensions Width and Height is {$this->max_ico_width} x {$this->max_ico_height} px.<br> Recommended Icon size is 20 x 32 px or around it", 'store-locator-for-wp');
        }
        #upload 
        else if ($movefile && !isset($movefile['error'])) {
            $form_data = array_map('sanitize_text_field', stripslashes_deep($_REQUEST['data']));

            $icon = $target_name ? $target_name : 'default.png';
            if ($wpdb->insert(EVDPL_PREFIX . 'categories',
                            array('category_name' => $form_data['category_name'],
                                'is_active' => 1,
                                'icon' => $icon
                            ),
                            array('%s', '%d', '%s'))
            ) {
                $response->msg = __("Category Added Successfully", 'store-locator-for-wp');
                $response->success = true;
            } else {
                $response->msg = __('Error occurred while saving record', 'store-locator-for-wp'); //$form_data
            }
        }
        #error
        else {

            $response->msg = __('Some error occured', 'store-locator-for-wp');
        }

        echo json_encode($response);
        die;
    }

    /**
     * [delete_category delete category/categories]
     * @return [type] [description]
     */
    public function delete_category() {
        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $multiple = sanitize_text_field($_REQUEST['multiple']);
        $delete_sql;
        $cResults;

        if ($multiple) {
            $item_ids = implode(",", array_map('intval', $_POST['item_ids']));
            $delete_sql = "DELETE FROM " . EVDPL_PREFIX . "categories WHERE id IN (" . $item_ids . ")";
            $cResults = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "categories WHERE id IN (" . $item_ids . ")");
        } else {
            $category_id = sanitize_text_field(intval($_REQUEST['category_id']));
            $delete_sql = "DELETE FROM " . EVDPL_PREFIX . "categories WHERE id = " . $category_id;
            $cResults = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "categories WHERE id = " . $category_id);
        }

        if (count($cResults) != 0) {
            if ($wpdb->query($delete_sql)) {
                $response->success = true;
                foreach ($cResults as $c) {
                    $inputFileName = EVDPL_PLUGIN_PATH . 'public/icon/' . $c->icon;
                    if (file_exists($inputFileName) && $c->icon != 'default.png') {
                        unlink($inputFileName);
                    }
                }
            } else {
                $response->error = __('Error occurred while deleting record', 'store-locator-for-wp'); //$form_data
                $response->msg = $wpdb->show_errors();
            }
        } else {
            $response->error = __('Error occurred while deleting record', 'store-locator-for-wp');
        }

        if ($response->success)
            $response->msg = ($multiple) ? __('Categories deleted successfully.', 'store-locator-for-wp') : __('Category deleted successfully.', 'store-locator-for-wp');

        echo json_encode($response);
        die;
    }

    /**
     * [update_category update category with icon]
     * @return [type] [description]
     */
    public function update_category() {
        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $data = array_map('sanitize_text_field', stripslashes_deep($_REQUEST['data']));

        #with icon
        if ($data['action'] == "notsame") {
            $target_dir = EVDPL_PLUGIN_PATH . "public/svg/";

            $namefile = substr(strtolower($_FILES["files"]["name"]), 0, strpos(strtolower($_FILES["files"]["name"]), '.'));

            $imageFileType = pathinfo($_FILES["files"]["name"], PATHINFO_EXTENSION);
            $target_name = uniqid();

            #add extension
            $target_name .= '.' . $imageFileType;
            $res = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "categories WHERE id = " . $data['category_id']);

            #Check the Size of the Image //
            $tmp_file = $_FILES["files"]['tmp_name'];
            list($width, $height) = getimagesize($tmp_file);

            add_filter('upload_dir', array($this, 'change_category_logo_upload_dir'));

            $upload_overrides = array(
                'test_form' => false
            );

            $_FILES["files"]['name'] = $target_name;
            $movefile = wp_handle_upload($_FILES["files"], $upload_overrides);

            remove_filter('upload_dir', array($this, 'change_category_logo_upload_dir'));

            if ($_FILES["files"]["size"] > 5000000) {
                $response->msg = __("Sorry, your file is too large.", 'store-locator-for-wp');
            }
            #not a valid format
            else if (!in_array($imageFileType, array('jpg', 'png', 'gif', 'jpeg', 'JPG', 'svg', 'SVG'))) {
                $response->msg = __("Sorry, only JPG, JPEG, PNG & GIF files are allowed.", 'store-locator-for-wp');
            } else if ($width > $this->max_ico_width || $height > $this->max_ico_width) {
                $response->msg = __("Max Image dimensions Width and Height is {$this->max_ico_width} x {$this->max_ico_height} px.<br> Recommended Category Icon size is 20 x 32 px or around it", 'store-locator-for-wp');
            }
            #upload 
            else if ($movefile && !isset($movefile['error'])) {
                #delete previous file
                $update_params = array('category_name' => $data['category_name'], 'icon' => $target_name);
                $wpdb->update(EVDPL_PREFIX . "categories", $update_params, array('id' => $data['category_id']), array('%s'), array('%d'));
                $response->msg = __('Updated Successfully.', 'store-locator-for-wp');
                $response->success = true;
                if (file_exists($target_dir . $res[0]->icon)) {
                    unlink($target_dir . $res[0]->icon);
                }
            }
            #error
            else {
                $response->msg = __('Some error occured', 'store-locator-for-wp');
            }
        }
        #without icon
        else {
            $wpdb->update(EVDPL_PREFIX . "categories", array('category_name' => $data['category_name']), array('id' => $data['category_id']), array('%s'), array('%d'));
            $response->msg = __('Updated Successfully.', 'store-locator-for-wp');
            $response->success = true;
        }
        echo json_encode($response);
        die;
    }

    /**
     * [get_category_by_id get category by id]
     * @return [type] [description]
     */
    public function get_category_by_id() {

        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $store_id = isset($_REQUEST['category_id']) ? sanitize_text_field(intval($_REQUEST['category_id'])) : 0;

        $response->list = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "categories WHERE id = " . $store_id);

        if (count($response->list) != 0) {
            $response->success = true;
        } else {
            $response->error = __('Error occurred while geting record', 'store-locator-for-wp'); //$form_data
        }
        echo json_encode($response);
        die;
    }

    /**
     * [get_categories GET the Categories]
     * @return [type] [description]
     */
    public function get_categories() {
        global $wpdb;
        $start = isset($_REQUEST['iDisplayStart']) ? sanitize_text_field($_REQUEST['iDisplayStart']) : 0;
        $params = isset($_REQUEST) ? array_map('sanitize_text_field', $_REQUEST) : null;

        $acolumns = array(
            'id', 'id', 'category_name', 'is_active', 'icon', 'created_on'
        );

        $columnsFull = $acolumns;
        $clause = array();

        if (isset($_REQUEST['filter'])) {
            $filters = array_map('sanitize_text_field', $_REQUEST['filter']);
            foreach ($filters as $key => $value) {
                if (!$key || $key == 'undefined' || empty($key))
                    continue;

                if (!$value || $value == 'undefined' || empty($value))
                    continue;

                if ($value != '') {
                    if ($key == 'is_active') {
                        $value = ($value == 'yes') ? 1 : 0;
                    }
                    $clause[] = "$key like '%{$value}%'";
                }
            }
        }


        #iDisplayStart::Limit per page
        $sLimit = "";
        if (isset($_REQUEST['iDisplayStart']) && sanitize_text_field($_REQUEST['iDisplayLength']) != '-1') {
            $sLimit = "LIMIT " . sanitize_text_field(intval($_REQUEST['iDisplayStart'])) . ", " .
                    sanitize_text_field(intval($_REQUEST['iDisplayLength']));
        }

        #Ordering
        $sOrder = "";
        if (isset($_REQUEST['iSortCol_0'])) {
            $sOrder = "ORDER BY  ";

            for ($i = 0; $i < sanitize_text_field(intval($_REQUEST['iSortingCols'])); $i++) {
                if (isset($_REQUEST['iSortCol_' . $i])) {
                    $sort_dir = (isset($_REQUEST['sSortDir_0']) && sanitize_text_field($_REQUEST['sSortDir_0']) == 'asc') ? 'ASC' : 'DESC';
                    $sOrder .= "`" . $acolumns[sanitize_text_field(intval($_REQUEST['iSortCol_' . $i]))] . "` " . $sort_dir;
                    break;
                }
            }

            #$sOrder = substr_replace( $sOrder, "", -2 );
            if ($sOrder == "ORDER BY") {
                $sOrder = "";
            }
        }

        $sWhere = implode(' AND ', $clause);
        if ($sWhere != '')
            $sWhere = ' WHERE ' . $sWhere;

        $fields = implode(',', $columnsFull);

        ###get the fields###
        $sql = "SELECT $fields FROM " . EVDPL_PREFIX . "categories";

        $sqlCount = "SELECT count(*) 'count' FROM " . EVDPL_PREFIX . "categories";
        /*
         * SQL queries
         * Get data to display
         */
        $sQuery = "{$sql} {$sWhere} {$sOrder} {$sLimit}";
        $data_output = $wpdb->get_results($sQuery);

        $error_status = $wpdb->last_error;

        #Data set length after filtering 
        $sQuery = "{$sqlCount} {$sWhere}";
        $r = $wpdb->get_results($sQuery);
        $iFilteredTotal = $r[0]->count;

        $iTotal = $iFilteredTotal;

        #Output
        $sEcho = isset($_REQUEST['sEcho']) ? sanitize_text_field(intval($_REQUEST['sEcho'])) : 1;
        $output = array(
            "sEcho" => sanitize_text_field(intval($_REQUEST['sEcho'])),
            "error" => $error_status,
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );

        foreach ($data_output as $aRow) {
            $row = $aRow;

            if ($row->is_active == 1) {
                $row->is_active = 'Yes';
            } else {
                $row->is_active = 'No';
            }

            $row->icon = "<img  src='" . EVDPL_URL_PATH . "public/svg/" . $row->icon . "' alt=''  style='width:20px'/>";

            $row->action = '<div class="edit-options"><a data-id="' . esc_attr($row->id) . '" title="Edit" class="edit_category"><svg width="14" height="14"><use xlink:href="#i-edit"></use></svg></a><a title="Delete" data-id="' . $row->id . '" class="delete_category g-trash"><svg width="14" height="14"><use xlink:href="#i-trash"></use></svg></a></div>';
            $row->check = '<div class="custom-control custom-checkbox"><input type="checkbox" data-id="' . $row->id . '" class="custom-control-input" id="asl-chk-' . esc_attr($row->id) . '"><label class="custom-control-label" for="asl-chk-' . esc_attr($row->id) . '"></label></div>';
            $output['aaData'][] = $row;
        }
        echo json_encode($output);
        die;
    }

    public function change_marker_upload_dir($dir) {
        $dir['baseurl'] = EVDPL_URL_PATH . "public";
        $dir['basedir'] = EVDPL_PLUGIN_PATH . "public";
        $dir['subdir'] = "/icon/";
        $dir['path'] = $dir['basedir'] . $dir['subdir'];
        $dir['url'] = $dir['baseurl'] . $dir['subdir'];
        return $dir;
    }

    #ALL Markers Methods

    /**
     * [upload_marker upload marker into icon folder]
     * @return [type] [description]
     */
    public function upload_marker() {

        $response = new \stdclass();
        $response->success = false;

        if (empty($_POST['data']['marker_name']) || !$_POST['data']['marker_name']) {

            $response->msg = __("Error! marker name is required.", 'store-locator-for-wp');
            echo json_encode($response);
            die;
        }

        $uniqid = uniqid();
        $target_dir = EVDPL_PLUGIN_PATH . "public/icon/";
        $target_file = $uniqid . '_' . strtolower($_FILES["files"]["name"]);
        $target_name = isset($_POST['data']['marker_name']) ? sanitize_text_field($_POST['data']['marker_name']) : ('Marker ' . time());

        $imageFileType = explode('.', $_FILES["files"]["name"]);
        $imageFileType = $imageFileType[count($imageFileType) - 1];

        $tmp_file = $_FILES["files"]['tmp_name'];
        list($width, $height) = getimagesize($tmp_file);

        //if file not found
        /*
          if (file_exists($target_name)) {
          $response->msg = "Sorry, file already exists.";
          }
         */
        add_filter('upload_dir', array($this, 'change_marker_upload_dir'));

        $upload_overrides = array(
            'test_form' => false
        );

        $_FILES["files"]['name'] = $target_file;
        $movefile = wp_handle_upload($_FILES["files"], $upload_overrides);

        remove_filter('upload_dir', array($this, 'change_marker_upload_dir'));

        #too big size
        if ($_FILES["files"]["size"] > 22085) {
            $response->msg = __("Marker Image too Large.", 'store-locator-for-wp');
            $response->size = $_FILES["files"]["size"];
        }
        #not a valid format
        else if (!in_array($imageFileType, array('jpg', 'png', 'jpeg', 'gif', 'JPG'))) {
            $response->msg = __("Sorry, only JPG, JPEG, PNG & GIF files are allowed.", 'store-locator-for-wp');
        } else if ($width > $this->max_img_width || $height > $this->max_img_width) {
            $response->msg = __("Max Image dimensions Width and Height is {$this->max_img_width} x {$this->max_img_height} px.<br> Recommended Logo size is 250 x 250 px", 'store-locator-for-wp');
        }
        #upload 
        else if ($movefile && !isset($movefile['error'])) {
            global $wpdb;
            $wpdb->insert(EVDPL_PREFIX . 'markers',
                    array('icon' => $target_file, 'marker_name' => $target_name),
                    array('%s', '%s'));

            $response->list = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "markers ORDER BY id DESC");
            $response->msg = __("The file has been uploaded.", 'store-locator-for-wp');
            $response->success = true;
        }
        #error
        else {
            $response->msg = __('Some Error Occured', 'store-locator-for-wp');
        }

        echo json_encode($response);
        die;
    }

    /**
     * [add_marker Add Marker Method]
     */
    public function add_marker() {

        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $target_dir = EVDPL_PLUGIN_PATH . "public/icon/";

        $imageFileType = pathinfo($_FILES["files"]["name"], PATHINFO_EXTENSION);
        $target_name = uniqid();

        #add extension
        $target_name .= '.' . $imageFileType;

        #CREATE DIRECTORY IF NOT EXISTS
        if (!file_exists($target_dir)) {

            mkdir($target_dir, 0775, true);
        }

        #Check the Size of the Image //
        $tmp_file = $_FILES["files"]['tmp_name'];
        list($width, $height) = getimagesize($tmp_file);

        add_filter('upload_dir', array($this, 'change_marker_upload_dir'));

        $upload_overrides = array(
            'test_form' => false
        );

        $_FILES["files"]['name'] = $target_name;
        $movefile = wp_handle_upload($_FILES["files"], $upload_overrides);

        remove_filter('upload_dir', array($this, 'change_marker_upload_dir'));

        #too big size
        if ($_FILES["files"]["size"] > 5000000) {
            $response->msg = __("Sorry, your file is too large.", 'store-locator-for-wp');
        }
        #not a valid format
        else if (!in_array($imageFileType, array('jpg', 'png', 'gif', 'jpeg', 'JPG'))) {
            $response->msg = __("Sorry, only JPG, JPEG, PNG & GIF files are allowed.", 'store-locator-for-wp');
        } else if ($width > $this->max_ico_width || $height > $this->max_ico_width) {

            $response->msg = __("Max Image dimensions Width and Height is {$this->max_ico_width} x {$this->max_ico_height} px.<br> Recommended Icon size is 20 x 32 px or around it", 'store-locator-for-wp');
        }
        #upload 
        else if ($movefile && !isset($movefile['error'])) {
            $form_data = array_map('sanitize_text_field', stripslashes_deep($_REQUEST['data']));
            if ($wpdb->insert(EVDPL_PREFIX . 'markers',
                            array('marker_name' => $form_data['marker_name'],
                                'is_active' => 1,
                                'icon' => $target_name
                            ),
                            array('%s', '%d', '%s'))
            ) {
                $response->msg = __("Marker Added Successfully", 'store-locator-for-wp');
                $response->success = true;
            } else {
                $response->msg = __('Error occurred while saving record', 'store-locator-for-wp'); //$form_data
            }
        }
        #error
        else {
            $response->msg = __('Some error occured', 'store-locator-for-wp');
        }

        echo json_encode($response);
        die;
    }

    /**
     * [delete_marker delete marker/markers]
     * @return [type] [description]
     */
    public function delete_marker() {

        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $multiple = sanitize_text_field($_REQUEST['multiple']);
        $delete_sql;
        $mResults;

        if ($multiple) {
            $item_ids = implode(",", array_map('intval', $_POST['item_ids']));
            $delete_sql = "DELETE FROM " . EVDPL_PREFIX . "markers WHERE id IN (" . $item_ids . ")";
            $mResults = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "markers WHERE id IN (" . $item_ids . ")");
        } else {
            $item_id = sanitize_text_field(intval($_REQUEST['marker_id']));
            $delete_sql = "DELETE FROM " . EVDPL_PREFIX . "markers WHERE id = " . $item_id;
            $mResults = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "markers WHERE id = " . $item_id);
        }

        if (count($mResults) != 0) {
            if ($wpdb->query($delete_sql)) {
                $response->success = true;

                foreach ($mResults as $m) {
                    $inputFileName = EVDPL_PLUGIN_PATH . 'public/icon/' . $m->icon;
                    if (file_exists($inputFileName) && $m->icon != 'default.png' && $m->icon != 'active.png') {
                        unlink($inputFileName);
                    }
                }
            } else {
                $response->error = __('Error occurred while deleting record', 'store-locator-for-wp');
                $response->msg = $wpdb->show_errors();
            }
        } else {
            $response->error = __('Error occurred while deleting record', 'store-locator-for-wp');
        }
        if ($response->success)
            $response->msg = ($multiple) ? __('Markers deleted successfully.', 'store-locator-for-wp') : __('Marker deleted successfully.', 'store-locator-for-wp');

        echo json_encode($response);
        die;
    }

    /**
     * [update_marker update marker with icon]
     * @return [type] [description]
     */
    public function update_marker() {
        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $data = array_map('sanitize_text_field', $_REQUEST['data']);

        #with icon
        if ($data['action'] == "notsame") {
            $target_dir = EVDPL_PLUGIN_PATH . "public/icon/";

            $namefile = substr(strtolower($_FILES["files"]["name"]), 0, strpos(strtolower($_FILES["files"]["name"]), '.'));

            $imageFileType = pathinfo($_FILES["files"]["name"], PATHINFO_EXTENSION);
            $target_name = uniqid();

            #Check the Size of the Image //
            $tmp_file = $_FILES["files"]['tmp_name'];
            list($width, $height) = getimagesize($tmp_file);

            #add extension
            $target_name .= '.' . $imageFileType;

            add_filter('upload_dir', array($this, 'change_marker_upload_dir'));

            $upload_overrides = array(
                'test_form' => false
            );

            $_FILES["files"]['name'] = $target_name;
            $movefile = wp_handle_upload($_FILES["files"], $upload_overrides);

            remove_filter('upload_dir', array($this, 'change_marker_upload_dir'));

            $res = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "markers WHERE id = " . $data['marker_id']);

            if ($_FILES["files"]["size"] > 5000000) {
                $response->msg = __("Sorry, your file is too large.", 'store-locator-for-wp');
            }
            #not a valid format
            else if (!in_array($imageFileType, array('jpg', 'png', 'jpeg', 'gif', 'JPG'))) {
                $response->msg = __("Sorry, only JPG, JPEG, PNG & GIF files are allowed.", 'store-locator-for-wp');
            } else if ($width > $this->max_ico_width || $height > $this->max_ico_width) {
                $response->msg = __("Max Image dimensions Width and Height is {$this->max_ico_width} x {$this->max_ico_height} px.<br> Recommended Icon size is 20 x 32 px or around it", 'store-locator-for-wp');
            }
            #upload 
            else if ($movefile && !isset($movefile['error'])) {
                #delete previous file
                $wpdb->update(EVDPL_PREFIX . "markers", array('marker_name' => $data['marker_name'], 'icon' => $target_name), array('id' => $data['marker_id']), array('%s'), array('%d'));
                $response->msg = __('Updated Successfully.', 'store-locator-for-wp');
                $response->success = true;
                if (file_exists($target_dir . $res[0]->icon)) {
                    unlink($target_dir . $res[0]->icon);
                }
            }
            #error
            else {

                $response->msg = __('Some error occured', 'store-locator-for-wp');
            }
        }
        #without icon
        else {
            $wpdb->update(EVDPL_PREFIX . "markers", array('marker_name' => $data['marker_name']), array('id' => $data['marker_id']), array('%s'), array('%d'));
            $response->msg = __('Updated Successfully.', 'store-locator-for-wp');
            $response->success = true;
        }

        echo json_encode($response);
        die;
    }

    /**
     * [get_markers GET the Markers List]
     * @return [type] [description]
     */
    public function get_markers() {

        global $wpdb;
        $start = isset($_REQUEST['iDisplayStart']) ? sanitize_text_field($_REQUEST['iDisplayStart']) : 0;
        $params = isset($_REQUEST) ? array_map('sanitize_text_field', $_REQUEST) : null;

        $acolumns = array(
            'id', 'id', 'marker_name', 'is_active', 'icon'
        );

        $columnsFull = $acolumns;

        $clause = array();

        if (isset($_REQUEST['filter'])) {
            $filters = array_map('sanitize_text_field', $_REQUEST['filter']);
            foreach ($filters as $key => $value) {
                if ($value != '') {
                    if ($key == 'is_active') {
                        $value = ($value == 'yes') ? 1 : 0;
                    }
                    $clause[] = "$key like '%{$value}%'";
                }
            }
        }

        #iDisplayStart::Limit per page
        $sLimit = "";
        if (isset($_REQUEST['iDisplayStart']) && sanitize_text_field($_REQUEST['iDisplayLength']) != '-1') {
            $sLimit = "LIMIT " . sanitize_text_field(intval($_REQUEST['iDisplayStart'])) . ", " .
                    sanitize_text_field(intval($_REQUEST['iDisplayLength']));
        }

        #Ordering
        $sOrder = "";
        if (isset($_REQUEST['iSortCol_0'])) {
            $sOrder = "ORDER BY  ";

            for ($i = 0; $i < sanitize_text_field(intval($_REQUEST['iSortingCols'])); $i++) {
                if (isset($_REQUEST['iSortCol_' . $i])) {
                    $sort_dir = (isset($_REQUEST['sSortDir_0']) && sanitize_text_field($_REQUEST['sSortDir_0']) == 'asc') ? 'ASC' : 'DESC';
                    $sOrder .= "`" . $acolumns[sanitize_text_field(intval($_REQUEST['iSortCol_' . $i]))] . "` " . $sort_dir;
                    break;
                }
            }

            #$sOrder = substr_replace( $sOrder, "", -2 );
            if ($sOrder == "ORDER BY") {
                $sOrder = "";
            }
        }

        $sWhere = implode(' AND ', $clause);

        if ($sWhere != '')
            $sWhere = ' WHERE ' . $sWhere;

        $fields = implode(',', $columnsFull);

        ###get the fields###
        $sql = "SELECT $fields FROM " . EVDPL_PREFIX . "markers";
        $sqlCount = "SELECT count(*) 'count' FROM " . EVDPL_PREFIX . "markers";

        /*
         * SQL queries
         * Get data to display
         */
        $sQuery = "{$sql} {$sWhere} {$sOrder} {$sLimit}";
        $data_output = $wpdb->get_results($sQuery);

        #Data set length after filtering
        $sQuery = "{$sqlCount} {$sWhere}";
        $r = $wpdb->get_results($sQuery);
        $iFilteredTotal = $r[0]->count;

        $iTotal = $iFilteredTotal;

        #Output
        $sEcho = isset($_REQUEST['sEcho']) ? sanitize_text_field(intval($_REQUEST['sEcho'])) : 1;
        $output = array(
            "sEcho" => sanitize_text_field(intval($_REQUEST['sEcho'])),
            //"test" => $test,
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );

        foreach ($data_output as $aRow) {
            $row = $aRow;

            if ($row->is_active == 1) {
                $row->is_active = 'Yes';
            } else {
                $row->is_active = 'No';
            }

            $row->icon = "<img  src='" . EVDPL_URL_PATH . "public/icon/" . $row->icon . "' alt=''  style='width:20px'/>";
            $row->check = '<div class="custom-control custom-checkbox"><input type="checkbox" data-id="' . $row->id . '" class="custom-control-input" id="asl-chk-' . $row->id . '"><label class="custom-control-label" for="asl-chk-' . $row->id . '"></label></div>';
            $row->action = '<div class="edit-options"><a data-id="' . $row->id . '" title="Edit" class="glyphicon-edit edit_marker"><svg width="14" height="14"><use xlink:href="#i-edit"></use></svg></a><a title="Delete" data-id="' . $row->id . '" class="glyphicon-trash delete_marker"><svg width="14" height="14"><use xlink:href="#i-trash"></use></svg></a></div>';
            $output['aaData'][] = $row;
        }

        echo json_encode($output);
        die;
    }

    /**
     * [get_marker_by_id get marker by id]
     * @return [type] [description]
     */
    public function get_marker_by_id() {
        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $store_id = isset($_REQUEST['marker_id']) ? sanitize_text_field(intval($_REQUEST['marker_id'])) : 0;

        $response->list = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "markers WHERE id = " . $store_id);
        if (count($response->list) != 0) {
            $response->success = true;
        } else {
            $response->error = __('Error occurred while geting record', 'store-locator-for-wp');
        }
        echo json_encode($response);
        die;
    }

    #Methods for Logo

    /**
     * [delete_logo Delete a Logo]
     * @return [type] [description]
     */
    public function delete_logo() {

        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $multiple = sanitize_text_field($_REQUEST['multiple']);
        $delete_sql;
        $mResults;

        if ($multiple) {
            $item_ids = implode(",", array_map('intval', $_POST['item_ids']));
            $delete_sql = "DELETE FROM " . EVDPL_PREFIX . "storelogos WHERE id IN (" . $item_ids . ")";
            $mResults = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "storelogos WHERE id IN (" . $item_ids . ")");
        } else {
            $item_id = sanitize_text_field(intval($_REQUEST['logo_id']));
            $delete_sql = "DELETE FROM " . EVDPL_PREFIX . "storelogos WHERE id = " . $item_id;
            $mResults = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "storelogos WHERE id = " . $item_id);
        }

        if (count($mResults) != 0) {
            if ($wpdb->query($delete_sql)) {
                $response->success = true;

                foreach ($mResults as $m) {
                    $inputFileName = EVDPL_PLUGIN_PATH . 'public/Logo/' . $m->path;
                    if (file_exists($inputFileName) && $m->path != 'default.png') {
                        unlink($inputFileName);
                    }
                }
            } else {
                $response->error = __('Error occurred while deleting record', 'store-locator-for-wp');
                $response->msg = $wpdb->show_errors();
            }
        } else {
            $response->error = __('Error occurred while deleting record', 'store-locator-for-wp');
        }

        if ($response->success)
            $response->msg = ($multiple) ? __('Logos deleted Successfully.', 'store-locator-for-wp') : __('Logo deleted Successfully.', 'store-locator-for-wp');

        echo json_encode($response);
        die;
    }

    /**
     * [update_logo update logo with icon]
     * @return [type] [description]
     */
    public function update_logo() {

        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $data = array_map('sanitize_text_field', $_REQUEST['data']);

        #with icon
        if ($data['action'] == "notsame") {

            $target_dir = EVDPL_PLUGIN_PATH . "public/Logo/";

            $namefile = substr(strtolower($_FILES["files"]["name"]), 0, strpos(strtolower($_FILES["files"]["name"]), '.'));

            $imageFileType = pathinfo($_FILES["files"]["name"], PATHINFO_EXTENSION);
            $target_name = uniqid();

            $tmp_file = $_FILES["files"]['tmp_name'];
            list($width, $height) = getimagesize($tmp_file);

            #add extension
            $target_name .= '.' . $imageFileType;

            add_filter('upload_dir', array($this, 'change_logo_upload_dir'));

            $upload_overrides = array(
                'test_form' => false
            );

            $_FILES["files"]['name'] = $target_name;
            $movefile = wp_handle_upload($_FILES["files"], $upload_overrides);

            remove_filter('upload_dir', array($this, 'change_logo_upload_dir'));

            $res = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "storelogos WHERE id = " . $data['logo_id']);

            if ($_FILES["files"]["size"] > 5000000) {

                $response->msg = __("Sorry, your file is too large.", 'store-locator-for-wp');
            }
            #not a valid format
            else if (!in_array($imageFileType, array('jpg', 'png', 'jpeg', 'gif', 'JPG'))) {
                $response->msg = __("Sorry, only JPG, JPEG, PNG & GIF files are allowed.", 'store-locator-for-wp');
            } else if ($width > $this->max_img_width || $height > $this->max_img_width) {

                $response->msg = __("Max Image dimensions Width and Height is {$this->max_img_width} x {$this->max_img_height} px.<br> Recommended Logo size is 250 x 250 px", 'store-locator-for-wp');
            }
            #upload 
            else if ($movefile && !isset($movefile['error'])) {
                #delete previous file
                $wpdb->update(EVDPL_PREFIX . "storelogos", array('name' => $data['logo_name'], 'path' => $target_name), array('id' => $data['logo_id']), array('%s'), array('%d'));
                $response->msg = __('Updated Successfully.', 'store-locator-for-wp');
                $response->success = true;
                if (file_exists($target_dir . $res[0]->icon)) {
                    unlink($target_dir . $res[0]->icon);
                }
            }
            #error
            else {

                $response->msg = __('Some error occured', 'store-locator-for-wp');
            }
        }
        #without icon
        else {
            $wpdb->update(EVDPL_PREFIX . "storelogos", array('name' => $data['logo_name']), array('id' => $data['logo_id']), array('%s'), array('%d'));
            $response->msg = __('Updated Successfully.', 'store-locator-for-wp');
            $response->success = true;
        }

        echo json_encode($response);
        die;
    }

    /**
     * [get_logo_by_id get logo by id]
     * @return [type] [description]
     */
    public function get_logo_by_id() {

        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $store_id = isset($_REQUEST['logo_id']) ? sanitize_text_field(intval($_REQUEST['logo_id'])) : 0;

        $response->list = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "storelogos WHERE id = " . $store_id);
        if (count($response->list) != 0) {
            $response->success = true;
        } else {
            $response->error = __('Error occurred while geting record', 'store-locator-for-wp');
        }
        echo json_encode($response);
        die;
    }

    /**
     * [get_logos GET the Logos]
     * @return [type] [description]
     */
    public function get_logos() {

        global $wpdb;
        $start = isset($_REQUEST['iDisplayStart']) ? sanitize_text_field($_REQUEST['iDisplayStart']) : 0;
        $params = isset($_REQUEST) ? array_map('sanitize_text_field', $_REQUEST) : null;

        $acolumns = array(
            'id', 'id', 'name', 'path'
        );

        $columnsFull = $acolumns;

        $clause = array();

        if (isset($_REQUEST['filter'])) {
            $filters = array_map('sanitize_text_field', $_REQUEST['filter']);
            foreach ($filters as $key => $value) {
                if ($value != '') {
                    $clause[] = "$key like '%{$value}%'";
                }
            }
        }

        #iDisplayStart::Limit per page
        $sLimit = "";
        if (isset($_REQUEST['iDisplayStart']) && sanitize_text_field($_REQUEST['iDisplayLength']) != '-1') {
            $sLimit = "LIMIT " . sanitize_text_field(intval($_REQUEST['iDisplayStart'])) . ", " .
                    sanitize_text_field(intval($_REQUEST['iDisplayLength']));
        }

        #Ordering
        $sOrder = "";
        if (isset($_REQUEST['iSortCol_0'])) {
            $sOrder = "ORDER BY  ";

            for ($i = 0; $i < sanitize_text_field(intval($_REQUEST['iSortingCols'])); $i++) {
                if (isset($_REQUEST['iSortCol_' . $i])) {
                    $sort_dir = (isset($_REQUEST['sSortDir_0']) && sanitize_text_field($_REQUEST['sSortDir_0']) == 'asc') ? 'ASC' : 'DESC';
                    $sOrder .= "`" . $acolumns[sanitize_text_field(intval($_REQUEST['iSortCol_' . $i]))] . "` " . $sort_dir;
                    break;
                }
            }

            #$sOrder = substr_replace( $sOrder, "", -2 );
            if ($sOrder == "ORDER BY") {
                $sOrder = "";
            }
        }


        $sWhere = implode(' AND ', $clause);

        if ($sWhere != '')
            $sWhere = ' WHERE ' . $sWhere;

        $fields = implode(',', $columnsFull);

        ###get the fields###
        $sql = "SELECT $fields FROM " . EVDPL_PREFIX . "storelogos";

        $sqlCount = "SELECT count(*) 'count' FROM " . EVDPL_PREFIX . "storelogos";

        /*
         * SQL queries
         * Get data to display
         */
        $sQuery = "{$sql} {$sWhere} {$sOrder} {$sLimit}";
        $data_output = $wpdb->get_results($sQuery);

        #Data set length after filtering
        $sQuery = "{$sqlCount} {$sWhere}";
        $r = $wpdb->get_results($sQuery);
        $iFilteredTotal = $r[0]->count;

        $iTotal = $iFilteredTotal;

        #Output
        $sEcho = isset($_REQUEST['sEcho']) ? sanitize_text_field(intval($_REQUEST['sEcho'])) : 1;
        $output = array(
            "sEcho" => sanitize_text_field(intval($_REQUEST['sEcho'])),
            //"test" => $test,
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );

        foreach ($data_output as $aRow) {
            $row = $aRow;

            $row->path = '<img src="' . EVDPL_URL_PATH . 'public/Logo/' . $row->path . '"  style="max-width:100px"/>';
            $row->check = '<div class="custom-control custom-checkbox"><input type="checkbox" data-id="' . $row->id . '" class="custom-control-input" id="asl-chk-' . $row->id . '"><label class="custom-control-label" for="asl-chk-' . $row->id . '"></label></div>';
            $row->action = '<div class="edit-options"><a data-id="' . $row->id . '" title="Edit" class="glyphicon-edit edit_logo"><svg width="14" height="14"><use xlink:href="#i-edit"></use></svg></a><a title="Delete" data-id="' . $row->id . '" class="glyphicon-trash delete_logo"><svg width="14" height="14"><use xlink:href="#i-trash"></use></svg></a></div>';
            $output['aaData'][] = $row;
        }

        echo json_encode($output);
        die;
    }

    /**
     * [get_store_list GET List of Stores]
     * @return [type] [description]
     */
    public function get_store_list() {

        global $wpdb;
        $start = isset($_REQUEST['iDisplayStart']) ? sanitize_text_field($_REQUEST['iDisplayStart']) : 0;
        $params = isset($_REQUEST) ? array_map('sanitize_text_field', $_REQUEST) : null;

        $acolumns = array(
            EVDPL_PREFIX . 'stores.id', EVDPL_PREFIX . 'stores.id ', EVDPL_PREFIX . 'stores.id ', 'title', 'description',
            'lat', 'lng', 'street', 'state', 'city',
            'phone', 'email', 'website', 'postal_code', 'is_disabled',
            EVDPL_PREFIX . 'stores.id', 'marker_id', 'logo_id',
            EVDPL_PREFIX . 'stores.created_on'/* ,'country_id' */
        );

        $columnsFull = array(
            EVDPL_PREFIX . 'stores.id as id', EVDPL_PREFIX . 'stores.id as id', EVDPL_PREFIX . 'stores.id as id', 'title', 'description', 'lat', 'lng', 'street', 'state', 'city', 'phone', 'email', 'website', 'postal_code', 'is_disabled', EVDPL_PREFIX . 'stores.created_on'/* ,EVDPL_PREFIX.'countries.country_name' */
        );

        #Show the Category in Grid, make it false for high records and fast query	
        $category_in_grid = true;

        $cat_in_grid_data = $wpdb->get_results("SELECT `value` FROM " . EVDPL_PREFIX . "configs WHERE `key` = 'cat_in_grid'");

        if ($cat_in_grid_data && $cat_in_grid_data[0] && $cat_in_grid_data[0]->value == '0')
            $category_in_grid = false;

        $clause = array();
        if (isset($_REQUEST['filter'])) {
            $filters = array_map('sanitize_text_field', $_REQUEST['filter']);
            foreach ($filters as $key => $value) {
                if ($value != '') {
                    if ($key == 'is_disabled') {
                        $value = ($value == 'yes') ? 1 : 0;
                    } elseif ($key == 'marker_id' || $key == 'logo_id') {
                        $clause[] = EVDPL_PREFIX . "stores.{$key} = '{$value}'";
                        continue;
                    }

                    $clause[] = EVDPL_PREFIX . "stores.{$key} LIKE '%{$value}%'";
                }
            }
        }

        #iDisplayStart::Limit per page
        $sLimit = "";
        $displayStart = isset($_REQUEST['iDisplayStart']) ? sanitize_text_field(intval($_REQUEST['iDisplayStart'])) : 0;

        if (isset($_REQUEST['iDisplayStart']) && sanitize_text_field($_REQUEST['iDisplayLength']) != '-1') {
            $sLimit = "LIMIT " . $displayStart . ", " .
                    sanitize_text_field(intval($_REQUEST['iDisplayLength']));
        } else
            $sLimit = "LIMIT " . $displayStart . ", 20 ";

        /*
         * Ordering
         */
        $sOrder = "";
        if (isset($_REQUEST['iSortCol_0'])) {
            $sOrder = "ORDER BY  ";

            for ($i = 0; $i < sanitize_text_field(intval($_REQUEST['iSortingCols'])); $i++) {
                if (isset($_REQUEST['iSortCol_' . $i])) {
                    $sort_dir = (isset($_REQUEST['sSortDir_0']) && sanitize_text_field($_REQUEST['sSortDir_0']) == 'asc') ? 'ASC' : 'DESC';
                    $sOrder .= $acolumns[sanitize_text_field(intval($_REQUEST['iSortCol_' . $i]))] . " " . $sort_dir;
                    break;
                }
            }

            #$sOrder = substr_replace( $sOrder, "", -2 );
            if ($sOrder == "ORDER BY") {
                $sOrder = "";
            }
        }

        $sWhere = implode(' AND ', $clause);

        if ($sWhere != '')
            $sWhere = ' WHERE ' . $sWhere;

        $fields = implode(',', $columnsFull);
        $fields .= ($category_in_grid) ? ',marker_id,logo_id,group_concat(category_id) as categories,iso_code_2' : ',marker_id,logo_id';

        #get the fields
        $sql = ($category_in_grid) ? ("SELECT $fields FROM " . EVDPL_PREFIX . "stores LEFT JOIN " . EVDPL_PREFIX . "stores_categories ON " . EVDPL_PREFIX . "stores.id = " . EVDPL_PREFIX . "stores_categories.store_id  LEFT JOIN " . EVDPL_PREFIX . "countries ON " . EVDPL_PREFIX . "stores.country = " . EVDPL_PREFIX . "countries.id ") : ("SELECT $fields FROM " . EVDPL_PREFIX . "stores ");

        $sqlCount = "SELECT count(*) 'count' FROM " . EVDPL_PREFIX . "stores";

        /*
         * SQL queries
         * Get data to display
         */
        $dQuery = $sQuery = ($category_in_grid) ? "{$sql} {$sWhere} GROUP BY " . EVDPL_PREFIX . "stores.id {$sOrder} {$sLimit}" : "{$sql} {$sWhere} {$sOrder} {$sLimit}";

        $data_output = $wpdb->get_results($sQuery);
        $wpdb->show_errors = false;
        $error = $wpdb->last_error;

        #Data set length after filtering
        $sQuery = "{$sqlCount} {$sWhere}";
        $r = $wpdb->get_results($sQuery);
        $iFilteredTotal = $r[0]->count;

        $iTotal = $iFilteredTotal;

        /*
         * Output
         */
        $sEcho = isset($_REQUEST['sEcho']) ? sanitize_text_field(intval($_REQUEST['sEcho'])) : 1;
        $output = array(
            "sEcho" => sanitize_text_field(intval($_REQUEST['sEcho'])),
            "iTotalRecords" => $iTotal,
            'orderby' => $sOrder,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );

        if ($error) {
            $output['error'] = $error;
            $output['query'] = $dQuery;
        }


        $days_in_words = array('0' => 'Sun', '1' => 'Mon', '2' => 'Tues', '3' => 'Wed', '4' => 'Thur', '5' => 'Fri', '6' => 'Sat');

        foreach ($data_output as $aRow) {
            $row = $aRow;

            //	No Category in Grid
            if (!$category_in_grid)
                $row->categories = '';

            $edit_url = 'admin.php?page=edit-evdpl-store&store_id=' . $row->id;

            $row->action = '<div class="edit-options"><a class="row-cpy" title="Duplicate" data-id="' . $row->id . '"><svg width="14" height="14"><use xlink:href="#i-clipboard"></use></svg></a><a href="' . $edit_url . '"><svg width="14" height="14"><use xlink:href="#i-edit"></use></svg></a><a title="Delete" data-id="' . $row->id . '" class="glyphicon-trash"><svg width="14" height="14"><use xlink:href="#i-trash"></use></svg></a></div>';
            $row->check = '<div class="custom-control custom-checkbox"><input type="checkbox" data-id="' . $row->id . '" class="custom-control-input" id="asl-chk-' . $row->id . '"><label class="custom-control-label" for="asl-chk-' . $row->id . '"></label></div>';

            //Show country with state
            if ($row->state && $row->iso_code_2)
                $row->state = $row->state . ', ' . $row->iso_code_2;
            if ($row->is_disabled == 1) {
                $row->is_disabled = 'Yes';
            } else {
                $row->is_disabled = 'No';
            }

            //Days
            /*
              if($row->days) {
              $days 	  = explode(',',$row->days);
              $days_are = array();

              foreach($days as $d) {

              $days_are[] = $days_in_words[$d];
              }

              $row->days = $days_are;
              }
             */

            $output['aaData'][] = $row;

            //get the categories
            if ($aRow->categories) {

                $categories_ = $wpdb->get_results("SELECT category_name FROM " . EVDPL_PREFIX . "categories WHERE id IN ($aRow->categories)");

                $cnames = array();
                foreach ($categories_ as $cat_)
                    $cnames[] = $cat_->category_name;

                $aRow->categories = implode(', ', $cnames);
            }
        }

        echo json_encode($output);
        die;
    }

    /**
     * [save_custom_map save customize map]
     * @return [type] [description]
     */
    public function save_custom_map() {
        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        #Check for asl-p-cont infbox html
        if (isset($_POST['data_map'])) {
            $data_map = sanitizie_text_field($_POST['data_map']);

            $wpdb->update(EVDPL_PREFIX . "settings",
                    array('content' => stripslashes($data_map)),
                    array('id' => 1, 'type' => 'map'));

            $response->msg = __("Map has been Updated Successfully.", 'store-locator-for-wp');
            $response->success = true;
        } else
            $response->error = __("Error Occured saving Map.", 'store-locator-for-wp');

        echo json_encode($response);
        die;
    }

    /**
     * [validate_me Validate P]
     * @return [type] [description]
     */
    public function validate_me() {

        $response = new \stdclass();
        $response->success = false;

        //	Validate the Key
        if (isset($_REQUEST['value']) && $_REQUEST['value']) {

            $request_data = wp_remote_request('http://validate/index.php?v-key=' . (urlencode(sanitize_text_field($_REQUEST['value']))) . '&v-hash=' . ((urlencode($_SERVER['SERVER_NAME']))));
            /*
              if(is_object($request_data)) {
              $response->error    = $request_data;
              $response->success  = true;
              update_option('asl-compatible', md5(get_site_url()));
              }
              else
             */
            if (isset($request_data['body'])) {
                $request_data = json_decode($request_data['body'], true);
                $response->data = $request_data;

                if ($request_data) {
                    #Validate success
                    if ($request_data['success']) {
                        $response->success = true;
                        update_option('asl-compatible', $request_data['hash']);
                    }

                    #Message
                    if ($request_data['message']) {
                        $response->message = $request_data['message'];
                    }
                }
            } else {
                $response->message = 'Failed to Receive Response From Server';
            }
        } else {
            $response->data = 'Value is not Valid.';
        }

        echo json_encode($response);
        die;
    }

    /**
     * [import_markers_bulk not used]
     * @return [type] [description]
     */
    private function import_markers_bulk() {
        global $wpdb;
        $dir = EVDPL_PLUGIN_PATH . '/public/icon';
        if ($handle = opendir($dir)) {

            while (false !== ($entry = readdir($handle))) {

                if ($entry != "." && $entry != "..") {

                    $name = str_replace('.png', '', $entry);
                    $name = str_replace('-', ' ', $name);
                    $name = str_replace('_', ' ', $name);
                    $name = ucwords($name);
                    $wpdb->insert(EVDPL_PREFIX . 'markers',
                            array('icon' => $entry, 'marker_name' => $name, 'is_active' => 1),
                            array('%s', '%s'));
                }
            }

            closedir($handle);
        }
    }

    /**
     * [fill_missing_coords Fetch the Missing Coordinates]
     * @return [type] [description]
     */
    public function fill_missing_coords() {
        ini_set('memory_limit', '256M');
        ini_set('max_execution_time', 0);

        require_once EVDPL_PLUGIN_PATH . 'includes/class-evdpl-store-locator-helper.php';

        global $wpdb;

        $response = new \stdclass();
        $response->success = false;
        $response->summary = array();

        #Get the API Key
        $sql = "SELECT `key`,`value` FROM " . EVDPL_PREFIX . "configs WHERE `key` = 'server_key'";
        $configs_result = $wpdb->get_results($sql);
        $api_key = $configs_result[0]->value;

        if ($api_key) {

            #Get the Stores
            $stores = $wpdb->get_results("SELECT `s`.`id`,  `s`.`title`,  `s`.`description`,  `s`.`street`,  `s`.`city`,  `s`.`state`,  `s`.`postal_code`,  `c`.`country`,  `s`.`lat`,  `s`.`lng` 
										FROM " . EVDPL_PREFIX . "stores s LEFT JOIN " . EVDPL_PREFIX . "countries c ON s.country = c.id 
										WHERE lat is NULL OR lat = '' OR lng is NULL OR lng = '' OR lat = '0' OR lat = '0.0'  ORDER BY s.`id`");

            foreach ($stores as $store) {

                $coordinates = EvdplStoreLocator_Helper::getCoordinates($store->street, $store->city, $store->state, $store->postal_code, $store->country, $api_key);

                if ($coordinates) {

                    if ($wpdb->update(EVDPL_PREFIX . 'stores', array('lat' => $coordinates['lat'], 'lng' => $coordinates['lng']), array('id' => $store->id))) {
                        $response->summary[] = 'Store ID: ' . $store->id . ", LAT/LNG Fetch Success, Address: " . implode(', ', array($store->street, $store->city, $store->state, $store->postal_code));
                    } else
                        $response->summary[] = '<span class="red">Store ID: ' . $store->id . ", LAT/LNG Error Save, Address: " . implode(', ', array($store->street, $store->city, $store->state, $store->postal_code)) . '</span>';
                } else
                    $response->summary[] = '<span class="red">Store ID: ' . $store->id . ", LAT/LNG Fetch Failed, Address: " . implode(', ', array($store->street, $store->city, $store->state, $store->postal_code)) . '</span>';
            }

            if (!$stores || count($stores) == 0) {
                $response->summary[] = __('Missing Coordinates are not Found in Store Listing', 'store-locator-for-wp');
            }

            $response->msg = __('Missing Coordinates Request Completed', 'store-locator-for-wp');
            $response->success = true;
        } else
            $response->msg = __('Google Server API Key is Missing.', 'store-locator-for-wp');


        echo json_encode($response);
        die;
    }

    /**
     * [backup_logo_icons Backup of Logos]
     * @return [type] [description]
     */
    public function backup_logo_icons() {
        global $wpdb;

        require_once EVDPL_PLUGIN_PATH . 'includes/class-evdpl-store-locator-helper.php';

        $zip_name = 'store-locator-logo-icons-' . time() . '.zip';
        $zip_path = EVDPL_PLUGIN_PATH . 'public/export/' . $zip_name;

        $response = new \stdclass();
        $response->success = false;

        $all_assets = array();

        #Backup Logo Folder
        $logos = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "storelogos ORDER BY name");

        foreach ($logos as $logo) {
            $asset_file = EVDPL_PLUGIN_PATH . 'public/Logo/' . $logo->path;

            #Check if File Exist
            $all_assets[] = $asset_file;
        }

        #Backup Marker Folder
        $markers = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "markers");

        foreach ($markers as $m) {
            $asset_file = EVDPL_PLUGIN_PATH . 'public/icon/' . $m->icon;

            #Check if File Exist
            $all_assets[] = $asset_file;
        }

        #Backup Logo Folder
        $categories = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "categories");

        foreach ($categories as $c) {
            $asset_file = EVDPL_PLUGIN_PATH . 'public/svg/' . $c->icon;
            #Check if File Exist
            $all_assets[] = $asset_file;
        }

        #Created successfull backup
        if (EvdplStoreLocator_Helper::create_zip($all_assets, $zip_path)) {
            $response->success = true;
            $response->msg = __('Assets Backup Successfully, Download the Zip File.', 'store-locator-for-wp');
            $response->zip = EVDPL_URL_PATH . 'public/export/' . $zip_name;
        } else
            $response->error = __('Failed to Create the Backup', 'store-locator-for-wp');

        echo json_encode($response);
        die;
    }

    /**
     * [save_setting save ASL Setting]
     * @return [type] [description]
     */
    public function save_setting() {
        global $wpdb;

        $response = new \stdclass();
        $response->success = false;

        $data_ = $_POST['data'];

        $remove_script_tag = null;

        #Remove Script tag will be saved in wp_options
        if (isset($data_['remove_maps_script'])) {
            $remove_script_tag = $data_['remove_maps_script'];
            unset($data_['remove_maps_script']);
        }

        $keys = array_keys($data_);

        foreach ($keys as $key) {
            $wpdb->update(EVDPL_PREFIX . "configs",
                    array('value' => $data_[$key]),
                    array('key' => $key)
            );
        }

        #Save Custom Settings
        $custom_map_style = sanitize_text_field($_POST['map_style']);

        $wpdb->update(EVDPL_PREFIX . "settings",
                array('content' => stripslashes($custom_map_style)),
                array('name' => 'map_style'));

        update_option('asl-remove_maps_script', $remove_script_tag);

        $response->msg = __("Setting has been Updated Successfully.", 'store-locator-for-wp');
        $response->success = true;

        echo json_encode($response);
        die;
    }

    #Page Callee

    /**
     * [admin_plugin_settings Admin Plugi]
     * @return [type] [description]
     */
    public function admin_plugin_settings() {
        #add scripts
        $this->_enqueue_scripts();
        include EVDPL_PLUGIN_PATH . 'admin/partials/add_store.php';
    }

    /**
     * [edit_store Edit a Store]
     * @return [type] [description]
     */
    public function edit_store() {
        $this->_enqueue_scripts();

        global $wpdb;

        $countries = $wpdb->get_results("SELECT id,country FROM " . EVDPL_PREFIX . "countries");
        $logos = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "storelogos ORDER BY name");
        $markers = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "markers");
        $category = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "categories");
        $brands = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "brands");

        $store_id = isset($_REQUEST['store_id']) ? sanitize_text_field(intval($_REQUEST['store_id'])) : 0;

        if (!$store_id) {
            die('Invalid Store Id.');
        }

        #Store Data
        $store = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "stores WHERE id = $store_id");

        $storecategory = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "stores_categories WHERE store_id = $store_id");

        if (!$store || !$store[0]) {
            die('Invalid Store Id');
        }

        #Take the first store		
        $store = $store[0];

        #Custom Fields
        $fields = $this->_get_custom_fields();
        $custom_data = (isset($store->custom) && $store->custom) ? json_decode($store->custom, true) : [];

        $store_brand = explode(',', $store->brand);

        $storelogo = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "storelogos WHERE id = " . $store->logo_id);

        //api key
        $sql = "SELECT `key`,`value` FROM " . EVDPL_PREFIX . "configs WHERE `key` = 'api_key' || `key` = 'time_format'";
        $all_configs_result = $wpdb->get_results($sql);

        $all_configs = array();

        foreach ($all_configs_result as $c) {
            $all_configs[$c->key] = esc_attr($c->value);
        }

        include EVDPL_PLUGIN_PATH . 'admin/partials/edit_store.php';
    }

    /**
     * [admin_add_new_store Add a New Store]
     * @return [type] [description]
     */
    public function admin_add_new_store() {
        global $wpdb;

        $this->_enqueue_scripts();

        //api key
        $sql = "SELECT `key`,`value` FROM " . EVDPL_PREFIX . "configs WHERE `key` = 'api_key' || `key` = 'time_format' || `key` = 'default_lat' || `key` = 'default_lng'";
        $all_configs_result = $wpdb->get_results($sql);

        $all_configs = array();

        foreach ($all_configs_result as $c) {
            $all_configs[$c->key] = esc_attr($c->value);
        }

        $logos = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "storelogos ORDER BY name");
        $markers = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "markers");
        $category = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "categories");
        $countries = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "countries");
        $brands = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "brands");

        $fields = $this->_get_custom_fields();

        include EVDPL_PLUGIN_PATH . 'admin/partials/add_store.php';
    }

    /**
     * [admin_dashboard Plugin Dashboard]
     * @return [type] [description]
     */
    public function admin_dashboard() {
        $this->_enqueue_scripts();

        global $wpdb;

        $sql = "SELECT `key`,`value` FROM " . EVDPL_PREFIX . "configs WHERE `key` = 'api_key'";
        $all_configs_result = $wpdb->get_results($sql);

        $all_configs = array('api_key' => $all_configs_result[0]->value);
        $all_stats = array();

        $temp = $wpdb->get_results("SELECT count(*) as c FROM " . EVDPL_PREFIX . "markers");
        $all_stats['markers'] = esc_attr($temp[0]->c);

        $temp = $wpdb->get_results("SELECT count(*) as c FROM " . EVDPL_PREFIX . "stores WHERE is_disabled IS NULL OR is_disabled = 0");
        $all_stats['stores'] = esc_attr($temp[0]->c);

        $temp = $wpdb->get_results("SELECT count(*) as c FROM " . EVDPL_PREFIX . "categories");
        $all_stats['categories'] = esc_attr($temp[0]->c);

        $temp = $wpdb->get_results("SELECT count(*) as c FROM " . EVDPL_PREFIX . "stores_view");
        $all_stats['searches'] = esc_attr($temp[0]->c);

        include EVDPL_PLUGIN_PATH . 'admin/partials/dashboard.php';
    }

    /**
     * [get_stat_by_month Get the Stats of the Analytics]
     * @return [type] [description]
     */
    public function get_stat_by_month() {

        global $wpdb;

        $month = isset($_REQUEST['m']) ? sanitize_text_field(intval($_REQUEST['m'])) : date('m');
        $year = isset($_REQUEST['y']) ? sanitize_text_field(intval($_REQUEST['y'])) : date('y');

        #Either Chart or Top Views
        $stats_type = sanitize_text_field($_REQUEST['stat_type']);

        $c_m = date('m');
        $c_y = date('y');

        if (!$month || is_nan($month)) {
            #Current
            $month = $c_m;
        }

        if (!$year || is_nan($year)) {
            #Current
            $year = $c_y;
        }

        $date = intval(date('d'));
        if ($stats_type == 'chart') {
            #Not Current Month
            if ($month != $c_m && $year != $c_y) {
                /* Month last date */
                $a_date = "{$year}-{$month}-1";
                $date = date("t", strtotime($a_date));
            }

            //WHERE YEAR(created_on) = YEAR(NOW()) AND MONTH(created_on) = MONTH(NOW())
            $results = $wpdb->get_results("SELECT DAY(created_on) AS d, COUNT(*) AS c FROM `" . EVDPL_PREFIX . "stores_view`  WHERE YEAR(created_on) = {$year} AND MONTH(created_on) = {$month} GROUP BY DAY(created_on)");

            $days_stats = array();
            for ($a = 1; $a <= $date; $a++) {
                $days_stats[(string) $a] = 0;
            }
            foreach ($results as $row) {
                $days_stats[$row->d] = $row->c;
            }
            echo json_encode(array('data' => $days_stats));
            die;
        } else {
            $limit = isset($_REQUEST['len']) ? sanitize_text_field(intval($_REQUEST['len'])) : '10';

            #top views
            $top_stores = $wpdb->get_results("SELECT COUNT(*) AS views," . EVDPL_PREFIX . "stores_view.`store_id`, title FROM `" . EVDPL_PREFIX . "stores_view` LEFT JOIN `" . EVDPL_PREFIX . "stores` ON " . EVDPL_PREFIX . "stores_view.`store_id` = " . EVDPL_PREFIX . "stores.`id` WHERE store_id IS NOT NULL AND YEAR(" . EVDPL_PREFIX . "stores_view.created_on) = {$year} AND MONTH(" . EVDPL_PREFIX . "stores_view.created_on) = {$month} GROUP BY store_id ORDER BY views DESC LIMIT " . $limit);

            #Top Searches    
            $top_search = $wpdb->get_results("SELECT COUNT(*) AS views, search_str FROM `" . EVDPL_PREFIX . "stores_view` WHERE store_id IS NULL AND is_search = 1 AND YEAR(created_on) = {$year} AND MONTH(created_on) = {$month} GROUP BY search_str ORDER BY views DESC LIMIT " . $limit);

            echo json_encode(['stores' => $top_stores, 'searches' => $top_search]);
            die;
        }
    }

    /**
     * [admin_delete_all_stores Delete All Stores, Logos and Category Relations]
     * @return [type] [description]
     */
    public function admin_delete_all_stores() {
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

        $response = new \stdclass();
        $response->success = false;

        global $wpdb;
        $prefix = EVDPL_PREFIX;

        $wpdb->query("TRUNCATE TABLE `{$prefix}stores_categories`");
        $wpdb->query("TRUNCATE TABLE `{$prefix}stores`");
        $wpdb->query("TRUNCATE TABLE `{$prefix}storelogos`");

        $response->success = true;
        $response->msg = __('All Stores with Logo Deleted', 'store-locator-for-wp');

        echo json_encode($response);
        die;
    }

    /**
     * [validate_api_key Validateyour Google API Key]
     * @return [type] [description]
     */
    public function validate_api_key() {

        global $wpdb;

        require_once EVDPL_PLUGIN_PATH . 'includes/class-evdpl-store-locator-helper.php';

        $response = new \stdclass();
        $response->success = false;

        #Get the API KEY
        $sql = "SELECT `key`,`value` FROM " . EVDPL_PREFIX . "configs WHERE `key` = 'server_key'";
        $configs_result = $wpdb->get_results($sql);

        if (isset($configs_result) && isset($configs_result[0])) {
            $api_key = $configs_result[0]->value;
            if ($api_key) {
                #Test Address
                $street = '1848 Provincial Road';
                $city = 'Winsdor';
                $state = 'ON';
                $zip = 'N8W 5W3';
                $country = 'Canada';

                $_address = $street . ', ' . $zip . '  ' . $city . ' ' . $state . ' ' . $country;
                $results = EvdplStoreLocator_Helper::getLnt($_address, $api_key, true);
                $response->result = $results;

                if ($results && isset($results['body'])) {
                    $results = json_decode($results['body'], true);
                    if (isset($results['error_message'])) {
                        $response->msg = $results['error_message'];
                    } else {
                        $response->msg = __('Valid API Key', 'store-locator-for-wp');
                        $response->success = true;
                    }
                }
                #$response->msg = __('API Key is Valid','store-locator-for-wp');
            } else
                $response->msg = __('Server Google API Key is Missing', 'store-locator-for-wp');
        } else
            $response->msg = __('Server Google API Key is not saved.', 'store-locator-for-wp');

        echo json_encode($response);
        die;
    }

    /**
     * [save_custom_fields Save Custom Fields AJAX]
     * @return [type] [description]
     */
    public function save_custom_fields() {
        global $wpdb;
        $prefix = EVDPL_PREFIX;

        $response = new \stdclass();
        $response->success = false;

        $fields = isset($_POST['fields']) ? ($_POST['fields']) : [];

        #Filter the JSON for XSS
        $filter_fields = [];

        foreach ($fields as $field_key => $field) {
            $field_key = esc_attr(strip_tags($field_key));

            $field['type'] = esc_attr(strip_tags($field['type']));
            $field['name'] = esc_attr(strip_tags($field['name']));
            $field['label'] = esc_attr(strip_tags($field['label']));

            $filter_fields[$field_key] = $field;
        }

        $c = $wpdb->get_results("SELECT count(*) AS 'count' FROM {$prefix}settings WHERE `type` = 'fields'");
        $data_params = array('content' => json_encode($filter_fields), 'type' => 'fields');
        if ($c[0]->count >= 1) {
            $wpdb->update($prefix . "settings", $data_params, array('type' => 'fields'));
        } else {
            $wpdb->insert($prefix . "settings", $data_params);
        }

        /* $wpdb->show_errors = true;
          $response->error = $wpdb->print_error();
          $response->error1 = $wpdb->last_error; */
        $response->msg = __("Fields has been updated successfully.", 'store-locator-for-wp');
        $response->success = true;

        echo json_encode($response);
        die;
    }

    /**
     * [admin_manage_categories Manage Categories]
     * @return [type] [description]
     */
    public function admin_manage_categories() {
        $this->_enqueue_scripts();
        include EVDPL_PLUGIN_PATH . 'admin/partials/categories.php';
    }

    /**
     * [admin_manage_store Manage Stores]
     * @return [type] [description]
     */
    public function admin_manage_store() {
        $this->_enqueue_scripts();
        include EVDPL_PLUGIN_PATH . 'admin/partials/manage_store.php';
    }

    /**
     * [admin_user_settings ASL Settings Page]
     * @return [type] [description]
     */
    public function admin_user_settings() {
        $this->_enqueue_scripts();

        global $wpdb;

        #Check the upgrade is done or not?
        $prefix = $wpdb->prefix . "evdpl_";
        $database = $wpdb->dbname;
        $sql = "SELECT count(*) as c FROM information_schema.COLUMNS WHERE TABLE_NAME = '{$prefix}stores' AND COLUMN_NAME = 'custom' AND TABLE_SCHEMA = '{$database}'";
        $col_check_result = $wpdb->get_results($sql);
        if ($col_check_result[0]->c == 0) {
            require_once EVDPL_PLUGIN_PATH . 'includes/class-evdpl-store-locator-activator.php';
            #Run the script to add missing tables
            EvdplStoreLocator_Activator::activate();
        }

        $sql = "SELECT `key`,`value` FROM " . EVDPL_PREFIX . "configs";
        $all_configs_result = $wpdb->get_results($sql);

        $all_configs = array();
        foreach ($all_configs_result as $config) {
            $all_configs[$config->key] = esc_attr($config->value);
        }

        #get Countries
        $countries = $wpdb->get_results("SELECT country,iso_code_2  as code FROM " . EVDPL_PREFIX . "countries");
        $custom_map_style = $wpdb->get_results("SELECT * FROM " . EVDPL_PREFIX . "settings WHERE `name` = 'map_style'");

        if ($custom_map_style && $custom_map_style[0]) {
            $custom_map_style = esc_attr($custom_map_style[0]->content);
        }
        #Remove Google Script tags
        $all_configs['remove_maps_script'] = esc_attr(get_option('asl-remove_maps_script'));

        #Get the Custom Fields
        $fields = $this->_get_custom_fields();
        include EVDPL_PLUGIN_PATH . 'admin/partials/user_setting.php';
    }

}

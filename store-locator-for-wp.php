<?php
/*
 * Plugin Name: Store Locator for WP
 * Plugin URI: https://wordpress.org/plugins/store-locator-for-wp/
 * Description: Store Locator for WP is the most extensive WordPress Store Locator Plugin that uses Google Maps to provide you instant access to all stores in your nearby area. It allows your customers to easily reach your store by getting directions based on their current position. 
 * Version: 1.0.0
 * Author: Evince Development
 * Text Domain: store-locator-for-wp
 * License: GPLv3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Author URI: https://evincedev.com/
 * Domain Path: /languages/
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
if (!class_exists('EVDPL_Store_locator')) {


    class EVDPL_Store_locator {

        /**
         * Class constructor
         */
        function __construct() {

            $this->define_constants();
            $this->includes();

            register_activation_hook(__FILE__, array($this, 'evdpl_store_locator_activate'));
            register_deactivation_hook(__FILE__, array($this, 'evdpl_store_locator_deactivate'));

            //add_filter('auto_update_plugin', array($this, 'evdpl_upgrade_process'), 10, 2);
            add_action('upgrader_process_complete', array($this, 'evdpl_upgrade_process'), 10, 2);
            add_filter('plugin_row_meta', 'fun_hide_view_details', 10, 4);

            function fun_hide_view_details($plugin_meta, $plugin_file, $plugin_data, $status) {
                if ($plugin_data['slug'] == 'evdpl-store-locator')
                    unset($plugin_meta[2]);
                return $plugin_meta;
            }

        }

        /**
         * Setup plugin constants.
         *
         * @since 1.0.0
         * @return void
         */
        public function define_constants() {

            global $wpdb;

            define('EVDPL_URL_PATH', plugin_dir_url(__FILE__));
            define('EVDPL_PLUGIN_PATH', plugin_dir_path(__FILE__));
            define('EVDPL_BASE_PATH', dirname(plugin_basename(__FILE__)));
            define('EVDPL_PREFIX', $wpdb->prefix . "evdpl_");
            define('EVDPL_CVERSION', "1.0.0");
        }

        /**
         * Include the required files.
         *
         * @since 1.0.0
         * @return void
         */
        public function includes() {

            require_once EVDPL_PLUGIN_PATH . 'includes/class-evdpl-store-locator.php';

            $evdpl_core = new EvdplStoreLocator();
            $evdpl_core->run();
        }

        /**
         * The code that runs during plugin activation.
         * This action is documented in includes/class-evdpl-store-locator-activator.php
         */
        public function evdpl_store_locator_activate() {

            require_once EVDPL_PLUGIN_PATH . 'includes/class-evdpl-store-locator-activator.php';
            EvdplStoreLocator_Activator::activate();
        }

        /**
         * The code that runs during plugin deactivation.
         * This action is documented in includes/class-evdpl-store-locator-deactivator.php
         */
        public function evdpl_store_locator_deactivate() {

            require_once EVDPL_PLUGIN_PATH . 'includes/class-evdpl-store-locator-deactivator.php';
            EvdplStoreLocator_Deactivator::deactivate();
        }

        /**
         * [evdpl_upgrade_process WordPress upgrade]
         * @param  [type] $upgrader_object [description]
         * @param  [type] $options         [description]
         * @return [type]                  [description]
         */
        function evdpl_upgrade_process($upgrader_object, $options) {

            require_once EVDPL_PLUGIN_PATH . 'includes/class-evdpl-store-locator-activator.php';

            //  Run the script to add missing tables
            EvdplStoreLocator_Activator::activate();
        }

    }

    $evdpl_instance = new EVDPL_Store_locator();
}


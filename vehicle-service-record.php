<?php

/*
 * Plugin Name:       Vehicle Service Record 
 * Plugin URI:        https://nabinmagar.com/
 * Description:       Provides the detail information of Vechicle Servicing time and records all the useful data of vehicle and owner.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Nabin Gharti Magar
 * Author URI:        https://nabinmagar.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       vehicle-service-record
 * Domain Path:       /languages
 */


//Plugin Path
define('PLUGIN_PATH', plugin_dir_path(__FILE__));

//Plugin URL Path
define('PLUGIN_URL_PATH', plugin_dir_url(__FILE__));

//Menu Registration hook
add_action('admin_menu', 'vsr_handle_menu');

//
function vsr_handle_menu()
{

    $icon = PLUGIN_URL_PATH . 'assets/img/vsr.png';
    add_menu_page(
        'Vehicle Service Record',
        'Vehicle Service Record',
        'manage_options',
        'vsr-add-menu',
        'vsr_display_menu_page',
        $icon,
        30
    );

    //Submenu Page Add Vehicle
    add_submenu_page('csr-add-menu', 'Add Vehicle ', '', $capability, $menu_slug, $function);
}

// Display Menu Page
function vsr_display_menu_page()
{
    echo PLUGIN_PATH;
}
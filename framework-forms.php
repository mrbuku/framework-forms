<?php

/**
 * Plugin Name:       Framework Forms
 * Plugin URI:        https://plugin.domain.co.uk
 * Description:       Simple form builder for WordPress
 * Version:           0.0.1
 * Author:            JamesHRowe/mrbuku
 * Author URI:        http://plugin.domain.co.uk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fwk-forms
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;

/**
* Require application dependencies
*/
require_once plugin_dir_path( __FILE__ ) .'bootstrap.php';
require_once plugin_dir_path( __FILE__ ) .'functions.php';

define( 'FWK_FORMS_VERSION', '0.0.1' );

/**
 * Plugin Activation Hook
 */
register_activation_hook( __FILE__, 'fwk_forms_activation' );

/**
 * Begins execution of the plugin.
 */
run_fwk_forms();
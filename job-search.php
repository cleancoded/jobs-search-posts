<?php

/**
 * @wordpress-plugin
 * Plugin Name: 		Jobs Search Posts
 * Plugin URI: 			https://github.com/cleancoded/jobs-search-posts
 * Description: 		A simple way to manage job opening posts
 * Version: 			1.0.0
 * Author: 				cleancoded
 * Author URI: 			https://cleancoded.com/
 * Text Domain: 		job-search
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Used for referring to the plugin file or basename
if ( ! defined( 'JOB_SEARCH_POST' ) ) {
	define( 'JOB_SEARCH_POST', plugin_basename( __FILE__ ) );
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-job-search-activator.php
 */
function activate_Job_Search() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-job-search-activator.php';
	Job_Search_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-job-search-deactivator.php
 */
function deactivate_Job_Search() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-job-search-deactivator.php';
	Job_Search_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_Job_Search' );
register_deactivation_hook( __FILE__, 'deactivate_Job_Search' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-job-search.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since 		1.0.0
 */
function run_Job_Search() {

	$plugin = new Job_Search();
	$plugin->run();

}
run_Job_Search();

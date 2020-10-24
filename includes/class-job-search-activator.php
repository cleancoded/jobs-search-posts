<?php

class Job_Search_Activator {

	/**
	 * Declare custom post types, taxonomies, and plugin settings
	 * Flushes rewrite rules afterwards
	 *
	 * @since 		1.0.0
	 */
	public static function activate() {

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-job-search-admin.php';

		Job_Search_Admin::new_cpt_job();
		Job_Search_Admin::new_taxonomy_type();

		flush_rewrite_rules();

		$opts 		= array();
		$options 	= Job_Search_Admin::get_options_list();

		foreach ( $options as $option ) {

			$opts[ $option[0] ] = $option[2];

		}

		update_option( 'job-search-options', $opts );

		Job_Search_Admin::add_admin_notices();

	} // activate()
} // class

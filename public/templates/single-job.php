<?php

if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

/**
 * Get a custom header-employee.php file, if it exists.
 * Otherwise, get default header.
 */
get_header( 'job' );

if ( have_posts() ) :

	/**
	 * job-search-single-before-loop hook
	 *
	 * @hooked 		job_single_content_wrap_start 		10
	 */
	do_action( 'job-search-single-before-loop' );

	while ( have_posts() ) : the_post();

		include Job_Search_get_template( 'single-content' );

	endwhile;

	/**
	 * job-search-single-after-loop hook
	 *
	 * @hooked 		job_single_content_wrap_end 		90
	 */
	do_action( 'job-search-single-after-loop' );

endif;

get_footer( 'job' );
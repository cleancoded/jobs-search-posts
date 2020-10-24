<?php

do_action( 'job-search-before-loop' );

foreach ( $items as $item ) {

	$meta = get_post_custom( $item->ID );

	/**
	 * job-search-before-loop-content hook
	 *
	 * @param 		object  	$item 		The post object
	 *
	 * @hooked 		content_wrap_start 		10
	 */
	do_action( 'job-search-before-loop-content', $item, $meta );

		/**
		 * job-search-loop-content hook
		 *
		 * @param 		object  	$item 		The post object
		 *
		 * @hooked 		content_job_title 		10
		 * @hooked 		content_job_location 	15
		 */
		do_action( 'job-search-loop-content', $item, $meta );

	/**
	 * job-search-after-loop-content hook
	 *
	 * @param 		object  	$item 		The post object
	 *
	 * @hooked 		content_link_end 		10
	 * @hooked 		content_wrap_end 		90
	 */
	do_action( 'job-search-after-loop-content', $item, $meta );

} // foreach

/**
 * job-search-after-loop hook
 *
 * @hooked 		list_wrap_end 			10
 */
do_action( 'job-search-after-loop' );

<?php

$meta = get_post_custom( $post->ID );

/**
 * job-search-before-single hook
 */
do_action( 'job-search-before-single', $meta );

?><div class="wrap-job"><?php

	/**
	 * job-search-before-single-content hook
	 */
	do_action( 'job-search-before-single-content', $meta );

		/**
		 * job-search-single-content hook
		 */
		do_action( 'job-search-single-content', $meta );

	/**
	 * job-search-after-single-content hook
	 */
	do_action( 'job-search-after-single-content', $meta );

?></div><!-- .wrap-employee --><?php

/**
 * job-search-after-single hook
 */
do_action( 'job-search-after-single', $meta );
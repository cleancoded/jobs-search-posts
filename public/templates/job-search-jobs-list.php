<?php
do_action( 'job-search-jobs-list-before' );

foreach ( $items->posts as $item ) {

	include Job_Search_get_template( $args['view-single'] );

} // foreach

do_action( 'job-search-jobs-list-after' );
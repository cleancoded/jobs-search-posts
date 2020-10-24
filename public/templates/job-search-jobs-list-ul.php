<ul class="wrap-jobs"><?php

foreach ( $items->posts as $item ) {

	do_action( 'job-search-jobs-list-before' );

	?><li class="single-job"><?php

	include Job_Search_get_template( $args['view-single'] );

	?></li><?php

	do_action( 'job-search-jobs-list-after' );

} // foreach

?></ul><?php
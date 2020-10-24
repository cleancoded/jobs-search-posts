<?php
/**
 * The view for the single job metadata for responsibilities
 */

if ( ! empty( $meta['job-responsibilities'][0] ) ) {

	?><h3><?php echo esc_html( apply_filters( 'job-search-title-job-responsibilities', 'Responsibilities' ), 'job-search' ); ?></h3>
	<p class="<?php echo esc_attr( 'job-responsibilities' ); ?>"><?php echo html_entity_decode( $meta['job-responsibilities'][0] ); ?></p><?php

}
<?php
/**
 * The view for the single job metadata for the experience
 */

if ( ! empty( $meta['job-requirements-experience'][0] ) ) {

	?><h3><?php echo esc_html( apply_filters( 'job-search-title-job-requirements-experience', 'Experience' ), 'job-search' ); ?></h3>
	<p class="<?php echo esc_attr( 'job-requirements-experience' ); ?>"><?php echo html_entity_decode( $meta['job-requirements-experience'][0] ); ?></p><?php

}
<?php
	$homeland_audio = esc_url( get_post_meta( $post->ID, 'homeland_audio', true ) );
	echo wp_oembed_get( $homeland_audio, array() );
?>
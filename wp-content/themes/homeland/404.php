<?php 
	get_header();
	
	$homeland_not_found_large_text = get_option('homeland_not_found_large_text');
	$homeland_not_found_small_text = esc_attr( get_option('homeland_not_found_small_text') );
	$homeland_not_found_button = esc_attr( get_option('homeland_not_found_button') );
	$homeland_disable_advance_search_404 = esc_attr( get_option('homeland_disable_advance_search_404') );
	$homeland_not_found_brief_text = !empty($homeland_not_found_small_text) ? $homeland_not_found_small_text : esc_html__('Looks like the file you are looking for is no longer available', 'homeland');
	$homeland_not_found_button_label = !empty($homeland_not_found_button) ? $homeland_not_found_button : esc_html__('Back to Homepage', 'homeland'); 

	if(empty($homeland_disable_advance_search_404)) :
		homeland_advance_search(); 
	endif;
?>
	<section class="page-block">
		<div class="inside">
			<!-- Page Not Found -->
			<div class="page-not-found">
				<h2>
					<?php
						if(!empty( $homeland_not_found_large_text )) : 
							echo stripslashes( $homeland_not_found_large_text );
						else :
							esc_html__( 'Error', 'homeland' );
							echo '<span>'. esc_html__( '404', 'homeland' ) .'</span>';
						endif;
					?>
				</h2>
				<h5><?php echo esc_html( $homeland_not_found_brief_text ); ?></h5>
				<a href="<?php echo esc_url( home_url('/') ); ?>" class="back-home">
					<?php echo esc_html( $homeland_not_found_button_label ); ?>
				</a>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>
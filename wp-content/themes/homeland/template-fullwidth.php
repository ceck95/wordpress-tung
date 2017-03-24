<?php
/*
	Template Name: Fullwidth
*/
?>

<?php 
	get_header(); 
	$homeland_advance_search = esc_attr( get_post_meta( $post->ID, 'homeland_advance_search', true ) );
	if(empty($homeland_advance_search)) : homeland_advance_search(); endif;
?>

	<!-- Fullwidth -->
	<section class="theme-pages">
		<div class="inside clearfix">
			<div class="theme-fullwidth">
				<?php
					if (have_posts()) : 
						while (have_posts()) : the_post(); 
							the_content(); 								
						endwhile; 
					endif;
				?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
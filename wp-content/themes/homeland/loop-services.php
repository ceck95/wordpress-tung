<?php 
	global $post; 
	$homeland_services_button = esc_attr( get_option('homeland_services_button') );
	$homeland_services_link_target = esc_attr( get_option('homeland_services_link_target') );
	$homeland_services_excerpt = esc_attr( get_option('homeland_services_excerpt') );
	$homeland_custom_link = esc_url( get_post_meta( $post->ID, 'homeland_custom_link', true ) );	
	$homeland_icon = esc_html( get_post_meta( $post->ID, "homeland_icon", true ) );
	$homeland_custom_icon = esc_url( get_post_meta( $post->ID, "homeland_custom_icon", true ) );	
	$homeland_services_button_label = !empty( $homeland_services_button ) ? $homeland_services_button : esc_html__( 'More Details', 'homeland' );
?>

<div id="post-<?php the_ID(); ?>" <?php sanitize_html_class( post_class('services-page-list clearfix') ); ?>>
	<div class="services-page-icon">
		<?php if(!empty($homeland_icon)) : ?>
			<i class="fa <?php echo esc_html( $homeland_icon ); ?> fa-4x"></i>
		<?php else : ?>
			<img src="<?php echo esc_url( $homeland_custom_icon ); ?>" alt="" title="" />
		<?php endif; ?>
	</div>						
	<div class="services-page-desc">
		<?php 
			if(!empty($homeland_custom_link)) : 
				the_title( '<h5><a href="' . esc_url( $homeland_custom_link ) . '" target="'. esc_html( $homeland_services_link_target ) .'">', '</a></h5>' );
			else : the_title( '<h5><a href="' . get_permalink() . '">', '</a></h5>' );
			endif;

			if(empty( $homeland_services_excerpt )) : the_excerpt(); endif;

			if(!empty($homeland_custom_link)) :
				echo "<a href=". esc_url( $homeland_custom_link ) ." target=". esc_html( $homeland_services_link_target ) ." class='read-more'>";
			else : ?><a href="<?php the_permalink(); ?>" class="read-more"><?php
			endif;
			echo esc_html( $homeland_services_button_label );
		?>
		</a>
	</div>
</div>
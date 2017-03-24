<?php 
	global $homeland_class; 
	$homeland_portfolio_excerpt = esc_attr( get_option('homeland_portfolio_excerpt') );
?>

<li id="post-<?php the_ID(); ?>" class="<?php echo esc_attr( $homeland_class ); ?>">
	<div class="property-mask">
		<?php if ( post_password_required() ) : ?>
			<div class="password-protect-thumb password-4cols"><i class="fa fa-lock fa-2x"></i></div>
		<?php	else : ?>
			<figure class="pimage">
				<a href="<?php the_permalink(); ?>">
					<?php 
						if ( has_post_thumbnail() ) : the_post_thumbnail('homeland_property_4cols'); 
						else : ?>
							<label class="no-image-fallback image-portfolio">
								<span><?php esc_html_e( 'No Image Available', 'homeland' ); ?></span>
							</label><?php
						endif; 
					?>
				</a>
				<figcaption><a href="<?php the_permalink(); ?>"><i class="fa fa-link fa-lg"></i></a></figcaption>
			</figure>
		<?php endif; ?>			
	</div>
	<div class="property-desc portfolio-desc">
		<?php 
			the_title( '<h4><a href="' . get_permalink() . '">', '</a></h4>' ); 
			if(empty($homeland_portfolio_excerpt)) :
				the_excerpt();
			endif;
		?>	
	</div>	
</li>
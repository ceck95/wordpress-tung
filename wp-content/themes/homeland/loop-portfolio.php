<?php 
	global $homeland_class; 
?>

<li id="post-<?php the_ID(); ?>" class="<?php echo esc_attr( $homeland_class ); ?>">
	<div class="property-mask portfolio-image">
		<?php if ( post_password_required() ) : ?>
			<div class='password-protect-thumb password-3cols'><i class='fa fa-lock fa-2x'></i></div>
		<?php else : ?>
			<figure class="pimage">
				<a href="<?php the_permalink(); ?>">
					<?php 
						if ( has_post_thumbnail() ) : 
							the_post_thumbnail('homeland_property_medium'); 
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
		<?php the_title( '<h4>', '</h4>' ); ?>
	</div>
</li>
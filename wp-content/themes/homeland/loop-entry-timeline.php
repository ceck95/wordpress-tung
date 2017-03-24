<?php 
	global $homeland_thumbnail_size; 
	$homeland_blog_button = esc_attr( get_option('homeland_blog_button') );

	$homeland_blog_button_label = !empty($homeland_blog_button) ? $homeland_blog_button : esc_html__('Learn More', 'homeland');
?>

<article id="post-<?php the_ID(); ?>" <?php sanitize_html_class( post_class('blist clearfix') ); ?>>
	<div class="blog-timeline-image">
		<?php 
			if ( post_password_required() ) :
				?><div class="password-protect-thumb password-blog-timeline"><i class="fa fa-lock fa-2x"></i></div><?php
			else :
				if ( has_post_format( 'video' )) : 
					$homeland_format_icon = "fa-video-camera";
					get_template_part( 'includes/post-format/format', 'video' );
				elseif ( has_post_format( 'gallery' )) :
					$homeland_thumbnail_size = 'homeland_property_large';
					$homeland_format_icon = "fa-clone"; 
					get_template_part( 'includes/post-format/format', 'gallery' );
				elseif ( has_post_format( 'audio' )) :
					$homeland_format_icon = "fa-music";
					get_template_part( 'includes/post-format/format', 'audio' );
				else :
					$homeland_thumbnail_size = 'homeland_property_large';
					$homeland_format_icon = "fa-picture-o";	
					get_template_part( 'includes/post-format/format', 'image' );
				endif;		
			endif;
		?>
	</div>
	<div class="blog-timeline-content">
		<?php the_title( '<h4><a href="' . get_permalink() . '">', '</a></h4>' ); ?>
		<label>
			<?php the_time(get_option('date_format')); ?> / <?php the_author_meta( 'display_name' ); ?> / <?php the_category(', ') ?> / <a href="<?php the_permalink(); ?>#comments"><?php comments_number( esc_html__( 'No Comments', 'homeland' ), esc_html__( 'One Comment', 'homeland' ), esc_html__( '% Comments', 'homeland' ) ); ?></a>
		</label>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>" class="continue">
			<?php echo esc_html( $homeland_blog_button_label ); ?> &rarr;
		</a>	
		<div class="blog-icon"><i class="fa <?php echo esc_html( $homeland_format_icon ); ?> fa-lg"></i></div>
	</div>
</article>
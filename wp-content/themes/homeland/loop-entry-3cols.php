<?php 
	global $homeland_class, $homeland_thumbnail_size; 
	$homeland_blog_excerpt = esc_attr( get_option('homeland_blog_excerpt') );
?>

<article id="post-<?php the_ID(); ?>" <?php sanitize_html_class( post_class( $homeland_class ) ); ?>>
	<div class="blog-mask">
		<?php 
			if ( post_password_required() ) :
				?><div class="password-protect-thumb password-blog"><i class="fa fa-lock fa-2x"></i></div><?php
			else :	
				if ( has_post_format( 'video' )) : 
					get_template_part( 'includes/post-format/format', 'video' );
				elseif ( has_post_format( 'gallery' )) :
					$homeland_thumbnail_size = 'homeland_property_medium';
					get_template_part( 'includes/post-format/format', 'gallery' );
				elseif ( has_post_format( 'audio' )) :
					get_template_part( 'includes/post-format/format', 'audio' );
				else :
					$homeland_thumbnail_size = 'homeland_property_medium';
					get_template_part( 'includes/post-format/format', 'image' );
				endif;	
			endif;
		?>		
	</div>
	<div class="blog-list-desc clearfix">
		<div class="blog-text">
			<?php 
				the_title( '<h4><a href="' . get_permalink() . '">', '</a></h4>' ); 
				if(!empty( $homeland_blog_excerpt )) : the_excerpt(); endif;
			?>	
		</div>
		<div class="blog-action">
			<ul class="clearfix">
				<li><i class="fa fa-calendar"></i><?php the_time(get_option('date_format')); ?></li>
				<li><i class="fa fa-user"></i><?php the_author_meta( 'display_name' ); ?></li>
				<li><i class="fa fa-folder-o"></i><?php the_category(', ') ?></li>
				<li><i class="fa fa-comment"></i>
					<a href="<?php the_permalink(); ?>#comments">
						<?php 
							comments_number( 
								esc_html__( 'No Comments', 'homeland' ), 
								esc_html__( 'One Comment', 'homeland' ), 
								esc_html__( '% Comments', 'homeland' ) 
							); 
						?>
					</a>
				</li>				
			</ul>			
		</div>		
	</div>
</article>
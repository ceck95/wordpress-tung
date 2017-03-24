<?php 
	get_header(); 

	$homeland_advance_search = esc_attr( get_post_meta( $post->ID, 'homeland_advance_search', true ) );
	$homeland_single_blog_layout = esc_attr( get_option('homeland_single_blog_layout') );
	$homeland_blog_author_hide = esc_attr( get_option('homeland_blog_author_hide') );
	$homeland_hide_blog_comments = esc_attr( get_option('homeland_hide_blog_comments') );
	$homeland_hide_blog_prevnext = esc_attr( get_option('homeland_hide_blog_prevnext') );

	if($homeland_single_blog_layout =="Fullwidth") :
		$homeland_single_layout_class = "theme-fullwidth";
	elseif($homeland_single_blog_layout =="Left Sidebar") :
		$homeland_single_layout_class = "left-container right";
		$homeland_blog_class_sidebar = "sidebar left";
	else :
		$homeland_single_layout_class = "left-container";
		$homeland_blog_class_sidebar = "sidebar";
	endif;

	if(empty($homeland_advance_search)) : homeland_advance_search(); endif;		
?>

	<!-- Blog Detailed Page -->
	<section class="theme-pages">
		<div class="inside clearfix">
			<!-- Left Container -->	
			<div class="<?php echo esc_attr( $homeland_single_layout_class ); ?>">				
				<div class="blog-list single-blog clearfix">
					<?php
						if (have_posts()) : 
							if ( post_password_required() ) :
								?><div class="password-protect-content"><?php the_content(); ?></div><?php
							else :
								while (have_posts()) : the_post(); 
									$homeland_author_desc = get_the_author_meta( 'description' ); ?>
									<article id="post-<?php the_ID(); ?>" <?php sanitize_html_class( post_class('blist') ); ?>>
										<div class="blog-image">
											<?php 
												if ( has_post_format( 'video' )) : 
													$homeland_format_icon = "fa-video-camera";
													get_template_part( 'includes/post-format/format', 'video' );
												elseif ( has_post_format( 'gallery' )) :
													$homeland_format_icon = "fa-clone"; 
													get_template_part( 'includes/post-format/format', 'gallery' );
												elseif ( has_post_format( 'audio' )) :
													$homeland_format_icon = "fa-music";
													get_template_part( 'includes/post-format/format', 'audio' );
												else :
													$homeland_format_icon = "fa-picture-o";	
													get_template_part( 'includes/post-format/format', 'image' );
												endif;										
											?>				
										</div>
										
										<div class="blog-list-desc clearfix">
											<div class="blog-action">
												<ul class="clearfix">
													<li><i class="fa fa-calendar"></i><?php the_time(get_option('date_format')); ?></li>
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
												<div class="blog-icon">
													<i class="fa <?php echo esc_html( $homeland_format_icon ); ?> fa-lg"></i>
												</div>		
											</div>		
										</div>
										<?php the_content(); ?>
									</article>	
									<?php 
										wp_link_pages(); 
										the_tags( 
											'<ul class="blog-tags clearfix"><li><span>Tags</span></li><li>', 
											'</li><li>', '</li></ul>' 
										);
										homeland_social_share();
								endwhile;
							endif;
						endif;	

						if(empty($homeland_blog_author_hide)) :
							if ( post_password_required() ) :
							else : ?>
								<!-- Author Profile -->
								<div class="author-block clearfix">
									<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
									<h3><?php the_author_meta( 'user_firstname' ); echo "&nbsp;"; the_author_meta( 'user_lastname' ); ?></h3>
									<?php echo wpautop ( $homeland_author_desc ); ?>
								</div><?php
							endif;
						endif;

						if(empty($homeland_hide_blog_comments)) : comments_template(); endif;

						if(empty($homeland_hide_blog_prevnext)): ?>
							<div class="post-link-blog clearfix">
								<span class="prev">
									<?php 
										previous_post_link( '%link', '&larr;&nbsp;' . esc_html__( 'Previous Post', 'homeland' ), '' ); 
									?>
								</span>
								<span class="next">
									<?php 
										next_post_link( '%link', esc_html__( 'Next Post', 'homeland' ) . '&nbsp;&rarr;', '' ); 
									?>
								</span>
							</div><?php
						endif;
					?>	
				</div>
			</div>

			<?php if($homeland_single_blog_layout != "Fullwidth") : ?>
				<div class="<?php echo esc_attr( $homeland_blog_class_sidebar ); ?>"><?php get_sidebar(); ?></div>
			<?php endif; ?>
		</div>
	</section>

<?php get_footer(); ?>
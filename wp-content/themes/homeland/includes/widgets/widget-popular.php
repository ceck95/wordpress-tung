<?php
	/*-------------------------------
	Popular Post Widget
	-------------------------------*/
	
	class homeland_Widget_Popular_Posts extends WP_Widget {
	
		function homeland_Widget_Popular_Posts() {		
			$widget_ops = array(
				'classname' => 'homeland_widget-popular-posts', 
				'description' => esc_html__('Custom widget for popular posts', 'homeland')
			);	
			parent::__construct('Popular', esc_html__('Homeland - Popular Posts', 'homeland'), $widget_ops);		
		}
	
		function widget($args, $instance) {		
			extract($args);		
			$title = apply_filters('widget_title', $instance['title']);		
			if (empty($title)) $title = false;
				$instance_homeland_posts_limit = array();
				
				$homeland_posts_limit = 'homeland_posts_limit';
				$instance_homeland_posts_limit = isset($instance[$homeland_posts_limit]) ? esc_attr($instance[$homeland_posts_limit]) : '';

				echo $before_widget;					

				if ($title) {						
					echo $before_title;
					echo $title;
					echo $after_title;						
				}
				?>	
					
				<!-- Popular Post -->
				<ul>
					<?php
						global $post;
						$args = array( 
							'post_type' => 'post', 
							'orderby' => 'comment_count', 
							'posts_per_page' => $instance_homeland_posts_limit 
						);
						
						query_posts( $args );				
						while (have_posts()) : the_post();	
					?>
						<li class="clearfix">
							<div class="pp-image">
								<?php 
									if ( has_post_thumbnail() ) : ?>
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('homeland_property_medium'); ?>
										</a><?php
									else : ?>
										<label class="no-image-fallback image-blog">
											<span><?php esc_html_e( 'No Image Available', 'homeland' ); ?></span>
										</label><?php
									endif; 
								?>
							</div>
							<div class="pp-desc">
								<?php the_title( '<a href="' . get_permalink() . '">', '</a>' );  ?>
								<span><?php the_time(get_option('date_format')); ?></span>	
							</div>
						</li>	
					<?php
						endwhile;	
						wp_reset_query();	
					?>		
				</ul>		

				<?php
					echo $after_widget.'';				
				}
			
				function update($new_instance, $old_instance) {				
					$instance = $old_instance;				
					$instance['title'] = strip_tags($new_instance['title']);
					$instance['homeland_posts_limit'] = strip_tags($new_instance['homeland_posts_limit']);				
					return $instance;				
				}
			
				function form($instance) {				
					$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
					$instance_homeland_posts_limit = array();
					
					$homeland_posts_limit = 'homeland_posts_limit';
					$instance_homeland_posts_limit = isset($instance[$homeland_posts_limit]) ? esc_attr($instance[$homeland_posts_limit]) : '';			
					
				?>
				<p>
					<label for="<?php echo $this->get_field_id('title'); ?>">
						<?php esc_html_e('Title', 'homeland'); ?>
					</label>
					<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_html( $title ); ?>" />
				</p>					
				<p>
					<label for="<?php echo $this->get_field_id($homeland_posts_limit); ?>">
						<?php esc_html_e('Limit', 'homeland'); ?>
					</label>
					<input class="widefat" type="text" id="<?php echo $this->get_field_id($homeland_posts_limit); ?>" name="<?php echo $this->get_field_name($homeland_posts_limit); ?>" value="<?php echo esc_html( $instance_homeland_posts_limit ); ?>">		
							</p>			
				<p>
					<small><i><?php esc_html_e( 'Popular Posts are automatically displayed from blog posts', 'homeland' ); ?></i></small>
				</p>		
		<?php
				}			
		}

		function homeland_widgets_popular_posts() {			
			register_widget('homeland_Widget_Popular_Posts');			
		}
		add_action('widgets_init', 'homeland_widgets_popular_posts');
?>
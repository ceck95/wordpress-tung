<?php
	/*-------------------------------
	Video Widget
	-------------------------------*/
	
	class homeland_Widget_Video extends WP_Widget {
	
		function homeland_Widget_Video() {		
			$widget_ops = array(
				'classname' => 'homeland_widget-video', 
				'description' => esc_html__('Custom widget for video', 'homeland')
			);	
			parent::__construct('Video', esc_html__('Homeland - Video', 'homeland'), $widget_ops);		
		}
	
		function widget($args, $instance) {		
			extract($args);		
			$title = apply_filters('widget_title', $instance['title']);		
			if (empty($title)) $title = false;
				$instance_homeland_video_url = array();
				
				$homeland_video_url = 'homeland_video_url';
				$instance_homeland_video_url = isset($instance[$homeland_video_url]) ? $instance[$homeland_video_url] : '';

				echo $before_widget;					

				?>	
				
				<!-- Video -->
				<?php
					if ($title) {						
						echo $before_title;
						echo $title;
						echo $after_title;						
					}
				?>

				<div class="side-video">
					<?php echo wp_oembed_get( $instance_homeland_video_url, array() ); ?>
				</div>

				<?php
					echo $after_widget.'';				
				}
			
				function update($new_instance, $old_instance) {				
					$instance = $old_instance;				
					$instance['title'] = strip_tags($new_instance['title']);
					$instance['homeland_video_url'] = $new_instance['homeland_video_url'];				
					return $instance;				
				}
			
				function form($instance) {				
					$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
					$instance_homeland_video_url = array();
					
					$homeland_video_url = 'homeland_video_url';
					$instance_homeland_video_url = isset($instance[$homeland_video_url]) ? $instance[$homeland_video_url] : '';			
					
				?>
				<p>
					<label for="<?php echo $this->get_field_id('title'); ?>">
						<?php esc_html_e('Title', 'homeland'); ?>
					</label>
					<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_html( $title ); ?>" />
				</p>					
				<p>
					<label for="<?php echo $this->get_field_id($homeland_video_url); ?>">
						<?php esc_html_e('Video URL', 'homeland'); ?>
					</label>	
					<input class="widefat" id="<?php echo $this->get_field_id($homeland_video_url); ?>" name="<?php echo $this->get_field_name($homeland_video_url); ?>" type="text" value="<?php echo esc_html( $instance_homeland_video_url ); ?>" />
				</p>
				<p>
					<small><i><?php esc_html_e( 'Please enter your video link', 'homeland' ); ?></i></small>
				</p>
		<?php
				}			
		}

		function homeland_widgets_video() {			
			register_widget('homeland_Widget_Video');			
		}
		add_action('widgets_init', 'homeland_widgets_video');
?>
<?php	
	/*-------------------------------
	Twitter Feed Widget
	-------------------------------*/
	
	class homeland_Widget_TwitterFeed extends WP_Widget {
	
		function homeland_Widget_TwitterFeed() {		
			$widget_ops = array(
				'classname' => 'homeland_widget-twitter', 
				'description' => esc_html__('Custom widget for twitter feed', 'homeland')
			);	
			parent::__construct('Twitter', esc_html__('Homeland - Twitter Feed', 'homeland'), $widget_ops);		
		}

		function widget($args, $instance) {		

			extract($args);		
			$title = apply_filters('widget_title', $instance['title']);		
			if (empty($title)) $title = false;
				$instance_homeland_twitter_id = array();
				$instance_homeland_twitter_theme = array();
				
				$homeland_twitter_id = 'homeland_twitter_id';
				$homeland_twitter_theme = 'homeland_twitter_theme';
				$instance_homeland_twitter_id = isset($instance[$homeland_twitter_id]) ? $instance[$homeland_twitter_id] : '';
				$instance_homeland_twitter_theme = isset($instance[$homeland_twitter_theme]) ? $instance[$homeland_twitter_theme] : '';
							
				echo ''.$before_widget.'';					
					if ($title) {						
						echo $before_title; ?><i class="fa fa-twitter"></i><?php
						echo $title; 
						echo $after_title.'';						
					}
				?>	
				
				<!-- Twitter Feed -->
				<div class="tweet">
					<a class="twitter-timeline" data-theme="<?php echo esc_html( $instance_homeland_twitter_theme ); ?>" href="https://twitter.com/<?php echo esc_html( $instance_homeland_twitter_id ); ?>"><?php esc_html_e( 'Tweets by', 'homeland' ); ?> <?php echo esc_html( $instance_homeland_twitter_id ); ?></a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>  

				<?php
					echo $after_widget.'';				
				}
			
				function update($new_instance, $old_instance) {				
					$instance = $old_instance;				
					$instance['title'] = strip_tags($new_instance['title']);
					$instance['homeland_twitter_id'] = $new_instance['homeland_twitter_id'];			
					$instance['homeland_twitter_theme'] = $new_instance['homeland_twitter_theme'];			
					return $instance;				
				}
			
				function form($instance) {				
					$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
					$instance_homeland_twitter_id = array();							
					$instance_homeland_twitter_theme = array();							
					
					$homeland_twitter_id = 'homeland_twitter_id';
					$homeland_twitter_theme = 'homeland_twitter_theme';
					$instance_homeland_twitter_id = isset($instance[$homeland_twitter_id]) ? $instance[$homeland_twitter_id] : '';				
					$instance_homeland_twitter_theme = isset($instance[$homeland_twitter_theme]) ? $instance[$homeland_twitter_theme] : '';				
					
					?>
					<p>
						<label for="<?php echo $this->get_field_id('title'); ?>">
							<?php esc_html_e('Title', 'homeland'); ?>
						</label>
						<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_html( $title ); ?>" />
					</p>					
					<p>
						<label for="<?php echo $this->get_field_id($homeland_twitter_id); ?>">
							<?php esc_html_e('ID', 'homeland'); ?>
						</label>
						<input class="widefat" type="text" id="<?php echo $this->get_field_id($homeland_twitter_id); ?>" name="<?php echo $this->get_field_name($homeland_twitter_id); ?>" value="<?php echo esc_html( $instance_homeland_twitter_id ); ?>">		
					</p>	
					<p>
						<label for="<?php echo $this->get_field_id($homeland_twitter_theme); ?>">
							<?php esc_html_e('Theme', 'homeland'); ?>
						</label>
						<select class="widefat" id="<?php echo $this->get_field_id($homeland_twitter_theme); ?>" name="<?php echo $this->get_field_name($homeland_twitter_theme); ?>">
		          <option value="light" <?php if($instance_homeland_twitter_theme=='light') : echo 'selected'; endif; ?>><?php esc_html_e('Light', 'homeland'); ?></option>
		          <option value="dark" <?php if($instance_homeland_twitter_theme=='dark') : echo 'selected'; endif; ?>><?php esc_html_e('Dark', 'homeland'); ?></option>
		        </select> 
					</p>	
					<?php
				}			
		}

		function homeland_widgets_twitterfeed() {			
			register_widget('homeland_Widget_TwitterFeed');			
		}
		add_action('widgets_init', 'homeland_widgets_twitterfeed');
?>
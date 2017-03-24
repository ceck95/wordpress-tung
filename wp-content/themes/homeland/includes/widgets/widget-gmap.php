<?php	
	/*-------------------------------
	Google Map Widget
	-------------------------------*/
	
	class homeland_Widget_GMap extends WP_Widget {
	
		function homeland_Widget_GMap() {		
			$widget_ops = array(
				'classname' => 'homeland_widget-gmap', 
				'description' => esc_html__('Custom widget for google map', 'homeland')
			);	
			parent::__construct('GoogleMap', esc_html__('Homeland - Google Map', 'homeland'), $widget_ops);	
		}
	
		function widget($args, $instance) {		

			if ( is_active_widget( false, false, $this->id_base, true ) ) :
				$homeland_map_api = esc_attr( get_option('homeland_map_api') );

				wp_register_script( 'google-map-api', 'http://maps.google.com/maps/api/js?key='. $homeland_map_api .'&libraries=geometry' );
				wp_register_script( 'google-map', get_theme_file_uri( '/js/gmaps.min.js' ) );

				wp_enqueue_script( 'google-map-api' );
				wp_enqueue_script( 'google-map' );	
   		endif;	

			extract($args);		
			$title = apply_filters('widget_title', $instance['title']);		
			if (empty($title)) $title = false;
				$instance_homeland_map_lat = array();
				$instance_homeland_map_lng = array();
				$instance_homeland_map_zoom = array();
				
				$homeland_map_lat = 'homeland_map_lat';
				$instance_homeland_map_lat = isset($instance[$homeland_map_lat]) ? esc_attr($instance[$homeland_map_lat]) : '';
				$homeland_map_lng = 'homeland_map_lng';
				$instance_homeland_map_lng = isset($instance[$homeland_map_lng]) ? esc_attr($instance[$homeland_map_lng]) : '';
				$homeland_map_zoom = 'homeland_map_zoom';
				$instance_homeland_map_zoom = isset($instance[$homeland_map_zoom]) ? esc_attr($instance[$homeland_map_zoom]) : '';
							
				echo ''.$before_widget.'';					
					if ($title) {						
						echo $before_title;
						echo $title;
						echo $after_title.'';						
					}

					$homeland_home_map_icon = esc_attr( get_option('homeland_map_pointer_icon') );
					$homeland_map_styles = strip_tags( get_option('homeland_map_styles') );

				?>	
				<script type="text/javascript">
					(function($) {
					  	"use strict";
					  	var map;

					   	$(document).ready(function(){
					    	map = new GMaps({
						      div: '#wgmap',
						      scrollwheel: false,
						      lat: <?php echo esc_html( $instance_homeland_map_lat ); ?>,
									lng: <?php echo esc_html( $instance_homeland_map_lng ); ?>,
									zoom: <?php echo esc_html( $instance_homeland_map_zoom ); ?>,
									styles : <?php echo wp_kses_post( $homeland_map_styles ); ?>,
					      });	

					      <?php if(!empty($homeland_home_map_icon)) : ?>
					      	var image = '<?php echo esc_url( $homeland_home_map_icon ); ?>';
					      <?php endif; ?>	      	

			      		map.addMarker({
									lat: <?php echo esc_html( $instance_homeland_map_lat ); ?>,
									lng: <?php echo esc_html( $instance_homeland_map_lng ); ?>, 
									<?php if(!empty($homeland_home_map_icon)) : ?>icon: image <?php endif; ?>
						   	});       
					   	});
					})(jQuery);					
				</script>

				<div id="wgmap">&nbsp;</div>

				<?php
					echo $after_widget.'';				
				}
			
				function update($new_instance, $old_instance) {				
					$instance = $old_instance;				
					$instance['title'] = strip_tags($new_instance['title']);
					$instance['homeland_map_lat'] = strip_tags($new_instance['homeland_map_lat']);
					$instance['homeland_map_lng'] = strip_tags($new_instance['homeland_map_lng']);				
					$instance['homeland_map_zoom'] = strip_tags($new_instance['homeland_map_zoom']);				
					return $instance;				
				}
			
				function form($instance) {				
					$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
					$instance_homeland_map_lat = array();
					$instance_homeland_map_lng = array();							
					$instance_homeland_map_zoom = array();							
					
					$homeland_map_lat = 'homeland_map_lat';
					$instance_homeland_map_lat = isset($instance[$homeland_map_lat]) ? esc_attr($instance[$homeland_map_lat]) : '';
					$homeland_map_lng = 'homeland_map_lng';
					$instance_homeland_map_lng = isset($instance[$homeland_map_lng]) ? esc_attr($instance[$homeland_map_lng]) : '';	
					$homeland_map_zoom = 'homeland_map_zoom';
					$instance_homeland_map_zoom = isset($instance[$homeland_map_zoom]) ? esc_attr($instance[$homeland_map_zoom]) : '';	
					
				?>
				<p>
					<label for="<?php echo $this->get_field_id('title'); ?>">
						<?php esc_html_e('Title', 'homeland'); ?>
					</label>
					<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
				</p>					
				<p>
					<label for="<?php echo $this->get_field_id($homeland_map_lat); ?>">
						<?php esc_html_e('Latitude', 'homeland'); ?>
					</label>
					<input class="widefat" type="text" id="<?php echo $this->get_field_id($homeland_map_lat); ?>" name="<?php echo $this->get_field_name($homeland_map_lat); ?>" value="<?php echo esc_html( $instance_homeland_map_lat ); ?>">		
				</p>
				<p>
					<label for="<?php echo $this->get_field_id($homeland_map_lng); ?>">
						<?php esc_html_e('Longitude', 'homeland'); ?>
					</label>
					<input class="widefat" type="text" id="<?php echo $this->get_field_id($homeland_map_lng); ?>" name="<?php echo $this->get_field_name($homeland_map_lng); ?>" value="<?php echo esc_html( $instance_homeland_map_lng ); ?>">
				</p>	
				<p>
					<label for="<?php echo $this->get_field_id($homeland_map_zoom); ?>">
						<?php esc_html_e('Zoom', 'homeland'); ?>
					</label>
					<input class="widefat" type="text" id="<?php echo $this->get_field_id($homeland_map_zoom); ?>" name="<?php echo $this->get_field_name($homeland_map_zoom); ?>" value="<?php echo esc_html( $instance_homeland_map_zoom ); ?>">
				</p>		
		<?php
				}	
	}

	function homeland_Widget_gmap() {			
		register_widget('homeland_Widget_GMap');			
	}
	add_action('widgets_init', 'homeland_Widget_gmap');
?>
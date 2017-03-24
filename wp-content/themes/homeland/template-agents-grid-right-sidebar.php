<?php
/*
	Template Name: Agents - Grid Right Sidebar
*/
?>

<?php 
	get_header(); 

	$homeland_advance_search = esc_attr( get_post_meta( $post->ID, 'homeland_advance_search', true ) );
	$homeland_agent_page_order = esc_attr( get_option('homeland_agent_page_order') );
	$homeland_agent_page_orderby = esc_attr( get_option('homeland_agent_page_orderby') );
	$homeland_agent_page_limit = esc_attr( get_option('homeland_agent_page_limit') );
	$homeland_page_nav = esc_attr( get_option('homeland_pnav') );
	$homeland_agent_page_limit_value = empty($homeland_agent_page_limit) ? '10' : $homeland_agent_page_limit;

	if(empty($homeland_advance_search)) : homeland_advance_search(); endif;
?>

	<!-- Agent Page -->
	<section class="theme-pages">
		<div class="inside clearfix">

			<!-- Left Container -->	
			<div class="left-container">
				<?php
					if (have_posts()) : 
						while (have_posts()) : the_post(); 
							the_content(); 								
						endwhile; 
					endif;
				?>
				<div class="agent-grid-sidebar clearfix">
					<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						if($paged==1) : $offset=0;  
						else : $offset= ($paged-1)*$homeland_agent_page_limit_value;
						endif;

						$args = array( 
							'role' => 'contributor', 
							'order' => $homeland_agent_page_order, 
							'orderby' => $homeland_agent_page_orderby,
							'number' => $homeland_agent_page_limit_value, 
							'offset' => $offset
						);
					   $homeland_agents = new WP_User_Query( $args );

					   if (!empty( $homeland_agents->results)) :
						  foreach ($homeland_agents->results as $homeland_user) :
						    global $wpdb;
								$homeland_post_author = $homeland_user->ID;
								$homeland_count = (int) $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->posts WHERE post_type = 'homeland_properties' AND post_status = 'publish' AND post_author = %d", $homeland_post_author ) );

								$homeland_agent_id = $homeland_user->ID;
						   	$homeland_agent_name = $homeland_user->display_name;
						   	$homeland_agent_desc = $homeland_user->user_description;
								$homeland_agent_facebook = $homeland_user->homeland_facebook;
						   	$homeland_agent_gplus = $homeland_user->homeland_gplus;
						   	$homeland_agent_linkedin = $homeland_user->homeland_linkedin;
						   	$homeland_agent_twitter = $homeland_user->homeland_twitter;
						   	$homeland_agent_email = $homeland_user->user_email;
						   	$homeland_custom_avatar = get_the_author_meta('homeland_custom_avatar', $homeland_agent_id);
								  ?>
						    	<div class="agent-list">

						    		<!-- Agent Profile -->
						    		<a href="<?php echo esc_url( get_author_posts_url( $homeland_agent_id ) ); ?>">
				    					<?php
				    						if(!empty($homeland_custom_avatar)) : 
				    							echo '<img src="'. esc_url( $homeland_custom_avatar ) .'" />';
				    						else : 
				    							echo get_avatar( $homeland_agent_id, 100 );
				    						endif;
				    					?>
			    					</a>
						    		<h4>
					    				<a href="<?php echo esc_url( get_author_posts_url( $homeland_agent_id ) ); ?>">
					    					<?php echo esc_html( $homeland_agent_name ); ?>
					    				</a>
					    			</h4>
					    			<span class="agent-count">
						    			<?php 
						    				echo intval($homeland_count); echo "&nbsp;"; esc_html_e( 'Properties', 'homeland' ); 
						    			?>
						    		</span>
					    			
			    					<ul class="clearfix">
				    					<?php
				    						if(!empty($homeland_agent_facebook)) : 
				    							echo '<li><a href="'. esc_url( $homeland_agent_facebook ) .'" target="_blank">
				    									<i class="fa fa-facebook fa-lg"></i></a></li>';
				    						endif;
				    						if(!empty($homeland_agent_gplus)) : 
				    							echo '<li><a href="'. esc_url( $homeland_agent_gplus ) .'" target="_blank">
				    									<i class="fa fa-google-plus fa-lg"></i></a></li>';
				    						endif;
				    						if(!empty($homeland_agent_linkedin)) : 
				    							echo '<li><a href="'. esc_url( $homeland_agent_linkedin ) .'" target="_blank">
				    									<i class="fa fa-linkedin fa-lg"></i></a></li>';
				    						endif;
				    						if(!empty($homeland_agent_twitter)) : 
				    							echo '<li><a href="'. esc_url( $homeland_agent_twitter ) .'" target="_blank">
				    									<i class="fa fa-twitter fa-lg"></i></a></li>';
				    						endif;
				    						if(!empty($homeland_agent_email)) : 
				    							echo '<li class="last">
				    									<a href="mailto:'. esc_html( $homeland_agent_email ) .'" target="_blank">
				    									<i class="fa fa-envelope-o fa-lg"></i></a></li>';
				    						endif; 
				    					?>
				    				</ul>
						    	</div><?php
						   endforeach;
						else : esc_html_e( 'No Agents found!', 'homeland' );
						endif;
					?>
				</div>

				<?php 	
					$homeland_total_user = $homeland_agents->total_users;  
	        $homeland_max_num_pages = ceil($homeland_total_user/$homeland_agent_page_limit_value);

					if( $homeland_page_nav == "Next Previous Link") : 
						homeland_next_previous(); //modify function in "functions.php"... 
					else : homeland_pagination(); //modify function in "functions.php"...
					endif; 
				?>
			</div>

			<!-- Sidebar -->
			<div class="sidebar"><?php get_sidebar(); ?></div>

		</div>
	</section>

<?php get_footer(); ?>
<?php
	// Custom Styles

	if ( ! function_exists( 'homeland_theme_custom_styles' ) ) :
		function homeland_theme_custom_styles() {
			global $post;

			$homeland_bg_type = esc_attr( get_option('homeland_bg_type') );
			$homeland_pattern = esc_attr( get_option('homeland_pattern') );
			$homeland_bg_color = esc_attr( get_option('homeland_bg_color') );
			$homeland_theme_font = esc_attr( get_option('homeland_theme_font') );
			$homeland_theme_color_global = esc_attr( get_option('homeland_global_color') );
			$homeland_rgb_theme_color = homeland_hex2rgba($homeland_theme_color_global);
			$homeland_rgba_theme_color = homeland_hex2rgba($homeland_theme_color_global, 0.8);
			$homeland_top_header_bg_color = esc_attr( get_option('homeland_top_header_bg_color') );
			$homeland_menu_bg_color = esc_attr( get_option('homeland_menu_bg_color') );
			$homeland_menu_text_color = esc_attr( get_option('homeland_menu_text_color') );
			$homeland_menu_text_color_active = esc_attr( get_option('homeland_menu_text_color_active') );
			$homeland_header_text_color = esc_attr( get_option('homeland_header_text_color') );
			$homeland_sidebar_text_color = esc_attr( get_option('homeland_sidebar_text_color') );
			$homeland_button_bg_color = esc_attr( get_option('homeland_button_bg_color') );
			$homeland_button_bg_hover_color = esc_attr( get_option('homeland_button_bg_hover_color') );
			$homeland_button_text_color = esc_attr( get_option('homeland_button_text_color') );
			$homeland_footer_bg_color = esc_attr( get_option('homeland_footer_bg_color') );
			$homeland_footer_title_color = esc_attr( get_option('homeland_footer_title_color') );
			$homeland_footer_text_color = esc_attr( get_option('homeland_footer_text_color') );
			$homeland_footer_link_color = esc_attr( get_option('homeland_footer_link_color') );
			$homeland_footer_link_hover_color = esc_attr( get_option('homeland_footer_link_hover_color') );
			$homeland_slide_top_bg_color = esc_attr( get_option('homeland_slide_top_bg_color') );
			$homeland_welcome_overlay = esc_attr( get_option('homeland_welcome_overlay') );
			$homeland_services_overlay = esc_attr( get_option('homeland_services_overlay') );
			$homeland_testi_overlay = esc_attr( get_option('homeland_testi_overlay') );
			$homeland_partners_overlay = esc_attr( get_option('homeland_partners_overlay') );
			$homeland_header_overlay = esc_attr( get_option('homeland_header_overlay') );
			$homeland_static_image_overlay = esc_attr( get_option('homeland_static_image_overlay') );
			$homeland_hide_header_image = esc_attr( get_option('homeland_hide_header_image') );
			$homeland_preloader_icon = esc_attr( get_option('homeland_preloader_icon') );
			$homeland_slide_bar_position = esc_attr( get_option('homeland_slide_bar_position') );

			// Background Images
			$homeland_welcome_bgimage = esc_attr( get_option('homeland_welcome_bgimage') );
			$homeland_services_bgimage = esc_attr( get_option('homeland_services_bgimage') );
			$homeland_testimonials_bgimage = esc_attr( get_option('homeland_testimonials_bgimage') );
			$homeland_partners_bgimage = esc_attr( get_option('homeland_partners_bgimage') );
			$homeland_contact_alt_bgimage = esc_attr( get_option('homeland_contact_alt_bgimage') );
			$homeland_attachment_bgimage = esc_attr( get_option('homeland_attachment_bgimage') );
			$homeland_static_image = esc_attr( get_option('homeland_static_image') );
			
			// Header images
			$homeland_page_hd_image = esc_attr( get_post_meta( @$post->ID, 'homeland_hdimage', true ) );
			$homeland_archive_hdimage = esc_attr( get_option('homeland_archive_hdimage') );
			$homeland_search_hdimage = esc_attr( get_option('homeland_search_hdimage') );
			$homeland_notfound_hdimage = esc_attr( get_option('homeland_notfound_hdimage') );
			$homeland_agent_hdimage = esc_attr( get_option('homeland_agent_hdimage') );
			$homeland_attachment_hdimage = esc_attr( get_option('homeland_attachment_hdimage') );
			$homeland_taxonomy_hdimage = esc_attr( get_option('homeland_taxonomy_hdimage') );
			$homeland_default_hdimage = esc_attr( get_option('homeland_default_hdimage') );
			$homeland_forum_hdimage = esc_attr( get_option('homeland_forum_hdimage') );
			$homeland_forum_single_hdimage = esc_attr( get_option('homeland_forum_single_hdimage') );
			$homeland_forum_single_topic_hdimage = esc_attr( get_option('homeland_forum_single_topic_hdimage') );
			$homeland_forum_topic_edit_hdimage = esc_attr( get_option('homeland_forum_topic_edit_hdimage') );
			$homeland_forum_search_hdimage = esc_attr( get_option('homeland_forum_search_hdimage') );
			$homeland_user_profile_hdimage = esc_attr( get_option('homeland_user_profile_hdimage') );

			// Font sizes
			$homeland_body_font_size = esc_attr( get_option('homeland_body_font_size') );
			$homeland_body_line_height = esc_attr( get_option('homeland_body_line_height') );
			$homeland_homepage_header_font_size = esc_attr( get_option('homeland_homepage_header_font_size') );
			$homeland_page_top_header_font_size = esc_attr( get_option('homeland_page_top_header_font_size') );
			$homeland_page_top_subtitle_font_size = esc_attr(get_option('homeland_page_top_subtitle_font_size'));
			$homeland_page_content_header_font_size = esc_attr( get_option('homeland_page_content_header_font_size') );
			$homeland_sidebar_header_font_size = esc_attr( get_option('homeland_sidebar_header_font_size') );
			$homeland_footer_font_size = esc_attr( get_option('homeland_footer_font_size') );

			$homeland_directory_uri = get_template_directory_uri() . '/img/patterns';
			?>

			<style type="text/css"><?php	

				// Font Sizes
				if(!empty($homeland_body_font_size)) : ?>
					body { font-size: <?php echo $homeland_body_font_size ?>px !important; } <?php
				endif;

				if(!empty($homeland_body_line_height)) : ?>
					body { line-height: <?php echo $homeland_body_line_height ?>px !important; } <?php
				endif;

				if(!empty($homeland_homepage_header_font_size)) : ?>
					.property-list-box h2, 
					.agent-block h3, 
					.featured-block h3, 
					.featured-block-two-cols h3, 
					.blog-block h3, 
					.partners-block h3 {
						font-size: <?php echo $homeland_homepage_header_font_size ?>px !important; 
					}<?php
				endif;

				if(!empty($homeland_page_top_header_font_size)) : ?>
					.ptitle { font-size: <?php echo $homeland_page_top_header_font_size ?>px !important; } <?php
				endif;

				if(!empty($homeland_page_top_subtitle_font_size)) : ?>
					.subtitle label { font-size: <?php echo $homeland_page_top_subtitle_font_size ?>px !important; }<?php
				endif;

				if(!empty($homeland_page_content_header_font_size)) : ?>
					.left-container h3 { font-size: <?php echo $homeland_page_content_header_font_size ?>px !important; } <?php
				endif;

				if(!empty($homeland_sidebar_header_font_size)) : ?>
					.sidebar h5 { font-size: <?php echo $homeland_sidebar_header_font_size ?>px !important; } <?php
				endif;

				if(!empty($homeland_footer_font_size)) : ?>
					footer .widget h5 { font-size: <?php echo $homeland_footer_font_size ?>px !important; } <?php
				endif;


				// Patterns
				if($homeland_bg_type == "Pattern") :
					
					if($homeland_pattern == "Gray Lines") :
						$homeland_pattern_name = "gray_lines.png";
					elseif($homeland_pattern == "Noise Lines") : 
						$homeland_pattern_name = "noise_lines.png";
					elseif($homeland_pattern == "Tiny Grid") :
						$homeland_pattern_name = "tiny_grid.png";
					elseif($homeland_pattern == "Bullseye") :
						$homeland_pattern_name = "strange_bullseyes.png";
					elseif($homeland_pattern == "Gray Paper") :
						$homeland_pattern_name = "gray_paper.png";
					elseif($homeland_pattern == "Norwegian Rose") :
						$homeland_pattern_name = "norwegian_rose.png";
					elseif($homeland_pattern == "Subtle Net") :
						$homeland_pattern_name = "subtlenet.png";
					elseif($homeland_pattern == "Polyester Lite") :
						$homeland_pattern_name = "polyester_lite.png";
					elseif($homeland_pattern == "Absurdity") :
						$homeland_pattern_name = "absurdidad.png";
					elseif($homeland_pattern == "White Bed Sheet") :
						$homeland_pattern_name = "white_bed_sheet.png";
					elseif($homeland_pattern == "Subtle Stripes") :
						$homeland_pattern_name = "subtle_stripes.png";
					elseif($homeland_pattern == "Light Mesh") :
						$homeland_pattern_name = "lghtmesh.png";
					elseif($homeland_pattern == "Rough Diagonal") :
						$homeland_pattern_name = "rough_diagonal.png";
					elseif($homeland_pattern == "Arabesque") :
						$homeland_pattern_name = "arab_tile.png";
					elseif($homeland_pattern == "Stack Circles") :
						$homeland_pattern_name = "stacked_circles.png";
					elseif($homeland_pattern == "Hexellence") :
						$homeland_pattern_name = "hexellence.png";
					elseif($homeland_pattern == "White Texture") :
						$homeland_pattern_name = "white_texture.png";
					elseif($homeland_pattern == "Concrete Wall") :
						$homeland_pattern_name = "concrete_wall.png";
					elseif($homeland_pattern == "Brush Aluminum") :
						$homeland_pattern_name = "brushed_alu.png";
					elseif($homeland_pattern == "Groovepaper") :
						$homeland_pattern_name = "groovepaper.png";
					elseif($homeland_pattern == "Diagonal Noise") :
						$homeland_pattern_name = "diagonal_noise.png";
					elseif($homeland_pattern == "Rocky Wall") :
						$homeland_pattern_name = "rockywall.png";
					elseif($homeland_pattern == "Whitey") :
						$homeland_pattern_name = "whitey.png";
					elseif($homeland_pattern == "Bright Squares") :
						$homeland_pattern_name = "bright_squares.png";
					elseif($homeland_pattern == "Freckles") :
						$homeland_pattern_name = "freckles.png";
					elseif($homeland_pattern == "Wallpaper") :
						$homeland_pattern_name = "wallpaper.png";
					elseif($homeland_pattern == "Project Paper") :
						$homeland_pattern_name = "project_papper.png";
					elseif($homeland_pattern == "Cubes") :
						$homeland_pattern_name = "cubes.png";
					elseif($homeland_pattern == "Washi") :
						$homeland_pattern_name = "washi.png";
					elseif($homeland_pattern == "Dot Noise") :
						$homeland_pattern_name = "dotnoise.png";
					elseif($homeland_pattern == "xv") :
						$homeland_pattern_name = "xv.png";
					elseif($homeland_pattern == "Little Plaid") :
						$homeland_pattern_name = "plaid.png";
					elseif($homeland_pattern == "Old Wall") :
						$homeland_pattern_name = "old_wall.png";
					elseif($homeland_pattern == "Connect") :
						$homeland_pattern_name = "connect.png";
					elseif($homeland_pattern == "Ravenna") :
						$homeland_pattern_name = "ravenna.png";
					elseif($homeland_pattern == "Smooth Wall") :
						$homeland_pattern_name = "smooth_wall.png";
					elseif($homeland_pattern == "Tapestry") :
						$homeland_pattern_name = "tapestry.png";
					elseif($homeland_pattern == "Psychedelic") :
						$homeland_pattern_name = "psychedelic.png";
					elseif($homeland_pattern == "Scribble Light") :
						$homeland_pattern_name = "scribble_light.png";
					elseif($homeland_pattern == "GPlay") :
						$homeland_pattern_name = "gplay.png";
					elseif($homeland_pattern == "Lil Fiber") :
						$homeland_pattern_name = "lil_fiber.png";
					elseif($homeland_pattern == "First Aid") :
						$homeland_pattern_name = "first_aid.png";
					elseif($homeland_pattern == "Frenchstucco") :
						$homeland_pattern_name = "frenchstucco.png";
					elseif($homeland_pattern == "Light Wool") :
						$homeland_pattern_name = "light_wool.png";
					elseif($homeland_pattern == "Gradient Squares") :
						$homeland_pattern_name = "gradient_squares.png";
					elseif($homeland_pattern == "Escheresque") :
						$homeland_pattern_name = "escheresque.png";
					elseif($homeland_pattern == "Climpek") :
						$homeland_pattern_name = "climpek.png";
					elseif($homeland_pattern == "Lyonnette") :
						$homeland_pattern_name = "lyonnette.png";
					elseif($homeland_pattern == "Gray Floral") :
						$homeland_pattern_name = "greyfloral.png";
					elseif($homeland_pattern == "Reticular Tissue") :
						$homeland_pattern_name = "reticular_tissue.png";
					elseif($homeland_pattern == "Halftone") :
						$homeland_pattern_name = "halftone.png";
					elseif($homeland_pattern == "Pentagon") :
						$homeland_pattern_name = "congruent_pentagon.png";
					elseif($homeland_pattern == "Giftly") :
						$homeland_pattern_name = "giftly.png";
					elseif($homeland_pattern == "Skulls") :
						$homeland_pattern_name = "skulls.png";
					elseif($homeland_pattern == "Food") :
						$homeland_pattern_name = "food.png";
					elseif($homeland_pattern == "Sprinkles") :
						$homeland_pattern_name = "sprinkles.png";
					elseif($homeland_pattern == "Geometry") :
						$homeland_pattern_name = "geometry.png";
					elseif($homeland_pattern == "Dimension") :
						$homeland_pattern_name = "dimension.png";
					elseif($homeland_pattern == "Pixel Weave") :
						$homeland_pattern_name = "pixel_weave.png";
					elseif($homeland_pattern == "Hoffman") :
						$homeland_pattern_name = "hoffman.png";
					elseif($homeland_pattern == "Mini Waves") :
						$homeland_pattern_name = "mini_waves.png";
					elseif($homeland_pattern == "Swirl") :
						$homeland_pattern_name = "swirl.png";
					elseif($homeland_pattern == "Eight Horns") :
						$homeland_pattern_name = "eight_horns.png";
					elseif($homeland_pattern == "Contemporary China") :
						$homeland_pattern_name = "contemporary_china.png";
					elseif($homeland_pattern == "Symphony") :
						$homeland_pattern_name = "symphony.png";
					elseif($homeland_pattern == "Confectionary") :
						$homeland_pattern_name = "confectionary.png";
					elseif($homeland_pattern == "Dark Sharp Edges") :
						$homeland_pattern_name = "footer_lodyas.png";
					elseif($homeland_pattern == "Subtle White Feathers") :
						$homeland_pattern_name = "subtle_white_feathers.png";
					elseif($homeland_pattern == "Tileable Wood") :
						$homeland_pattern_name = "tileable_wood_texture.png";
					elseif($homeland_pattern == "Pineapple Cut") :
						$homeland_pattern_name = "pineapplecut.png";
					else :
						$homeland_pattern_name = "";
					endif;
					?>
						body { 
							background-image: url('<?php echo $homeland_directory_uri; ?>/<?php echo $homeland_pattern_name; ?>'); 
							background-repeat: repeat;
							background-position: top;
							background-attachment: fixed;
						}
					<?php
					
				elseif($homeland_bg_type == "Color") :
					?>body { background-color: <?php echo $homeland_bg_color; ?> } <?php
				endif;

				// Welcome Background
				if(!empty($homeland_welcome_bgimage)) : ?>
					.welcome-block { 
						background-image: url('<?php echo esc_url( $homeland_welcome_bgimage ); ?>') !important; 
					} <?php
				endif;

				// Services Background
				if(!empty($homeland_services_bgimage)) : ?>
					.services-block-bg { 
						background-image: url('<?php echo esc_url( $homeland_services_bgimage ); ?>') !important; 
					}<?php
				endif;

				// Attachment Background
				if(!empty($homeland_attachment_bgimage)) : ?>
					.attachment-block-bg { 
						background-image: url('<?php echo esc_url( $homeland_attachment_bgimage ); ?>') !important; 
					}<?php
				endif;

				// Testimonials Background
				if(!empty($homeland_testimonials_bgimage)) : ?>
					.testimonial-block { 
						background-image: url('<?php echo esc_url( $homeland_testimonials_bgimage ); ?>') !important; 
					}<?php
				endif;

				// Partners Background
				if(!empty($homeland_partners_bgimage)) : ?>
					.partners-block { 
						background-image: url('<?php echo esc_url( $homeland_partners_bgimage ); ?>') !important; 
					}<?php
				endif;

				// Home Static Image
				if(!empty($homeland_static_image)) : ?>
					.homepage-static-image { 
						background-image: url('<?php echo esc_url( $homeland_static_image ); ?>') !important; 
					}<?php
				endif;

				// Preloader Icon
				if(!empty($homeland_preloader_icon)) : ?>
					#status { 
						background-image: url('<?php echo esc_url( $homeland_preloader_icon ); ?>') !important; 
					}<?php
				endif;

				// Contact Alternate Background
				if(!empty($homeland_contact_alt_bgimage)) : ?>
					.contact-alt-background { 
						background-image: url('<?php echo esc_url( $homeland_contact_alt_bgimage ); ?>'); 
						background-size: cover; 
					}<?php
				endif;

				if(!empty($homeland_slide_bar_position)) : ?>
					.sliding-bar { position: <?php echo $homeland_slide_bar_position ?> !important; } <?php

					$homeland_slide_bar_class = $homeland_slide_bar_position == 'fixed' ? 'fixed' : 'absolute';
					?>a.slide-toggle { position: <?php echo esc_attr( $homeland_slide_bar_class ); ?> !important; }<?php
				endif;

				// Colors
				if(!empty($homeland_theme_color_global)) : ?>
					.search-title span, .selectBox-dropdown .selectBox-arrow, 
					.home-flexslider .flex-direction-nav li .flex-next:hover, 
					.home-flexslider .flex-direction-nav li .flex-prev:hover, 
					.properties-flexslider .flex-direction-nav li .flex-next:hover, 
					.properties-flexslider .flex-direction-nav li .flex-prev:hover,
					.blog-flexslider .flex-direction-nav li .flex-next:hover, 
					.blog-flexslider .flex-direction-nav li .flex-prev:hover, 
					.portfolio-flexslider .flex-direction-nav li .flex-next:hover, 
					.portfolio-flexslider .flex-direction-nav li .flex-prev:hover, 
					.services-block a.more, 
					.services-block-bg a.more, 
					.services-pb-block a.more, 
					.cat-price,
					.grid li:hover .property-info, 
					.pimage figcaption i, 
					.feat-thumb figcaption i, 
					.feat-medium figcaption i,
					.nsu-submit, a#toTop, 
					.pactions a:link, 
					.pactions a:visited, 
					.theme-menu ul li.current-menu-item a, 
					.theme-menu ul li.current-menu-ancestor a, 
					.theme-menu ul li.current-menu-parent a, 
					.theme-menu ul li a:hover, 
					.sf-menu li.sfHover a, 
					.sf-menu li.sfHover a:after, 
					.cat-toogles ul li.current-cat a, 
					.cat-toogles ul li a:hover, 
					.page-numbers li a:hover, 
					.alignleft a:hover, 
					.alignright a:hover, 
					.post-link-blog .prev a:hover, 
					.post-link-blog .next a:hover, 
					span.current, 
					a.continue, 
					.wpcf7-submit, #submit,
					.page-template-template-homepage2-php .hi-icon-effect-1 .hi-icon,
					.services-pb-block .hi-icon-effect-1 .hi-icon,
					.advance-search-widget ul li input[type="submit"], 
					.dsidx-widget.dsidx-search-widget 
					.dsidx-search-button input[type="submit"], 
					#dsidx-price,
					#dsidx.dsidx-details .dsidx-contact-form table input[type="button"],
					.property-four-cols .view-details a, 
					.agent-form ul li input[type="submit"], 
					a.view-gmap:link, a.view-gmap:visited,
					#bbp_search_submit, 
					.bbp-submit-wrapper button, 
					#bbp_user_edit_submit, 
					#homeland-loginform .login-submit input[type="submit"],
					#homeland-registerform .login-submit input[type="submit"],
					#homeland-lostpassword .login-submit input[type="submit"],
					.blog-tags li span, 
					.portfolio-tags span, 
					a.live-demo:link, 
					a.live-demo:visited,
					a.slide-more:link, 
					a.slide-more:visited, 
					a.slide-toggle, 
					.blog-timeline .blog-icon,
					.wpdevbk button.btn, 
					.wpdevbk input.btn[type="submit"],
					a.print-now:hover,
					.select2-container--default .select2-selection--single .select2-selection__arrow,
					.homepage-call-to-action a { 
						background: <?php echo $homeland_theme_color_global; ?> 
					} 
					.sfHover ul li.sfHover a.sf-with-ul, 
					a.back-home:link, 
					a.back-home:visited { 
						background: <?php echo $homeland_theme_color_global ?> !important; 
					}
					.hi-icon, 
					.no-touch .hi-icon-effect-1a .hi-icon:hover, 
					.property-desc h4 a:hover, 
					a.view-property:hover,
					.agent-block label span, 
					.homeland_widget-agents label span, 
					.agent-block h4 a:hover, 
					.feat-desc span.price,
					.sf-menu li.sfHover ul li a:hover, 
					.widget ul li a:hover, 
					.widget ul li:hover:before, 
					.copyright a, 
					.agent-block h4 a:hover, 
					.agent-desc h4 a:hover, 
					.agent-social ul li a:hover, 
					.sidebar .pp-desc a:hover, 
					.services-page-desc h5 a:hover, 
					.agent-about-list .agent-image h4 a:hover, 
					.blog-list-desc h4 a:hover, 
					.blog-action ul li a:hover,
					.comment-details h5 a:hover, 
					.property-desc-slide span, 
					.agent-info label,
					.property-three-cols .property-desc span.price, 
					.property-four-cols .view-details a, 
					.agent-desc label.listed span, 
					.contact-info label, 
					.feat-desc h5 a:hover, 
					.bdesc h5 a:hover,
					#dsidx-listings .dsidx-price, 
					.featured-listing .price, 
					.dsidx-prop-title, 
					a.dsidx-actions-button:hover, 
					#dsidx a:hover, 
					.featured-listing h4 a:hover, 
					div.dsidx-results-widget .dsidx-controls a:hover, 
					.marker-window h5, 
					.sitemap a:hover, 
					.property-page-id span,
					.property-page-type a:hover, 
					.property-page-status a:hover, 
					.countdown-section, 
					.countdown-amount, 
					a.property-print:hover,
					.bbp-breadcrumb a:link, 
					.bbp-breadcrumb a:visited,
					a.bbp-forum-title:hover, 
					a.bbp-topic-permalink:link, 
					a.bbp-topic-permalink:visited, 
					.bbp-topic-title h3 a, 
					.bbp-topic-title-meta a, 
					.bbp-forum-title h3 a,
					.bbp-forum-freshness a:link, 
					.bbp-forum-freshness a:visited, 
					.bbp-topic-freshness a:link, 
					.bbp-topic-freshness a:visited, 
					.bbp-author-name:link, 
					.bbp-author-name:visited,
					#bbp-user-navigation ul li a:hover, 
					a.bbp-forum-title, 
					.contact-info label a, 
					.contact-info-alt a, 
					.contact-alternate-main label,
					.contact-alternate-main label a,
					.slide-bottom-title i, 
					.slide-bottom-actions i, 
					.slide-right i,
					.footer-menu ul li a:hover, 
					.property-amenities a:hover, 
					.blog-timeline-content label a,
					.blog-timeline-content h4 a:hover,
					.print-property-price h3,
					.agent-count { 
						color: <?php echo $homeland_theme_color_global ?> !important; 
					} 
					.page-template-template-homepage2-php .hi-icon, 
					.services-pb-block .hi-icon-effect-1 .hi-icon,
					.property-four-cols .view-details a,
					.featured-flexslider ul li .pimage a i,
					.homeland_widget-get-in-touch ul li a:hover { color: #FFF !important; }
					.hi-icon {
						border-color: <?php echo $homeland_theme_color_global; ?> 
					} 
					.advance-search-block.advance-search-block-page, 
					.property-page-price { background: <?php echo $homeland_rgba_theme_color; ?> } <?php
				endif;

				if(!empty($homeland_top_header_bg_color)) : ?>
					header { background: <?php echo $homeland_top_header_bg_color ?> !important; } <?php
				endif;

				if(!empty($homeland_menu_text_color)) : ?>
					.theme-menu ul li a { color: <?php echo $homeland_menu_text_color ?> !important; } <?php
				endif;

				if(!empty($homeland_menu_text_color_active)) : ?>
					.theme-menu ul li.current_page_item a,
					.theme-menu ul li.current-menu-item a, 
					.theme-menu ul li.current-menu-ancestor a, 
					.theme-menu ul li.current-menu-parent a, 
					.theme-menu ul li a:hover { 
						color: <?php echo $homeland_menu_text_color_active ?> !important; 
					} 
					.theme-menu ul li.current-menu-parent ul.sub-menu li a,
					.theme-menu ul li.current-menu-ancestor ul.sub-menu li a { color: #777 !important; }<?php
				endif;

				if(!empty($homeland_menu_bg_color)) : ?>
				 	.theme-menu ul li.current_page_item a,
					.theme-menu ul li.current-menu-item a, 
					.theme-menu ul li.current-menu-ancestor a, 
					.theme-menu ul li.current-menu-parent a, 
					.theme-menu ul li a:hover,
					.sf-menu li.sfHover a, 
					.sf-menu li.sfHover a:after,
					.sfHover ul li.sfHover a.sf-with-ul { 
						background: <?php echo $homeland_menu_bg_color ?> !important; 
					}
					.theme-menu ul li.current-menu-parent ul.sub-menu li a,
					.theme-menu ul li.current-menu-ancestor ul.sub-menu li a,
					.theme-menu ul li ul.sub-menu li a { color: #777 !important; background: #f2f2f2 !important; }
					.theme-menu ul li.current-menu-parent ul.sub-menu li a:hover,
					.theme-menu ul li.current-menu-ancestor ul.sub-menu li a:hover,
					.theme-menu ul li ul.sub-menu li a:hover { 
						color: <?php echo $homeland_menu_bg_color ?> !important; background: #FFF !important; }
					<?php
				endif;

				if(!empty($homeland_header_text_color)) : ?>
					.ptitle, 
					.widget h5, 
					.property-list-box h2, 
					.agent-block h3, 
					.featured-block h3, 
					.blog-block h3,
					.services-desc h5, 
					.partners-block h3, 
					.featured-block-two-cols h3 { 
						color: <?php echo $homeland_header_text_color ?> !important; 
					} <?php
				endif;

				if(!empty($homeland_sidebar_text_color)) : ?>
					.sidebar .widget h5 { color: <?php echo $homeland_sidebar_text_color ?> !important; }<?php 
				endif;

				if(!empty($homeland_button_bg_color)) : ?>
					.contact-form input[type="submit"], 
					#respond input[type="submit"],
					.services-block a.more, 
					.services-block-bg a.more, 
					.services-pb-block a.more, 
					.pactions a i, 
					.feat-thumb figcaption a i, 
					.feat-medium figcaption a i, 
					.pimage figcaption a i, 
					a#toTop, 
					.nsu-submit, 
					.advance-search-block input[type="submit"], 
					a.back-home:link, 
					a.back-home:visited, 
					a.continue, 
					.advance-search-widget ul li input[type="submit"], 
					.dsidx-widget.dsidx-search-widget .dsidx-search-button input[type="submit"],
					#dsidx.dsidx-details .dsidx-contact-form table input[type="button"],
					.property-four-cols .view-details a, 
					.agent-form ul li input[type="submit"],
					a.live-demo:link, 
					a.live-demo:visited, 
					.wpcf7-submit,
					a.slide-more:link, 
					a.slide-more:visited, 
					a.view-gmap:link, 
					a.view-gmap:visited,
					a.slide-toggle, 
					span.current, 
					.login-submit input[type="submit"],
					.login-actions a:link, 
					.login-actions a:visited,
					.wpdevbk button.btn, 
					.wpdevbk input.btn[type="submit"],
					.homepage-call-to-action a { 
						background-color: <?php echo $homeland_button_bg_color ?> !important; } <?php
				endif;

				if(!empty($homeland_button_bg_hover_color)) : ?>
					.contact-form input[type="submit"]:hover, 
					#respond input[type="submit"]:hover,
					.services-block a.more:hover, 
					.services-block-bg a.more:hover, 
					.services-pb-block a.more:hover, 
					.pactions a i:hover, 
					.feat-thumb figcaption a i:hover, 
					.feat-medium figcaption a i:hover, 
					.pimage figcaption a i:hover,
					a#toTop:hover, 
					.nsu-submit:hover, 
					.advance-search-block input[type="submit"]:hover, 
					a.back-home:hover, 
					a.continue:hover, 
					.advance-search-widget ul li input[type="submit"]:hover, 
					.dsidx-widget.dsidx-search-widget .dsidx-search-button input[type="submit"]:hover,
					#dsidx.dsidx-details .dsidx-contact-form table input[type="button"]:hover,
					.property-four-cols .view-details a:hover, 
					.agent-form ul li input[type="submit"]:hover,
					.marker-window a.view-gmap:hover, 
					#bbp_search_submit:hover, 
					#bbp_reply_submit:hover, 
					.wpcf7-submit:hover, 
					.login-submit input[type="submit"]:hover,
					a.live-demo:hover, 
					.page-numbers li a:hover, 
					.alignleft a:hover, 
					.alignright a:hover, 
					.post-link-blog .prev a:hover, 
					.post-link-blog .next a:hover,
					a.slide-more:hover, 
					a.view-gmap:hover, 
					a.slide-toggle:hover,
					.login-actions a:hover, 
					.wpdevbk button.btn:hover, 
					.wpdevbk input.btn[type="submit"]:hover,
					.homepage-call-to-action a:hover { 
						background-color: <?php echo $homeland_button_bg_hover_color ?> !important; } <?php
				endif;

				if(!empty($homeland_button_text_color)) :	?>
					.contact-form input[type="submit"], 
					#respond input[type="submit"],
					.services-block a.more, 
					.pactions a i, 
					.feat-thumb figcaption a i, 
					.feat-medium figcaption a i, 
					.pimage figcaption a i, 
					a#toTop, 
					a.continue,
					a.live-demo:link, 
					a.live-demo:visited,
					a.slide-more:link, 
					a.slide-more:visited,
					a.view-gmap:link, 
					a.view-gmap:visited,
					.homepage-call-to-action a { 
						color: <?php echo $homeland_button_text_color ?> !important; } <?php
				endif;

				if(!empty($homeland_footer_bg_color)) :	?>
					footer { background-color: <?php echo $homeland_footer_bg_color ?> !important; } <?php
				endif;

				if(!empty($homeland_footer_title_color)) :	?>
					.widget-column h5 { color: <?php echo $homeland_footer_title_color ?> !important; } <?php
				endif;

				if(!empty($homeland_footer_text_color)) :	?>
					.widget-column,
					.homeland_widget-working-hours ul li,
					.homeland_widget-working-hours ul li span,
					.homeland_widget-contact-info ul li i { 
						color: <?php echo $homeland_footer_text_color ?> !important; 
					} <?php
				endif;

				if(!empty($homeland_footer_link_color)) :	?>
					.widget-column a:link,
					.widget-column a:visited,
					footer .widget a:link,
					footer .widget a:visited,
					footer .widget ul li:before,
					.copyright a { color: <?php echo $homeland_footer_link_color ?> !important; } <?php
				endif;

				if(!empty($homeland_footer_link_hover_color)) :	?>
					.widget-column a:hover,
					footer .widget a:hover,
					.widget ul li:hover:before,
					.copyright a:hover,
					.social ul li a:hover,
					#menu-footer-menu li a:hover { 
						color: <?php echo $homeland_footer_link_hover_color ?> !important; 
					} <?php
				endif;

				if(!empty($homeland_slide_top_bg_color)) : ?>
					.sliding-bar, 
					a.slide-toggle { 
						color: #FFF; 
						background-color: <?php echo $homeland_slide_top_bg_color ?> !important; 
					} <?php
				endif;

				if(!empty($homeland_welcome_overlay)) : ?>
					.welcome-block .overlay { 
						background-color: <?php echo $homeland_welcome_overlay ?> !important; 
					} <?php
				endif;

				if(!empty($homeland_services_overlay)) : ?>
					.services-block-bg .overlay { 
						background-color: <?php echo $homeland_services_overlay ?> !important; 
					} <?php
				endif;

				if(!empty($homeland_testi_overlay)) : ?>
					.testimonial-block .overlay { 
						background-color: <?php echo $homeland_testi_overlay ?> !important; 
					} <?php
				endif;

				if(!empty($homeland_partners_overlay)) : ?>
					.partners-block .overlay { 
						background-color: <?php echo $homeland_partners_overlay ?> !important;
					} <?php
				endif;

				if(!empty($homeland_header_overlay)) : ?>
					.header-bg .overlay { 
						background-color: <?php echo $homeland_header_overlay ?> !important; 
					} <?php
				endif;

				if(!empty($homeland_static_image_overlay)) : ?>
					.homepage-static-image .overlay { 
						background-color: <?php echo $homeland_static_image_overlay ?> !important; 
					} <?php
				endif;


				// Theme Fonts
				if($homeland_theme_font == "Open Sans") :
					$homeland_font_name = "Open Sans";
				elseif($homeland_theme_font == "Droid Sans") : 
					$homeland_font_name = "Droid Sans";
				elseif($homeland_theme_font == "Lato") :
					$homeland_font_name = "Lato";
				elseif($homeland_theme_font == "Raleway") :
					$homeland_font_name = "Raleway";
				elseif($homeland_theme_font == "PT Sans") : 
					$homeland_font_name = "PT Sans";
				elseif($homeland_theme_font == "Noto Sans") : 
					$homeland_font_name = "Noto Sans";
				elseif($homeland_theme_font == "Oxygen") : 
					$homeland_font_name = "Oxygen";
				elseif($homeland_theme_font == "Source Sans Pro") : 
					$homeland_font_name = "Source Sans Pro";
				elseif($homeland_theme_font == "Muli") : 
					$homeland_font_name = "Muli";
				elseif($homeland_theme_font == "Istok Web") : 
					$homeland_font_name = "Istok Web";
				elseif($homeland_theme_font == "Puritan") :
					$homeland_font_name = "Puritan";
				elseif($homeland_theme_font == "Gafata") : 
					$homeland_font_name = "Gafata";
				elseif($homeland_theme_font == "Cambo") : 
					$homeland_font_name = "Cambo";
				elseif($homeland_theme_font == "Voces") : 
					$homeland_font_name = "Voces";
				elseif($homeland_theme_font == "Duru Sans") : 
					$homeland_font_name = "Duru Sans";
				elseif($homeland_theme_font == "Sintony") : 
					$homeland_font_name = "Sintony";
				elseif($homeland_theme_font == "Carrois Gothic") : 
					$homeland_font_name = "Carrois Gothic";
				elseif($homeland_theme_font == "Alegreya Sans") : 
					$homeland_font_name = "Alegreya Sans";
				elseif($homeland_theme_font == "News Cycle") : 
					$homeland_font_name = "News Cycle";
				elseif($homeland_theme_font == "Dosis") : 
					$homeland_font_name = "Dosis";
				elseif($homeland_theme_font == "Abel") : 
					$homeland_font_name = "Abel";
				elseif($homeland_theme_font == "Didact Gothic") : 
					$homeland_font_name = "Didact Gothic";
				elseif($homeland_theme_font == "Arimo") : 
					$homeland_font_name = "Arimo";
				elseif($homeland_theme_font == "Titillium Web") : 
					$homeland_font_name = "Titillium Web";
				elseif($homeland_theme_font == "Archivo Narrow") : 
					$homeland_font_name = "Archivo Narrow";
				elseif($homeland_theme_font == "Josefin Sans") : 
					$homeland_font_name = "Josefin Sans";
				elseif($homeland_theme_font == "Asap") : 
					$homeland_font_name = "Asap";
				elseif($homeland_theme_font == "Questrial") : 
					$homeland_font_name = "Questrial";
				elseif($homeland_theme_font == "Pontano Sans") : 
					$homeland_font_name = "Pontano Sans";
				elseif($homeland_theme_font == "Slabo") : 
					$homeland_font_name = "Slabo 27px";
				elseif($homeland_theme_font == "Oswald") : 
					$homeland_font_name = "Oswald";
				elseif($homeland_theme_font == "Montserrat") : 
					$homeland_font_name = "Montserrat";
				elseif($homeland_theme_font == "Ubuntu") :
					$homeland_font_name = "Ubuntu";
				elseif($homeland_theme_font == "Merriweather") : 
					$homeland_font_name = "Merriweather";
				elseif($homeland_theme_font == "Cabin") : 
					$homeland_font_name = "Cabin";
				elseif($homeland_theme_font == "Hind") : 
					$homeland_font_name = "Hind";
				elseif($homeland_theme_font == "Gudea") : 
					$homeland_font_name = "Gudea";
				elseif($homeland_theme_font == "Noticia Text") : 
					$homeland_font_name = "Noticia Text";
				elseif($homeland_theme_font == "Nobile") : 
					$homeland_font_name = "Nobile";
				elseif($homeland_theme_font == "Lora") : 
					$homeland_font_name = "Lora";
				elseif($homeland_theme_font == "Inconsolata") : 
					$homeland_font_name = "Inconsolata";
				elseif($homeland_theme_font == "Quicksand") : 
					$homeland_font_name = "Quicksand";
				elseif($homeland_theme_font == "Karla") :
					$homeland_font_name = "Karla";
				elseif($homeland_theme_font == "Monda") : 
					$homeland_font_name = "Monda";
				elseif($homeland_theme_font == "Crimson Text") : 
					$homeland_font_name = "Crimson Text";
				elseif($homeland_theme_font == "Exo") : 
					$homeland_font_name = "Exo";
				elseif($homeland_theme_font == "EB Garamond") : 
					$homeland_font_name = "EB Garamond";
				elseif($homeland_theme_font == "Armata") :
					$homeland_font_name = "Armata";
				elseif($homeland_theme_font == "Glegoo") : 
					$homeland_font_name = "Glegoo";
				elseif($homeland_theme_font == "Poppins") : 
					$homeland_font_name = "Poppins";
				elseif($homeland_theme_font == "PT Serif") : 
					$homeland_font_name = "PT Serif";
				elseif($homeland_theme_font == "Nixie One") : 
					$homeland_font_name = "Nixie One";
				elseif($homeland_theme_font == "Fira Sans") : 
					$homeland_font_name = "Fira Sans";
				elseif($homeland_theme_font == "Quattrocento Sans") : 
					$homeland_font_name = "Quattrocento Sans";
				elseif($homeland_theme_font == "Kreon") : 
					$homeland_font_name = "Kreon";
				elseif($homeland_theme_font == "Varela Round") : 
					$homeland_font_name = "Varela Round";
				elseif($homeland_theme_font == "Bitter") : 
					$homeland_font_name = "Bitter";
				elseif($homeland_theme_font == "Catamaran") : 
					$homeland_font_name = "Catamaran";
				elseif($homeland_theme_font == "Ruda") : 
					$homeland_font_name = "Ruda";
				elseif($homeland_theme_font == "Cambay") : 
					$homeland_font_name = "Cambay";
				elseif($homeland_theme_font == "Rajdhani") : 
					$homeland_font_name = "Rajdhani";
				elseif($homeland_theme_font == "Comfortaa") : 
					$homeland_font_name = "Comfortaa";
				elseif($homeland_theme_font == "Poiret One") : 
					$homeland_font_name = "Poiret One";
				elseif($homeland_theme_font == "Work Sans") : 
					$homeland_font_name = "Work Sans";
				elseif($homeland_theme_font == "Actor") : 
					$homeland_font_name = "Actor";
				elseif($homeland_theme_font == "Rambla") : 
					$homeland_font_name = "Rambla";
				elseif($homeland_theme_font == "Khula") : 
					$homeland_font_name = "Khula";
				elseif($homeland_theme_font == "Share") : 
					$homeland_font_name = "Share";
				elseif($homeland_theme_font == "Carme") : 
					$homeland_font_name = "Carme";
				elseif($homeland_theme_font == "Rubik") : 
					$homeland_font_name = "Rubik";
				elseif($homeland_theme_font == "Gentium Basic") : 
					$homeland_font_name = "Gentium Basic";
				elseif($homeland_theme_font == "Sanchez") : 
					$homeland_font_name = "Sanchez";
				elseif($homeland_theme_font == "Hind Madurai") : 
					$homeland_font_name = "Hind Madurai";
				elseif($homeland_theme_font == "Jaldi") : 
					$homeland_font_name = "Jaldi";
				else : 
					$homeland_font_name = "Roboto";
				endif;
			?>
				body, h1, h2, h3, h4, h5, h6, 
				input, textarea, select, 
				.widget_revslider .tp-caption { 
					font-family: '<?php echo $homeland_font_name; ?>', sans-serif !important; 
				} <?php

				// Header Images
				
				if(empty($homeland_hide_header_image)) :
					
					$homeland_default_hdbanner = !empty($homeland_default_hdimage) ? $homeland_default_hdimage : 'http://themecss.com/wp/Homeland/wp-content/uploads/2013/12/View-over-the-lake_www.LuxuryWallpapers.net_-1920x300.jpg';

					if(function_exists('is_bbpress')) :
						if(bbp_is_single_forum()) :
							if(!empty($homeland_forum_single_hdimage)) : ?>
								.page-title-block-forum-single { 
									background-image: url('<?php echo esc_url( $homeland_forum_single_hdimage ); ?>'); 
								} <?php 
							else : ?> 
								.page-title-block-default { 
									background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>'); 
								} <?php
							endif;
						elseif(bbp_is_single_topic()) :
							if(!empty($homeland_forum_single_topic_hdimage)) : ?>
								.page-title-block-topic-single { 
									background-image: url('<?php echo esc_url( $homeland_forum_single_topic_hdimage ); ?>');
								} <?php 
							else : ?> 
								.page-title-block-default { 
									background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>'); 
								} <?php
							endif;	
						elseif(bbp_is_topic_edit()) :
							if(!empty($homeland_forum_topic_edit_hdimage)) : ?>
								.page-title-block-topic-edit { 
									background-image: url('<?php echo esc_url( $homeland_forum_topic_edit_hdimage ); ?>');
								} <?php 
							else : ?> 
								.page-title-block-default { 
									background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>');
								} <?php
							endif;	
						elseif(bbp_is_search()) :
							if(!empty($homeland_forum_search_hdimage)) : ?>
								.page-title-block-forum-search { 
									background-image: url('<?php echo esc_url( $homeland_forum_search_hdimage ); ?>');
								} <?php 
							else : ?> 
								.page-title-block-default { 
									background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>');
								} <?php
							endif;	
						elseif(bbp_is_single_user()) :
							if(!empty($homeland_user_profile_hdimage)) : ?>
								.page-title-block-user-profile { 
									background-image: url('<?php echo esc_url( $homeland_user_profile_hdimage ); ?>');
								} <?php 
							else : ?> 
								.page-title-block-default { 
									background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>');
								} <?php
							endif;
						elseif(is_bbpress()) :
							if(!empty($homeland_forum_hdimage)) : ?>
								.page-title-block-forum { 
									background-image: url('<?php echo esc_url( $homeland_forum_hdimage ); ?>');
								} <?php 
							else : ?> 
								.page-title-block-default { 
									background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>');
								} <?php
							endif;
						endif;
					endif;

					if(is_archive()) : 
						if(is_author()) : 
							if(!empty($homeland_agent_hdimage)) : ?>
								.page-title-block-agent { 
									background-image: url('<?php echo esc_url( $homeland_agent_hdimage ); ?>');
								} <?php 
							else : ?> 
								.page-title-block-default { 
									background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>');
								} <?php
							endif;
						elseif(is_tax()) : 
							if(!empty($homeland_taxonomy_hdimage)) : ?>
								.page-title-block-taxonomy { 
									background-image: url('<?php echo esc_url( $homeland_taxonomy_hdimage ); ?>'); 
								} <?php 
							else : ?> 
								.page-title-block-default { 
									background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>'); 
								} <?php
							endif;
						elseif(function_exists('is_bbpress')) :
							if(bbp_is_forum_archive()) :
								if(!empty($homeland_forum_hdimage)) : ?>
									.page-title-block-forum { 
										background-image: url('<?php echo esc_url( $homeland_forum_hdimage ); ?>'); 
									} <?php 
								else : ?> 
									.page-title-block-default { 
										background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>'); 
									} <?php
								endif;
							else :
								if(!empty($homeland_archive_hdimage)) : ?>
									.page-title-block-archive { 
										background-image: url('<?php echo esc_url( $homeland_archive_hdimage ); ?>'); 
									} <?php 
								else : ?> 
									.page-title-block-default { 
										background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>'); 
									} <?php
								endif;
							endif;
						else : 
							if(!empty($homeland_archive_hdimage)) : ?>
								.page-title-block-archive { 
									background-image: url('<?php echo esc_url( $homeland_archive_hdimage ); ?>'); 
								} <?php 
							else : ?> 
								.page-title-block-default { 
									background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>'); 
								} <?php
							endif;	
						endif; 
					elseif(is_search()) : 
						if(!empty($homeland_search_hdimage)) : ?>
							.page-title-block-search { 
								background-image: url('<?php echo esc_url( $homeland_search_hdimage ); ?>'); 
							} <?php 
						else : ?> 
							.page-title-block-default { 
								background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>'); 
							} <?php
						endif;	
					elseif(is_attachment()) : 
						if(!empty($homeland_attachment_hdimage)) : ?>
							.page-title-block-attachment { 
								background-image: url('<?php echo esc_url( $homeland_attachment_hdimage ); ?>'); 
							} <?php 
						else : ?> 
							.page-title-block-default { 
								background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>'); 
							} <?php
						endif;	
					elseif(is_404()) : 
						if(!empty($homeland_notfound_hdimage)) : ?>
							.page-title-block-error { 
								background-image: url('<?php echo esc_url( $homeland_notfound_hdimage ); ?>'); 
							} <?php 
						else : ?> 
							.page-title-block-default { 
								background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>'); 
							} <?php
						endif;
					else : 
						if(!empty($homeland_page_hd_image)) : ?> 
							.page-title-block { 
								background-image: url('<?php echo esc_url( $homeland_page_hd_image ); ?>'); 
							} <?php 
						else : ?>
						 	.page-title-block-default { 
						 		background-image: url('<?php echo esc_url( $homeland_default_hdbanner ); ?>'); 
						 	} <?php
						endif;
					endif;
				endif;

			?></style><?php
		}
	endif;
	add_action( 'wp_head', 'homeland_theme_custom_styles' );


	// Custom Font

	if ( ! function_exists( 'homeland_custom_font_family' ) ) :
		function homeland_custom_font_family() {
			$homeland_theme_font = esc_attr( get_option('homeland_theme_font') );

			if($homeland_theme_font == "Open Sans") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic";
			elseif($homeland_theme_font == "Droid Sans") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Droid+Sans:400,700";
			elseif($homeland_theme_font == "Lato") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic";
			elseif($homeland_theme_font == "Raleway") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,900,800";
			elseif($homeland_theme_font == "PT Sans") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic";
			elseif($homeland_theme_font == "Noto Sans") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic";
			elseif($homeland_theme_font == "Oxygen") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Oxygen:400,300,700&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Source Sans Pro") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic&subset=latin,vietnamese,latin-ext";
			elseif($homeland_theme_font == "Muli") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic";
			elseif($homeland_theme_font == "Istok Web") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Istok+Web:400,700,400italic,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic";
			elseif($homeland_theme_font == "Puritan") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Puritan:400,700,400italic,700italic";
			elseif($homeland_theme_font == "Gafata") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Gafata&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Cambo") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Cambo";
			elseif($homeland_theme_font == "Voces") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Voces&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Duru Sans") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Duru+Sans&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Sintony") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Sintony:400,700&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Carrois Gothic") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Carrois+Gothic";
			elseif($homeland_theme_font == "Alegreya Sans") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Alegreya+Sans:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic&subset=latin,vietnamese,latin-ext";
			elseif($homeland_theme_font == "News Cycle") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=News+Cycle:400,700&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Dosis") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Abel") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Abel";
			elseif($homeland_theme_font == "Didact Gothic") :
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Didact+Gothic&subset=latin,greek-ext,greek,latin-ext,cyrillic,cyrillic-ext"; 
			elseif($homeland_theme_font == "Arimo") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic&subset=latin,cyrillic-ext,cyrillic,greek-ext,greek,vietnamese,latin-ext"; 
			elseif($homeland_theme_font == "Titillium Web") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900&subset=latin,latin-ext"; 
			elseif($homeland_theme_font == "Archivo Narrow") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic&subset=latin,latin-ext"; 
			elseif($homeland_theme_font == "Josefin Sans") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic";
			elseif($homeland_theme_font == "Asap") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Questrial") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Questrial";
			elseif($homeland_theme_font == "Pontano Sans") :
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Pontano+Sans&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Slabo") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Slabo+27px&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Oswald") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Oswald:400,300,700&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Montserrat") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Montserrat:400,700";
			elseif($homeland_theme_font == "Ubuntu") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic&subset=latin,cyrillic-ext,greek-ext,greek,latin-ext,cyrillic";
			elseif($homeland_theme_font == "Merriweather") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Cabin") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic";
			elseif($homeland_theme_font == "Hind") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700&subset=latin,devanagari,latin-ext";
			elseif($homeland_theme_font == "Gudea") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Gudea:400,700,400italic&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Noticia Text") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic&subset=latin,vietnamese,latin-ext";
			elseif($homeland_theme_font == "Nobile") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Nobile:400,400italic,700,700italic";
			elseif($homeland_theme_font == "Lora") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin,latin-ext,cyrillic";
			elseif($homeland_theme_font == "Inconsolata") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Inconsolata:400,700&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Quicksand") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Quicksand:300,400,700";
			elseif($homeland_theme_font == "Karla") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Monda") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Monda:400,700&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Crimson Text") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Crimson+Text:700italic,600,600italic,400,700,400italic";
			elseif($homeland_theme_font == "Exo") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic&subset=latin,latin-ext";
			elseif($homeland_theme_font == "EB Garamond") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=EB+Garamond&subset=latin,vietnamese,cyrillic-ext,latin-ext,cyrillic";
			elseif($homeland_theme_font == "Armata") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Armata&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Glegoo") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Glegoo:400,700&subset=latin,devanagari,latin-ext";
			elseif($homeland_theme_font == "Poppins") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300&subset=latin,devanagari,latin-ext";
			elseif($homeland_theme_font == "PT Serif") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic";
			elseif($homeland_theme_font == "Nixie One") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Nixie+One";
			elseif($homeland_theme_font == "Fira Sans") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Fira+Sans:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,greek,cyrillic-ext,latin-ext,cyrillic";
			elseif($homeland_theme_font == "Quattrocento Sans") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700,700italic&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Kreon") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Kreon:400,300,700";
			elseif($homeland_theme_font == "Varela Round") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Varela+Round";
			elseif($homeland_theme_font == "Bitter") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Bitter:400,400italic,700&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Bitter") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Bitter:400,400italic,700&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Catamaran") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Catamaran:400,100,200,300,500,600,700,800,900&subset=latin,tamil,latin-ext";
			elseif($homeland_theme_font == "Ruda") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Ruda:400,700,900&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Cambay") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Cambay:400,400italic,700,700italic&subset=latin,latin-ext,devanagari";
			elseif($homeland_theme_font == "Rajdhani") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Rajdhani:400,300,500,600,700&subset=latin,latin-ext,devanagari";
			elseif($homeland_theme_font == "Comfortaa") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Comfortaa:400,300,700&subset=latin,greek,cyrillic-ext,latin-ext,cyrillic";
			elseif($homeland_theme_font == "Poiret One") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Poiret+One&subset=latin,latin-ext,cyrillic";
			elseif($homeland_theme_font == "Work Sans") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Work+Sans:400,100,300,200,500,600,700,800,900&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Actor") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Actor";
			elseif($homeland_theme_font == "Rambla") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Rambla:400,400italic,700,700italic&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Khula") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Khula:400,600,700,800,300&subset=latin,devanagari,latin-ext";
			elseif($homeland_theme_font == "Share") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Share:400,400italic,700,700italic&subset=latin,latin-ext";
			elseif($homeland_theme_font == "Carme") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Carme";
			elseif($homeland_theme_font == "Rubik") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,hebrew,latin-ext";
			elseif($homeland_theme_font == "Gentium Basic") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Gentium+Basic:400,400i,700,700i&amp;subset=latin-ext";
			elseif($homeland_theme_font == "Sanchez") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Sanchez:400,400i&amp;subset=latin-ext";
			elseif($homeland_theme_font == "Hind Madurai") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Hind+Madurai:300,400,500,600,700&amp;subset=latin-ext,tamil";
			elseif($homeland_theme_font == "Jaldi") : 
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Jaldi:400,700&amp;subset=devanagari,latin-ext";
			else :
				$homeland_font_link = "https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic";
			endif;

			wp_enqueue_style( 'homeland-custom-font', $homeland_font_link );

		}
	endif;
	add_action( 'wp_enqueue_scripts', 'homeland_custom_font_family' );
?>
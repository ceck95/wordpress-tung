<?php
$theme_option = get_option(BUNCH_NAME.'_theme_options');  //printr($options);
$property_slug = dreamland_set($theme_option , 'property_permalink' , 'property') ;
$testimonial_slug = dreamland_set($theme_option , 'testimonial_permalink' , 'testimonials') ;
$faqs_slug = dreamland_set($theme_option , 'faqs_permalink' , 'faqs') ;
$gallery_slug = dreamland_set($theme_option , 'gallery_permalink' , 'gallery') ;
$options = array();
$options['bunch_property'] = array(
								'labels' => array(__('Property', BUNCH_NAME), __('Property', BUNCH_NAME)),
								'slug' => $property_slug ,
								'label_args' => array('menu_name' => __('Property', BUNCH_NAME)),
								'supports' => array( 'title' , 'editor' , 'thumbnail' ),
								'label' => __('Property', BUNCH_NAME),
								'args'=>array(
										'menu_icon'=>'dashicons-admin-multisite' , 
										'taxonomies'=>array('property_category')
								)
							);							
$options['bunch_gallery'] = array(
								'labels' => array(__('Gallery', BUNCH_NAME), __('Gallery', BUNCH_NAME)),
								'slug' => $gallery_slug ,
								'label_args' => array('menu_name' => __('Gallaries', BUNCH_NAME)),
								'supports' => array( 'title' , 'editor' , 'thumbnail' ),
								'label' => __('Gallery', BUNCH_NAME),
								'args'=>array(
										'menu_icon'=>'dashicons-format-gallery' , 
										'taxonomies'=>array('gallery_category')
								)
							);
							
$options['bunch_testimonials'] = array(
								'labels' => array(__('Testimonial', BUNCH_NAME), __('Testimonial', BUNCH_NAME)),
								'slug' => $testimonial_slug ,
								'label_args' => array('menu_name' => __('Testimonials', BUNCH_NAME)),
								'supports' => array( 'title' , 'editor' , 'thumbnail' ),
								'label' => __('Testimonial', BUNCH_NAME),
								'args'=>array(
										'menu_icon'=>'dashicons-testimonial' , 
										'taxonomies'=>array('testimonials_category')
								)
							);
$options['bunch_faqs'] = array(
								'labels' => array(__('FAQ', BUNCH_NAME), __('FAQ', BUNCH_NAME)),
								'slug' => $faqs_slug ,
								'label_args' => array('menu_name' => __('FAQs', BUNCH_NAME)),
								'supports' => array( 'title' , 'editor' , 'thumbnail' ),
								'label' => __('FAQ', BUNCH_NAME),
								'args'=>array(
										'menu_icon'=>'dashicons-sos', 
										'taxonomies'=>array('faqs_category')
								)
							);

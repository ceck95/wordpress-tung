<?php
$bunch_sc = array();

$bunch_sc['bunch_about_properties']	=	array(
			"name" => __("About Properties", BUNCH_NAME),
			"base" => "bunch_about_properties",
			"class" => "",
			"category" => __('Dreamland', BUNCH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_parent" => array('only' => 'bunch_about_features'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => false,
			'description' => __('Add Videos as Slider', BUNCH_NAME),
			"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Title", BUNCH_NAME),
						   "param_name" => "title",
						   "description" => __("Enter the Section Title to Show.", BUNCH_NAME)
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Green Title", BUNCH_NAME),
						   "param_name" => "g_title",
						   "description" => __("Enter the Section Title to Show.", BUNCH_NAME)
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Text", BUNCH_NAME),
						   "param_name" => "text",
						   "description" => __("Enter the Section Content.", BUNCH_NAME)
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Front Image", BUNCH_NAME),
						   "param_name" => "img",
						   "description" => __("Enter the Front Image.", BUNCH_NAME)
						),
			
			),
			"js_view" => 'VcColumnView'
		);
$bunch_sc['bunch_about_features']	=	array(
					"name" => __("About Features", BUNCH_NAME),
					"base" => "bunch_about_features",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'icon-wpb-layer-shape-text' ,
					"as_child" => array('only' => 'bunch_about_properties'),// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
					"content_element" => true,
					"show_settings_on_create" => true,
					'description' => __('Add Video Slides.', BUNCH_NAME),
					"params" => array(
						
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Icon", BUNCH_NAME),
						   "param_name" => "icon",
						   "value" => (array)vp_get_fontawesome_icons(),
						   "description" => __("Choose Icon for Process", BUNCH_NAME)
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Title", BUNCH_NAME),
						   "param_name" => "title",
						   "description" => __("Enter the Section Title to show.", BUNCH_NAME)
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Quantity Figures", BUNCH_NAME),
						   "param_name" => "quantity",
						   "description" => __("Enter the Section Numbers to show.", BUNCH_NAME)
						),
					),
				);																

$bunch_sc['bunch_property_detail']	=	array(
					"name" => __("Property Detail", BUNCH_NAME),
					"base" => "bunch_property_detail",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Property Detail.', BUNCH_NAME),
					"params" => array(
					   	array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Background image', BUNCH_NAME ),
						   "param_name" => "img",
						   "description" => __('Enter Background image to show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title of Property Detail to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Property to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', BUNCH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'property_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
					)
				);				
$bunch_sc['bunch_call_to_action']	=	array(
					"name" => __("Call to Action", BUNCH_NAME),
					"base" => "bunch_call_to_action",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show call to action', BUNCH_NAME),
					"params" => array(
					   	
					 	array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Background image', BUNCH_NAME ),
						   "param_name" => "img",
						   "description" => __('Enter the Background image', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter section content', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link', BUNCH_NAME ),
						   "param_name" => "btn_link",
						   "description" => __('Enter the button link', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Text', BUNCH_NAME ),
						   "param_name" => "btn_text",
						   "description" => __('Enter the Button text', BUNCH_NAME )
						),
					)
				);
$bunch_sc['bunch_about_agent']	=	array(
					"name" => __("About Agent", BUNCH_NAME),
					"base" => "bunch_about_agent",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show About Agent', BUNCH_NAME),
					"params" => array(
					   	
					 	array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Background image', BUNCH_NAME ),
						   "param_name" => "img",
						   "description" => __('Enter the Background image', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Section Title to show', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Green Title', BUNCH_NAME ),
						   "param_name" => "g_title",
						   "description" => __('Enter Title to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Sub Title', BUNCH_NAME ),
						   "param_name" => "sub_title",
						   "description" => __('Enter Section Sub Title', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Designation', BUNCH_NAME ),
						   "param_name" => "designation",
						   "description" => __('Enter The Designation', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Text', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Address', BUNCH_NAME ),
						   "param_name" => "address",
						   "description" => __('Enter the Address Section', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Phone', BUNCH_NAME ),
						   "param_name" => "phone",
						   "description" => __('Enter the Phone of Section', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link', BUNCH_NAME ),
						   "param_name" => "btn_link",
						   "description" => __('Enter the button link', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Text', BUNCH_NAME ),
						   "param_name" => "btn_text",
						   "description" => __('Enter the Button text', BUNCH_NAME )
						),
					)
				);				
$bunch_sc['bunch_testimonial']	=	array(
					"name" => __("Testimonial", BUNCH_NAME),
					"base" => "bunch_testimonial",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show testimonials.', BUNCH_NAME),
					"params" => array(
					
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Background image', BUNCH_NAME ),
						   "param_name" => "image",
						   "description" => __('Enter the Left Background image', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title of testimonials to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Content', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Content of testimonials to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of testimonials to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', BUNCH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', BUNCH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'testimonials_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
					)
				);				
$bunch_sc['bunch_faq']	=	array(
					"name" => __("FAQs", BUNCH_NAME),
					"base" => "bunch_faq",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show FAQs.', BUNCH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title of faqs to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Green Title', BUNCH_NAME ),
						   "param_name" => "g_title",
						   "description" => __('Enter the title of faqs to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter the text of faqs to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text limit', BUNCH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit of faqs to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of faqs to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', BUNCH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'faqs_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
					)
				);	
$bunch_sc['bunch_map']	=	array(
					"name" => __("Google map", BUNCH_NAME),
					"base" => "bunch_map",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Google map.', BUNCH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Lattitude', BUNCH_NAME ),
						   "param_name" => "lat",
						   "description" => __('Enter Lattitude for map', BUNCH_NAME ),
						   "default" => '-37.817085',
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Longitude', BUNCH_NAME ),
						   "param_name" => "long",
						   "description" => __('Enter Longitude for map', BUNCH_NAME ),
						   "default" => '144.955631',
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Mark Lattitude', BUNCH_NAME ),
						   "param_name" => "mark_lat",
						   "description" => __('Enter Mark Lattitude for map', BUNCH_NAME ),
						   "default" => '-37.817085',
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Mark Longitude', BUNCH_NAME ),
						   "param_name" => "mark_long",
						   "description" => __('Enter Mark Longitude for map', BUNCH_NAME ),
						   "default" => '144.955631',
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Mark Title', BUNCH_NAME ),
						   "param_name" => "mark_title",
						   "description" => __('Enter Mark Title for map', BUNCH_NAME ),
						   "default" => 'Envato',
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Mark Address', BUNCH_NAME ),
						   "param_name" => "mark_address",
						   "description" => __('Enter Mark Address for map', BUNCH_NAME ),
						   "default" => ' Melbourne VIC 3000, Australia',
						),
					)
				);	
$bunch_sc['bunch_contact_us1']	=	array(
					"name" => __("Contact Version 1", BUNCH_NAME),
					"base" => "bunch_contact_us1",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show call Contact Version 1', BUNCH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Background image', BUNCH_NAME ),
						   "param_name" => "img",
						   "description" => __('Enter the Left Background image', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter section Title', BUNCH_NAME )
						),
					 	array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter section content', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Address', BUNCH_NAME ),
						   "param_name" => "address",
						   "description" => __('Enter the Address', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Phone', BUNCH_NAME ),
						   "param_name" => "phone",
						   "description" => __('Enter the Phone', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Mail', BUNCH_NAME ),
						   "param_name" => "mail",
						   "description" => __('Enter the Mail', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Form Title', BUNCH_NAME ),
						   "param_name" => "form_title",
						   "description" => __('Enter the Form Title', BUNCH_NAME )
						),
						array(
						   "type" => "textarea_raw_html",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Contact Form7 Shortcode', BUNCH_NAME ),
						   "param_name" => "contact_form_one",
						   "description" => __('Enter Contact Form7 Shortcode', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Footer Text', BUNCH_NAME ),
						   "param_name" => "footer_text",
						   "description" => __('Enter the Footer Text', BUNCH_NAME )
						),
					)
				);	
$bunch_sc['bunch_parallex']	=	array(
					"name" => __("Parallex", BUNCH_NAME),
					"base" => "bunch_parallex",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Parallex', BUNCH_NAME),
					"params" => array(
					   	
					 	array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Background image', BUNCH_NAME ),
						   "param_name" => "img",
						   "description" => __('Enter the Background image', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter section title', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter section content', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link', BUNCH_NAME ),
						   "param_name" => "btn_link",
						   "description" => __('Enter the button link', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Text', BUNCH_NAME ),
						   "param_name" => "btn_text",
						   "description" => __('Enter the Button text', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link 1', BUNCH_NAME ),
						   "param_name" => "btn_link1",
						   "description" => __('Enter the button link', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Text 1', BUNCH_NAME ),
						   "param_name" => "btn_text1",
						   "description" => __('Enter the Button text', BUNCH_NAME )
						),
					)
				);
$bunch_sc['bunch_blog']	=	array(
					"name" => __("Blog", BUNCH_NAME),
					"base" => "bunch_blog",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show property.', BUNCH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', BUNCH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter Text Limit to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Property to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', BUNCH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
					)
				);				
$bunch_sc['bunch_testimonial_v2']	=	array(
					"name" => __("Testimonial V2", BUNCH_NAME),
					"base" => "bunch_testimonial_v2",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show testimonials V2.', BUNCH_NAME),
					"params" => array(
					
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title of testimonials to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of testimonials to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', BUNCH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', BUNCH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'testimonials_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
					)
				);		
$bunch_sc['bunch_videos']	=	array(
			"name" => __("Videos", BUNCH_NAME),
			"base" => "bunch_videos",
			"class" => "",
			"category" => __('Dreamland', BUNCH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_parent" => array('only' => 'bunch_videos_slide'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => false,
			'description' => __('Add Videos as Slider', BUNCH_NAME),
			"params" => array(
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Text", BUNCH_NAME),
						   "param_name" => "text",
						   "description" => __("Enter the Section Content.", BUNCH_NAME)
						),
			
			),
			"js_view" => 'VcColumnView'
		);
$bunch_sc['bunch_videos_slide']	=	array(
					"name" => __("Videos Slide", BUNCH_NAME),
					"base" => "bunch_videos_slide",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'icon-wpb-layer-shape-text' ,
					"as_child" => array('only' => 'bunch_videos'),// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
					"content_element" => true,
					"show_settings_on_create" => true,
					'description' => __('Add Video Slides.', BUNCH_NAME),
					"params" => array(
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Image', BUNCH_NAME ),
						   "param_name" => "img",
						   "description" => __('Enter the Main Slide image', BUNCH_NAME )
							),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Thumb image', BUNCH_NAME ),
						   "param_name" => "thumb_img",
						   "description" => __('Enter the Thumb image', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Video Link", BUNCH_NAME),
						   "param_name" => "video_link",
						   "description" => __("Enter the Link of Videos to show.", BUNCH_NAME)
						),
						
					),
				);																
$bunch_sc['bunch_about']	=	array(
					"name" => __("About Us", BUNCH_NAME),
					"base" => "bunch_about",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show About.', BUNCH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "dark_title",
						   "description" => __('Enter Title to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Green Title', BUNCH_NAME ),
						   "param_name" => "title_green",
						   "description" => __('Enter Title to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Light Title', BUNCH_NAME ),
						   "param_name" => "light_title",
						   "description" => __('Enter Title to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Content to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('image', BUNCH_NAME ),
						   "param_name" => "img",
						   "description" => __('Enter the Section image', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', BUNCH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter Content limit to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Property to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', BUNCH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'property_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
					)
				);	
$bunch_sc['bunch_gallery_fullwidth']	=	array(
					"name" => __("Gallery Full Width", BUNCH_NAME),
					"base" => "bunch_gallery_fullwidth",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Gallery Fullwidth.', BUNCH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Title of Gallery to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Green Title', BUNCH_NAME ),
						   "param_name" => "g_title",
						   "description" => __('Enter The Green Title of Gallery to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter The Section Content of Gallery to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter The Number of gallery posts to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Excluded Category IDs', BUNCH_NAME ),
						   "param_name" => "exclude_cats",
						   "description" => __('Enter excluded cats ids to remove.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
					)
				);	
$bunch_sc['bunch_contact_info']	=	array(
					"name" => __("Contact Information", BUNCH_NAME),
					"base" => "bunch_contact_info",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show call to action', BUNCH_NAME),
					"params" => array(
					   	
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter section Title', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter the Section Text', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Address', BUNCH_NAME ),
						   "param_name" => "address",
						   "description" => __('Enter the Address', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Phone', BUNCH_NAME ),
						   "param_name" => "phone",
						   "description" => __('Enter the Phone', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Email', BUNCH_NAME ),
						   "param_name" => "mail",
						   "description" => __('Enter the Mail Address', BUNCH_NAME )
						),
					)
				);	
$bunch_sc['bunch_contact_us2']	=	array(
					"name" => __("Contact Version 2", BUNCH_NAME),
					"base" => "bunch_contact_us2",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show call Contact Version 2', BUNCH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Background image', BUNCH_NAME ),
						   "param_name" => "img",
						   "description" => __('Enter the Left Background image', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter section Title', BUNCH_NAME )
						),
					 	array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter section content', BUNCH_NAME )
						),
						array(
						   "type" => "textarea_raw_html",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Contact Form7 Shortcode', BUNCH_NAME ),
						   "param_name" => "contact_form_two",
						   "description" => __('Enter Contact Form7 Shortcode', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Footer Text', BUNCH_NAME ),
						   "param_name" => "footer_text",
						   "description" => __('Enter the Footer Text', BUNCH_NAME )
						),
					)
				);																													
$bunch_sc['bunch_gallery']	=	array(
					"name" => __("Gallery 3 column", BUNCH_NAME),
					"base" => "bunch_gallery",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Gallery Boxed Style.', BUNCH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter The Section Content of Gallery to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Excluded Category IDs', BUNCH_NAME ),
						   "param_name" => "exclude_cats",
						   "description" => __('Enter excluded cats ids to remove.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
					)
				);
$bunch_sc['bunch_call_to_action2']	=	array(
					"name" => __("Call to Action 2", BUNCH_NAME),
					"base" => "bunch_call_to_action2",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show call to action 2', BUNCH_NAME),
					"params" => array(
					   	
					 	array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Background image', BUNCH_NAME ),
						   "param_name" => "img",
						   "description" => __('Enter the Background image', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter section content', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link', BUNCH_NAME ),
						   "param_name" => "btn_link",
						   "description" => __('Enter the button link', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Text', BUNCH_NAME ),
						   "param_name" => "btn_text",
						   "description" => __('Enter the Button text', BUNCH_NAME )
						),
					)
				);
$bunch_sc['bunch_about_property2']	=	array(
					"name" => __("About Property 3 Col", BUNCH_NAME),
					"base" => "bunch_about_property2",
					"class" => "",
					"category" => __('Dreamland', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show property.', BUNCH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Green Title', BUNCH_NAME ),
						   "param_name" => "g_title",
						   "description" => __('Enter Title to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Content to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', BUNCH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter Text Limit to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Property to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', BUNCH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'property_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
					)
				);												
/*----------------------------------------------------------------------------*/
$bunch_sc = apply_filters( '_bunch_shortcodes_array', $bunch_sc );
	
return $bunch_sc;
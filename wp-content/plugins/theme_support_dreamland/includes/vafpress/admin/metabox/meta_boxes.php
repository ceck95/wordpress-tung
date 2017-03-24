<?php
$options = array();
$options[] = array(
	'id'          => '_bunch_layout_settings',
	'types'       => array('post', 'page', 'product', 'bunch_services', 'bunch_sponsors', ),
	'title'       => __('Layout Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
					
					array(
						'type' => 'radioimage',
						'name' => 'layout',
						'label' => __('Page Layout', BUNCH_NAME),
						'description' => __('Choose the layout for blog pages', BUNCH_NAME),
						'items' => array(
							array(
								'value' => 'left',
								'label' => __('Left Sidebar', BUNCH_NAME),
								'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cl.png',
							),
							array(
								'value' => 'right',
								'label' => __('Right Sidebar', BUNCH_NAME),
								'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cr.png',
							),
							array(
								'value' => 'full',
								'label' => __('Full Width', BUNCH_NAME),
								'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/1col.png',
							),
						),
					),
					
					array(
						'type' => 'select',
						'name' => 'sidebar',
						'label' => __('Sidebar', BUNCH_NAME),
						'default' => '',
						'items' => bunch_get_sidebars(true)	
					),
				),
);
$options[] = array(
	'id'          => '_bunch_header_settings',
	'types'       => array('post' ,'page', 'bunch_sponsors', 'bunch_events'),
	'title'       => __('Header Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
					
					array(
						'type' => 'textbox',
						'name' => 'page_title',
						'label' => __('Page Title', BUNCH_NAME),
						'description' => __('Enter Page title or leave it empty to use default title', BUNCH_NAME),
					),
					array(
						'type' => 'upload',
						'name' => 'page_bg',
						'label' => __('Page Background', BUNCH_NAME),
						'description' => __('Enter banner background.', BUNCH_NAME),
					),
					array(
						'type' => 'toggle',
						'name' => 'breadcrumb',
						'label' => __('Enable Breadcrumb', BUNCH_NAME),
						'description' => __('Enable / disable breadcrumb area in header for vc template', BUNCH_NAME),
					),
					array(
						'type' => 'toggle',
						'name' => 'vc_footer',
						'label' => __('Enable VC Footer', BUNCH_NAME),
						'description' => __('Enable / disable footer for vc template', BUNCH_NAME),
					),
					
				),
);
/*$options[] =  array(
	'id'          => _WSH()->set_meta_key('post'),
	'types'       => array('post'),
	'title'       => __('Post Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(		
					array(
					'type' => 'select',
					'name' => 'arrow_view',
					'label' => __('Arrow Layout for "Top Blog Posts" shortcode', BUNCH_NAME),
					'default' => 'img_left',
					'items' => array(
									array(
										'value' => 'img_left',
										'label' => __('Image Left', BUNCH_NAME),
									),
									array(
										'value' => 'img_right',
										'label' => __('Image Right', BUNCH_NAME),
									),
									array(
										'value' => 'img_top',
										'label' => __('Image Top', BUNCH_NAME),
									),
								),
					),
					array(
						'type' => 'textarea',
						'name' => 'description',
						'label' => __('Post Description', BUNCH_NAME),
						'default' => '',
						'description' => __('Enter the post description for detail page.', BUNCH_NAME)
					),
					array(
						'type' => 'textarea',
						'name' => 'video',
						'label' => __('Video Embed Code', BUNCH_NAME),
						'default' => '',
						'description' => __('If post format is video then this embed code will be used in content', BUNCH_NAME)
					),
					array(
						'type' => 'textarea',
						'name' => 'audio',
						'label' => __('Audio Embed Code', BUNCH_NAME),
						'default' => '',
						'description' => __('If post format is AUDIO then this embed code will be used in content', BUNCH_NAME)
					),
					array(
						'type' => 'textarea',
						'name' => 'quote',
						'label' => __('Quote', BUNCH_NAME),
						'default' => '',
						'description' => __('If post format is quote then the content in this textarea will be displayed', BUNCH_NAME)
					),
							
					
			),
);*/
/* Page options */
/** Team Options*/
/** Property Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_property'),
	'types'       => array( 'bunch_property' ),
	'title'       => __('Property Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
				array(
					'type' => 'textbox',
					'name' => 'numbers',
					'label' => __('Numbers', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'ext_url',
					'label' => __('Read more link', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type' => 'fontawesome',
					'name' => 'social_icon',
					'label' => __('Social Icon', BUNCH_NAME),
					'default' => '',
				),
				
			),
);
/** Gallery Options**/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_schedule'),
	'types'       => array('bunch_schedule'),
	'title'       => __('Schedule Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
			array(
					'type' => 'upload',
					'name' => 'schedule_pdf',
					'label' => __('Schedule PDF', BUNCH_NAME),
					'default' => '',
				),
			array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'bunch_columns',
					'title'     => __('Schedule Columns', BUNCH_NAME),
					'fields'    => array(
						
						array(
							'type' => 'textbox',
							'name' => 'column_title',
							'label' => __('Column Title', BUNCH_NAME),
							'default' => '',
						),
						array(
							'type' => 'date',
							'name' => 'column_date',
							'label' => __('Column Date', BUNCH_NAME),
							'format' => 'dd-M-yy',
							'default' => '',
						),
						array(
							'type' => 'sorter',
							'name' => 'sorting_events',
							'label' => __('Choose Events', BUNCH_NAME),
							'description' => __('Choose Events to list in column', BUNCH_NAME),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value' => 'vp_get_events',
									),
								),
							),
						),
					),
				),
	),
);
/** Team Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_team'),
	'types'       => array('bunch_team'),
	'title'       => __('Team Options', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
	
						
				array(
					'type' => 'textbox',
					'name' => 'designation',
					'label' => __('Designation', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'speaker_phone',
					'label' => __('Phone', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'speaker_email',
					'label' => __('Email', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'speaker_website',
					'label' => __('Website', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'bunch_team_social',
					'title'     => __('Social Profile', BUNCH_NAME),
					'fields'    => array(
						
						array(
							'type' => 'fontawesome',
							'name' => 'social_icon',
							'label' => __('Social Icon', BUNCH_NAME),
							'default' => '',
						),
						
						array(
							'type' => 'textbox',
							'name' => 'social_link',
							'label' => __('Link', BUNCH_NAME),
							'default' => '',
							
						),
						
						
					),
				),
				array(
					'type' => 'upload',
					'name' => 'speaker_schedule_pdf',
					'label' => __('Schedule PDF', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'bunch_columns',
					'title'     => __('Schedule Columns', BUNCH_NAME),
					'fields'    => array(
						
						array(
							'type' => 'textbox',
							'name' => 'column_title',
							'label' => __('Column Title', BUNCH_NAME),
							'default' => '',
						),
						array(
							'type' => 'date',
							'name' => 'column_date',
							'label' => __('Column Date', BUNCH_NAME),
							'format' => 'dd-M-yy',
							'default' => '',
						),
						array(
							'type' => 'sorter',
							'name' => 'sorting_events',
							'label' => __('Choose Events', BUNCH_NAME),
							'description' => __('Choose Events to list in column', BUNCH_NAME),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value' => 'vp_get_events',
									),
								),
							),
						),
					),
				),
				array(
					'type' => 'toggle',
					'name' => 'show_call_out',
					'label' => __( 'Show/Hide Call To Action', BUNCH_NAME ),
					'default' => 0,
					'description' => __('Show/Hide Call To Action', BUNCH_NAME)
					
				),
				array(
					'type' => 'group',
					'title' => __('Call to action Settings', BUNCH_NAME),
					'name' => 'call_to_action_settings',
					'dependency' => array(
						'field' => 'show_call_out',
						'function' => 'vp_dep_boolean',
					),
					'fields' => array(
						array(
							'type' => 'textbox',
							'name' => 'call_title',
							'label' => __( 'Title', BUNCH_NAME ),
							'description' => __( 'Enter the Title for call to action', BUNCH_NAME ),
							'default' => '' 
						),
						array(
							'type' => 'textarea',
							'name' => 'call_text',
							'label' => __( 'Text', BUNCH_NAME ),
							'description' => __( 'Enter text', BUNCH_NAME ),
							'default' => '' 
						),
						array(
							'type' => 'textbox',
							'name' => 'btn_link',
							'label' => __('Button Link', BUNCH_NAME),
							'description' => __('Enter the Link for Button', BUNCH_NAME),
							'default' => '#'
						),
						array(
							'type' => 'textbox',
							'name' => 'btn_text',
							'label' => __('Button Text', BUNCH_NAME),
							'description' => __('Enter the Button Text', BUNCH_NAME),
							'default' => ''
						),
						array(
							'type' => 'upload',
							'name' => 'background_img',
							'label' => __('Background image', BUNCH_NAME),
							'description' => __('Enter the Background image', BUNCH_NAME),
							'default' => ''
						),
						
					),
				),
	),
);
/** Sponsors Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_sponsors'),
	'types'       => array('bunch_sponsors'),
	'title'       => __('Sponsors Options', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
				array(
					'type' => 'textbox',
					'name' => 'type',
					'label' => __('Sponsor Type', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'website',
					'label' => __('Sponsor Websit', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'twitter_link',
					'label' => __('Sponsor Twitter Profile', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'facebook_link',
					'label' => __('Sponsor Facebook Profile', BUNCH_NAME),
					'default' => '',
				),
	),
);
/** Testimonial Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_testimonials'),
	'types'       => array('bunch_testimonials'),
	'title'       => __('Testimonials Options', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
				array(
					'type' => 'textbox',
					'name' => 'designation',
					'label' => __('Designation', BUNCH_NAME),
					'default' => 'Consultant',
				),
				array(
					'type' => 'textbox',
					'name' => 'company',
					'label' => __('Company', BUNCH_NAME),
					'default' => '',
				)
	),
);
/** Events Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_events'),
	'types'       => array('bunch_events'),
	'title'       => __('Events Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
					
					array(
						'type' => 'date',
						'name' => 'event_date',
						'label' => __('Event Date', BUNCH_NAME),
						'format' => 'dd-M-yy',
						'default' => '-1W',
					),
					array(
						'type' => 'textbox',
						'name' => 'start_time',
						'label' => __('Event Start Time', BUNCH_NAME),
						'default' => '',
					),
					array(
						'type' => 'textbox',
						'name' => 'end_time',
						'label' => __('Event End Time', BUNCH_NAME),
						'default' => '',
					),
					array(
						'type' => 'sorter',
						'name' => 'sorting_speakers',
						'label' => __('Choose Speakers', BUNCH_NAME),
						'description' => __('Choose Speakers of event', BUNCH_NAME),
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value' => 'vp_get_speakers',
								),
							),
						),
					),
					array(
						'type' => 'upload',
						'name' => 'pdf_link',
						'label' => __('PDF Document', BUNCH_NAME),
						'default' => '',
					),
					array(
						'type' => 'toggle',
						'name' => 'show_call_out',
						'label' => __( 'Show/Hide Call To Action', BUNCH_NAME ),
						'default' => 0,
						'description' => __('Show/Hide Call To Action', BUNCH_NAME)
						
					),
					array(
						'type' => 'group',
						'title' => __('Call to action Settings', BUNCH_NAME),
						'name' => 'call_to_action_settings',
						'dependency' => array(
							'field' => 'show_call_out',
							'function' => 'vp_dep_boolean',
						),
						'fields' => array(
							array(
								'type' => 'textbox',
								'name' => 'call_title',
								'label' => __( 'Title', BUNCH_NAME ),
								'description' => __( 'Enter the Title for call to action', BUNCH_NAME ),
								'default' => '' 
							),
							array(
								'type' => 'textarea',
								'name' => 'call_text',
								'label' => __( 'Text', BUNCH_NAME ),
								'description' => __( 'Enter text', BUNCH_NAME ),
								'default' => '' 
							),
							array(
								'type' => 'textbox',
								'name' => 'btn_link',
								'label' => __('Button Link', BUNCH_NAME),
								'description' => __('Enter the Link for Button', BUNCH_NAME),
								'default' => '#'
							),
							array(
								'type' => 'textbox',
								'name' => 'btn_text',
								'label' => __('Button Text', BUNCH_NAME),
								'description' => __('Enter the Button Text', BUNCH_NAME),
								'default' => ''
							),
							array(
								'type' => 'upload',
								'name' => 'background_img',
								'label' => __('Background image', BUNCH_NAME),
								'description' => __('Enter the Background image', BUNCH_NAME),
								'default' => ''
							),
							
						),
					),
					array(
							'type' => 'textbox',
							'name' => 'num_participants',
							'label' => __('Number of participents', BUNCH_NAME),
							'description' => __('Enter the Number of participents', BUNCH_NAME),
							'default' => '#'
						),
					
	),
);
/** Ticket Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_tickets'),
	'types'       => array('bunch_tickets'),
	'title'       => __('Tickets Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
					
					array(
						'type' => 'date',
						'name' => 'event_date',
						'label' => __('Event Date', BUNCH_NAME),
						'format' => 'dd-M-yy',
						'default' => '',
					),
					array(
						'type' => 'textbox',
						'name' => 'event_place',
						'label' => __('Event Place', BUNCH_NAME),
						'default' => '',
					),
					array(
						'type' => 'textbox',
						'name' => 'ticket_url',
						'label' => __('Book Button link', BUNCH_NAME),
						'default' => '',
					),
						
									
	),
);
// faqs
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_faqs'),
	'types'       => array( 'bunch_faqs' ),
	'title'       => __('FAQs Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
				array(
					'type' => 'textbox',
					'name' => 'faq_subtitle',
					'label' => __('FAQs subtitle', BUNCH_NAME),
					'default' => '',
				),
				
			),
);
/**
 * EOF
 */
 
 
 return $options; 
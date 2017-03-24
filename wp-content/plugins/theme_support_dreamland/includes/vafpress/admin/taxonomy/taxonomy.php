<?php
$options = array();
$options[] =  array(
	'id'          => _WSH()->set_term_key('category'),
	'types'       => array('category', 'post_tag'),
	'title'       => __('Post Category Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
					array(
						'type' => 'textbox',
						'name' => 'cat_title',
						'label' => __('Page Title', BUNCH_NAME),
						//'description' => __('Enter meta title or leave it empty to use default title', BUNCH_NAME),
					),
					array(
						'type' => 'select',
						'name' => 'cat_blog_style',
						'label' => __( 'Blog style', BUNCH_NAME ),
						'description' => __( 'Choose Blog style', BUNCH_NAME ),
						'items' => array(
							 array(
								 'value' => 'blog_style1',
								'label' => __( 'Blog style 1', BUNCH_NAME ),
							),
							array(
								 'value' => 'blog_style2',
								'label' => __( 'Blog style 2', BUNCH_NAME ),
							) 
						),
						'default' => 'blog_style1' 
					),
					array(
						'type' => 'radioimage',
						'name' => 'layout',
						'label' => __('Page Layout', BUNCH_NAME),
						//'description' => __('Choose the layout for blog pages', BUNCH_NAME),
						'items' => array(
							array(
								'value' => 'left',
								'label' => __('Left Sidebar', BUNCH_NAME),
								'img' => get_template_directory_uri().'/images/vafpress/2cl.png',
							),
							array(
								'value' => 'right',
								'label' => __('Right Sidebar', BUNCH_NAME),
								'img' => get_template_directory_uri().'/images/vafpress/2cr.png',
							),
							array(
								'value' => 'full',
								'label' => __('Full Width', BUNCH_NAME),
								'img' => get_template_directory_uri().'/images/vafpress/1col.png',
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
$options[] =  array(
	'id'          => _WSH()->set_term_key('category'),
	'types'       => array('product_cat', 'product_tag'),
	'title'       => __('Post Category Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
	
					array(
						'type' => 'textbox',
						'name' => 'header_title',
						'label' => __( 'Header Title', BUNCH_NAME ),
					),
					array(
						'type' => 'upload',
						'name' => 'header_img',
						'label' => __( 'Header image', BUNCH_NAME ),
					),
					array(
						'type' => 'radioimage',
						'name' => 'layout',
						'label' => __('Page Layout', BUNCH_NAME),
						//'description' => __('Choose the layout for blog pages', BUNCH_NAME),
						'items' => array(
							array(
								'value' => 'left',
								'label' => __('Left Sidebar', BUNCH_NAME),
								'img' => get_template_directory_uri().'/includes/vafpress/public/img/2cl.png',
							),
							array(
								'value' => 'right',
								'label' => __('Right Sidebar', BUNCH_NAME),
								'img' => get_template_directory_uri().'/includes/vafpress/public/img/2cr.png',
							),
							array(
								'value' => 'full',
								'label' => __('Full Width', BUNCH_NAME),
								'img' => get_template_directory_uri().'/includes/vafpress/public/img/1col.png',
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
 return $options;
/**
 * EOF
 */
 
 

<?php
add_action('after_setup_theme', 'dreamland_theme_setup');
function dreamland_theme_setup()
{
	global $wp_version;
	if(!defined('BUNCH_VERSION')) define('BUNCH_VERSION', '1.0');
	if( !defined( 'BUNCH_NAME' ) ) define( 'BUNCH_NAME', 'wp_dreamland' );
	if( !defined( 'BUNCH_ROOT' ) ) define('BUNCH_ROOT', get_template_directory().'/');
	if( !defined( 'BUNCH_URL' ) ) define('BUNCH_URL', get_template_directory_uri().'/');	
	include_once get_template_directory() . '/includes/loader.php';
	
	load_theme_textdomain('dreamland', get_template_directory() . '/languages');
	//ADD THUMBNAIL SUPPORT
	add_theme_support('post-thumbnails');
	add_theme_support('menus'); //Add menu support
	add_theme_support('automatic-feed-links'); //Enables post and comment RSS feed links to head.
	add_theme_support('widgets'); //Add widgets and sidebar support
	add_theme_support( 'woocommerce' );
	add_theme_support( "title-tag" );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	/** Register wp_nav_menus */
	if(function_exists('register_nav_menu'))
	{
		register_nav_menus(
			array(
				/** Register Main Menu location header */
				'main_menu' => esc_html__('Main Menu', 'dreamland'),
				'onepage_menu' => esc_html__('Onepage Menu', 'dreamland'),
			)
		);
	}
	if ( ! isset( $content_width ) ) $content_width = 960;
	add_image_size( 'dreamland_size_1', 90, 90, true ); //'90x90'
	add_image_size( 'dreamland_size_2', 230, 170, true ); //'230x170 blog'
	add_image_size( 'dreamland_size_3', 70, 70, true ); //'70x70'
	add_image_size( 'dreamland_size_4', 316, 253, true ); //'316x253'
	add_image_size( 'dreamland_size_5', 370, 326, true ); //'370x326'
	add_image_size( 'dreamland_size_6', 1170, 558, true ); //'870x558 blogpage'
	add_image_size( 'dreamland_size_7', 625, 401, true ); //'625x401 blogpage two column'
	
	
	
	
}
function dreamland_widget_init()
{
	global $wp_registered_sidebars;
	$theme_options = _WSH()->option();
	if( class_exists( 'Bunch_Recent_Post_With_Image' ) )register_widget( 'Bunch_Recent_Post_With_Image' );
	if( class_exists( 'Bunch_Gallery_Post' ) )register_widget( 'Bunch_Gallery_Post' );
	
	
	
	register_sidebar(array(
	  'name' => esc_html__( 'Default Sidebar', 'dreamland' ),
	  'id' => 'default-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'dreamland' ),
	  'class'=>'',
	  'before_widget'=>'<div id="%1$s" class="widget sidebar_widget %2$s">',
	  'after_widget'=>'</div>',
	  'before_title' => '<div class="sidebar-title"><h3>',
	  'after_title' => '</h3></div>'
	));
	register_sidebar(array(
	  'name' => esc_html__( 'Footer Sidebar', 'dreamland' ),
	  'id' => 'footer-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown in Footer Area.', 'dreamland' ),
	  'class'=>'',
	  'before_widget'=>'<article id="%1$s"  class="col-lg-3 col-md-3 col-sm-6 col-xs-12 bottom_area_colum_1 wow fadeInUp %2$s">',
	  'after_widget'=>'</article>',
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));
	
	register_sidebar(array(
	  'name' => esc_html__( 'Blog Listing', 'dreamland' ),
	  'id' => 'blog-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'dreamland' ),
	  'class'=>'',
	  'before_widget'=>'<div id="%1$s" class="widget sidebar_widget %2$s">',
	  'after_widget'=>'</div>',
	  'before_title' => '<div class="sidebar-title"><h3>',
	  'after_title' => '</h3></div>'
	));
	if( !is_object( _WSH() )  )  return;
	$sidebars = dreamland_set(dreamland_set( $theme_options, 'dynamic_sidebar' ) , 'dynamic_sidebar' ); 
	foreach( array_filter((array)$sidebars) as $sidebar)
	{
		if(dreamland_set($sidebar , 'topcopy')) continue ;
		
		$name = dreamland_set( $sidebar, 'sidebar_name' );
		
		if( ! $name ) continue;
		$slug = dreamland_slug( $name ) ;
		
		register_sidebar( array(
			'name' => $name,
			'id' =>  $slug ,
			'before_widget' => '<div id="%1$s" class="widget sidebar_widget wow fadeInUp %2$s">',
			'after_widget' => "</div>",
			'before_title' => '<h2 class="widget_title">',
			'after_title' => '</h2>',
		) );		
	}
	
	update_option('wp_registered_sidebars' , $wp_registered_sidebars) ;
}
add_action( 'widgets_init', 'dreamland_widget_init' );
// Update items in cart via AJAX
add_filter('add_to_cart_fragments', 'dreamland_woo_add_to_cart_ajax');
function dreamland_woo_add_to_cart_ajax( $fragments ) {
    
	global $woocommerce;
    ob_start();
	
	include get_template_directory() . '/includes/modules/wc_cart.php';
	
	$fragments['li.wc-header-cart'] = ob_get_clean();
	
    return $fragments;
}
add_filter( 'woocommerce_enqueue_styles', '__return_false' );
function dreamland_animate_it( $atts, $contents = null )
{
	return include get_template_directory() . '/includes/modules/shortcodes/animate_it.php';
}
function dreamland_load_head_scripts() {
    if ( !is_admin() ) {
    wp_register_script( 'map_api', 'http://maps.google.com/maps/api/js?sensor=true', '', '', false);
	wp_register_script( 'jquery-googlemap', get_template_directory_uri().'/js/googlemaps.js', '', '', false);
    wp_enqueue_script( 'map_api' );
	wp_enqueue_script( 'jquery-googlemap' );
    }
    }
    add_action( 'wp_enqueue_scripts', 'dreamland_load_head_scripts' );
function bunch_global_variable() {
    global $wp_query;
}
/*----------------------------Enqueue scripts---------------------------------*/
function dreamland_enqueue_scripts() {
	$theme_options = _WSH()->option();
	$maincolor = str_replace( '#', '' , dreamland_set( $theme_options, 'main_color_scheme', '71b100' ) );
    //styles
	wp_enqueue_style( 'dreamland_bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'dreamland_fontawesom', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'dreamland_flaticon', get_template_directory_uri() . '/css/flaticon.css' );
	wp_enqueue_style( 'dreamland_animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'dreamland_owl', get_template_directory_uri() . '/css/owl.css' );
	wp_enqueue_style( 'dreamland_jquery-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
	wp_enqueue_style( 'dreamland_hover', get_template_directory_uri() . '/css/hover.css' );
	wp_enqueue_style( 'dreamland_ms-default', get_template_directory_uri() . '/css/masterslider/style/masterslider.css' );
	wp_enqueue_style( 'dreamland_ms-skin', get_template_directory_uri() . '/css/masterslider/skins/style.css' );
	wp_enqueue_style( 'dreamland_ms-videos', get_template_directory_uri() . '/css/masterslider/ms-videogallery.css' );
	wp_enqueue_style( 'dreamland_main-style', get_stylesheet_uri() );
	wp_enqueue_style( 'dreamland_responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'dreamland_custom-style', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'dreamland-main-color', get_template_directory_uri() . '/css/color.php?main_color='.$maincolor );
	if(dreamland_set($theme_options, 'switcher')) wp_enqueue_style( 'dreamland-color-panel', get_template_directory_uri() . '/css/color-panel.css' );
	//scripts
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'dreamland_bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), false, true );
	wp_enqueue_script( 'dreamland_jquery-mixitup', get_template_directory_uri().'/js/jquery.mixitup.js', array(), false, true );
	wp_enqueue_script( 'dreamland_jquery-fancybox', get_template_directory_uri().'/js/jquery.fancybox.pack.js', array(), false, true );
	wp_enqueue_script( 'dreamland_jquery-owl', get_template_directory_uri().'/js/owl.js', array(), false, true );
	wp_enqueue_script( 'dreamland_jquery-validate', get_template_directory_uri().'/js/validate.js', array(), false, true );
	wp_enqueue_script( 'dreamland_jquery-wow', get_template_directory_uri().'/js/wow.js', array(), false, true );
	wp_enqueue_script( 'dreamland_bx-slider', get_template_directory_uri().'/js/bxslider.js', array(), false, true );
	wp_enqueue_script( 'dreamland_ms-slider', get_template_directory_uri().'/js/masterslider/masterslider.min.js', array(), false, true );
	wp_enqueue_script( 'dreamland_jquery-navbar', get_template_directory_uri().'/js/jquery.nav.js', array(), false, true );
	wp_enqueue_script( 'dreamland_jquery-scrollto', get_template_directory_uri().'js/jquery.scrollTo.js', array(), false, true );
	wp_enqueue_script( 'dreamland_main_script', get_template_directory_uri().'/js/script.js', array(), false, true );
	if(dreamland_set($theme_options, 'switcher')){
	wp_enqueue_script( 'dreamland-jquery-cookie', get_template_directory_uri().'/js/jquery.cookie.js', array(), false, true );
	wp_enqueue_script( 'dreamland-theme-panel', get_template_directory_uri().'/js/themepanel.js', array(), false, true );
	}
}
add_action( 'wp_enqueue_scripts', 'dreamland_enqueue_scripts' );
/*-------------------------------------------------------------*/
function dreamland_theme_slug_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $montserrat = _x( 'on', 'Montserrat font: on or off', 'dreamland' );
	$bitter = _x( 'on', 'Bitter font: on or off', 'dreamland' );
	$raleway = _x( 'on', 'Raleway font: on or off', 'dreamland' );
 
    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $open_sans = _x( 'on', 'Open Sans font: on or off', 'dreamland' );
 
    if ( 'off' !== $montserrat || 'off' !== $bitter || 'off' !== $open_sans || 'off' !== $raleway ) {
        $font_families = array();
 
        if ( 'off' !== $montserrat ) {
            $font_families[] = 'Montserrat:400,700';
        }
		
		if ( 'off' !== $bitter ) {
            $font_families[] = 'Bitter:400,400italic,700';
        }
		
		if ( 'off' !== $raleway ) {
            $font_families[] = 'Raleway:700,800';
        }
 
        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Open Sans:400,400italic,600,300italic,300';
        }
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
 
    return esc_url_raw( $fonts_url );
}
function dreamland_theme_slug_scripts_styles() {
    wp_enqueue_style( 'theme-slug-fonts', dreamland_theme_slug_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'dreamland_theme_slug_scripts_styles' );
//on comments of page by default
function dreamland_default_comments_on( $data ) {
    if( $data['post_type'] == 'page' ) {
        $data['comment_status'] = 'open';
    }
    return $data;
}
add_filter( 'wp_insert_post_data', 'dreamland_default_comments_on' );
//---custome-editor-style
function dreamland_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'dreamland_add_editor_styles' );
//-----admin css
add_action('admin_head', 'dreamland_admin_custom_style');
function dreamland_admin_custom_style() {
  echo '<style>
    #setting-error-tgmpa {
      display:block !important;
    } 
  </style>';
}
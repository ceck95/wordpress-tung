<?php $options = _WSH()->option();
Global $wp_query;
$icon_href = (dreamland_set( $options, 'site_favicon' )) ? dreamland_set( $options, 'site_favicon' ) : get_template_directory_uri().'/images/favicon.png';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <!--<![endif]-->
<head>
	 <!-- Basic -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <!-- Favcon -->
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ):?>
		<link rel="shortcut icon" type="image/png" href="<?php echo esc_url($icon_href);?>">
	<?php endif;?>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<div class="page-wrapper">
<?php if(dreamland_set($options, 'preloader')):?> 	
    
	<!-- Preloader -->
    <div class="preloader"></div>
<?php endif;?> 	
    <!-- Main Header / Header Style Two-->
    <header class="main-header header-style-two">
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container clearfix">
            	
                <!-- Top Right -->
                <div class="top-right">
                	<ul class="info pull-left clearfix">
                        <?php if(dreamland_set($options, 'topbar_email')):?><li class="email"><a href="mailto:<?php echo esc_url(dreamland_set($options, 'topbar_email'));?>"><span class="icon flaticon-email2"></span> <?php echo balanceTags(dreamland_set($options, 'topbar_email'));?></a></li><?php endif;?>
                        <?php if(dreamland_set($options, 'phone')):?><li class="phone"><a href="tel:<?php echo balanceTags(dreamland_set($options, 'phone'));?>"><span class="icon flaticon-phone325"></span> <?php echo dreamland_set($options, 'phone');?> </a></li><?php endif;?>
                    </ul>
                    
                    <?php if($socials = dreamland_set(dreamland_set($options, 'social_media'), 'social_media')): //printr($socials);?>
                        <!--Social Links-->
                        <div class="social-links pull-left clearfix">
                            <?php foreach($socials as $key => $value):
                                if(dreamland_set($value, 'tocopy')) continue;
                            ?>
                                <a title="<?php echo dreamland_set($value, 'title');?>" href="<?php echo esc_url(dreamland_set($value, 'social_link'));?>"><span class="fa <?php echo dreamland_set($value, 'social_icon');?>"></span></a>
                            <?php endforeach;?>
                        </div>
                    <?php endif;?>
                </div>
                
            </div>
        </div>
        
        <!-- Header Lower -->
        <div class="header-lower">
        	<div class="auto-container">
            	<div class="lower-outer clearfix">
                    <!--Logo-->
                    <div class="logo">
                    	<?php if(dreamland_set($options, 'logo_image')):?>
                    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(dreamland_set($options, 'logo_image'));?>" alt="<?php esc_html_e('Bulldozer', 'dreamland');?>" title="Dream Land"></a>
                        <?php else:?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo-3.jpg');?>" alt="<?php esc_html_e('Bulldozer', 'dreamland');?>" title="Dream Land"></a>
                        <?php endif;?>
                    </div>
                    
                    <!--Right Container-->
                        
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation">
                            	
								<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
										'container_class'=>'navbar-collapse collapse navbar-right',
										'menu_class'=>'nav navbar-nav',
										'fallback_cb'=>false, 
										'items_wrap' => '%3$s', 
										'container'=>false,
										'walker'=> new Bunch_Bootstrap_walker()  
									) ); ?>
                                
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
            	</div>    
            </div>
            
        </div>
        
	</header>
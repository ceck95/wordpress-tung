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

<body <?php body_class(); ?>>



<div class="page-wrapper">



<?php if(dreamland_set($options, 'preloader')):?> 	

    

	<!-- Preloader -->

    <div class="preloader"></div>



<?php endif;?> 	

	<!-- Main Header / One Page Header-->

    <header class="main-header header-style-one one-page-header">

    	<div class="auto-container">

        	<div class="outer-box clearfix">

            	<!--Logo-->

                <div class="logo">

					<?php if(dreamland_set($options, 'onepage_logo_image')):?>

                    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(dreamland_set($options, 'onepage_logo_image'));?>" alt="<?php esc_html_e('Bulldozer', 'dreamland');?>" title="Dream Land"></a>

                    <?php else:?>

                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo-1.png');?>" alt="<?php esc_html_e('Bulldozer', 'dreamland');?>" title="Dream Land"></a>

                    <?php endif;?>

				</div>

                

                <!--Header Right-->

                <div class="header-right clearfix">

                	<!--Info Box-->

                    <div class="info-box clearfix">

                    	<ul class="clearfix">

                        	<?php if(dreamland_set($options, 'onepage_address')):?><li class="address"><div class="icon"><span class="flaticon-location74"></span></div><?php echo dreamland_set($options, 'onepage_address');?></li><?php endif;?>

                            <li class="separator"></li>

                            <?php if(dreamland_set($options, 'onepage_phone') || dreamland_set($options, 'onepage_email')):?>

							<li class="contact-info">

								<div class="icon">

									<span class="flaticon-telephone51"></span>

								</div>

								<?php if(dreamland_set($options, 'onepage_phone')):?><a href="tel:<?php echo balanceTags(dreamland_set($options, 'onepage_phone'));?>"><?php echo dreamland_set($options, 'onepage_phone');?></a><?php endif;?>

								<?php if(dreamland_set($options, 'onepage_email')):?><br><a href="mailto:<?php echo esc_url(dreamland_set($options, 'onepage_email'));?>"><?php echo dreamland_set($options, 'onepage_email');?></a><?php endif;?>

							</li>

							<?php endif;?>

							<?php if( $contact_page = dreamland_set( $options, 'onepage_contact_page' ) ): ?>

                            	<li class="contact-info"><a href="<?php echo esc_url(get_permalink( $contact_page )); ?>" class="theme-btn btn-style-one"><?php esc_html_e('Contact Now', 'dreamland');?></a></li>

                        	<?php endif;?>

						</ul>

                    </div>

                    

                    <span class="clearfix"></span>

                    

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

                            <ul class="navigation one-page-nav clearfix">

								<?php wp_nav_menu( array( 'theme_location' => 'onepage_menu', 'container_id' => 'navbar-collapse-1',

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

    <!--End Main Header -->
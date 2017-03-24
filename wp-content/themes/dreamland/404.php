<?php
$options = _WSH()->option();
get_header(); 
?>
<!--Page Title-->
<section class="page-title">
	<div class="auto-container">
		<div class="content-box">
			<h1><?php esc_html_e('404 Not Found ', 'dreamland');?></h1>
			<div class="bread-crumb">
				<?php echo dreamland_get_the_breadcrumb();?>
			</div>
		</div>
	</div>
</section>
<!--Sidebar Page-->
<!--  Your Blog Content Start From Here -->
<section id="blog_area" class="blog_area 404page">
    <!-- container -->
    <div class="container">
        <div class="row">
            <!-- blog post area -->
            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 blog_post_area">
            	<div class="message-welcome text-center">
                    <h1><?php esc_html_e('Not Found ', 'dreamland');?></h1>
                    <p class="lead"><?php esc_html_e('Look like something went wrong! The page you were looking for is not here. ', 'dreamland');?></p>
                    <a href="<?php echo esc_url(home_url('/'));?>" title="" class="btn btn-primary btn-lg"><?php esc_html_e('BACK TOP HOME', 'dreamland');?></a>
                </div><!-- end message -->
			</div>
            <!-- blog post area -->
		
        </div>
    </div>
    <!-- container -->
</section>
<!--  Your Blog Content End Here -->
<?php if(dreamland_set($options, 'show_vc_footer')) get_template_part('footer', 'black');?>  		
<?php get_footer(); ?>
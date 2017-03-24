<?php bunch_global_variable(); 
$options = _WSH()->option();
get_header();
$view = '';
$style2 = ''; 
if( $wp_query->is_posts_page ) {
	$meta = _WSH()->get_meta('_bunch_layout_settings', get_queried_object()->ID);
	$meta1 = _WSH()->get_meta('_bunch_header_settings', get_queried_object()->ID);
	if(dreamland_set($_GET, 'layout_style')) $layout = dreamland_set($_GET, 'layout_style'); else
	$layout = dreamland_set( $meta, 'layout', 'right' );
	if( !$layout || $layout == 'full' || dreamland_set($_GET, 'layout_style')=='full') $sidebar = ''; else
	$sidebar = dreamland_set( $meta, 'sidebar', 'default-sidebar' );
	$title = dreamland_set($meta1, 'page_title');
	$bg = dreamland_set($meta1, 'page_bg');
	
} else {
	$settings  = _WSH()->option(); 
	if(dreamland_set($settings, 'archive_blog_style')=='blog_style2' || dreamland_set($_GET, 'blog_style') == 'blog_style2' ) $style2 = 'blog_style2';
	
	if(dreamland_set($_GET, 'layout_style')) $layout = dreamland_set($_GET, 'layout_style'); else
	$layout = dreamland_set( $settings, 'archive_page_layout', 'right' );
	if( !$layout || $layout == 'full' || dreamland_set($_GET, 'layout_style')=='full') $sidebar = ''; else
	$sidebar = dreamland_set( $settings, 'archive_page_sidebar', 'default-sidebar' );
	$title = dreamland_set($settings, 'archive_title');
	$bg = dreamland_set($settings, 'archive_bg');
}
$classes = ( !$layout || $layout == 'full' || dreamland_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-9 col-md-8 col-sm-7 col-xs-12 ' ;
?>
<!--Page Title-->
<section class="page-title" <?php if($bg):?>style="background-image:url('<?php echo esc_url($bg);?>');"<?php endif;?>>
	<div class="auto-container">
		<div class="content-box">
			<h1><?php if($title) echo balanceTags($title); else wp_title('');?></h1>
			<div class="bread-crumb">
				<?php echo dreamland_get_the_breadcrumb();?>
			</div>
		</div>
	</div>
</section>
<!--Sidebar Page-->
<div class="sidebar-page">
    <div class="auto-container">
    	<div class="row clearfix">
            <!--Sidebar-->	
            <?php if( $layout == 'left' ): ?>
            
				<?php if ( is_active_sidebar( $sidebar ) ) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                        <aside class="sidebar">
                            <?php dynamic_sidebar( $sidebar ); ?>
                        </aside>
                    
                    </div>
                <?php }?>
		    <?php endif; ?>
            <!--Sidebar-->
            
            <!--Content Side-->	
            <div class="<?php echo esc_attr($classes);?>">
                <section class="blog-container<?php if($style2) echo ' two-col';?>">
                    
                    <?php while( have_posts() ): the_post();?>
					<?php if($style2):?>
						<!--Blog Post-->
						<div class="col-md-6 col-sm-12 col-xs-12 blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div id="post-<?php the_ID(); ?>" <?php post_class();?>>
								<?php get_template_part( 'blog', 'twocolumn' ); ?>
								<!-- blog post item -->
							</div><!-- End Post -->
						</div>
					<?php else:?>
						<!--Blog Post-->
                        <div id="post-<?php the_ID(); ?>" <?php post_class();?>>
                            <?php get_template_part( 'blog' ); ?>
                        </div>
					<?php endif;?>
                    <?php endwhile;?>
                    
                 </section>
                
                <br>
                <!--Pagination-->
                <div class="pager-outer">
                	<ul class="pagination">
                    	<?php dreamland_the_pagination(); ?>
                    </ul>
                </div>
            
            </div>
            <!--Content Side-->
            
            <!--Sidebar-->	
            <?php if( $layout == 'right' ): ?>
            
				<?php if ( is_active_sidebar( $sidebar ) ) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                        <aside class="sidebar">
                            <?php dynamic_sidebar( $sidebar ); ?>
                        </aside>
                    
                    </div>
                <?php }?>
		    <?php endif; ?>
            <!--Sidebar-->
            
        </div>
    </div>
</div>
<?php if(dreamland_set($options, 'show_vc_footer')) get_template_part('footer', 'black');?>
<?php get_footer(); ?>
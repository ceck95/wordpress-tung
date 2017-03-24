<?php $options = _WSH()->option();
get_header();
$view = '';
$style2 = '';
$settings  = dreamland_set(dreamland_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
$meta = _WSH()->get_meta('_bunch_layout_settings');
$meta1 = _WSH()->get_meta('_bunch_header_settings');
if(dreamland_set($_GET, 'layout_style')) $layout = dreamland_set($_GET, 'layout_style'); else
$layout = dreamland_set( $meta, 'layout', 'full' );
$sidebar = dreamland_set( $meta, 'sidebar', 'blog-sidebar' );
$classes = ( !$layout || $layout == 'full' || dreamland_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12' : ' col-lg-9 col-md-8 col-sm-12 col-xs-12';
$title = dreamland_set($meta1, 'page_title');
$bg = dreamland_set($meta1, 'page_bg');
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
                <section class="blog-container">
                    
                    <?php while( have_posts() ): the_post();?>
						
						<div class="post-content">
                    	<!-- blog post item -->
                        	<?php the_content(); ?>
                    	</div>    
                    	<!-- comment area -->
                    	<?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'dreamland'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>
                    	<?php comments_template(); ?><!-- end comments -->
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
<?php if(dreamland_set($meta1, 'vc_footer')) get_template_part('footer', 'black');?>
<?php get_footer(); ?>
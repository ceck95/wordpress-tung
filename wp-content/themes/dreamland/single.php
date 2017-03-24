<?php $options = _WSH()->option();
get_header();
$view = '';
$style2 = ''; 
$settings  = dreamland_set(dreamland_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
$meta = _WSH()->get_meta('_bunch_layout_settings');
$meta1 = _WSH()->get_meta('_bunch_header_settings');
$meta2 = _WSH()->get_meta();
_WSH()->page_settings = $meta;
if(dreamland_set($_GET, 'layout_style')) $layout = dreamland_set($_GET, 'layout_style'); else
$layout = dreamland_set( $meta, 'layout', 'full' );
if( !$layout || $layout == 'full' || dreamland_set($_GET, 'layout_style')=='full' ) $sidebar = ''; else
$sidebar = dreamland_set( $meta, 'sidebar', 'blog-sidebar' );
$classes = ( !$layout || $layout == 'full' || dreamland_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12' : ' col-lg-9 col-md-8 col-sm-12 col-xs-12';
/** Update the post views counter */
_WSH()->post_views( true );
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
                 
				 <?php while( have_posts() ): the_post();?>
                 
                 <section class="blog-container blog-detail">
                    <!--Blog Post-->
                    <div class="blog-post">
                        <!--Blog Post-->
                        <div class="blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <article class="inner-box">
								<?php if(has_post_thumbnail()):?>
                                <figure class="image-box">
                                    <a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail('dreamland_size_6', array('class' => 'img-responsive'));?></a>
                                    <div class="post-options">
									<?php $like = get_post_meta( get_the_id(), '_jolly_like_it', true ); ?>
                                            <a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="plus-icon img-circle"><span class="icon flaticon-news37"></span></a>
                                            <a href="javascript:void(0);" class="heart-icon img-circle jolly_like_it"  data-id="<?php the_ID(); ?>"><span class="icon fa fa-heart"></span></a>
                                        </div>
                                </figure>
								<?php endif;?>
                                <!--Lower Content-->
                                <div class="lower-part">
                                    <div class="post-info">
               							<?php esc_html_e('Posted On', 'dreamland')?><a href="<?php echo esc_url(get_month_link(get_the_date('Y'), get_the_date('m'))); ?>"><strong><?php echo get_the_date('M d, Y');?></strong></a>
            						</div>
            						<div class="post-title"><h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3></div>
                                   <div class="post-text">
                                        <p><?php the_content();?></p>
                                   </div>
                                   <div class="post-info lower">
                                        <i class="fa fa-comments"></i> &nbsp; <a href="<?php echo esc_url(get_permalink(get_the_id()));?>#comments"><strong><?php comments_number();?></strong> &nbsp; &nbsp; &nbsp;</a> | &nbsp; &nbsp; <a href="#"><i class="fa fa-tag"></i> &nbsp; <?php the_category(', '); ?></a>
                                        <span class="pull-right">
											<div class="share-box">
												  <ul class="psocial shares clearfix">
													  <li class="facebook"><span class='st_facebook_large hovicon effect-1 sub-a'></span></li>
													  <li class="twitter"><span class="st_twitter_large hovicon effect-1 sub-a"></span></li>
													  <li class="google"><span class="st_googleplus_large hovicon effect-1 sub-a"></span></li>
													  <li class="pinterest"><span class='st_pinterest_large hovicon effect-1 sub-a'></span></li>
													  
												  </ul>
												  <script type="text/javascript">var switchTo5x=true;</script>
												  <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
												  <script type="text/javascript">stLight.options({publisher: "e5f231e9-4404-49b7-bc55-0e8351a047cc", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
												  <br/>
											</div>
										</span>
                                    </div>
                                   <div class="post-tags">
                                        <?php the_tags();?>
                                    </div>
                                    
                                </div>
                            </article>
                            <br>
                            <!-- Comment Form -->
                            <?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'dreamland'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>
							<?php comments_template(); ?><!-- end comments -->
                        </div>
                    
                    </div>
                </section> 
            	<?php endwhile;?>
                
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
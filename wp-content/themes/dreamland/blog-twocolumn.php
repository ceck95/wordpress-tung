<!--Blog Post-->
<article class="inner-box">
        <!--Image-->
	<?php if(has_post_thumbnail()):?>
    <figure class="image-box">
        <a href="<?php echo esc_url(get_permalink(get_the_id()));?>">
            <?php the_post_thumbnail('dreamland_size_7', array('class' => 'img-responsive'));?>
        </a>
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
           <?php esc_html_e('Posted On', 'dreamland')?> <a href="<?php echo esc_url(get_month_link(get_the_date('Y'), get_the_date('m'))); ?>"><strong><?php echo get_the_date('M d, Y');?></strong></a>
        </div>
        <div class="post-title"><h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3></div>
        <div class="post-text"><?php echo get_the_excerpt();?> </div>
        
        <div class="post-info lower">
            <i class="fa fa-comments"></i> &nbsp; <a href="<?php echo esc_url(get_permalink(get_the_id()));?>#comments"><strong><?php comments_number();?></strong> &nbsp; &nbsp; &nbsp;</a> | &nbsp; &nbsp; <a href="#"><i class="fa fa-tag"></i> &nbsp; <?php the_category(', '); ?></a>
            <span class="pull-right"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="theme-btn read-more"><?php esc_html_e('Read More', 'dreamland');?></a></span>
        </div>
    </div>
</article>

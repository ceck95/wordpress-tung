<?php  
   $count = 0;
   $query_args = array('post_type' => 'bunch_property' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['property_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>   

 <!--About Section-->
<section class="about-section">
    <div class="auto-container">
    
        <!--Section Title-->
        <div class="sec-title">
            <h2><?php echo balanceTags($dark_title);?> <strong><?php echo balanceTags($title_green);?></strong> <span class="light"><?php echo balanceTags($light_title);?></span></h2>
            <div class="separator small-separator"></div>
            <div class="text"><p><?php echo balanceTags($text);?></p></div>
        </div>
        
        <!--Full Image Box-->
        <figure class="full-image-box"><img src="<?php echo esc_url(wp_get_attachment_url($img, 'full'));?>" alt=""></figure>
        
        <div class="services-outer">
            <div class="row clearfix">
                
                <?php while($query->have_posts()): $query->the_post();
					global $post ; 
					$about_meta = _WSH()->get_meta();
				?>
                
                <!--Column-->
                <article class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-left"><span class="icon flaticon-check52"></span><span class="number"><?php echo (dreamland_set($about_meta, 'numbers'));?></span></div>
                        <div class="content">
                            <h3><?php the_title();?></h3>
                            <p><?php echo dreamland_trim(get_the_content(), $text_limit);?></p>
                        </div>
                    </div>
                </article>
                
                <?php endwhile;?>
                
        	</div>
        </div>
        
    </div>
</section>
 
<?php endif; ?>

<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
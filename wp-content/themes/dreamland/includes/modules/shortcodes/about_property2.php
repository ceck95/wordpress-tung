<?php  
   $count = 0;
   $query_args = array('post_type' => 'bunch_property' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['property_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>   

<!--Properties Section-->
    <section class="properties-section" id="properties-section">
    	<div class="auto-container">
        
            <!--Section Title-->
            <div class="sec-title">
                <h2><?php echo balanceTags($title);?><span class="theme_color"><?php echo balanceTags($g_title);?></span></h2>
                <div class="separator small-separator"></div>
                <div class="text"><p><?php echo balanceTags($text);?></p></div>
            </div>
            
            <div class="three-col-theme">
                <div class="row clearfix">
                    
                    <?php while($query->have_posts()): $query->the_post();
						global $post ; 
						$property_meta = _WSH()->get_meta();
					?>
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column">
                        <div class="inner-box">
                            <div class="icon-left"><span class="<?php echo dreamland_set($property_meta, 'social_icon');?>"></span></div>
                            <div class="content">
                                <h3><span class="number"><?php echo dreamland_set($property_meta, 'numbers');?></span> <?php the_title();?></h3>
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
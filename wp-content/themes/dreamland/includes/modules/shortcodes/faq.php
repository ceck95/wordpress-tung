<?php  
   $count = 0;
   $query_args = array('post_type' => 'bunch_faqs' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['faqs_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>   

  <!--FAQ Section-->
    <section class="faq-section">
    	<div class="auto-container">
        	
            <!--Sec Title-->
            <div class="sec-title">
                <h2><?php echo balanceTags($title);?><span class="theme_color"><?php echo balanceTags($g_title);?></span></h2>
                <div class="separator small-separator"></div>
                <div class="text"><p><?php echo balanceTags($text);?></p></div>
            </div>
            <br>
            
        	<div class="row clearfix">
            	
                <?php while($query->have_posts()): $query->the_post();
					global $post ; 
					$faq_meta = _WSH()->get_meta();
				?>
                
                <!--Column-->
            	<div class="column col-md-4 col-sm-6 col-xs-12">
                	<!--Faq Block-->
                    <div class="faq-block">
                    	<div class="question"><h3><?php the_title();?></h3></div>
                        <div class="answer">
                        	<p><?php echo dreamland_trim(get_the_content(), $text_limit );?></p>
                        </div>
                    </div>
                    
                </div>
                
                <?php endwhile;?>
                
            </div>
        </div>
    </section>

<?php endif; ?>

<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
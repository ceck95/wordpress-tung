<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_property' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['property_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   $data_filtration = array();
   $data_content = array();
   ?>
   
<?php if($query->have_posts()):  ?>

<!--Property Details Section-->
<?php while($query->have_posts()): $query->the_post();
	  global $post ; 
	  $services_meta = _WSH()->get_meta();
	  $active_filter = ($count == 1) ? 'active-btn' : '';
	  $active_tab = ($count == 1) ? 'active-tab' : '';
	  $data = get_the_content();
	 
	  $data_filtration[get_the_id()] = '<a href="#tab-one'.get_the_id().'" class="tab-btn '.$active_filter.'">'.get_the_title($post->ID).'</a>';
	  $data_content[get_the_id()] = '<!--Tab / Active Tab-->
									<div class="tab '.$active_tab.'" id="tab-one'.get_the_id().'">
										<h3>'.get_the_title($post->ID).'</h3>
										'.get_the_content($post->ID).'
									</div>';
									
									
?>
<?php $count++; endwhile; endif;
wp_reset_query();
ob_start() ;
?>   
<!--Tabs Section-->

<section class="property-details" style="background-image:url('<?php echo wp_get_attachment_url($img, 'full')?>');">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Left Column-->
                <div class="col-md-7 col-sm-12 col-xs-12 left-column">
                	<h2><?php echo balanceTags($title);?></h2>
                    <!--Tabs Box-->
                    <div class="tabs-box">
                    	
                        <!--Tab Buttons-->
                        <div class="tab-buttons clearfix">
                        	<?php foreach($data_filtration as $key => $value):?>
								<?php echo balanceTags($value);?>
                            <?php endforeach;?>
                        </div>
                        
                        <!--Tabs Content-->
                        <div class="tab-content">
                        	<?php foreach($data_content as $key => $content):?>
								<?php echo balanceTags($content);?>
                            <?php endforeach;?>	
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
	wp_reset_query();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
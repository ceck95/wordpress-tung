<?php  

   $count = 1;

   $query_args = array('post_type' => 'bunch_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);

   

   if( $cat ) $query_args['testimonials_category'] = $cat;

   $query = new WP_Query($query_args) ; 

   

   ob_start() ;?>

   

<?php if($query->have_posts()):  ?>   



<!--Testimonials-->

<section class="testimonials-section" style="background-image:url('<?php echo wp_get_attachment_url($image, 'full');?>');">

    <div class="auto-container">

        

        <div class="sec-title">

            <?php if($title):?><h2><?php echo balanceTags($title);?> </h2><?php endif;?>

            <div class="separator small-separator"></div>

            <?php if($text):?><div class="text"><?php echo balanceTags($text);?></p></div><?php endif;?>

        </div>

        

        <!--Slider-->      

        <div class="testimonials-slider column-carousel three-column">

            

            <?php while($query->have_posts()): $query->the_post();

				global $post ; 

				$testimonials_meta = _WSH()->get_meta();

			?>

            

            <!--Slide-->

            <article class="slide-item">

                <figure class="image-box"><?php the_post_thumbnail('dreamland_size_1', array('class' => 'img-responsive'));?></figure>

                <div class="info-box">

                    <h3><?php the_title();?></h3>

                    <p class="designation"><?php echo (dreamland_set($testimonials_meta, 'designation'));?></p>

                </div>

                

                <div class="slide-text">

                    <p><?php echo dreamland_trim(get_the_content(), $text_limit);?></p>

                </div>

            </article>

            

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
<?php  

   $count = 1;

   $query_args = array('post_type' => 'bunch_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);

   

   if( $cat ) $query_args['testimonials_category'] = $cat;

   $query = new WP_Query($query_args) ; 

   

   ob_start() ;?>

   

<?php if($query->have_posts()):  ?>   



<!--Testimonials-->

<div class="column blog-section">

    <h2><?php echo balanceTags($title);?></h2>

    <!--Testimonials Slider-->

    <div class="testimonial-slider">

        <div class="slider">

            

            <?php while($query->have_posts()): $query->the_post();

				global $post ; 

				$testimonials_meta = _WSH()->get_meta();

			?>

            

            <article class="slide-item">

                <div class="slide-content">

                    <?php echo dreamland_trim(get_the_content(), $text_limit);?>

                </div>

                <div class="slide-info">

                    <figure class="author-thumb img-circle"><?php the_post_thumbnail('dreamland_size_3', array('class' => 'img-circle'));?></figure>

                    <div class="author-info">

                        <h5><?php the_title();?></h5>

                        <?php echo (dreamland_set($testimonials_meta, 'designation'));?>

                    </div>

                </div>

            </article>

            

            <?php endwhile;?>

            

        </div>

    </div>

</div>



<?php endif; ?>



<?php 

	wp_reset_postdata();

   $output = ob_get_contents(); 

   ob_end_clean(); 

   return $output ; ?>
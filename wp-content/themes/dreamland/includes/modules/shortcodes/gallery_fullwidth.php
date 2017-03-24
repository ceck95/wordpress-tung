<?php 

wp_enqueue_script('jquery-mixitup');

bunch_global_variable();

$paged = get_query_var('paged');

$args = array('post_type' => 'bunch_gallery', 'showposts'=>$num, 'orderby'=>$sort, 'order'=>$order, 'paged'=>$paged);

if($exclude_cats) $args['tax_query'] = array(array('taxonomy' => 'gallery_category','field' => 'id','terms' => array($exclude_cats),'operator' => 'NOT IN',));

$query = new WP_Query($args);

//query_posts($args);

//wp_enqueue_script( array( 'jquery-prettyphoto', 'cubeportfolio', 'main-script','jquery-isotope','portfolio' ) );



$t = $GLOBALS['_bunch_base'];

$paged = get_query_var('paged');



$data_filtration = '';

$data_posts = '';

?>





<?php if( $query->have_posts() ):

	

ob_start();?>



	<?php $count = 0; 

	$fliteration = array();?>

	<?php while( $query->have_posts() ): $query->the_post();

		global  $post;

		$meta = get_post_meta( get_the_id(), '_bunch_portfolio_meta', true );//printr($meta);

		$post_terms = get_the_terms( get_the_id(), 'gallery_category');// printr($post_terms); exit();

		foreach( (array)$post_terms as $pos_term ) $fliteration[$pos_term->term_id] = $pos_term;

		$temp_category = get_the_term_list(get_the_id(), 'gallery_category', '', ', ');

	?>

		<?php $post_terms = wp_get_post_terms( get_the_id(), 'gallery_category'); 

		$term_slug = '';

		if( $post_terms ) foreach( $post_terms as $p_term ) $term_slug .= $p_term->slug.' ';?>		

           

		   <?php 

			$post_thumbnail_id = get_post_thumbnail_id($post->ID);

			$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );

		   ?>     

		   

		   <!--Image Box-->

            <div class="image-box mix mix_all <?php echo esc_attr($term_slug); ?>">

                <div class="inner-box">

                    <figure class="image"><a href="<?php echo esc_url($post_thumbnail_url);?>" class="lightbox-image">

						<?php the_post_thumbnail('dreamland_size_4', array('class' => 'img-responsive'));?></a>

                    </figure>

                    

                    <a href="<?php echo esc_url($post_thumbnail_url);?>" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span><span></span></a>

                </div>

            </div>

            

<?php endwhile;?>

  

<?php wp_reset_postdata();

$data_posts = ob_get_contents();

ob_end_clean();



endif; 



ob_start();?>	 



<?php $terms = get_terms(array('gallery_category')); ?>



 <!--Gallery Section-->

    <section class="gallery-section full-width">

    	<div class="auto-container">

        

            <!--Section Title-->

            <div class="sec-title">

                <?php if($title || $g_title):?>

                	<h2><?php echo balanceTags($title);?> <span class="theme_color"><?php echo balanceTags($g_title);?></span></h2>

                	<div class="separator small-separator"></div>

                <?php endif;?>

                <div class="text"><p><?php echo balanceTags($text);?></p></div>

            </div>

            

            <?php if( $terms ): ?>

            <!--Filter-->

            <div class="filters">

            	<ul class="filter-tabs clearfix anim-3-all">

                    <li class="filter" data-role="button" data-filter="all"><?php esc_html_e('All', 'dreamland');?></li>

                    

                    <?php foreach( $fliteration as $t ): ?>

                    <li class="filter" data-role="button" data-filter=".<?php echo dreamland_set( $t, 'slug' ); ?>"><?php echo dreamland_set( $t, 'name'); ?></li>

                    <?php endforeach;?>

                </ul>

            </div>

            

            <?php endif;?>

            

        </div>

        

        <div class="images-container">

            <div class="filter-list clearfix">

                

                <?php echo balanceTags($data_posts); ?>

                

            </div>

        </div>

        

        

    </section>



<?php $output = ob_get_contents();

ob_end_clean(); 

return $output;?>
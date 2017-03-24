<?php



/// Recent Posts 

class Bunch_Recent_Post_With_Image extends WP_Widget

{

	/** constructor */

	function __construct()

	{

		parent::__construct( /* Base ID */'Bunch_Recent_Post_With_Image', /* Name */esc_html__('dreamland Recent Posts with image','dreamland'), array( 'description' => esc_html__('Show the recent posts with images', 'dreamland' )) );

	}

 



	/** @see WP_Widget::widget */

	function widget($args, $instance)

	{

		extract( $args );

		$title = apply_filters( 'widget_title', $instance['title'] );

		

		echo balanceTags($before_widget); ?>

		

		<div class="blog/popular-post wow fadeInUp">

        

		<?php echo balanceTags($before_title.$title.$after_title); ?>

		

		<?php $query_string = 'posts_per_page='.$instance['number'];

		if( $instance['cat'] ) $query_string .= '&cat='.$instance['cat'];

		query_posts( $query_string ); 

		

		$this->posts();

		wp_reset_query();

		?>

        

        </div> 

		

		<?php echo balanceTags($after_widget);

	}

 

 

	/** @see WP_Widget::update */

	function update($new_instance, $old_instance)

	{

		$instance = $old_instance;

		

		$instance['title'] = strip_tags($new_instance['title']);

		$instance['number'] = $new_instance['number'];

		$instance['cat'] = $new_instance['cat'];

		

		return $instance;

	}



	/** @see WP_Widget::form */

	function form($instance)

	{

		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Popular Posts', 'dreamland');

		$number = ( $instance ) ? esc_attr($instance['number']) : 3;

		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>

			

        <p>

            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'dreamland'); ?></label>

            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />

        </p>

        <p>

            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'dreamland'); ?></label>

            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />

        </p>

      	<p>

            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'dreamland'); ?></label>

            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'dreamland'), 'selected'=>$cat, 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>

        </p>

            

		<?php 

	}

	

	function posts()

	{

		

		if( have_posts() ):?>

        

           	<!-- Title -->

				<?php while( have_posts() ): the_post(); ?>

                    

                    <div class="post">

						<div class="post-thumb"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail('dreamland_size_3', array('class' => 'img-responsive'));?></a></div>

						<h4><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h4>

						<div class="post-info"><?php echo get_the_date('m/d/Y');?> </div>

					</div>

					<!-- Item -->

                <?php endwhile; ?>

                

        <?php endif;

    }

}



/// Gallery Posts 

class Bunch_Gallery_Post extends WP_Widget

{

	/** constructor */

	function __construct()

	{

		parent::__construct( /* Base ID */'Bunch_Gallery_Post', /* Name */esc_html__('dreamland Gallery Post','dreamland'), array( 'description' => esc_html__('Show the Gallery Post', 'dreamland' )) );

	}

 



	/** @see WP_Widget::widget */

	function widget($args, $instance)

	{

		extract( $args );

		$title = apply_filters( 'widget_title', $instance['title'] );

		

		echo balanceTags($before_widget); ?>

		

		<div class="recent-gallery wow fadeInUp">

        

		<?php echo balanceTags($before_title.$title.$after_title); ?>

		

		<?php $query_string = 'post_type=bunch_gallery&posts_per_page='.$instance['number'];

		if( $instance['cat'] ) $query_string .= '&cat='.$instance['cat'];

		query_posts( $query_string ); 

		

		$this->posts();

		wp_reset_query();

		?>

        

        </div> 

		

		<?php echo balanceTags($after_widget);

	}

 

 

	/** @see WP_Widget::update */

	function update($new_instance, $old_instance)

	{

		$instance = $old_instance;

		

		$instance['title'] = strip_tags($new_instance['title']);

		$instance['number'] = $new_instance['number'];

		$instance['cat'] = $new_instance['cat'];

		

		return $instance;

	}



	/** @see WP_Widget::form */

	function form($instance)

	{

		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Our Gallery', 'dreamland');

		$number = ( $instance ) ? esc_attr($instance['number']) : 3;

		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>

			

        <p>

            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'dreamland'); ?></label>

            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />

        </p>

        <p>

            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'dreamland'); ?></label>

            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />

        </p>

      	<p>

            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'dreamland'); ?></label>

            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'dreamland'), 'selected'=>$cat, 'taxonomy' => 'gallery_category', 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>

        </p>

            

		<?php 

	}

	

	function posts()

	{

		

		if( have_posts() ):?>

        

           	<!-- Title -->

				<?php while( have_posts() ): the_post(); 

					global $post;

				?>

                    

					<?php 

						$post_thumbnail_id = get_post_thumbnail_id($post->ID);

						$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );

					?>

					

                    <figure class="image">

						<a href="<?php echo esc_url($post_thumbnail_url);?>" class="lightbox-image"><?php the_post_thumbnail('dreamland_size_3', array('class' => 'img-responsive'));?></a>

					</figure>



                <?php endwhile; ?>

                

        <?php endif;

    }

}
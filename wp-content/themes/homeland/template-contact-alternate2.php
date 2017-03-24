<?php
/*
Template Name: Contact 3
*/
?>

<?php 
	get_header();

	$homeland_hide_gmap = esc_attr( get_option('homeland_hide_gmap') );
	$homeland_phone_number = esc_attr( get_option('homeland_phone_number') );
	$homeland_fax = esc_attr( get_option('homeland_fax') );
	$homeland_contact_address = stripslashes( get_option('homeland_contact_address') );
	$homeland_email_address = esc_attr( get_option('homeland_email_address') );
	$homeland_working_hours = esc_attr( get_option('homeland_working_hours') );
	$homeland_subtitle = esc_attr( get_post_meta( $post->ID, "homeland_subtitle", true ) );

	if( empty( $homeland_hide_gmap ) ) : echo "<section id='map'></section>";
	else : echo "<div class='empty-div'>&nbsp;</div>";
	endif;
?>

	<section class="theme-pages">
		<div class="inside">
			<div class="contact-info clearfix">
				<?php
					if(!empty($homeland_ptitle)) : echo '<h2>' . esc_html( $homeland_ptitle ) . '</h2>';
					else : the_title('<h2>', '</h2>'); endif; 

					if(!empty($homeland_subtitle)) : echo '<p>' . stripslashes ( $homeland_subtitle ) . '</p>';
					endif;
				?>
			</div>

			<!-- Contact Alternate -->
			<div class="contact-alternate-two clearfix">
				<div class="contact-alternate-main">
					<?php
						if(!empty($homeland_contact_address)) : ?>
							<label class="contact-address"><span><?php esc_html_e( 'Address', 'homeland' ); echo ":"; ?></span> <?php echo wp_kses_post( $homeland_contact_address ); ?></label><?php
						endif;
						if(!empty($homeland_working_hours)) : ?>
							<label class="working-hours"><span><?php esc_html_e( 'Working Hours', 'homeland' ); echo ":"; ?></span> <?php echo esc_html( $homeland_working_hours ); ?></label><?php
						endif;
						if(!empty($homeland_phone_number)) : ?>
							<label class="phone-number"><span><?php esc_html_e( 'Phone', 'homeland' ); echo ":"; ?></span> <?php echo esc_html( $homeland_phone_number ); ?></label><?php
						endif;
						if(!empty($homeland_email_address)) : ?>
							<label class="email-address"><span><?php esc_html_e( 'Email', 'homeland' ); echo ":"; ?></span> <a href="mailto: <?php echo esc_html( $homeland_email_address ); ?>"><?php echo esc_html( $homeland_email_address ); ?></a></label><?php
						endif;
						if(!empty($homeland_fax)) : ?>
							<label class="contact-fax"><span><?php esc_html_e( 'Fax', 'homeland' ); echo ":"; ?></span> <?php echo esc_html( $homeland_fax ); ?></label><?php
						endif;
					?>
				</div>

				<!-- Contact Form -->
				<div class="contact-form">
					<?php
						if (have_posts()) : 
							while (have_posts()) : the_post(); 
								the_content(); 								
							endwhile; 
						endif;
					?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
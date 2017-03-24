<?php
/*
	Template Name: Coming Soon
*/

	$homeland_site_layout = esc_attr( get_option('homeland_site_layout') );
	$homeland_logo = esc_attr( get_option('homeland_logo') );
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php if(empty($homeland_site_layout)) : ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body class="coming-soon-page">

	<?php
		$homeland_coming_soon_header = esc_attr( get_option('homeland_coming_soon_header') );
		$homeland_coming_soon_text = esc_attr( get_option('homeland_coming_soon_text') );
		$homeland_coming_soon_sheader = esc_attr( get_option('homeland_coming_soon_sheader') );

		$homeland_coming_soon_header_label = !empty($homeland_coming_soon_header) ? $homeland_coming_soon_header : esc_html__('Our Site is Almost Ready', 'homeland');
		$homeland_coming_soon_text_label = !empty($homeland_coming_soon_text) ? $homeland_coming_soon_text : esc_html__('Hello! Nice to meet you. We will be back soon once were done building this site.', 'homeland');
		$homeland_coming_soon_sheader_label = !empty($homeland_coming_soon_sheader) ? $homeland_coming_soon_sheader : esc_html__('Time left until launching', 'homeland');
	?>

	<!-- Coming Soon Page -->
	<section class="coming-soon">
		<div class="inside clearfix">
			<h1>
				<a href="<?php echo esc_url( home_url() ); ?>">
					<?php if(empty( $homeland_logo )) : ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php esc_attr( bloginfo('name') ); ?>" title="<?php esc_attr( bloginfo('name') ); ?>" />
					<?php else : ?>
						<img src="<?php echo esc_url( $homeland_logo ); ?>" alt="<?php esc_attr( bloginfo('name') ); ?>" title="<?php esc_attr( bloginfo('name') ); ?>" />
					<?php endif; ?>
				</a>
			</h1>
			<h2><span><?php echo esc_html( $homeland_coming_soon_header_label ); ?></span></h2>
			<h5><?php echo esc_html( $homeland_coming_soon_text_label ); ?></h5>
			<h3><?php echo esc_html( $homeland_coming_soon_sheader_label ); ?></h3>
			<div id="defaultCountdown"></div>
			<?php homeland_social_share_header(); ?>
		</div>
	</section>

<?php wp_footer(); ?>

</body>
</html>
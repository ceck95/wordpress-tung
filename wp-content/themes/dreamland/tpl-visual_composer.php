<?php /* Template Name: VC Page */
get_header() ;
$options = _WSH()->option();
$meta = _WSH()->get_meta('_bunch_header_settings');

$title = dreamland_set($meta, 'page_title');
$bg = dreamland_set($meta, 'page_bg');

?>
<?php if(dreamland_set($meta, 'breadcrumb')):?>

<!--Page Title-->
<section class="page-title" <?php if($bg):?>style="background-image:url('<?php echo esc_url($bg);?>');"<?php endif;?>>
	<div class="auto-container">
		<div class="content-box">
			<h1><?php if($title) echo balanceTags($title); else wp_title('');?></h1>
			<div class="bread-crumb">
				<?php echo dreamland_get_the_breadcrumb();?>
			</div>
		</div>
	</div>
</section>

<?php endif;?>

<?php while( have_posts() ): the_post(); ?>
     <?php the_content(); ?>
<?php endwhile;  ?>
<?php if(dreamland_set($meta, 'vc_footer')) get_template_part('footer', 'black');?>
<?php get_footer() ; ?>
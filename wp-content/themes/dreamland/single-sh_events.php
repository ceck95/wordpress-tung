<?php $options = _WSH()->option();
get_header(); 
$settings  = dreamland_set(dreamland_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
$meta = _WSH()->get_meta('_bunch_layout_settings');
$meta1 = _WSH()->get_meta('_bunch_header_settings');
$meta2 = _WSH()->get_meta();

_WSH()->page_settings = $meta;
if(dreamland_set($_GET, 'layout_style')) $layout = dreamland_set($_GET, 'layout_style'); else
$layout = dreamland_set( $meta, 'layout', 'full' );
if( !$layout || $layout == 'full' || dreamland_set($_GET, 'layout_style')=='full' ) $sidebar = ''; else
$sidebar = dreamland_set( $meta, 'sidebar', 'blog-sidebar' );
$classes = ( !$layout || $layout == 'full' || dreamland_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12' : ' col-lg-8 col-md-8 col-sm-12 col-xs-12';
if($layout == 'both') $classes = ' col-lg-6 col-md-6 col-sm-6 col-xs-12 ';  
/** Update the post views counter */
_WSH()->post_views( true );

$title = dreamland_set($meta1, 'page_title');
$bg = dreamland_set($meta1, 'page_bg');
?>


<!-- Page Banner -->
<section class="page-banner" <?php if($bg):?>style="background-image:url('<?php echo esc_url($bg);?>');"<?php endif;?>>
	<div class="auto-container">
		<h1><?php if($title) echo balanceTags($title); else wp_title('');?></h1>
	</div>
</section>

<?php while( have_posts() ): the_post(); 
	  $post_meta = _WSH()->get_meta(); //dreamland_printr($post_meta);
?>
<section id="single-event">
	<div class="auto-container">
		<div class="row">
			
			<div class="col-lg-3">
				<?php if($sorted_speakers = dreamland_set($post_meta, 'sorting_speakers')): //dreamland_printr($sorted_speakers);?>
				<?php foreach($sorted_speakers as $value): //dreamland_printr($value);?>
					<?php echo get_the_post_thumbnail( $value, 'dreamland_size2', array('class' => 'img-responsive') ); ?>
				<?php endforeach;?>
				<?php endif;?>
				<?php if(dreamland_set($post_meta, 'speaker_image')):?><img src="<?php echo esc_url(dreamland_set($post_meta, 'speaker_image'));?>" alt=""><?php endif;?>
				<ul>
					<?php foreach($sorted_speakers as $value): //dreamland_printr($value);?>
						<li><i class="fa fa-user"></i><a href="<?php echo esc_url(get_permalink( $value)); ?>"><?php echo get_the_title( $value); ?></a></li>
					<?php endforeach;?>
					<?php if(dreamland_set($post_meta, 'event_date')):?><li><i class="fa fa-calendar"></i><?php echo dreamland_set($post_meta, 'event_date');?></li><?php endif;?>
					<?php if(dreamland_set($post_meta, 'start_time') || dreamland_set($post_meta, 'end_time')):?><li><i class="fa fa-clock-o"></i><?php echo dreamland_set($post_meta, 'start_time');?><?php if(dreamland_set($post_meta, 'end_time')) echo " - "; echo dreamland_set($post_meta, 'end_time');?></li><?php endif;?>
					<?php if(dreamland_set($post_meta, 'pdf_link')):?><li><a href="<?php echo esc_url(dreamland_set($post_meta, 'pdf_link'));?>" target="_blank"><i class="fa fa-file-pdf-o"></i><?php esc_html_e('Download Document', 'dreamland');?></a></li><?php endif;?>
				</ul>
			</div>
			<div class="col-lg-9">
				<?php the_post_thumbnail('full', array('class' => 'img-responsive'));?>
				<h2><?php the_title();?></h2>
				
				<?php the_content();?>
				
			</div>
			
		</div>
	</div>
</section>
<?php if(dreamland_set($post_meta, 'show_call_out')):
	  if($call_out = dreamland_set($post_meta, 'call_to_action_settings')):
	  foreach($call_out as $key => $value):
?>
<!--Intro Section-->
<section class="intro-section" style="background-image:url('<?php echo dreamland_set($value, 'background_img');?>');">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="col-md-8 col-sm-8 col-xs-12 text-content">
				<h2><?php echo dreamland_set($value, 'call_title');?></h2>
				<div class="text"><?php echo dreamland_set($value, 'call_text');?></div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 text-right">
				<a href="<?php echo esc_url(dreamland_set($value, 'btn_link'));?>" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span><?php echo dreamland_set($value, 'btn_text');?></a>
			</div>
		</div>
	</div>
</section>

<?php endforeach; endif; endif;?>

<?php endwhile;?>

<?php get_footer(); ?>
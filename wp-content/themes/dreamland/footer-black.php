<?php

$options = _WSH()->option(); 

?>

<!--Main Footer-->

<footer class="main-footer">

	<div class="auto-container">

		

		<!--Footer Content-->

		<div class="footer-content">

		<?php if($socials = dreamland_set(dreamland_set($options, 'social_media'), 'social_media')): //printr($socials);?>

			<div class="social-links">

			<?php foreach($socials as $key => $value):

							if(dreamland_set($value, 'tocopy')) continue;

				?>

					<a title="<?php echo dreamland_set($value, 'title');?>" href="<?php echo esc_url(dreamland_set($value, 'social_link'));?>"><span class="fa <?php echo dreamland_set($value, 'social_icon');?>"></span></a>

				<?php endforeach;?>

			</div>

			<?php endif;?>

			

			<div class="copyright"><?php echo dreamland_set($options, 'copy_right');?></div>

		</div>

		

	</div>

</footer>
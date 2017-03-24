<?php $options = get_option(BUNCH_NAME.'_theme_options');?>
<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>
<?php if(dreamland_set($options, 'switcher')):?>
<div class="switcher">
        <i class="fa fa-cog"></i>
        <strong><?php esc_html_e('Colors', 'dreamland');?></strong>
        <i class="clearfix"></i>        
        <div class="box" title="Green" id="green"><?php esc_html_e('green', 'dreamland');?></div>
		<div class="box" title="default" id="default"><?php esc_html_e('default', 'dreamland');?></div>
        <div class="box" title="Orange" id="orange"><?php esc_html_e('orange', 'dreamland');?></div>
		<div class="box" title="purple" id="purple"><?php esc_html_e('default', 'dreamland');?></div>
        <div class="box" title="yellow" id="yellow"><?php esc_html_e('green', 'dreamland');?></div>
        <div class="box" title="teal" id="teal"><?php esc_html_e('orange', 'dreamland');?></div>
    </div>
<?php endif;?>
<?php wp_footer(); ?>

</body>

</html>
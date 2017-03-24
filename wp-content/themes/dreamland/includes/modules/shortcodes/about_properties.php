<?php ob_start(); ?>

<!--Properties Section-->
    <section class="properties-section">
    	<div class="auto-container">
        
            <!--Section Title-->
            <div class="sec-title">
                <h2><?php echo balanceTags($title);?> <span class="theme_color"><?php echo balanceTags($g_title);?></span></h2>
                <div class="separator small-separator"></div>
                <div class="text"><p><?php echo balanceTags($text);?></p></div>
            </div>
            
            <!--Full Image Box-->
            <?php if($img):?><figure class="full-image-box"><img src="<?php echo esc_url(wp_get_attachment_url($img, 'full'));?>" alt="<?php esc_html_e('Image', 'dreamland');?>"></figure><?php endif;?>
            
            <div class="five-col-theme">
                <div class="row clearfix">
                    <?php echo do_shortcode( $contents );?>
                </div>
            </div>
            
        </div>
    </section>

<?php return ob_get_clean(); 
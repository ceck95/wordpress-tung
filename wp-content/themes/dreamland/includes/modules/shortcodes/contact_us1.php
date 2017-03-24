<?php $options = _WSH()->option();
ob_start() ;?>

<!--Contact Section-->
    <section class="default-section faded-section contact-section" style="background-image:url('<?php echo wp_get_attachment_url($img, 'full')?>');">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
                <div class="col-md-5 col-sm-12 col-xs-12 column">
                	<h2><?php echo balanceTags($title);?></h2>
                    
                	<div class="desc-text">
                    	<p><?php echo balanceTags($text);?></p>
                    </div>
                    <!--Contact Info-->
                    <ul class="contact-info">
                    	<li>
                        	<span class="icon flaticon-location74"></span>
                            <h3><?php esc_html_e('ADDRESS', 'dreamland');?></h3>
							<p><?php echo balanceTags($address);?></p>
						</li>
                        
                        <li>
                        	<span class="icon flaticon-telephone51"></span>
                            <h3><?php esc_html_e('PHONE', 'dreamland');?></h3>
							<p><?php echo balanceTags($phone);?></p>
						</li>
                        
                        <li>
                        	<span class="icon flaticon-envelope126"></span>
                            <h3><?php esc_html_e('EMAIL', 'dreamland');?></h3>
							<p><?php echo balanceTags($mail);?></p>
						</li>
                    </ul>
                </div>
                
                <!--Column-->
                <div class="col-md-7 col-sm-12 col-xs-12 column">
                	<h2><?php echo balanceTags($form_title);?></h2>
                    <!--Contact Form-->
                    <div class="contact-form">
                    	<?php echo do_shortcode(dreamland_base_decode($contact_form_one));?>
                    </div>
                </div>
            </div>
            
            <!--Separator-->
            <div class="separator big-separator"></div>
           
           <!--Footer Content-->
            <div class="footer-content">
            	
                <?php if($socials = dreamland_set(dreamland_set($options, 'social_media'), 'social_media')): //printr($socials);?>
                    <!--Social Links-->
                    <div class="social-links">
                        <?php foreach($socials as $key => $value):
                            if(dreamland_set($value, 'tocopy')) continue;
                        ?>
                            <a title="<?php echo dreamland_set($value, 'title');?>" href="<?php echo esc_url(dreamland_set($value, 'social_link'));?>"><span class="fa <?php echo dreamland_set($value, 'social_icon');?>"></span></a>
                        <?php endforeach;?>
                    </div>
                
				<?php endif;?>

                <div class="copyright"><?php esc_html_e('&copy;', 'dreamland');?> <?php echo balanceTags($footer_text);?> </div>
            </div>
           
        </div>
    </section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>   
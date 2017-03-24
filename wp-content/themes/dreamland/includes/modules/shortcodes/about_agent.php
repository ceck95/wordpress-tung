<?php  
ob_start() ;?>

<!--Agent Section-->
<section class="agent-section">
    <div class="auto-container">
        <div class="row clearfix">
        
            <div class="column col-md-5 col-sm-12 col-xs-12">
                <figure class="agent-image wow rollIn" data-wow-delay="300ms" data-wow-duration="1500ms"><a href="#"><img src="<?php echo esc_url(wp_get_attachment_url($img, 'full'));?>" class="img-circle" alt=""></a></figure>
            </div>
            
            <div class="column col-md-7 col-sm-12 col-xs-12">
                <!--Bordered Title-->
                <div class="bordered-title">
                    <h2><?php echo balanceTags($title);?> <span class="theme_color"><?php echo balanceTags($g_title);?></span></h2>                  
                </div>
                
                <!--Agent Title-->
                <div class="agent-headers">
                    <h3 class="name"><?php echo balanceTags($sub_title);?></h3>
                    <p class="designation"><?php echo balanceTags($designation);?></p>                  
                </div>
                
                <div class="desc-text">
                    <p><?php echo balanceTags($text);?></p>
                </div>
                
                <!--Info Box-->
                <div class="info-box">
                    <ul class="clearfix">
                        <li class="address">
                            <div class="icon"><span class="flaticon-location74"></span></div>
                            <h4><?php esc_html_e('ADDRESS', 'dreamland');?></h4>
                            <?php echo balanceTags($address);?>
                        </li>
                        <li class="contact-info">
                            <div class="icon"><span class="flaticon-telephone51"></span></div>
                            <h4><?php esc_html_e('PHONE', 'dreamland');?></h4>
                            <?php echo balanceTags($phone);?>
                        </li>
                    </ul>
                    
                    <a href="<?php echo esc_url($btn_link);?>" class="theme-btn btn-style-one"><?php echo balanceTags($btn_text);?></a>
                </div>
                
            </div>
        </div>
    </div>
</section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>   
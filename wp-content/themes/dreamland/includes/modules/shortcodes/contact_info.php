<?php  
ob_start() ;?>

<!--Info Section-->
<section class="info-section contact-section">
    <div class="auto-container">
        <h2><?php echo balanceTags($title);?></h2>
        <!--Text-->
        <div class="desc-text bitter-font">
            <p><em><?php echo balanceTags($text);?></em> </p>
        </div>
        
        <!--Contact Info-->
        <div class="contact-info">
            <div class="row clearfix">
                <!--Column-->
                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <span class="icon flaticon-location74"></span>
                    <h3><?php echo esc_html_e('ADDRESS', 'dreamland')?></h3>
                    <p><?php echo balanceTags($address);?></p>
                </div>
                <!--Column-->
                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <span class="icon flaticon-telephone51"></span>
                    <h3><?php echo esc_html_e('PHONE', 'dreamland')?></h3>
                    <p><?php echo balanceTags($phone);?></p>
                </div>
                <!--Column-->
                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <span class="icon flaticon-envelope126"></span>
                    <h3><?php echo esc_html_e('EMAIL', 'dreamland')?></h3>
                    <p><?php echo balanceTags($mail);?></p>
                </div>
                
            </div>
        </div>
        
    </div>
</section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>   
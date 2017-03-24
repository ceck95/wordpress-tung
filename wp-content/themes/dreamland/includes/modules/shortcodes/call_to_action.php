<?php  
ob_start() ;?>

<!--Intro Section-->
<section class="intro-section">
    <div class="auto-container">
        <div class="outer-box clearfix">
            <span class="anim-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms"><img src="<?php echo esc_url(wp_get_attachment_url($img, 'full'));?>" alt=""></span>
            <div class="col-md-9 col-sm-7 col-xs-12">
                <p><?php echo balanceTags($text);?></p>
            </div>
            <div class="col-md-3 col-sm-5 col-xs-12 text-right">
                <a href="<?php echo esc_url($btn_link);?>" class="theme-btn btn-style-two"><?php echo balanceTags($btn_text);?></a>
            </div>
        </div>
    </div>
</section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>   
<?php  
ob_start() ;?>

<!--Parallax Section-->
<section class="parallax-section" style="background-image:url('<?php echo wp_get_attachment_url($img, 'full');?>');">
    <div class="auto-container">
        <div class="text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <h2><?php echo balanceTags($title);?></h2>
            <div class="text"><?php echo balanceTags($text);?></div>
            <a class="theme-btn btn-style-one" href="<?php echo esc_url($btn_link);?>"><?php echo balanceTags($btn_text);?></a>
            <a class="theme-btn btn-style-two" href="<?php echo esc_url($btn_link1);?>"><?php echo balanceTags($btn_text1);?></a>
            
        </div>
    </div>
</section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>   
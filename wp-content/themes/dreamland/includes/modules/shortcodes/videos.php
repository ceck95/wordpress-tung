<?php ob_start(); ?>

<!--Video Tour Section-->
    <section class="video-tour-section">
    	<div class="auto-container small-container">
        	
            <!--Section Title-->
            <div class="sec-title">
                <div class="text"><p><?php echo balanceTags($text);?></p></div>
            </div>
            
        	<!--Video Gallery Outer-->
            <div class="video-tour-gallery">
            	
                <div class="ms-videogallery-template">
                    <!-- masterslider -->
                    <div class="master-slider ms-skin-default video-gallery" id="video-gallery">
                        
                        <?php echo do_shortcode( $contents );?>
                        
                    </div>
                    <!-- end of masterslider -->
                </div>
        
            </div>
        </div>
    </section>

<?php return ob_get_clean(); 
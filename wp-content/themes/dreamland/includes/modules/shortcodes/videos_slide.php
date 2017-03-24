<?php ob_start(); ?>

<div class="ms-slide">
    <img src="<?php echo esc_url(wp_get_attachment_url($img, 'full'));?>" alt="">
    <div class="ms-thumb">
        <img src="<?php echo esc_url(wp_get_attachment_url($thumb_img, 'full'));?>" alt="video thumb"  >
    </div>
    <a data-type="video" href="<?php echo esc_url($video_link);?>"> </a>
</div>

<?php return ob_get_clean(); ?>
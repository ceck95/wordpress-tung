<?php ob_start(); ?>

<!--Column-->
<article class="column">
    <div class="inner-box">
        <div class="icon"><span class="<?php echo str_replace("icon ","", $icon);?>"></span></div>
        <h4 class="title"><?php echo balanceTags($title);?></h4>
        <h3 class="count"><?php echo balanceTags($quantity);?></h3>
    </div>
</article>

<?php return ob_get_clean(); ?>
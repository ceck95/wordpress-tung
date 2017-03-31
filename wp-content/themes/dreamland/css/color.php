<?php
// @Author: Tran Van Nhut <nhutdev>
// @Date:   2017-03-24T10:45:10+07:00
// @Email:  tranvannhut4495@gmail.com
# @Last modified by:   nhutdev
# @Last modified time: 2017-03-31T11:20:57+07:00

/** Set ABSPATH for execution */
define('ABSPATH', dirname(dirname(__FILE__)).'/');
define('WPINC', 'wp-includes');

/**
 * @ignore
 */
function add_filter()
{
}

/**
 * @ignore
 */
function esc_attr($str)
{
    return $str;
}

/**
 * @ignore
 */
function apply_filters()
{
}

/**
 * @ignore
 */
function get_option()
{
}

/**
 * @ignore
 */
function is_lighttpd_before_150()
{
}

/**
 * @ignore
 */
function add_action()
{
}

/**
 * @ignore
 */
function did_action()
{
}

/**
 * @ignore
 */
function do_action_ref_array()
{
}

/**
 * @ignore
 */
function get_bloginfo()
{
}

/**
 * @ignore
 */
function is_admin()
{
    return true;
}

/**
 * @ignore
 */
function site_url()
{
}

/**
 * @ignore
 */
function admin_url()
{
}

/**
 * @ignore
 */
function home_url()
{
}

/**
 * @ignore
 */
function includes_url()
{
}

/**
 * @ignore
 */
function wp_guess_url()
{
}

if (!function_exists('json_encode')) :
/**
 * @ignore
 */
function json_encode()
{
}
endif;

/* Convert hexdec color string to rgb(a) string */

function hex2rgba($color, $opacity = false)
{
    $default = 'rgb(0,0,0)';

    //Return default if no color provided
    if (empty($color)) {
        return $default;
    }

    //Sanitize $color if "#" is provided
        if ($color[0] == '#') {
            $color = substr($color, 1);
        }

        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
            $hex = array($color[0].$color[1], $color[2].$color[3], $color[4].$color[5]);
        } elseif (strlen($color) == 3) {
            $hex = array($color[0].$color[0], $color[1].$color[1], $color[2].$color[2]);
        } else {
            return $default;
        }

        //Convert hexadec to rgb
        $rgb = array_map('hexdec', $hex);

        //Check if opacity is set(rgba or rgb)
        if ($opacity) {
            if (abs($opacity) > 1) {
                $opacity = 1.0;
            }
            $output = 'rgba('.implode(',', $rgb).','.$opacity.')';
        } else {
            $output = 'rgb('.implode(',', $rgb).')';
        }

        //Return rgb(a) color string
        return $output;
}
//$blue = $_GET['b'];
//$black = $_GET['bl'];
$green = $_GET['main_color'];

ob_start(); ?>

.btn-style-one,
.scroll-to-top:hover,
.header-style-one .logo:before,
.header-style-one .main-menu .navigation > li > ul > li:hover > a,
.header-style-two .header-lower,
.header-style-two .main-menu .navigation > li > a:before,
.main-menu .navbar-collapse > ul > li.current-menu-parent > a:before,
.header-style-two .main-menu .navigation > li > ul > li:hover > a,
.header-style-two .main-menu .navigation > li > ul > li  > ul > li:hover > a,
.main-slider .bg-grey .view-more,
.services-outer .column .inner-box .icon-left .icon,
.tabs-box .tab-buttons .tab-btn:hover,
.tabs-box .tab-buttons .tab-btn.active-btn,
.gallery-section .filter-tabs li:hover,
.gallery-section .filter-tabs li.active,
.intro-section,
.footer-content .social-links a:hover,
.testimonial-slider .bx-controls .bx-prev:hover:after,
.testimonial-slider .bx-controls .bx-next:hover:after,
.video-tour-section .ms-skin-default .ms-nav-prev:hover:after,
.video-tour-section .ms-skin-default .ms-nav-next:hover:after,
.blog-container .blog-post .image-box .post-options .heart-icon,
.blog-container .blog-post .image-box .post-options .plus-icon,
.sidebar-page .group-title:after,
.comment-form button,
.sidebar .search-form button,
.sidebar .popular-tags a:hover,
.pager-outer .pagination a:hover,
.pager-outer .pagination .active a,
.contact-form input[type="submit"],
.tagcloud a:hover,
.pagination > li:first-child > a:hover, .pagination > li:first-child > span:hover,.pagination > li > span:hover,
.pagination > li > span,
.agent-section .bordered-title::after,
.contact-section .contact-info li .icon,
.info-section .contact-info .column .icon
{

	background-color: #<?php echo $green; ?> !important;
}

a,
.btn-style-one:hover,
.btn-style-two:hover,
.theme_color,
.scroll-to-top,
.header-style-one .info-box li a:hover,
.header-style-one .info-box li .icon,
.header-style-one .main-menu .navigation > li:hover > a,
.header-style-one .main-menu .navigation > li.current > a,
.header-style-one .main-menu .navigation > li.current-menu-item > a,
.header-style-one .main-menu .navigation > li > ul:before,
.header-style-two .main-menu .navigation > li:hover > a,
.header-style-two .main-menu .navigation > li.current > a,
.header-style-two .main-menu .navigation > li.current-menu-item > a,
.main-menu .navbar-collapse > ul > li.current-menu-parent > a,
.header-style-two .main-menu .navigation > li > ul > li.dropdown > a:after,
.main-slider .bg-white .price,
.main-slider .bg-grey .price,
.sec-title h2 strong,
.sec-title h2 .light,
.three-col-theme .column .inner-box .icon-left .icon,
.five-col-theme .column .inner-box .icon,
.styled-list li:before,
.gallery-section .image-box .zoom-btn,
.intro-section.style-two .btn-style-two,
.agent-section .info-box li a:hover,
.agent-section .info-box li .icon,
.blog-section .blog-post .post-title a:hover,
.blog-section .blog-post .read-more:hover,
.video-tour-section .ms-skin-default .ms-nav-prev:after,
.blog-container .blog-post h3 a:hover,
.blog-container .blog-post .post-info a:hover,
.sidebar-page .comments-area .reply-btn,
.comment-form .form-group .icon-box label,
.sidebar .recent-posts .post a,
.sidebar .recent-posts .post a:hover,
.sidebar .list li .icon,
.sidebar .list li a:hover,
.contact-form input[type="submit"]:hover,
.comment-reply-link,
.widget ul li a:hover,
.widget ul li:before,
.sidebar .widget_bunch_recent_post_with_image .post a:hover,
.header-style-two .header-top .info li a:hover,
.header-style-two .header-top .social-links a:hover,
.blog-container .blog-post .post-info.lower i,
.psocial li .stLarge:before,
.video-tour-section .ms-skin-default .ms-nav-next::after
{
	color: #<?php echo $green; ?>;
}

.btn-style-one,
.btn-style-one:hover,
.scroll-to-top:hover,
.header-style-one .main-menu .navigation > li > ul,
.header-style-two .main-menu .navigation > li > ul,
.header-style-two .main-menu .navigation > li > ul > li  > ul,
.gallery-section .filter-tabs li:hover,
.gallery-section .filter-tabs li.active,
.intro-section.style-two p,
.intro-section.style-two .btn-style-two,
.bordered-title,
.testimonials-section .testimonials-slider .slide-item:hover,
.testimonials-section .testimonials-slider .slide-item:hover .image-box,
.testimonials-section .column-carousel.three-column .owl-dot span:hover,
.testimonials-section .column-carousel.three-column .owl-dot.active span,
.testimonials-section.theme-two .column-carousel.three-column .owl-dot span,
.contact-form .form-group input[type="text"]:focus,
.contact-form .form-group input[type="email"]:focus,
.contact-form .form-group input[type="url"]:focus,
.contact-form .form-group input[type="password"]:focus,
.contact-form .form-group select:focus,
.contact-form .form-group textarea:focus,
.blog-section .blog-post .post-title a:hover,
.blog-section .blog-post .read-more:hover,
.testimonial-slider .slide-info .author-thumb,
.sidebar .search-form input[type="search"]:focus,
.sidebar .search-form input[type="text"]:focus,
.sidebar .popular-tags a:hover,
.pager-outer .pagination a,
.contact-form input[type="submit"],
.contact-form input[type="submit"]:hover,
.tagcloud a:hover,
.pagination > li:first-child > a, .pagination > li:first-child > span,
.paginate-links > span,
.paginate-links a
{
	border-color: #<?php echo $green; ?> !important;
}

.gallery-section .image-box .zoom-btn
{
	outline-color: #<?php echo $green; ?> !important;
}

.sidebar-page .comments-area .reply-btn,
.sidebar .sidebar-title:after,
.comment-reply-link
{
	border-bottom-color: #<?php echo $green; ?> !important;
}
.sidebar .sidebar-title:before{
	border-top-color: #<?php echo $green; ?> !important;
}

.main-slider .bg-green{
	background-color: #<?php echo $green; ?> !important;
	opacity: 0.6;
}

.main-slider .bg-green.curve-right .curve{
	border-left-color: #<?php echo $green; ?>;
	opacity: 0.6;
}

.btn-style-one:hover,
.btn-style-two:hover,
.contact-form input[type="submit"]:hover{
	background-color: #ffffff !important;
	color:#<?php echo $green; ?> !important;
}
<?php

$out = ob_get_clean();
$expires_offset = 31536000; // 1 year
header('Content-Type: text/css; charset=UTF-8');
header('Expires: '.gmdate('D, d M Y H:i:s', time() + $expires_offset).' GMT');
header("Cache-Control: public, max-age=$expires_offset");
header('Vary: Accept-Encoding'); // Handle proxies
header('Content-Encoding: gzip');

echo gzencode($out);
exit;

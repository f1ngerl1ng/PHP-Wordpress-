<?php

# Hooks
add_action("wp_enqueue_scripts", 'cr_enqueue');
function cr_enqueue()
{
    $url = get_template_directory_uri();
    $ver = time();
    wp_enqueue_style('style', $url . '/static/css/style.css', [], $ver);
    wp_enqueue_style('bootstrap', $url . '/static/css/bootstrap.min.css', [], $ver);
    wp_enqueue_style('bootstrap-datepicker', $url . '/static/css/bootstrap-datepicker.css', [], $ver);
    wp_enqueue_style('jquery-fancybox', $url . '/static/css/jquery.fancybox.min.css', [], $ver);
    wp_enqueue_style('owl-carousel', $url . '/static/css/owl.carousel.min.css', [], $ver);
    wp_enqueue_style('owl-theme', $url . '/static/css/owl.theme.default.min.css', [], $ver);
    wp_enqueue_style('flaticon', $url . '/static/fonts/flaticon/font/flaticon.css', [], $ver);
    wp_enqueue_style('aos', $url . '/static/css/aos.css', [], $ver);
    wp_enqueue_style('style-icomoon', $url . '/static/fonts/icomoon/style.css', [], $ver);


    wp_enqueue_script("jquery", $url . "/static/js/jquery-3.3.1.min.js", [], $ver);
    wp_enqueue_script("popper", $url . "/static/js/popper.min.js", [], $ver);
    wp_enqueue_script("bootstrap", $url . "/static/js/bootstrap.min.js", [], $ver);
    wp_enqueue_script("carousel", $url . "/static/js/owl.carousel.min.js", [], $ver);
    wp_enqueue_script("sticky", $url . "/static/js/slick.min.js", [], $ver);
    wp_enqueue_script("waypoints", $url . "/static/js/jquery.waypoints.min.js", [], $ver);
    wp_enqueue_script("animateNumber", $url . "/static/js/jquery.animateNumber.min.js", [], $ver);
    wp_enqueue_script("fancybox", $url . "/static/js/jquery.fancybox.min.js", [], $ver);
    wp_enqueue_script("easing", $url . "/static/js/jquery.easing.1.3.js", [], $ver);
    wp_enqueue_script("datepicker", $url . "/static/js/bootstrap-datepicker.min.js", [], $ver);
    wp_enqueue_script("aos", $url . "/static/js/aos.js", [], $ver);
    wp_enqueue_script("main", $url . "/static/js/main.js", [], $ver);
}
//підтримка меню на wordpress
add_theme_support('menus');
add_theme_support('post-thumbnails');

add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
    register_nav_menu('primary', 'Primary Menu');
}

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}
<?php
get_header();
$banner_show = get_theme_mod('index_banner_display_setting');
// print_r($banner_show);exit;
$banner_title = get_theme_mod('index_title_setting');
$banner_subtitle = get_theme_mod('index_subtitle_setting');
$banner_image = get_theme_mod('index_background_setting');
$contact_us = get_theme_mod('contact_us_url_setting');
echo do_shortcode("[big_banner banner_show='$banner_show' banner_title='$banner_title' banner_subtitle='$banner_subtitle' banner_image='$banner_image' contact us='$contact_us']"); // adding big banner 


get_footer();
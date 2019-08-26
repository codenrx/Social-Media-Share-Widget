<?php

/*
Plugin Name: Social Media Share & Widget
Plugin URI: https://github.com/codenrx/Social-Media-Share-Widget
Description: A Simple Plugin used for social sharing in wordpress. Got These Design From <a target="_blank" href="https://codepen.io/thalseth/pen/saqIj">Torleif Halseth</a>'s pen
Author: CodenRx Team
Author URI: https://github.com/codenrx
Text Domain: socialsharewidget
Version: 1.0
*/

include('widgets/social_links.php');
include('widgets/enqueue.php');
include('share/post-share.php');

add_action('wp_enqueue_scripts', 'register_style_file',9999 );
add_action('widgets_init', function () {
    register_widget('social_share_widget');
});
add_filter( "the_content", "wpb_after_post_content" );
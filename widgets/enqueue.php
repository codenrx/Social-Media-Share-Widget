<?php

function codenrx_register_style_file()
{
   wp_enqueue_style('so-condenrx-styles', plugins_url('../css/style.css', __FILE__));
   wp_enqueue_style( 'so-condenrx-font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

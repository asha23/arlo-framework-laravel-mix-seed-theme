<?php

namespace arlo;

require_once "vendor/autoload.php";

if(!function_exists('\\arlo\\init')) {
    function init()
    {
        $core = new core();
        $core->listen();

        $enqueue_scripts = new enqueue_scripts();
        $enqueue_scripts->listen();

        $menus = new menus();
        $menus->listen();

        $custom_post_types = new custom_post_types();
        $custom_post_types->listen();
    }
}

add_action( 'wp_loaded', '\\arlo\\init' );

?>

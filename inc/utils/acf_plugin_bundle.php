<?php

namespace arlo_seed\utils;

final class acf_plugin_bundle
{

    public function listen()
    {
        $this->check_acf();
    }

    public function check_acf()
    {
        if (!class_exists('acf')) {
            $this->init();
        } else {
            return;
        }
    }

    public function init()
    {
        add_filter('acf/settings/url', [$this, 'acf_settings_url']);
        add_filter('acf/settings/show_admin', [$this, 'acf_settings_show_admin']);
        include_once( get_stylesheet_directory() . '/resources/advanced-custom-fields-pro/acf.php' );
    }

    public function acf_settings_url($url) 
    {
        $url = get_stylesheet_directory_uri() . '/resources/advanced-custom-fields-pro/';
        return $url;
    }

    function acf_settings_show_admin( $show_admin ) {
       return true;
    }
}
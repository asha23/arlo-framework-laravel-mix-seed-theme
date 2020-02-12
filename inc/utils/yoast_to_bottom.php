<?php

namespace arlo_seed\utils;

class yoast_to_bottom 
{
    public function listen()
    {
        add_filter('wpseo_metabox_prio', [$this, 'init']);
    }

    public function init()
    {
        return 'low';
    }
}




<?php

namespace arlo_seed\utils;

class yoast_to_bottom 
{
    public function init()
    {
        add_filter('wpseo_metabox_prio', [$this, 'move']);
    }

    public function move()
    {
        return 'low';
    }
}




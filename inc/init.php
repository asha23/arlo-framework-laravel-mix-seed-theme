<?php

namespace arlo_seed;
use arlo_seed\utils\acf_plugin_bundle;
use arlo_seed\utils\scripts_styles;
use arlo_seed\utils\yoast_to_bottom;
use arlo_seed\cpt\custom_post_types;

class init 
{
    public static function init_theme()
    {
        $check_acf = new acf_plugin_bundle();
        $check_acf->listen();

        $scripts_styles = new scripts_styles();
        $scripts_styles->listen();

        $yoast_to_bottom = new yoast_to_bottom();
        $yoast_to_bottom->listen();

        $cpt = new custom_post_types();
        $cpt->listen();
    }
}
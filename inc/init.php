<?php

namespace arlo_seed;
use arlo_seed\utils\acf_plugin_bundle;
use arlo_seed\utils\scripts_styles;
use arlo_seed\utils\yoast_to_bottom;
use arlo_seed\cpt\custom_post_types;
use arlo_seed\acf\register_page_fields;

class init 
{
    public static function init_theme()
    {
        $check_acf = new acf_plugin_bundle();
        $check_acf->init();

        $scripts_styles = new scripts_styles();
        $scripts_styles->init();

        $yoast_to_bottom = new yoast_to_bottom();
        $yoast_to_bottom->init();

        $cpt = new custom_post_types();
        $cpt->init();

        $register_page_fields = new register_page_fields();
        $register_page_fields->init();
    }
}
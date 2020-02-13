<?php

namespace arlo_seed;

require_once __DIR__ . '/vendor/autoload.php';

if (!defined('WP_ENV')) {
    define('WP_ENV', 'production');
}

$init_theme = new init();
$init_theme->init_theme();

$init_components = new init();
$init_components->init_components();

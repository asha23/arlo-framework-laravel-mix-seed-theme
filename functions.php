<?php

namespace arlo_seed;

require_once __DIR__ . '/vendor/autoload.php';

if (!defined('WP_ENV')) {
    define('WP_ENV', 'production');
}

$init = new init();
$init->init_theme();

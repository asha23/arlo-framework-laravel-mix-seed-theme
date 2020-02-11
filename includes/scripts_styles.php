<?php

add_action( 'wp_enqueue_scripts', 'seed_scripts_and_styles' );

function rand_num() 
{
	$randomizr = rand(100,1000000);
	return $randomizr;
}

function seed_scripts_and_styles()
{
	if (!is_admin()) {
		

		wp_register_script( 
			"manifest-scripts", 
			'dist/js/manifest.js', 
			[], 
			rand_num(), 
			true
		);

		wp_register_script( 
			"vendor-scripts", 
			'dist/js/vendor.js', 
			['manifest-scripts'], 
			rand_num(), 
			true
		);

		wp_register_script( 
			"app-scripts", 
			'dist/js/app.js', 
			['vendor-scripts'], 
			rand_num(), 
			true
		);

		wp_enqueue_script( 'manifest-scripts' );
		wp_enqueue_script( 'vendor-scripts' );
		wp_enqueue_script( 'app-scripts' );

		wp_register_style(
			'arlo-style', 
			'dist/css/app.css', 
			[], 
			rand_num(), 
			'all'
		);

		wp_enqueue_style('arlo-style');
	}
}

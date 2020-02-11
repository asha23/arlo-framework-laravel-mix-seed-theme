<?php

namespace arlo;

final class enqueue_styles
{
	public function __construct()
	{

	}

	public function listen()
	{
		add_action( 'wp_enqueue_scripts', [$this, 'seed_scripts_and_styles'] );
	}

	public function rand()
	{
		$randomizr = rand(100,1000000);
		return $randomizr;
	}

	public function seed_scripts_and_styles() 
	{
		if (!is_admin()) {
			$rand = $this->rand();

			wp_register_script( 
				"manifest-scripts", 
				'dist/js/manifest.js', 
				['-scripts'], 
				$rand, 
				true
			);

			wp_register_script( 
				"vendor-scripts", 
				'dist/js/vendor.js', 
				['manifest-scripts'], 
				$rand, 
				true
			);

			wp_register_script( 
				"app-scripts", 
				'dist/js/app.js', 
				['vendor-scripts'], 
				$rand, 
				true
			);

			wp_enqueue_script( 'manifest-scripts' );
			wp_enqueue_script( 'vendor-scripts' );
			wp_enqueue_script( 'app-scripts' );

			wp_register_style(
				'arlo-style', 
				'dist/css/app.css', 
				[], 
				$rand, 
				'all'
			);

        	wp_enqueue_style('arlo-style');
		}
	}
}





<?php

namespace arlo_seed\utils;

class scripts_styles 
{

	public function listen()
	{
		add_action( 'wp_enqueue_scripts', [$this, 'enqueue_scripts_styles'], 0);
	}

	public function rand_num() 
	{
		$randomizr = rand(100,1000000);
		return $randomizr;
	}
	
	public function enqueue_scripts_styles()
	{
		if (!is_admin()) {

			$this->rand = $this->rand_num();
	
			wp_register_script( 
				"manifest-scripts", 
				'dist/js/manifest.js', 
				[], 
				$this->rand, 
				true
			);
	
			wp_register_script( 
				"vendor-scripts", 
				'dist/js/vendor.js', 
				['manifest-scripts'], 
				$this->rand, 
				true
			);
	
			wp_register_script( 
				"app-scripts", 
				'dist/js/app.js', 
				['vendor-scripts'], 
				$this->rand, 
				true
			);
	
			wp_enqueue_script( 'manifest-scripts' );
			wp_enqueue_script( 'vendor-scripts' );
			wp_enqueue_script( 'app-scripts' );
	
			wp_register_style(
				'arlo-style', 
				'dist/css/app.css', 
				[], 
				$this->rand, 
				'all'
			);
	
			wp_enqueue_style('arlo-style');
		}
	}
}




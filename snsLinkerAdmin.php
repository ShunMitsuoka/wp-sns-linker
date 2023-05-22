<?php

class SNSLinkerAdmin {

	private static $initiated = false;

	public static function init() {
		if ( ! self::$initiated ) {
			self::init_hooks();
		}
	}

	public static function init_hooks() {
		self::$initiated = true;
		add_action( 'admin_enqueue_scripts', array( 'SNSLinkerAdmin', 'load_resources' ) );
	}

    public static function load_resources() {
		wp_register_style( 'style.css', plugin_dir_url( __FILE__ ) . 'styles/style.css', array() );
		wp_enqueue_style( 'style.css');
	}
}
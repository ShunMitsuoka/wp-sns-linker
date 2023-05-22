<?php

class SNSLinker {

	public static function getBaseUrl() {
		return (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER['SCRIPT_NAME'] . '?page=cm';
	}

    public static function load_resources() {
		wp_register_style( 'style.css', plugin_dir_url( __FILE__ ) . 'styles/style.css', array() );
		wp_enqueue_style( 'style.css');
	}
}
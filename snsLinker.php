<?php

class SNSLinker {

	public static function view( $name) {
		$file = SNS_LINKER_PLUGIN_DIR . 'views/'. $name . '.php';
		include($file);
	}

	public static function getBaseUrl() {
		return (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER['SCRIPT_NAME'] . '?page=cm';
	}
}
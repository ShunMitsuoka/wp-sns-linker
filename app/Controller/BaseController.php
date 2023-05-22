<?php
namespace App\Controller;

class BaseController {
	public static function view($name, $param = []) {
		$file = SNS_LINKER_PLUGIN_DIR . 'views/'. $name . '.php';
		include($file);
	}
}
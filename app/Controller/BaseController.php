<?php
namespace App\Controller;

class BaseController {
	public static function view($name, $param = []) {
		$layout_file = SNS_LINKER_PLUGIN_DIR . 'views/layouts/layout.php';
		$file = SNS_LINKER_PLUGIN_DIR . 'views/'. $name . '.php';
		include($layout_file);
	}
}
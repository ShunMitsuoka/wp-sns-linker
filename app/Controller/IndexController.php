<?php
namespace App\Controller;

class IndexController extends BaseController {

    public static function index() {
        self::view('index');
	}
}
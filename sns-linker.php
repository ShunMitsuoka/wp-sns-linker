<?php
/*
Plugin Name: SNS Linker
Description: SNSと連携するためのプラグイン
Version: 0.1
Author: SHUN MITSUOKA
Author URI: https://tri-an-gout.com/
Licence: GPL v2 or later
Licence URI: 
*/

use App\Controller\IndexController;
use App\Controller\PostController;
use App\Controller\SettingController;
use App\db\SNSLinkerDB;

require_once __DIR__ . "/vendor/autoload.php";

define( 'SNS_LINKER_VERSION', '0.1.1' );
define( 'SNS_LINKER_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// プラグイン初期化
register_activation_hook( __FILE__, [new SNSLinkerDB(), 'createTable'] );

require_once( SNS_LINKER_PLUGIN_DIR . 'snsLinker.php' );

add_action('admin_menu', 'snslinker_options_page');

function snslinker_options_page() {
	add_menu_page(
		'SNS管理',
		'SNS管理',
		'manage_options',
		'snslinker',
		'snslinker_page_html',
		'dashicons-feedback',
	);
    add_submenu_page('snslinker', 'SNS設定画面', 'SNS設定', 'manage_options', 'snslinker_setting', 'snslinker_setting_page_html', 1);
}

function snslinker_page_html() {
    if( !empty($_GET['sl-page']) ) {
        switch( $_GET['sl-page'] ) {
            case 'post':
                if( is_admin() && $_SERVER["REQUEST_METHOD"] === "POST" ) {
                    PostController::post();
                }else{
                    PostController::index();
                }
                return;
        }
    }
    IndexController::index();
}

function snslinker_setting_page_html()
{
    if( is_admin() && $_SERVER["REQUEST_METHOD"] === "POST" ) {
        SettingController::store();
    }else{
        SettingController::index();
    }
}

if ( is_admin() ) {
	require_once( SNS_LINKER_PLUGIN_DIR . 'snsLinkerAdmin.php' );
	add_action( 'init', array( 'SNSLinkerAdmin', 'init' ) );
}
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

define( 'SNS_LINKER_VERSION', '0.1.1' );
define( 'SNS_LINKER_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( SNS_LINKER_PLUGIN_DIR . 'snsLinker.php' );

add_action('admin_menu', 'snslinker_options_page');

function snslinker_options_page() {
	add_menu_page(
		'SNS管理',
		'SNS管理',
		'manage_options',
		'snslinker',
		'snslinker_option_page_html',
		'dashicons-feedback',
	);
}

function snslinker_option_page_html() {
    $page_title = 'SNS管理';
    $view = 'index';
?>
    <div class="wrap">
        <h1><?php echo $page_title; ?></h1>
        <?php SNSLinker::view($view); ?>
    </div>
    
    <?php
}
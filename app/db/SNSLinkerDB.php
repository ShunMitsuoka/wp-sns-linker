<?php
namespace App\db;

class SNSLinkerDB {

    const TABLE_NAME = 'wp_sns_linker_setting';

	public static function createTable() {
        $sql = "CREATE TABLE " . self::TABLE_NAME . " (
                `consumer_key` varchar(255) NOT NULL,
                `consumer_secret` varchar(255) NOT NULL,
                `access_token` varchar(255) NOT NULL,
                `access_token_secret` varchar(255) NOT NULL,
                `template` text DEFAULT NULL,
                `id` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta($sql);
	}
}
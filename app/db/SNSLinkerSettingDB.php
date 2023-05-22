<?php
namespace App\db;

class SNSLinkerSettingDB {

    const TABLE_NAME = 'wp_sns_linker_setting';

	public static function createTable() {
        $sql = "CREATE TABLE " . self::TABLE_NAME . " (
				`id` int(11) NOT NULL,
                `consumer_key` varchar(255) NOT NULL,
                `consumer_secret` varchar(255) NOT NULL,
                `access_token` varchar(255) NOT NULL,
                `access_token_secret` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta($sql);
	}

    public static function insert($data) {
		global $wpdb;
		$res = $wpdb->insert(
			self::TABLE_NAME,
			array(
				'consumer_key' => $data['consumer_key'],
				'consumer_secret' => $data['consumer_secret'],
				'access_token' => $data['access_token'],
				'access_token_secret' => $data['access_token_secret'],
			),
			array(
				'%s',
				'%s',
				'%s',
				'%s',
			)
		);
		return $res;
	}

    public static function update($id, $data) {
		global $wpdb;
		$res = null;
		if( $id === null ) {
			return false;
		}
		$res = $wpdb->update(
			self::TABLE_NAME,
			array(
				'consumer_key' => $data['consumer_key'],
				'consumer_secret' => $data['consumer_secret'],
				'access_token' => $data['access_token'],
				'access_token_secret' => $data['access_token_secret'],
			),
			array(
				'id' => $id,
			),
			array(
				'%s',
				'%s',
				'%s',
				'%s',
			)
		);
		return $res;
	}

    public static function exit() : bool {
		global $wpdb;
		$count = $wpdb->get_var("SELECT count(*) FROM " . self::TABLE_NAME . "");
		return $count > 0;
	}

	public static function getRow() {
		global $wpdb;
		$res = $wpdb->get_row("SELECT * FROM " . self::TABLE_NAME . "", ARRAY_A);
		return $res;
	}
}
<?php
namespace App\Controller;

use App\db\SNSLinkerSettingDB;

class SettingController extends BaseController {

    public static function index() {
        $setting = SNSLinkerSettingDB::getRow();
        self::view('setting', $setting);
	}

    public static function store() {
        $consumer_key = $_POST['consumer-key'];
        $consumer_secret = $_POST['consumer-secret'];
        $access_token = $_POST['access-token'];
        $access_token_secret = $_POST['access-token-secret'];

        if(SNSLinkerSettingDB::exit()){
            $row = SNSLinkerSettingDB::getRow();
            $setting = SNSLinkerSettingDB::update($row['id'] ,[
                'consumer_key' => $consumer_key,
                'consumer_secret' => $consumer_secret,
                'access_token' => $access_token,
                'access_token_secret' => $access_token_secret,
            ]);
        }else{
            $setting = SNSLinkerSettingDB::insert([
                'consumer_key' => $consumer_key,
                'consumer_secret' => $consumer_secret,
                'access_token' => $access_token,
                'access_token_secret' => $access_token_secret,
            ]);
        }
        self::index();
	}
}
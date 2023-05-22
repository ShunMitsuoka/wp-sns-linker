<?php
namespace App\Repositories;

use App\db\SNSLinkerSettingDB;
use App\Models\TwitterToken;

class TwitterRepository {

    static function get() : TwitterToken{
        $setting = SNSLinkerSettingDB::getRow();
        return new TwitterToken($setting['consumer_key'],$setting['consumer_secret'],$setting['access_token'],$setting['access_token_secret']);
    }
}
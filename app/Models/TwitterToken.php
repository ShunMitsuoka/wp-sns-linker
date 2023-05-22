<?php
namespace App\Models;

class TwitterToken {

    private string $consumer_key;
    private string $consumer_secret;
    private string $access_token;
    private string $access_token_secret;

    public function __construct($consumer_key, $consumer_secret, $access_token, $access_token_secret)
    {
        $this->consumer_key = $consumer_key;
        $this->consumer_secret = $consumer_secret;
        $this->access_token = $access_token;
        $this->access_token_secret = $access_token_secret;
    }

    public function consumerKey(){
        return $this->consumer_key;
    }
    public function consumerSecret(){
        return $this->consumer_secret;
    }
    public function accessToken(){
        return $this->access_token;
    }
    public function accessTokenSecret(){
        return $this->access_token_secret;
    }

}
<?php
namespace App\Controller;

use Abraham\TwitterOAuth\TwitterOAuth;
use App\Repositories\TwitterRepository;

class PostController extends BaseController {

    public static function index() {
        self::view('post');
	}

    public static function post() {
        $article_url = $_POST['article-url'];
        $content = $_POST['content'];
        $hashtag_str = $_POST['hashtag'];
        $hash_tags = [];
        if(strlen($hashtag_str) > 0){
            $hash_tags = explode(',', $hashtag_str);
        }

        $body = $content.PHP_EOL.PHP_EOL.$article_url;
        if (count($hash_tags) > 0) {
            $body .= PHP_EOL;
        }
        foreach ($hash_tags as $hash_tag) {
            $body .= PHP_EOL;
            $body .= '#'.$hash_tag;
        }

        $twitter_token = TwitterRepository::get();

        $connection = new TwitterOAuth($twitter_token->consumerKey(), $twitter_token->consumerSecret(), $twitter_token->accessToken(), $twitter_token->accessTokenSecret());
        $connection->setApiVersion('2');
        $response = $connection->post('tweets', ['text' => $body], true);
        var_dump($response);
        self::view('post');
	}
}
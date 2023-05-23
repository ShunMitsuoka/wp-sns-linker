<?php
$post_id = $_GET['post-id'];
$post = get_post( $post_id );

$content = '【Tri-An-Gout新着記事情報】'.PHP_EOL;
$content .= '『'.$post->post_title.'』'.PHP_EOL;
$content .= 'が公開されました！';
$hashtag = 'TriAnGout,プログラミング';
?>
<div class="snslinker-page-post">
    <div class="article-title">
        <?=$post->post_title?>
    </div>
    <form action="" method="POST">
        <div class="input-form">
            <div class="input-form-label">
                <label for="">記事UR</label>
            </div>
            <input type="text" name="article-url" value="<?=get_permalink($post_id)?>">
        </div>
        <div class="input-form">
            <div class="input-form-label">
                <label for="">投稿内容</label>
            </div>
            <textarea name="content" id="" cols="30" rows="10"><?=$content?></textarea>
        </div>
        <div class="input-form">
            <div class="input-form-label">
                <label for="">ハッシュダグ(※カンマ区切り)</label>
            </div>
            <input type="text" name="hashtag" value="<?=$hashtag?>" >
        </div>
        <div class="input-form form-button-container">
            <button type="submit">投稿する</button>
        </div>
    </form>
</div>

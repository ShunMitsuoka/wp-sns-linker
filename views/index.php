<?php

$args = array(
	'numberposts'	=> 20,
);
$my_posts = get_posts( $args );

foreach ( $my_posts as $post ): // $datas as $post の $datas は取得時に設定した変数名、$postは変更不可
?>
<div>
    <form action="" method="GET">
        <div>
            <?=$post->post_title?>
        </div>
        <input type="hidden" name="page" value="snslinker">
        <input type="hidden" name="sl-page" value="post">
        <input type="hidden" name="post-id" value="<?=$post->ID?>">
        <button type="submit">sns連携</button>
    </form>
</div>

<?php
endforeach; 
wp_reset_postdata();
?>
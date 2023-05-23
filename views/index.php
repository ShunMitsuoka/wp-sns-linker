<?php

$args = array(
	'numberposts'	=> 20,
);
$my_posts = get_posts( $args );
?>
<div class="snslinker-page-index">
    <table>
        <thead>
            <tr>
                <td>投稿記事一覧</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ( $my_posts as $post ):
        ?>
            <tr>
                <td><?=$post->post_title?></td>
                <td>
                    <form action="" method="GET">
                        <input type="hidden" name="page" value="snslinker">
                        <input type="hidden" name="sl-page" value="post">
                        <input type="hidden" name="post-id" value="<?=$post->ID?>">
                        <button type="submit">SNS連携</button>
                    </form>
                </td>
            </tr>
        <?php
            endforeach; 
        ?>
        </tbody>
    </table>
</div>
<?php
wp_reset_postdata();
?>
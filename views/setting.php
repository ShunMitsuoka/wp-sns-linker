<?php
?>
<div>
    <form action="" method="POST">
        <div>
            <label for="">consumer key</label>
            <input type="text" name="consumer-key" value="<?=$param["consumer_key"]?>" >
        </div>
        <div>
            <label for="">consumer secret</label>
            <input type="text" name="consumer-secret" value="<?=$param["consumer_secret"]?>">
        </div>
        <div>
            <label for="">access token</label>
            <input type="text" name="access-token" value="<?=$param["access_token"]?>">
        </div>
        <div>
            <label for="">access token secret</label>
            <input type="text" name="access-token-secret" value="<?=$param["access_token_secret"]?>">
        </div>
        <div>
            <button type="submit">保存</button>
        </div>
    </form>
</div>

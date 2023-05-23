<?php
?>
<div class="snslinker-page-setting">
    <form action="" method="POST">
        <div class="input-form">
            <div class="input-form-label">
                <label for="">consumer key</label>
            </div>
            <input type="text" name="consumer-key" value="<?=$param["consumer_key"]?>" >
        </div>
        <div class="input-form">
            <div class="input-form-label">
                <label for="">consumer secret</label>
            </div>
            <input type="text" name="consumer-secret" value="<?=$param["consumer_secret"]?>">
        </div>
        <div class="input-form">
            <div class="input-form-label">
                <label for="">access token</label>
            </div>
            <input type="text" name="access-token" value="<?=$param["access_token"]?>">
        </div>
        <div class="input-form">
            <div class="input-form-label">
                <label for="">access token secret</label>
            </div>
            <input type="text" name="access-token-secret" value="<?=$param["access_token_secret"]?>">
        </div>
        <div class="input-form form-button-container">
            <button type="submit">保存</button>
        </div>
    </form>
</div>

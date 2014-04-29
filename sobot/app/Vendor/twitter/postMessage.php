<?php

    //「twitteroauth.php」読み込み
    require_once dirname(__FILE__) . '/twitteroauth/twitteroauth/twitteroauth.php';
    //「oauthKeys.php」読み込み
    require_once dirname(__FILE__) . '/oauthKeys.php';
    //リクエストを投げる先（固定値）
    $url = "https://api.twitter.com/1.1/statuses/update.json";
    $method = "POST";

    //投稿する文言
    $postMsg = "投稿メッセージだよー2";

    // OAuthオブジェクト生成
    $toa = new TwitterOAuth($ck,$cs,$at,$ats);

    //投稿
    $res = $toa->OAuthRequest($url,$method,array("status"=>"$postMsg"));

    // レスポンス表示
    header("Content-Type: application/json");
    echo $res;
?>


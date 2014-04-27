<?php

    //「twitteroauth.php」読み込み
    //「OAuth.php」は「twitteroauth.php」と同じ場所に配置します
    //サンプルでは両ファイルとも「./../inc/」配下においてありますよ
    require_once dirname(__FILE__) . '/twitteroauth/twitteroauth/twitteroauth.php';
    require_once dirname(__FILE__) . '/oauthKeys.php';
    //リクエストを投げる先（固定値）
//    $url = "http://api.twitter.com/1/statuses/update.xml";
    $url = "https://api.twitter.com/1.1/statuses/update.json";
    $method = "POST";

    //投稿する文言
    $postMsg = "投稿メッセージだよー";

    // OAuthオブジェクト生成
    $toa = new TwitterOAuth($ck,$cs,$at,$ats);

    //投稿
    $res = $toa->OAuthRequest($url,$method,array("status"=>"$postMsg"));

    // レスポンス表示
//    header("Content-Type: application/xml");
    header("Content-Type: application/json");
    echo $res;
?>


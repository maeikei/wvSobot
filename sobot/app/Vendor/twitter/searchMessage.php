<?php

    //「twitteroauth.php」読み込み
    require_once dirname(__FILE__) . '/twitteroauth/twitteroauth/twitteroauth.php';
    //「oauthKeys.php」読み込み
    require_once dirname(__FILE__) . '/oauthKeys.php';
    //リクエストを投げる先（固定値）
    $url = 'https://api.twitter.com/1.1/search/tweets.json';
    $method = 'GET';
	//Twitterで検索するワード
	$key = "ARMサーバー";
	
	//オプション設定
	$options = array('q'=>$key,'count'=>'100','lang'=>'ja');

    // OAuthオブジェクト生成
    $toa = new TwitterOAuth($ck,$cs,$at,$ats);

    //投稿
    $resJson = $toa->OAuthRequest($url,$method,$options);

    // レスポンス表示
	$jset = json_decode($resJson, true);
    // echo $resJson;
	foreach ($jset['statuses'] as $result){
		echo "id=<" . $result['id'] . ">\n";
		echo "in_reply_to_screen_name=<" . $result['in_reply_to_screen_name'] . ">\n";
		echo "text=<" . $result['text'] . ">\n";
	}
?>


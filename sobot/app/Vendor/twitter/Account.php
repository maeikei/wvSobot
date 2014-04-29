<?php

    //「twitteroauth.php」読み込み
    require_once dirname(__FILE__) . '/twitteroauth/twitteroauth/twitteroauth.php';
	
	class Account {
		private $ck;
		private $cs;
		private $at;
		private $ats;
		private $url;
		private $method;
		private $toa;
		private $resJson;
		private $jset;
		public function __construct($ck,$cs,$at,$ats) {
			// コンストラクタ内で行いたい処理
			$this->ck = $ck;
			$this->cs = $cs;
			$this->at = $at;
			$this->ats = $ats;
			//リクエストを投げる先（固定値）
			$this->url = 'https://api.twitter.com/1.1/account/verify_credentials.json';
			$this->method = 'GET';
			// OAuthオブジェクト生成
			$this->toa = new TwitterOAuth($this->ck,$this->cs,$this->at,$this->ats);
			//投稿
			$this->resJson = $this->toa->OAuthRequest($this->url,$this->method,array());
			$this->jset = json_decode($this->resJson, true);
			//debug($this->jset);
		}
		public function getName(){
			return $this->jset['name'];
		}
		public function getScreenName(){
			return $this->jset['screen_name'];
		}
		public function getIcon(){
			return $this->jset['profile_image_url'];
		}
	}
?>


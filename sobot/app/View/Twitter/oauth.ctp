<?php echo $this->Html->css('twitter.oauth'); ?> 

<div class="top_title">
<h2>Twitterアプリケーション登録</h2>
</div>

<div id="manual">

<div class="manual_image">
	<h3>Twitter APIに飛ぶ</h3>
	<?php 
		echo $this->Html->link(
			$this->Html->image('twitter.entry',array()),
			'https://apps.twitter.com/',
			array('escape' => false)
		);
	?>
</div>

<div class="manual_image">
	<h3>アプリケーション登録をする</h3>
	<?php 
		echo $this->Html->link(
			$this->Html->image('twitter.create',array()),
			'/img/twitter.create',
			array('escape' => false)
		);
	?>
</div>

<div class="manual_image">
	<h3>アクセス権限をつける</h3>
	<?php 
		echo $this->Html->link(
			$this->Html->image('twitter.permission',array()),
			'/img/twitter.permission',
			array('escape' => false)
		);
	?>
</div>


<div class="manual_image">
	<h3>アクセストークンを取得する</h3>
	<?php 
		echo $this->Html->link(
			$this->Html->image('twitter.access.token',array()),
			'/img/twitter.access.token',
			array('escape' => false)
		);
	?>
</div>
</div>



<div class="top_title">
<h2>アプリケーションキー設定</h2>
</div>

<div id="key">
	<div id="key_form">
		<?php
			echo $this->Form->create('apiKeys', array('type' => 'post'));
			echo $this->Form->input('apiKey',array('label' => 'API key:'));
			echo $this->Form->input('apiSecret',array('label' => 'API secret:'));
			echo $this->Form->input('accessToken',array('label' => 'Access token:'));
			echo $this->Form->input('accessTokenSecret',array('label' => 'Access token secret:'));
			echo $this->Form->end('add');
		?>
	</div>
	<div id="key_img">
		<h3>赤枠の値を入力してください。</h3>
		<?php 
			echo $this->Html->link(
				$this->Html->image('twitter.api.keys',array('width'=>'600','height'=>'600')),
				'https://apps.twitter.com/app',
				array('escape' => false,'target' =>'_blank')
			);
		?>
	</div>
</div>

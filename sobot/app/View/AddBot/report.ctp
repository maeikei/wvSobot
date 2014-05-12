<?php echo $this->Html->css('add_bot.report'); ?> 

<div id="keyword">
<h2>キーワード設定</h2>
	<?php
		echo $this->Form->create('keywords', array('type' => 'post'));
		echo $this->Form->input('keyword',array('label' => 'キーワード:'));
		echo $this->Form->end('+keyword');
	?>
</div>

<div id="account">
<h2>アカウント設定</h2>
<?php
	debug($twitter_name);
	echo $this->Form->create('task', array('type' => 'post'));
	echo $this->Form->input( 'task.account' , array(
			'type' => 'select',
			'class' => 'checkbox',
			'multiple' => 'checkbox',
			'options'=> $twitter_name,
			'label' => 'アカウントの選択',
		)
	);
	echo $this->Form->end('+task');
?>
</div>


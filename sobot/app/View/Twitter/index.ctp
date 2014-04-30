<?php echo $this->Html->css('twitter.index'); ?> 

<div id="add_account_icon">
	<?php 
		echo $this->Html->link(
			$this->Html->image('twitter.api.icon',array('class'=>'compIconBig')),
			array('controller' => 'twitter', 'action' => 'oauth'),
			array('escape' => false)
		);
		echo $this->Html->image('add2.icon',array('class'=>'compIconSmall'));
		echo $this->Html->image('oauth2.0.icon',array('class'=>'compIconSmall2'));
	?>
</div>



<div id="account">
	<?php foreach ($twitter as $key => $value): ?>
		<div class="account_list">
			<div class="account_name">
				<?php echo($value['name']); ?>
			</div>
			<?php 
				echo $this->Html->image($value['icon'],array('class'=>'twitter_icon'));
			?>
		</div>
	<?php endforeach; ?>
</div>

<!--div class="bot_icon">
	<?php 
		echo $this->Html->link(
			$this->Html->image('twitter.api.icon',array('class'=>'compIconBig')),
			array('controller' => 'twitter', 'action' => 'index'),
			array('escape' => false)
		);
		echo $this->Html->image('finnish.icon',array('class'=>'compIconSmall'));
	?>
</div-->



<div id="add_bot_icon">
	<?php 
		echo $this->Html->link(
			$this->Html->image('bot.icon',array('class'=>'compIconBig')),
			array('controller' => 'twitter', 'action' => 'addBot'),
			array('escape' => false)
		);
		echo $this->Html->image('add.icon',array('class'=>'compIconSmall'));
	?>
</div>

<div id="bot">
</div>


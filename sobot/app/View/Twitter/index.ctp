<?php echo $this->Html->css('twitter.index'); ?> 

<div class="bot_icon">
	<?php 
		echo $this->Html->link(
			$this->Html->image('twitter.api.icon',array('class'=>'compIconBig')),
			array('controller' => 'twitter', 'action' => 'index'),
			array('escape' => false)
		);
		echo $this->Html->image('finnish.icon',array('class'=>'compIconSmall'));
	?>
</div>

<div class="bot_icon">
	<?php 
		echo $this->Html->link(
			$this->Html->image('twitter.api.icon',array('class'=>'compIconBig')),
			array('controller' => 'twitter', 'action' => 'oauth'),
			array('escape' => false)
		);
		echo $this->Html->image('unfinnish.icon',array('class'=>'compIconSmall'));
		echo $this->Html->image('oauth2.0.icon',array('class'=>'compIconSmall2'));
	?>
</div>



<div class="bot_icon">
	<?php 
		echo $this->Html->link(
			$this->Html->image('bot.icon',array('class'=>'compIconBig')),
			array('controller' => 'twitter', 'action' => 'addBot'),
			array('escape' => false)
		);
		echo $this->Html->image('add.icon',array('class'=>'compIconSmall'));
	?>
</div>

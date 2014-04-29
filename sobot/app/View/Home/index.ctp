<?php echo $this->Html->css('home.index'); ?> 

<div class="index_image">
	<?php 
		echo $this->Html->link(
			$this->Html->image('twitter.bot',array('width'=>'120','height'=>'90')),
			array('controller' => 'twitter', 'action' => 'index'),
			array('escape' => false)
		);
	?>
</div>

<div class="index_image">
	<?php 
		echo $this->Html->link(
			$this->Html->image('facebook.bot',array('width'=>'120','height'=>'90')),
			array('controller' => 'facebook', 'action' => 'index'),
			array('escape' => false)
		);
	?>
</div>


<div class="index_image">
	<?php 
		echo $this->Html->link(
			$this->Html->image('google+.bot',array('width'=>'120','height'=>'90')),
			array('controller' => 'googleplus', 'action' => 'index'),
			array('escape' => false)
		);
	?>
</div>


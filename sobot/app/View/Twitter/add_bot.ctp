<?php echo $this->Html->css('twitter.add_bot'); ?> 


<div class="task">
	<h2>Twitterを検索し、報告する</h2>
	<div>
		<?php 
			echo $this->Html->link(
				$this->Html->image('add_bot.twitter',array('class'=>'img_background')),
				array('controller' => 'twitter', 'action' => 'report'),
				array('escape' => false)
			);
			echo $this->Html->link(
				$this->Html->image('add_bot.report',array('class'=>'img_action')),
				array('controller' => 'twitter', 'action' => 'report'),
				array('escape' => false)
			);
		?>
	</div>
</div>


<div class="task">
	<h2>ウェブ、ニュースなどを検索し、投稿する</h2>
	<div>
		<?php 
			echo $this->Html->link(
				$this->Html->image('add_bot.webnew',array('class'=>'img_background')),
				array('controller' => 'twitter', 'action' => 'write'),
				array('escape' => false)
			);
			echo $this->Html->link(
				$this->Html->image('add_bot.write',array('class'=>'img_action')),
				array('controller' => 'twitter', 'action' => 'write'),
				array('escape' => false)
			);
		?>
	</div>
</div>


<div class="task">
	<h2>Twitterを検索し、リツイートする</h2>
	<div>
		<?php 
			echo $this->Html->link(
				$this->Html->image('add_bot.twitter',array('class'=>'img_background')),
				array('controller' => 'twitter', 'action' => 'retweet'),
				array('escape' => false)
			);
			echo $this->Html->link(
				$this->Html->image('add_bot.retweet',array('class'=>'img_action')),
				array('controller' => 'twitter', 'action' => 'retweet'),
				array('escape' => false)
			);
		?>
	</div>
</div>


<!--div class="task">
	<h2>Twitterを検索し、コメントする</h2>
	<div>
		<?php 
			echo $this->Html->link(
				$this->Html->image('add_bot.twitter',array('class'=>'img_background')),
				array('controller' => 'twitter', 'action' => 'comment'),
				array('escape' => false)
			);
			echo $this->Html->link(
				$this->Html->image('add_bot.comment',array('class'=>'img_action')),
				array('controller' => 'twitter', 'action' => 'comment'),
				array('escape' => false)
			);
		?>
	</div>
</div-->

<!--div>
	フォローされたをフォローする
</div-->


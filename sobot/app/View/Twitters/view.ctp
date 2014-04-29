<div class="twitters view">
<h2><?php echo __('Twitter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($twitter['Twitter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ApiKey'); ?></dt>
		<dd>
			<?php echo h($twitter['Twitter']['apiKey']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ApiSecret'); ?></dt>
		<dd>
			<?php echo h($twitter['Twitter']['apiSecret']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AccessToken'); ?></dt>
		<dd>
			<?php echo h($twitter['Twitter']['accessToken']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AccessTokenSecret'); ?></dt>
		<dd>
			<?php echo h($twitter['Twitter']['accessTokenSecret']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timestamp'); ?></dt>
		<dd>
			<?php echo h($twitter['Twitter']['Timestamp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Twitter'), array('action' => 'edit', $twitter['Twitter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Twitter'), array('action' => 'delete', $twitter['Twitter']['id']), null, __('Are you sure you want to delete # %s?', $twitter['Twitter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Twitters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Twitter'), array('action' => 'add')); ?> </li>
	</ul>
</div>

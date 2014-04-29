<div class="twitters form">
<?php echo $this->Form->create('Twitter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Twitter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('apiKey');
		echo $this->Form->input('apiSecret');
		echo $this->Form->input('accessToken');
		echo $this->Form->input('accessTokenSecret');
		echo $this->Form->input('Timestamp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Twitter.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Twitter.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Twitters'), array('action' => 'index')); ?></li>
	</ul>
</div>

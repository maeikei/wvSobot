<div class="sqliteSequences form">
<?php echo $this->Form->create('SqliteSequence'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sqlite Sequence'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('seq');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SqliteSequence.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SqliteSequence.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sqlite Sequences'), array('action' => 'index')); ?></li>
	</ul>
</div>

<div class="sqliteSequences form">
<?php echo $this->Form->create('SqliteSequence'); ?>
	<fieldset>
		<legend><?php echo __('Add Sqlite Sequence'); ?></legend>
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

		<li><?php echo $this->Html->link(__('List Sqlite Sequences'), array('action' => 'index')); ?></li>
	</ul>
</div>

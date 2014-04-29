<div class="sqliteSequences view">
<h2><?php echo __('Sqlite Sequence'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($sqliteSequence['SqliteSequence']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seq'); ?></dt>
		<dd>
			<?php echo h($sqliteSequence['SqliteSequence']['seq']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sqlite Sequence'), array('action' => 'edit', $sqliteSequence['SqliteSequence']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sqlite Sequence'), array('action' => 'delete', $sqliteSequence['SqliteSequence']['id']), null, __('Are you sure you want to delete # %s?', $sqliteSequence['SqliteSequence']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sqlite Sequences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sqlite Sequence'), array('action' => 'add')); ?> </li>
	</ul>
</div>

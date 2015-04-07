<div class="tournaments form">
<?php echo $this->Form->create('Tournament'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tournament'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tournament.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tournament.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tournaments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match'), array('controller' => 'matches', 'action' => 'add')); ?> </li>
	</ul>
</div>

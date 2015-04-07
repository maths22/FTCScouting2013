<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Live Scouting Reports'), array('controller' => 'live_scouting_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Live Scouting Report'), array('controller' => 'live_scouting_reports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pre Scouting Reports'), array('controller' => 'pre_scouting_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pre Scouting Report'), array('controller' => 'pre_scouting_reports', 'action' => 'add')); ?> </li>
	</ul>
</div>

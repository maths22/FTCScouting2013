<div class="teams form">
<?php echo $this->Form->create('Team'); ?>
	<fieldset>
		<legend><?php echo __('Add Team'); ?></legend>
	<?php
		echo $this->Form->input('team_number');
		echo $this->Form->input('team_name');
		echo $this->Form->input('location');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Teams'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Live Scouting Reports'), array('controller' => 'live_scouting_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Live Scouting Report'), array('controller' => 'live_scouting_reports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pre Scouting Reports'), array('controller' => 'pre_scouting_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pre Scouting Report'), array('controller' => 'pre_scouting_reports', 'action' => 'add')); ?> </li>
	</ul>
</div>

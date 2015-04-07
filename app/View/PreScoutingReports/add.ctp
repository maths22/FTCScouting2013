<div class="preScoutingReports form">
<?php echo $this->Form->create('PreScoutingReport'); ?>
	<fieldset>
		<legend><?php echo __('Add Pre Scouting Report'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('team_id',array('type'=>'text'));
		echo $this->Form->input('comments',array('type'=>'textarea'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pre Scouting Reports'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>

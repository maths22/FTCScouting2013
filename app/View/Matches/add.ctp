<div class="matches form">
<?php echo $this->Form->create('Match'); ?>
	<fieldset>
		<legend><?php echo __('Add Match'); ?></legend>
	<?php
		echo $this->Form->hidden('tournament_id',array('value' => $this->Session->read('Tournament.current.Tournament.id')));
		echo $this->Form->input('match_number');
		echo $this->Form->input('red_team_1');
		echo $this->Form->input('red_team_2');
		echo $this->Form->input('blue_team_1');
		echo $this->Form->input('blue_team_2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Matches'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tournaments'), array('controller' => 'tournaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tournament'), array('controller' => 'tournaments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Live Scouting Reports'), array('controller' => 'live_scouting_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Live Scouting Report'), array('controller' => 'live_scouting_reports', 'action' => 'add')); ?> </li>
	</ul>
</div>

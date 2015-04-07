<div class="liveScoutingReports form">
<?php echo $this->Form->create('LiveScoutingReport'); ?>
	<fieldset>
		<legend><?php echo __('Edit Live Scouting Report'); ?></legend>
	<?php
		echo $this->Form->hidden('user_id',array('value'=>'2'));
                echo $this->Form->input('match_id',array('type'=>'text'));
		echo $this->Form->input('team_id',array('type'=>'text'));
		echo $this->Form->input('auto_comments');
		echo $this->Form->input('teleop_comments');
                echo $this->Form->label('rings', 'Rings');
                echo '<div class="rings">';
                echo '<div class="ring_row">';
                echo $this->Form->input('A3',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0'));
                echo $this->Form->input('B3',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0'));
                echo $this->Form->input('C3',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0'));
                echo '</div>';
                echo '<div class="ring_row">';
                echo $this->Form->input('A2',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0'));
                echo $this->Form->input('B2',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0'));
                echo $this->Form->input('C2',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0'));
                echo '</div>';
                echo '<div class="ring_row">';
                echo $this->Form->input('A1',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0'));
                echo $this->Form->input('B1',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0'));
                echo $this->Form->input('C1',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0'));
                echo '</div>';
                echo '</div>';
		echo $this->Form->input('generalComments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LiveScoutingReport.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LiveScoutingReport.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Live Scouting Reports'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match'), array('controller' => 'matches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="liveScoutingReports form">
<?php echo $this->Form->create('LiveScoutingReport'); ?>
	<fieldset>
		<legend><?php echo __('Add Live Scouting Report'); ?><br/>Red Alliance</legend>
	<?php
		echo $this->Form->hidden('user_id',array('value'=>'2'));
                echo $this->Form->input('match_id',array('type'=>'text','value'=>$match));
                echo '<div id="team_1">';
		echo $this->Form->input('team_id_1',array('type'=>'text','value'=>$redTeam1,'label' => 'Red Team 1'));
                echo $this->Form->label('auto_comments_1', 'Auto Comments');
		echo $this->Form->textarea('auto_comments_1',array('rows'=>'5'));
                echo $this->Form->label('teleop_comments_1', 'Teleop Comments');
		echo $this->Form->textarea('teleop_comments_1',array('rows'=>'5'));
                echo $this->Form->label('rings', 'Rings');
                echo '<table class="rings">';
                echo '<tr class="ring_row">';
                echo '<td>'.$this->Form->input('A3_1',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'A3')).'</td>';
                echo '<td>'.$this->Form->input('B3_1',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'B3')).'</td>';
                echo '<td>'.$this->Form->input('C3_1',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'C3')).'</td>';
                echo '</tr>';
                echo '<tr class="ring_row">';
                echo '<td>'.$this->Form->input('A2_1',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'A2')).'</td>';
                echo '<td>'.$this->Form->input('B2_1',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'B2')).'</td>';
                echo '<td>'.$this->Form->input('C2_1',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'C2')).'</td>';
                echo '</tr>';
                echo '<tr class="ring_row">';
                echo '<td>'.$this->Form->input('A1_1',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'A1')).'</td>';
                echo '<td>'.$this->Form->input('B1_1',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'B1')).'</td>';
                echo '<td>'.$this->Form->input('C1_1',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'C1')).'</td>';
                echo '</tr>';
                echo '</table>';
		echo $this->Form->label('generalComments_1', 'General Comments');
		echo $this->Form->textarea('generalComments_1',array('rows'=>'5'));
                echo '</div>';
                echo '<div id="team_2">';
		echo $this->Form->input('team_id_2',array('type'=>'text','value'=>$redTeam2,'label' => 'Red Team 2'));
                echo $this->Form->label('auto_comments_2', 'Auto Comments');
		echo $this->Form->textarea('auto_comments_2',array('rows'=>'5'));
                echo $this->Form->label('teleop_comments_2', 'Teleop Comments');
		echo $this->Form->textarea('teleop_comments_2',array('rows'=>'5'));
                echo $this->Form->label('rings', 'Rings');
                echo '<table class="rings">';
                echo '<tr class="ring_row">';
                echo '<td>'.$this->Form->input('A3_2',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'A3')).'</td>';
                echo '<td>'.$this->Form->input('B3_2',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'B3')).'</td>';
                echo '<td>'.$this->Form->input('C3_2',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'C3')).'</td>';
                echo '</tr>';
                echo '<tr class="ring_row">';
                echo '<td>'.$this->Form->input('A2_2',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'A2')).'</td>';
                echo '<td>'.$this->Form->input('B2_2',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'B2')).'</td>';
                echo '<td>'.$this->Form->input('C2_2',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'C2')).'</td>';
                echo '</tr>';
                echo '<tr class="ring_row">';
                echo '<td>'.$this->Form->input('A1_2',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'A1')).'</td>';
                echo '<td>'.$this->Form->input('B1_2',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'B1')).'</td>';
                echo '<td>'.$this->Form->input('C1_2',array('size' => '1', 'min' => '0', 'max' => '6', 'value' => '0', 'label' => 'C1')).'</td>';
                echo '</tr>';
                echo '</table>';
		echo $this->Form->label('generalComments_2', 'General Comments');
		echo $this->Form->textarea('generalComments_2',array('rows'=>'5'));
                echo '</div>';
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Live Scouting Reports'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match'), array('controller' => 'matches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>

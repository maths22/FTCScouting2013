<div class="liveScoutingReports view">
<h2><?php  echo __('Live Scouting Report'); ?></h2>
	<dl>
		<dt><?php echo __('Match'); ?></dt>
		<dd>
			<?php echo $this->Html->link($liveScoutingReport['Match']['match_number'], array('controller' => 'matches', 'action' => 'view', $liveScoutingReport['Match']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($liveScoutingReport['Team']['team_number'].': '.$liveScoutingReport['Team']['team_name'], array('controller' => 'teams', 'action' => 'view', $liveScoutingReport['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Auto Comments'); ?></dt>
		<dd>
			<?php echo h($liveScoutingReport['LiveScoutingReport']['auto_comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teleop Comments'); ?></dt>
		<dd>
			<?php echo h($liveScoutingReport['LiveScoutingReport']['teleop_comments']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Rings'); ?></dt>
		<dd>
			<?php echo $this->element('rings', array('A3'=>$liveScoutingReport['LiveScoutingReport']['A3'],
                    'B3'=>$liveScoutingReport['LiveScoutingReport']['B3'],
                    'C3'=>$liveScoutingReport['LiveScoutingReport']['C3'],
                    'A2'=>$liveScoutingReport['LiveScoutingReport']['A2'],
                    'B2'=>$liveScoutingReport['LiveScoutingReport']['B2'],
                    'C2'=>$liveScoutingReport['LiveScoutingReport']['C2'],
                    'A1'=>$liveScoutingReport['LiveScoutingReport']['A1'],
                    'B1'=>$liveScoutingReport['LiveScoutingReport']['B1'],
                    'C1'=>$liveScoutingReport['LiveScoutingReport']['C1']))?>
			&nbsp;
		</dd>
		<dt><?php echo __('General Comments'); ?></dt>
		<dd>
			<?php echo h($liveScoutingReport['LiveScoutingReport']['generalComments']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Live Scouting Report'), array('action' => 'edit', $liveScoutingReport['LiveScoutingReport']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Live Scouting Report'), array('action' => 'delete', $liveScoutingReport['LiveScoutingReport']['id']), null, __('Are you sure you want to delete # %s?', $liveScoutingReport['LiveScoutingReport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Live Scouting Reports'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Live Scouting Report'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match'), array('controller' => 'matches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>

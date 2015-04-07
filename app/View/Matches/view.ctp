<div class="matches view">
<h2><?php  echo __('Match'); ?></h2>
	<dl>
		<dt><?php echo __('Tournament'); ?></dt>
		<dd>
			<?php echo $this->Html->link($match['Tournament']['name'], array('controller' => 'tournaments', 'action' => 'view', $match['Tournament']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Match Number'); ?></dt>
		<dd>
                        
			<?php echo h($match['Match']['match_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Red Team 1'); ?></dt>
		<dd>
                        <?php echo $this->Html->link($match['red_team_1']['team_number'].": ".$match['red_team_1']['team_name'], array('controller' => 'teams', 'action' => 'view', $match['red_team_1']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Red Team 2'); ?></dt>
		<dd>
			<?php echo $this->Html->link($match['red_team_2']['team_number'].": ".$match['red_team_2']['team_name'], array('controller' => 'teams', 'action' => 'view', $match['red_team_2']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blue Team 1'); ?></dt>
		<dd>
			<?php echo $this->Html->link($match['blue_team_1']['team_number'].": ".$match['blue_team_1']['team_name'], array('controller' => 'teams', 'action' => 'view', $match['blue_team_1']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blue Team 2'); ?></dt>
		<dd>
			<?php echo $this->Html->link($match['blue_team_2']['team_number'].": ".$match['blue_team_2']['team_name'], array('controller' => 'teams', 'action' => 'view', $match['blue_team_2']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Match'), array('action' => 'edit', $match['Match']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Match'), array('action' => 'delete', $match['Match']['id']), null, __('Are you sure you want to delete # %s?', $match['Match']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tournaments'), array('controller' => 'tournaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tournament'), array('controller' => 'tournaments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Live Scouting Reports'), array('controller' => 'live_scouting_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Live Scouting Report'), array('controller' => 'live_scouting_reports', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Live Scouting Reports'); ?></h3>
	<?php if (!empty($match['LiveScoutingReport'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Auto Comments'); ?></th>
		<th><?php echo __('Teleop Comments'); ?></th>
                <th><?php echo __('Rings'); ?></th>
		<th><?php echo __('General Comments'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
                foreach ($match['LiveScoutingReport'] as $liveScoutingReport): 
                    if($match['Match']['red_team_1']===$liveScoutingReport['team_id'])
                    {
                        $liveScoutingReport['team_id']=$match['red_team_1']['team_number'].": ".$match['red_team_1']['team_name'];
                    }
                    if($match['Match']['red_team_2']===$liveScoutingReport['team_id'])
                    {
                        $liveScoutingReport['team_id']=$match['red_team_2']['team_number'].": ".$match['red_team_2']['team_name'];
                    }
                    if($match['Match']['blue_team_1']===$liveScoutingReport['team_id'])
                    {
                        $liveScoutingReport['team_id']=$match['blue_team_1']['team_number'].": ".$match['blue_team_1']['team_name'];
                    }
                    if($match['Match']['blue_team_2']===$liveScoutingReport['team_id'])
                    {
                        $liveScoutingReport['team_id']=$match['blue_team_2']['team_number'].": ".$match['blue_team_2']['team_name'];
                    }
                            ?>
		<tr>
			<td><?php echo $liveScoutingReport['team_id']; ?></td>
			<td><?php echo $liveScoutingReport['auto_comments']; ?></td>
			<td><?php echo $liveScoutingReport['teleop_comments']; ?></td>
                         <td><?php echo $this->element('rings', array('A3'=>$liveScoutingReport['A3'],
                    'B3'=>$liveScoutingReport['B3'],
                    'C3'=>$liveScoutingReport['C3'],
                    'A2'=>$liveScoutingReport['A2'],
                    'B2'=>$liveScoutingReport['B2'],
                    'C2'=>$liveScoutingReport['C2'],
                    'A1'=>$liveScoutingReport['A1'],
                    'B1'=>$liveScoutingReport['B1'],
                    'C1'=>$liveScoutingReport['C1']))?></td>
			<td><?php echo $liveScoutingReport['generalComments']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'live_scouting_reports', 'action' => 'view', $liveScoutingReport['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'live_scouting_reports', 'action' => 'edit', $liveScoutingReport['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'live_scouting_reports', 'action' => 'delete', $liveScoutingReport['id']), null, __('Are you sure you want to delete # %s?', $liveScoutingReport['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Live Scouting Report'), array('controller' => 'live_scouting_reports', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

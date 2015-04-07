<div class="teams view">
<h2><?php  echo __('Team'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($team['Team']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team Number'); ?></dt>
		<dd>
			<?php echo h($team['Team']['team_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team Name'); ?></dt>
		<dd>
			<?php echo h($team['Team']['team_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($team['Team']['location']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Team'), array('action' => 'edit', $team['Team']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Team'), array('action' => 'delete', $team['Team']['id']), null, __('Are you sure you want to delete # %s?', $team['Team']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Live Scouting Reports'), array('controller' => 'live_scouting_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Live Scouting Report'), array('controller' => 'live_scouting_reports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pre Scouting Reports'), array('controller' => 'pre_scouting_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pre Scouting Report'), array('controller' => 'pre_scouting_reports', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Live Scouting Reports'); ?></h3>
	<?php if (!empty($team['LiveScoutingReport'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Match Id'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Auto Comments'); ?></th>
		<th><?php echo __('Teleop Comments'); ?></th>
                <th><?php echo __('Rings'); ?></th>
		<th><?php echo __('General Comments'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($team['LiveScoutingReport'] as $liveScoutingReport): ?>
		<tr>
			<td><?php echo $liveScoutingReport['match_id']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Pre Scouting Reports'); ?></h3>
	<?php if (!empty($team['PreScoutingReport'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($team['PreScoutingReport'] as $preScoutingReport): ?>
		<tr>
			<td><?php echo $preScoutingReport['id']; ?></td>
			<td><?php echo $preScoutingReport['user_id']; ?></td>
			<td><?php echo $preScoutingReport['team_id']; ?></td>
			<td><?php echo $preScoutingReport['comments']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pre_scouting_reports', 'action' => 'view', $preScoutingReport['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pre_scouting_reports', 'action' => 'edit', $preScoutingReport['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pre_scouting_reports', 'action' => 'delete', $preScoutingReport['id']), null, __('Are you sure you want to delete # %s?', $preScoutingReport['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pre Scouting Report'), array('controller' => 'pre_scouting_reports', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Matches');?></h3>
        
	<?php //if (!empty($team['PreScoutingReport'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
                <th><?php echo __('Match Number'); ?></th>
		<!--<th><?php echo __('Red Team 1'); ?></th>
		<th><?php echo __('Red Team 2'); ?></th>
		<th><?php echo __('Blue Team 1'); ?></th>
		<th><?php echo __('Blue Team 2'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>-->
	</tr>
	<?php
		$i = 0;
		foreach ($team['Red_Team_1'] as $match):?>
		<tr>
                        <td><?php echo $match['match_number']; ?></td>
                        <!--<td><?php echo $this->Html->link($match['match_number'].": ".$match['team_name'], array('controller' => 'teams', 'action' => 'view', $match['id'])); ?></td>
			<td><?php echo $preScoutingReport['user_id']; ?></td>
			<td><?php echo $preScoutingReport['team_id']; ?></td>
			<td><?php echo $preScoutingReport['comments']; ?></td>-->
		</tr>
	<?php endforeach; ?>
        <?php
		$i = 0;
		foreach ($team['Red_Team_2'] as $match):?>
		<tr>
                        <td><?php echo $match['match_number']; ?></td>
                        <!--<td><?php echo $this->Html->link($match['match_number'].": ".$match['team_name'], array('controller' => 'teams', 'action' => 'view', $match['id'])); ?></td>
			<td><?php echo $preScoutingReport['user_id']; ?></td>
			<td><?php echo $preScoutingReport['team_id']; ?></td>
			<td><?php echo $preScoutingReport['comments']; ?></td>-->
		</tr>
	<?php endforeach; ?>
        <?php
		$i = 0;
		foreach ($team['Blue_Team_1'] as $match):?>
		<tr>
			<td><?php echo $match['match_number']; ?></td>
                        <!--<td><?php echo $this->Html->link($match['match_number'].": ".$match['team_name'], array('controller' => 'teams', 'action' => 'view', $match['id'])); ?></td>
			<td><?php echo $preScoutingReport['user_id']; ?></td>
			<td><?php echo $preScoutingReport['team_id']; ?></td>
			<td><?php echo $preScoutingReport['comments']; ?></td>-->
		</tr>
	<?php endforeach; ?>
        <?php
		$i = 0;
        	foreach ($team['Blue_Team_2'] as $match):?>
		<tr>
                        <td><?php echo $match['match_number']; ?></td>
                        <!--<td><?php echo $this->Html->link($match['match_number'].": ".$match['team_name'], array('controller' => 'teams', 'action' => 'view', $match['id'])); ?></td>
			<td><?php echo $preScoutingReport['user_id']; ?></td>
			<td><?php echo $preScoutingReport['team_id']; ?></td>
			<td><?php echo $preScoutingReport['comments']; ?></td>-->
		</tr>
	<?php endforeach; ?>
	</table>
<?php // endif; ?>
</div>
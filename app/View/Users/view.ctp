<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Live Scouting Reports'), array('controller' => 'live_scouting_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Live Scouting Report'), array('controller' => 'live_scouting_reports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pre Scouting Reports'), array('controller' => 'pre_scouting_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pre Scouting Report'), array('controller' => 'pre_scouting_reports', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Live Scouting Reports'); ?></h3>
	<?php if (!empty($user['LiveScoutingReport'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Match Id'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Auto Comments'); ?></th>
		<th><?php echo __('Teleop Comments'); ?></th>
		<th><?php echo __('GeneralComments'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['LiveScoutingReport'] as $liveScoutingReport): ?>
		<tr>
			<td><?php echo $liveScoutingReport['id']; ?></td>
			<td><?php echo $liveScoutingReport['user_id']; ?></td>
			<td><?php echo $liveScoutingReport['match_id']; ?></td>
			<td><?php echo $liveScoutingReport['team_id']; ?></td>
			<td><?php echo $liveScoutingReport['auto_comments']; ?></td>
			<td><?php echo $liveScoutingReport['teleop_comments']; ?></td>
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
	<?php if (!empty($user['PreScoutingReport'])): ?>
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
		foreach ($user['PreScoutingReport'] as $preScoutingReport): ?>
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

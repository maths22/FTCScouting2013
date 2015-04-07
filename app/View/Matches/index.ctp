<div class="matches index">
	<h2><?php echo __('Matches'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('tournament_id'); ?></th>
			<th><?php echo $this->Paginator->sort('match_number'); ?></th>
			<th><?php echo $this->Paginator->sort('red_team_1'); ?></th>
			<th><?php echo $this->Paginator->sort('red_team_2'); ?></th>
			<th><?php echo $this->Paginator->sort('blue_team_1'); ?></th>
			<th><?php echo $this->Paginator->sort('blue_team_2'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($matches as $match): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($match['Tournament']['name'], array('controller' => 'tournaments', 'action' => 'view', $match['Tournament']['id'])); ?>
		</td>
		<td><?php echo h($match['Match']['match_number']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($match['red_team_1']['team_number'].": ".$match['red_team_1']['team_name'], array('controller' => 'teams', 'action' => 'view', $match['red_team_1']['id'])); ?></td>
		<td><?php echo $this->Html->link($match['red_team_2']['team_number'].": ".$match['red_team_2']['team_name'], array('controller' => 'teams', 'action' => 'view', $match['red_team_2']['id'])); ?></td>
		<td><?php echo $this->Html->link($match['blue_team_1']['team_number'].": ".$match['blue_team_1']['team_name'], array('controller' => 'teams', 'action' => 'view', $match['blue_team_1']['id'])); ?></td>
		<td><?php echo $this->Html->link($match['blue_team_2']['team_number'].": ".$match['blue_team_2']['team_name'], array('controller' => 'teams', 'action' => 'view', $match['blue_team_2']['id'])); ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $match['Match']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $match['Match']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $match['Match']['id']), null, __('Are you sure you want to delete # %s?', $match['Match']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Match'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tournaments'), array('controller' => 'tournaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tournament'), array('controller' => 'tournaments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Live Scouting Reports'), array('controller' => 'live_scouting_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Live Scouting Report'), array('controller' => 'live_scouting_reports', 'action' => 'add')); ?> </li>
	</ul>
</div>

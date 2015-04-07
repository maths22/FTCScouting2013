<div class="liveScoutingReports index">
	<h2><?php echo __('Live Scouting Reports'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('match_id'); ?></th>
			<th><?php echo $this->Paginator->sort('team_id'); ?></th>
			<th><?php echo $this->Paginator->sort('auto_comments'); ?></th>
			<th><?php echo $this->Paginator->sort('teleop_comments'); ?></th>
                        <th><?php echo $this->Paginator->sort('rings'); ?></th>
			<th><?php echo $this->Paginator->sort('generalComments','General Comments'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($liveScoutingReports as $liveScoutingReport): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($liveScoutingReport['Match']['match_number'], array('controller' => 'matches', 'action' => 'view', $liveScoutingReport['Match']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($liveScoutingReport['Team']['team_number'].': '.$liveScoutingReport['Team']['team_name'], array('controller' => 'teams', 'action' => 'view', $liveScoutingReport['Team']['id'])); ?>
		</td>
		<td><?php echo h($liveScoutingReport['LiveScoutingReport']['auto_comments']); ?>&nbsp;</td>
		<td><?php echo h($liveScoutingReport['LiveScoutingReport']['teleop_comments']); ?>&nbsp;</td>
                <td><?php echo $this->element('rings', array('A3'=>$liveScoutingReport['LiveScoutingReport']['A3'],
                    'B3'=>$liveScoutingReport['LiveScoutingReport']['B3'],
                    'C3'=>$liveScoutingReport['LiveScoutingReport']['C3'],
                    'A2'=>$liveScoutingReport['LiveScoutingReport']['A2'],
                    'B2'=>$liveScoutingReport['LiveScoutingReport']['B2'],
                    'C2'=>$liveScoutingReport['LiveScoutingReport']['C2'],
                    'A1'=>$liveScoutingReport['LiveScoutingReport']['A1'],
                    'B1'=>$liveScoutingReport['LiveScoutingReport']['B1'],
                    'C1'=>$liveScoutingReport['LiveScoutingReport']['C1']))?>&nbsp;</td>
                <td><?php echo h($liveScoutingReport['LiveScoutingReport']['generalComments']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $liveScoutingReport['LiveScoutingReport']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $liveScoutingReport['LiveScoutingReport']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $liveScoutingReport['LiveScoutingReport']['id']), null, __('Are you sure you want to delete # %s?', $liveScoutingReport['LiveScoutingReport']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Live Scouting Report'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match'), array('controller' => 'matches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>

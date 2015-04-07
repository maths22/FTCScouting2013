<div class="preScoutingReports view">
<h2><?php  echo __('Pre Scouting Report'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($preScoutingReport['PreScoutingReport']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($preScoutingReport['User']['id'], array('controller' => 'users', 'action' => 'view', $preScoutingReport['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($preScoutingReport['Team']['team_number'], array('controller' => 'teams', 'action' => 'view', $preScoutingReport['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($preScoutingReport['PreScoutingReport']['comments']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pre Scouting Report'), array('action' => 'edit', $preScoutingReport['PreScoutingReport']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pre Scouting Report'), array('action' => 'delete', $preScoutingReport['PreScoutingReport']['id']), null, __('Are you sure you want to delete # %s?', $preScoutingReport['PreScoutingReport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pre Scouting Reports'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pre Scouting Report'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>

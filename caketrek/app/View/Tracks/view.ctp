<div class="tracks view">
<h2><?php  echo __('Track'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($track['Track']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($track['Track']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zone'); ?></dt>
		<dd>
			<?php echo $this->Html->link($track['Zone']['name'], array('controller' => 'zones', 'action' => 'view', $track['Zone']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Durée'); ?></dt>
		<dd>
			<?php echo h($track['Track']['durée']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Track'), array('action' => 'edit', $track['Track']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Track'), array('action' => 'delete', $track['Track']['id']), null, __('Are you sure you want to delete # %s?', $track['Track']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('controller' => 'journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Points'), array('controller' => 'points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point'), array('controller' => 'points', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Journeys'); ?></h3>
	<?php if (!empty($track['Journey'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Tourist Id'); ?></th>
		<th><?php echo __('Guide Id'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th><?php echo __('Track Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($track['Journey'] as $journey): ?>
		<tr>
			<td><?php echo $journey['id']; ?></td>
			<td><?php echo $journey['name']; ?></td>
			<td><?php echo $journey['tourist_id']; ?></td>
			<td><?php echo $journey['guide_id']; ?></td>
			<td><?php echo $journey['zone_id']; ?></td>
			<td><?php echo $journey['track_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'journeys', 'action' => 'view', $journey['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'journeys', 'action' => 'edit', $journey['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'journeys', 'action' => 'delete', $journey['id']), null, __('Are you sure you want to delete # %s?', $journey['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($track['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($track['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td><?php echo $comment['note']; ?></td>
			<td><?php echo $comment['comment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Points'); ?></h3>
	<?php if (!empty($track['Point'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($track['Point'] as $point): ?>
		<tr>
			<td><?php echo $point['id']; ?></td>
			<td><?php echo $point['name']; ?></td>
			<td><?php echo $point['zone_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'points', 'action' => 'view', $point['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'points', 'action' => 'edit', $point['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'points', 'action' => 'delete', $point['id']), null, __('Are you sure you want to delete # %s?', $point['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Point'), array('controller' => 'points', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

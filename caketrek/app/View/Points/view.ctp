<div class="points view">
<h2><?php  echo __('Point'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($point['Point']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($point['Point']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zone'); ?></dt>
		<dd>
			<?php echo $this->Html->link($point['Zone']['name'], array('controller' => 'zones', 'action' => 'view', $point['Zone']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Point'), array('action' => 'edit', $point['Point']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Point'), array('action' => 'delete', $point['Point']['id']), null, __('Are you sure you want to delete # %s?', $point['Point']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Points'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track'), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($point['Comment'])): ?>
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
		foreach ($point['Comment'] as $comment): ?>
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
	<h3><?php echo __('Related Tracks'); ?></h3>
	<?php if (!empty($point['Track'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th><?php echo __('Durée'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($point['Track'] as $track): ?>
		<tr>
			<td><?php echo $track['id']; ?></td>
			<td><?php echo $track['name']; ?></td>
			<td><?php echo $track['zone_id']; ?></td>
			<td><?php echo $track['durée']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tracks', 'action' => 'view', $track['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tracks', 'action' => 'edit', $track['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tracks', 'action' => 'delete', $track['id']), null, __('Are you sure you want to delete # %s?', $track['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Track'), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

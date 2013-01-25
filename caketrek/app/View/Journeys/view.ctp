<div class="journeys view">
<h2><?php  echo __('Journey'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tourist'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journey['Tourist']['description'], array('controller' => 'tourists', 'action' => 'view', $journey['Tourist']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guide'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journey['Guide']['id'], array('controller' => 'guides', 'action' => 'view', $journey['Guide']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zone'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journey['Zone']['name'], array('controller' => 'zones', 'action' => 'view', $journey['Zone']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Track'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journey['Track']['name'], array('controller' => 'tracks', 'action' => 'view', $journey['Track']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Journey'), array('action' => 'edit', $journey['Journey']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Journey'), array('action' => 'delete', $journey['Journey']['id']), null, __('Are you sure you want to delete # %s?', $journey['Journey']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guides'), array('controller' => 'guides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide'), array('controller' => 'guides', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track'), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($journey['Comment'])): ?>
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
		foreach ($journey['Comment'] as $comment): ?>
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
	<h3><?php echo __('Related Attendes'); ?></h3>
	<?php if (!empty($journey['Attendees'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($journey['Attendees'] as $tourist): ?>
		<tr>
			<td><?php echo $tourist['id']; ?></td>
			<td><?php echo $tourist['description']; ?></td>
			<td><?php echo $tourist['photo']; ?></td>
			<td><?php echo $tourist['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tourists', 'action' => 'view', $tourist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tourists', 'action' => 'edit', $tourist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tourists', 'action' => 'delete', $tourist['id']), null, __('Are you sure you want to delete # %s?', $tourist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

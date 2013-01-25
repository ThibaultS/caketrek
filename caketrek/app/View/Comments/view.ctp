<div class="comments view">
<h2><?php  echo __('Comment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['User']['username'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comment'), array('action' => 'edit', $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comment'), array('action' => 'delete', $comment['Comment']['id']), null, __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guides'), array('controller' => 'guides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide'), array('controller' => 'guides', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('controller' => 'journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Points'), array('controller' => 'points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point'), array('controller' => 'points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track'), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Guides'); ?></h3>
	<?php if (!empty($comment['Guide'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tourist Id'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($comment['Guide'] as $guide): ?>
		<tr>
			<td><?php echo $guide['id']; ?></td>
			<td><?php echo $guide['tourist_id']; ?></td>
			<td><?php echo $guide['zone_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'guides', 'action' => 'view', $guide['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'guides', 'action' => 'edit', $guide['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'guides', 'action' => 'delete', $guide['id']), null, __('Are you sure you want to delete # %s?', $guide['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Guide'), array('controller' => 'guides', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Journeys'); ?></h3>
	<?php if (!empty($comment['Journey'])): ?>
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
		foreach ($comment['Journey'] as $journey): ?>
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
	<h3><?php echo __('Related Points'); ?></h3>
	<?php if (!empty($comment['Point'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($comment['Point'] as $point): ?>
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
<div class="related">
	<h3><?php echo __('Related Tourists'); ?></h3>
	<?php if (!empty($comment['Tourist'])): ?>
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
		foreach ($comment['Tourist'] as $tourist): ?>
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
<div class="related">
	<h3><?php echo __('Related Tracks'); ?></h3>
	<?php if (!empty($comment['Track'])): ?>
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
		foreach ($comment['Track'] as $track): ?>
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

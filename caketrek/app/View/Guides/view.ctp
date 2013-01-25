<div class="guides view">
<h2><?php  echo __('Guide'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($guide['Guide']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tourist'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guide['Tourist']['description'], array('controller' => 'tourists', 'action' => 'view', $guide['Tourist']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zone'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guide['Zone']['name'], array('controller' => 'zones', 'action' => 'view', $guide['Zone']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guide'), array('action' => 'edit', $guide['Guide']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guide'), array('action' => 'delete', $guide['Guide']['id']), null, __('Are you sure you want to delete # %s?', $guide['Guide']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guides'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('controller' => 'journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Journeys'); ?></h3>
	<?php if (!empty($guide['Journey'])): ?>
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
		foreach ($guide['Journey'] as $journey): ?>
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

<div class="touristsTourists index">
	<h2><?php echo __('Tourists Tourists'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tourist_id_1'); ?></th>
			<th><?php echo $this->Paginator->sort('tourist_id_2'); ?></th>
			<th><?php echo $this->Paginator->sort('tourist_confirmed_1'); ?></th>
			<th><?php echo $this->Paginator->sort('tourist_confirmed_2'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($touristsTourists as $touristsTourist): ?>
	<tr>
		<td><?php echo h($touristsTourist['TouristsTourist']['id']); ?>&nbsp;</td>
		<td><?php echo h($touristsTourist['TouristsTourist']['tourist_id_1']); ?>&nbsp;</td>
		<td><?php echo h($touristsTourist['TouristsTourist']['tourist_id_2']); ?>&nbsp;</td>
		<td><?php echo h($touristsTourist['TouristsTourist']['tourist_confirmed_1']); ?>&nbsp;</td>
		<td><?php echo h($touristsTourist['TouristsTourist']['tourist_confirmed_2']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $touristsTourist['TouristsTourist']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $touristsTourist['TouristsTourist']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $touristsTourist['TouristsTourist']['id']), null, __('Are you sure you want to delete # %s?', $touristsTourist['TouristsTourist']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tourists Tourist'), array('action' => 'add')); ?></li>
	</ul>
</div>

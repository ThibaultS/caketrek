<div class="touristsJourneys index">
	<h2><?php echo __('Tourists Journeys'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tourist_id'); ?></th>
			<th><?php echo $this->Paginator->sort('journey_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tourist_confirmed'); ?></th>
			<th><?php echo $this->Paginator->sort('journey_confirmed'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($touristsJourneys as $touristsJourney): ?>
	<tr>
		<td><?php echo h($touristsJourney['TouristsJourney']['id']); ?>&nbsp;</td>
		<td><?php echo h($touristsJourney['TouristsJourney']['tourist_id']); ?>&nbsp;</td>
		<td><?php echo h($touristsJourney['TouristsJourney']['journey_id']); ?>&nbsp;</td>
		<td><?php echo h($touristsJourney['TouristsJourney']['tourist_confirmed']); ?>&nbsp;</td>
		<td><?php echo h($touristsJourney['TouristsJourney']['journey_confirmed']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $touristsJourney['TouristsJourney']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $touristsJourney['TouristsJourney']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $touristsJourney['TouristsJourney']['id']), null, __('Are you sure you want to delete # %s?', $touristsJourney['TouristsJourney']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tourists Journey'), array('action' => 'add')); ?></li>
	</ul>
</div>

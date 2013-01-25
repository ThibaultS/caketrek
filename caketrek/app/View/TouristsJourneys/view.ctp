<div class="touristsJourneys view">
<h2><?php  echo __('Tourists Journey'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($touristsJourney['TouristsJourney']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tourist Id'); ?></dt>
		<dd>
			<?php echo h($touristsJourney['TouristsJourney']['tourist_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Journey Id'); ?></dt>
		<dd>
			<?php echo h($touristsJourney['TouristsJourney']['journey_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tourist Confirmed'); ?></dt>
		<dd>
			<?php echo h($touristsJourney['TouristsJourney']['tourist_confirmed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Journey Confirmed'); ?></dt>
		<dd>
			<?php echo h($touristsJourney['TouristsJourney']['journey_confirmed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tourists Journey'), array('action' => 'edit', $touristsJourney['TouristsJourney']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tourists Journey'), array('action' => 'delete', $touristsJourney['TouristsJourney']['id']), null, __('Are you sure you want to delete # %s?', $touristsJourney['TouristsJourney']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists Journeys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourists Journey'), array('action' => 'add')); ?> </li>
	</ul>
</div>

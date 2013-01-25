<div class="touristsJourneys form">
<?php echo $this->Form->create('TouristsJourney'); ?>
	<fieldset>
		<legend><?php echo __('Add Tourists Journey'); ?></legend>
	<?php
		echo $this->Form->input('tourist_id');
		echo $this->Form->input('journey_id');
		echo $this->Form->input('tourist_confirmed');
		echo $this->Form->input('journey_confirmed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tourists Journeys'), array('action' => 'index')); ?></li>
	</ul>
</div>

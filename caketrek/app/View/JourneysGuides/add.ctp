<div class="journeysGuides form">
<?php echo $this->Form->create('JourneysGuide'); ?>
	<fieldset>
		<legend><?php echo __('Add Journeys Guide'); ?></legend>
	<?php
		echo $this->Form->input('journey_id');
		echo $this->Form->input('guide_id');
		echo $this->Form->input('journey_confirmed');
		echo $this->Form->input('guide_confirmed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Journeys Guides'), array('action' => 'index')); ?></li>
	</ul>
</div>

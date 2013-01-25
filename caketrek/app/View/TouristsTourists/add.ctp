<div class="touristsTourists form">
<?php echo $this->Form->create('TouristsTourist'); ?>
	<fieldset>
		<legend><?php echo __('Add Tourists Tourist'); ?></legend>
	<?php
		echo $this->Form->input('tourist_id_1');
		echo $this->Form->input('tourist_id_2');
		echo $this->Form->input('tourist_confirmed_1');
		echo $this->Form->input('tourist_confirmed_2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tourists Tourists'), array('action' => 'index')); ?></li>
	</ul>
</div>

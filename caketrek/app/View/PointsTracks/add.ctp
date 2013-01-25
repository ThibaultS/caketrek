<div class="pointsTracks form">
<?php echo $this->Form->create('PointsTrack'); ?>
	<fieldset>
		<legend><?php echo __('Add Points Track'); ?></legend>
	<?php
		echo $this->Form->input('point_id');
		echo $this->Form->input('track_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Points Tracks'), array('action' => 'index')); ?></li>
	</ul>
</div>

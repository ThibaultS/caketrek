<div class="pointsTracks form">
<?php echo $this->Form->create('PointsTrack'); ?>
	<fieldset>
		<legend><?php echo __('Edit Points Track'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('point_id');
		echo $this->Form->input('track_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PointsTrack.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PointsTrack.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Points Tracks'), array('action' => 'index')); ?></li>
	</ul>
</div>

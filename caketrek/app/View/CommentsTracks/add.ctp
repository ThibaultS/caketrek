<div class="commentsTracks form">
<?php echo $this->Form->create('CommentsTrack'); ?>
	<fieldset>
		<legend><?php echo __('Add Comments Track'); ?></legend>
	<?php
		echo $this->Form->input('comment_id');
		echo $this->Form->input('track_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comments Tracks'), array('action' => 'index')); ?></li>
	</ul>
</div>

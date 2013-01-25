<div class="commentsTourists form">
<?php echo $this->Form->create('CommentsTourist'); ?>
	<fieldset>
		<legend><?php echo __('Add Comments Tourist'); ?></legend>
	<?php
		echo $this->Form->input('tourist_id');
		echo $this->Form->input('comment_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comments Tourists'), array('action' => 'index')); ?></li>
	</ul>
</div>

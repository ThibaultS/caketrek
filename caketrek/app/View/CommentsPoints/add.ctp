<div class="commentsPoints form">
<?php echo $this->Form->create('CommentsPoint'); ?>
	<fieldset>
		<legend><?php echo __('Add Comments Point'); ?></legend>
	<?php
		echo $this->Form->input('comment_id');
		echo $this->Form->input('point_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comments Points'), array('action' => 'index')); ?></li>
	</ul>
</div>

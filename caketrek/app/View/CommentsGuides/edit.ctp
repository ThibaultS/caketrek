<div class="commentsGuides form">
<?php echo $this->Form->create('CommentsGuide'); ?>
	<fieldset>
		<legend><?php echo __('Edit Comments Guide'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('comment_id');
		echo $this->Form->input('guide_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CommentsGuide.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CommentsGuide.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Comments Guides'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guides'), array('controller' => 'guides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide'), array('controller' => 'guides', 'action' => 'add')); ?> </li>
	</ul>
</div>

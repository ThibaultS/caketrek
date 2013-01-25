<div class="tourists form">
<?php echo $this->Form->create('Tourist'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tourist'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
		echo $this->Form->input('photo');
		echo $this->Form->input('user_id');
		echo $this->Form->input('Comment');
		echo $this->Form->input('Journey');
		echo $this->Form->input('Tourist');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tourist.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tourist.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guides'), array('controller' => 'guides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide'), array('controller' => 'guides', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Guides'), array('controller' => 'comments_guides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Guide'), array('controller' => 'comments_guides', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Journeys'), array('controller' => 'comments_journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Journey'), array('controller' => 'comments_journeys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Points'), array('controller' => 'comments_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Point'), array('controller' => 'comments_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Tracks'), array('controller' => 'comments_tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Track'), array('controller' => 'comments_tracks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('controller' => 'journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
	</ul>
</div>

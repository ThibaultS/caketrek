<div class="commentsJourneys view">
<h2><?php  echo __('Comments Journey'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($commentsJourney['CommentsJourney']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Id'); ?></dt>
		<dd>
			<?php echo h($commentsJourney['CommentsJourney']['comment_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Journey'); ?></dt>
		<dd>
			<?php echo $this->Html->link($commentsJourney['Journey']['name'], array('controller' => 'journeys', 'action' => 'view', $commentsJourney['Journey']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comments Journey'), array('action' => 'edit', $commentsJourney['CommentsJourney']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comments Journey'), array('action' => 'delete', $commentsJourney['CommentsJourney']['id']), null, __('Are you sure you want to delete # %s?', $commentsJourney['CommentsJourney']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Journeys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Journey'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('controller' => 'journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
	</ul>
</div>

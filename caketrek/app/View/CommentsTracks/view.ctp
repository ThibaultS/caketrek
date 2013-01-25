<div class="commentsTracks view">
<h2><?php  echo __('Comments Track'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($commentsTrack['CommentsTrack']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Id'); ?></dt>
		<dd>
			<?php echo h($commentsTrack['CommentsTrack']['comment_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Track Id'); ?></dt>
		<dd>
			<?php echo h($commentsTrack['CommentsTrack']['track_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comments Track'), array('action' => 'edit', $commentsTrack['CommentsTrack']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comments Track'), array('action' => 'delete', $commentsTrack['CommentsTrack']['id']), null, __('Are you sure you want to delete # %s?', $commentsTrack['CommentsTrack']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Tracks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Track'), array('action' => 'add')); ?> </li>
	</ul>
</div>

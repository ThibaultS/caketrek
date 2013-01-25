<div class="commentsTourists view">
<h2><?php  echo __('Comments Tourist'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($commentsTourist['CommentsTourist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tourist Id'); ?></dt>
		<dd>
			<?php echo h($commentsTourist['CommentsTourist']['tourist_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Id'); ?></dt>
		<dd>
			<?php echo h($commentsTourist['CommentsTourist']['comment_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comments Tourist'), array('action' => 'edit', $commentsTourist['CommentsTourist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comments Tourist'), array('action' => 'delete', $commentsTourist['CommentsTourist']['id']), null, __('Are you sure you want to delete # %s?', $commentsTourist['CommentsTourist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Tourists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Tourist'), array('action' => 'add')); ?> </li>
	</ul>
</div>

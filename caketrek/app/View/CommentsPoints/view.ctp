<div class="commentsPoints view">
<h2><?php  echo __('Comments Point'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($commentsPoint['CommentsPoint']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Id'); ?></dt>
		<dd>
			<?php echo h($commentsPoint['CommentsPoint']['comment_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Point Id'); ?></dt>
		<dd>
			<?php echo h($commentsPoint['CommentsPoint']['point_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comments Point'), array('action' => 'edit', $commentsPoint['CommentsPoint']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comments Point'), array('action' => 'delete', $commentsPoint['CommentsPoint']['id']), null, __('Are you sure you want to delete # %s?', $commentsPoint['CommentsPoint']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Points'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Point'), array('action' => 'add')); ?> </li>
	</ul>
</div>

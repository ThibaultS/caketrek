<div class="commentsGuides view">
<h2><?php  echo __('Comments Guide'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($commentsGuide['CommentsGuide']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Id'); ?></dt>
		<dd>
			<?php echo h($commentsGuide['CommentsGuide']['comment_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guide'); ?></dt>
		<dd>
			<?php echo $this->Html->link($commentsGuide['Guide']['id'], array('controller' => 'guides', 'action' => 'view', $commentsGuide['Guide']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comments Guide'), array('action' => 'edit', $commentsGuide['CommentsGuide']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comments Guide'), array('action' => 'delete', $commentsGuide['CommentsGuide']['id']), null, __('Are you sure you want to delete # %s?', $commentsGuide['CommentsGuide']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Guides'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Guide'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guides'), array('controller' => 'guides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide'), array('controller' => 'guides', 'action' => 'add')); ?> </li>
	</ul>
</div>

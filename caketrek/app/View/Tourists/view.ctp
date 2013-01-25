<div class="tourists view">
<h2><?php  echo __('Tourist'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tourist['Tourist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($tourist['Tourist']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($tourist['Tourist']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourist['User']['username'], array('controller' => 'users', 'action' => 'view', $tourist['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tourist'), array('action' => 'edit', $tourist['Tourist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tourist'), array('action' => 'delete', $tourist['Tourist']['id']), null, __('Are you sure you want to delete # %s?', $tourist['Tourist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('action' => 'add')); ?> </li>
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
	<div class="related">
		<h3><?php echo __('Related Guides'); ?></h3>
	<?php if (!empty($tourist['Guide'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $tourist['Guide']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Tourist Id'); ?></dt>
		<dd>
	<?php echo $tourist['Guide']['tourist_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Zone Id'); ?></dt>
		<dd>
	<?php echo $tourist['Guide']['zone_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Guide'), array('controller' => 'guides', 'action' => 'edit', $tourist['Guide']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Comments Guides'); ?></h3>
	<?php if (!empty($tourist['CommentsGuide'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comment Id'); ?></th>
		<th><?php echo __('Guide Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tourist['CommentsGuide'] as $commentsGuide): ?>
		<tr>
			<td><?php echo $commentsGuide['id']; ?></td>
			<td><?php echo $commentsGuide['comment_id']; ?></td>
			<td><?php echo $commentsGuide['guide_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments_guides', 'action' => 'view', $commentsGuide['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments_guides', 'action' => 'edit', $commentsGuide['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments_guides', 'action' => 'delete', $commentsGuide['id']), null, __('Are you sure you want to delete # %s?', $commentsGuide['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comments Guide'), array('controller' => 'comments_guides', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Comments Journeys'); ?></h3>
	<?php if (!empty($tourist['CommentsJourney'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comment Id'); ?></th>
		<th><?php echo __('Journey Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tourist['CommentsJourney'] as $commentsJourney): ?>
		<tr>
			<td><?php echo $commentsJourney['id']; ?></td>
			<td><?php echo $commentsJourney['comment_id']; ?></td>
			<td><?php echo $commentsJourney['journey_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments_journeys', 'action' => 'view', $commentsJourney['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments_journeys', 'action' => 'edit', $commentsJourney['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments_journeys', 'action' => 'delete', $commentsJourney['id']), null, __('Are you sure you want to delete # %s?', $commentsJourney['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comments Journey'), array('controller' => 'comments_journeys', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Comments Points'); ?></h3>
	<?php if (!empty($tourist['CommentsPoint'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comment Id'); ?></th>
		<th><?php echo __('Point Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tourist['CommentsPoint'] as $commentsPoint): ?>
		<tr>
			<td><?php echo $commentsPoint['id']; ?></td>
			<td><?php echo $commentsPoint['comment_id']; ?></td>
			<td><?php echo $commentsPoint['point_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments_points', 'action' => 'view', $commentsPoint['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments_points', 'action' => 'edit', $commentsPoint['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments_points', 'action' => 'delete', $commentsPoint['id']), null, __('Are you sure you want to delete # %s?', $commentsPoint['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comments Point'), array('controller' => 'comments_points', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Comments Tracks'); ?></h3>
	<?php if (!empty($tourist['CommentsTrack'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comment Id'); ?></th>
		<th><?php echo __('Track Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tourist['CommentsTrack'] as $commentsTrack): ?>
		<tr>
			<td><?php echo $commentsTrack['id']; ?></td>
			<td><?php echo $commentsTrack['comment_id']; ?></td>
			<td><?php echo $commentsTrack['track_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments_tracks', 'action' => 'view', $commentsTrack['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments_tracks', 'action' => 'edit', $commentsTrack['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments_tracks', 'action' => 'delete', $commentsTrack['id']), null, __('Are you sure you want to delete # %s?', $commentsTrack['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comments Track'), array('controller' => 'comments_tracks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Journeys'); ?></h3>
	<?php if (!empty($tourist['Journey'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Tourist Id'); ?></th>
		<th><?php echo __('Guide Id'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th><?php echo __('Track Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tourist['Journey'] as $journey): ?>
		<tr>
			<td><?php echo $journey['id']; ?></td>
			<td><?php echo $journey['name']; ?></td>
			<td><?php echo $journey['tourist_id']; ?></td>
			<td><?php echo $journey['guide_id']; ?></td>
			<td><?php echo $journey['zone_id']; ?></td>
			<td><?php echo $journey['track_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'journeys', 'action' => 'view', $journey['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'journeys', 'action' => 'edit', $journey['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'journeys', 'action' => 'delete', $journey['id']), null, __('Are you sure you want to delete # %s?', $journey['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($tourist['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tourist['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td><?php echo $comment['note']; ?></td>
			<td><?php echo $comment['comment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tourists'); ?></h3>
	<?php if (!empty($tourist['Tourist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tourist['Tourist'] as $tourist): ?>
		<tr>
			<td><?php echo $tourist['id']; ?></td>
			<td><?php echo $tourist['description']; ?></td>
			<td><?php echo $tourist['photo']; ?></td>
			<td><?php echo $tourist['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tourists', 'action' => 'view', $tourist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tourists', 'action' => 'edit', $tourist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tourists', 'action' => 'delete', $tourist['id']), null, __('Are you sure you want to delete # %s?', $tourist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

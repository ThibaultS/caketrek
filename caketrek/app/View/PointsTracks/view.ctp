<div class="pointsTracks view">
<h2><?php  echo __('Points Track'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pointsTrack['PointsTrack']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Point Id'); ?></dt>
		<dd>
			<?php echo h($pointsTrack['PointsTrack']['point_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Track Id'); ?></dt>
		<dd>
			<?php echo h($pointsTrack['PointsTrack']['track_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Points Track'), array('action' => 'edit', $pointsTrack['PointsTrack']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Points Track'), array('action' => 'delete', $pointsTrack['PointsTrack']['id']), null, __('Are you sure you want to delete # %s?', $pointsTrack['PointsTrack']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Points Tracks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Points Track'), array('action' => 'add')); ?> </li>
	</ul>
</div>

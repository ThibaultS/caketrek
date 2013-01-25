<div class="touristsTourists view">
<h2><?php  echo __('Tourists Tourist'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($touristsTourist['TouristsTourist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tourist Id 1'); ?></dt>
		<dd>
			<?php echo h($touristsTourist['TouristsTourist']['tourist_id_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tourist Id 2'); ?></dt>
		<dd>
			<?php echo h($touristsTourist['TouristsTourist']['tourist_id_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tourist Confirmed 1'); ?></dt>
		<dd>
			<?php echo h($touristsTourist['TouristsTourist']['tourist_confirmed_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tourist Confirmed 2'); ?></dt>
		<dd>
			<?php echo h($touristsTourist['TouristsTourist']['tourist_confirmed_2']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tourists Tourist'), array('action' => 'edit', $touristsTourist['TouristsTourist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tourists Tourist'), array('action' => 'delete', $touristsTourist['TouristsTourist']['id']), null, __('Are you sure you want to delete # %s?', $touristsTourist['TouristsTourist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists Tourists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourists Tourist'), array('action' => 'add')); ?> </li>
	</ul>
</div>

<div class="journeysGuides view">
<h2><?php  echo __('Journeys Guide'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($journeysGuide['JourneysGuide']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Journey Id'); ?></dt>
		<dd>
			<?php echo h($journeysGuide['JourneysGuide']['journey_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guide Id'); ?></dt>
		<dd>
			<?php echo h($journeysGuide['JourneysGuide']['guide_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Journey Confirmed'); ?></dt>
		<dd>
			<?php echo h($journeysGuide['JourneysGuide']['journey_confirmed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guide Confirmed'); ?></dt>
		<dd>
			<?php echo h($journeysGuide['JourneysGuide']['guide_confirmed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Journeys Guide'), array('action' => 'edit', $journeysGuide['JourneysGuide']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Journeys Guide'), array('action' => 'delete', $journeysGuide['JourneysGuide']['id']), null, __('Are you sure you want to delete # %s?', $journeysGuide['JourneysGuide']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys Guides'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journeys Guide'), array('action' => 'add')); ?> </li>
	</ul>
</div>

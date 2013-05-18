<div class="lineItems form">
<?php echo $this->Form->create('LineItem'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Line Item'); ?></legend>
	<?php
		echo $this->Form->input('line_items_id');
		echo $this->Form->input('order_id');
		echo $this->Form->input('name');
		echo $this->Form->input('start_time');
		echo $this->Form->input('stop_time');
		echo $this->Form->input('budget');
		echo $this->Form->input('rate');
		echo $this->Form->input('rate_measure');
		echo $this->Form->input('delivery_speed');
		echo $this->Form->input('targeting_days');
		echo $this->Form->input('budget_type');
		echo $this->Form->input('targeting_start_time');
		echo $this->Form->input('targeting_end_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LineItem.line_items_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LineItem.line_items_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Line Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>

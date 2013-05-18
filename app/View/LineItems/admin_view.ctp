<div class="lineItems view">
<h2><?php  echo __('Line Item'); ?></h2>
	<dl>
		<dt><?php echo __('Line Items Id'); ?></dt>
		<dd>
			<?php echo h($lineItem['LineItem']['line_items_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lineItem['Order']['name'], array('controller' => 'orders', 'action' => 'view', $lineItem['Order']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($lineItem['LineItem']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($lineItem['LineItem']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stop Time'); ?></dt>
		<dd>
			<?php echo h($lineItem['LineItem']['stop_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget'); ?></dt>
		<dd>
			<?php echo h($lineItem['LineItem']['budget']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate'); ?></dt>
		<dd>
			<?php echo h($lineItem['LineItem']['rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate Measure'); ?></dt>
		<dd>
			<?php echo h($lineItem['LineItem']['rate_measure']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delivery Speed'); ?></dt>
		<dd>
			<?php echo h($lineItem['LineItem']['delivery_speed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Targeting Days'); ?></dt>
		<dd>
			<?php echo h($lineItem['LineItem']['targeting_days']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget Type'); ?></dt>
		<dd>
			<?php echo h($lineItem['LineItem']['budget_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Targeting Start Time'); ?></dt>
		<dd>
			<?php echo h($lineItem['LineItem']['targeting_start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Targeting End Time'); ?></dt>
		<dd>
			<?php echo h($lineItem['LineItem']['targeting_end_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Line Item'), array('action' => 'edit', $lineItem['LineItem']['line_items_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Line Item'), array('action' => 'delete', $lineItem['LineItem']['line_items_id']), null, __('Are you sure you want to delete # %s?', $lineItem['LineItem']['line_items_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Line Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Line Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>

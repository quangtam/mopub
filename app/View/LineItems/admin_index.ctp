<div class="lineItems index">
	<h2><?php echo __('Line Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('line_items_id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('stop_time'); ?></th>
			<th><?php echo $this->Paginator->sort('budget'); ?></th>
			<th><?php echo $this->Paginator->sort('rate'); ?></th>
			<th><?php echo $this->Paginator->sort('rate_measure'); ?></th>
			<th><?php echo $this->Paginator->sort('delivery_speed'); ?></th>
			<th><?php echo $this->Paginator->sort('targeting_days'); ?></th>
			<th><?php echo $this->Paginator->sort('budget_type'); ?></th>
			<th><?php echo $this->Paginator->sort('targeting_start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('targeting_end_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lineItems as $lineItem): ?>
	<tr>
		<td><?php echo h($lineItem['LineItem']['line_items_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lineItem['Order']['name'], array('controller' => 'orders', 'action' => 'view', $lineItem['Order']['id'])); ?>
		</td>
		<td><?php echo h($lineItem['LineItem']['name']); ?>&nbsp;</td>
		<td><?php echo h($lineItem['LineItem']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($lineItem['LineItem']['stop_time']); ?>&nbsp;</td>
		<td><?php echo h($lineItem['LineItem']['budget']); ?>&nbsp;</td>
		<td><?php echo h($lineItem['LineItem']['rate']); ?>&nbsp;</td>
		<td><?php echo h($lineItem['LineItem']['rate_measure']); ?>&nbsp;</td>
		<td><?php echo h($lineItem['LineItem']['delivery_speed']); ?>&nbsp;</td>
		<td><?php echo h($lineItem['LineItem']['targeting_days']); ?>&nbsp;</td>
		<td><?php echo h($lineItem['LineItem']['budget_type']); ?>&nbsp;</td>
		<td><?php echo h($lineItem['LineItem']['targeting_start_time']); ?>&nbsp;</td>
		<td><?php echo h($lineItem['LineItem']['targeting_end_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lineItem['LineItem']['line_items_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lineItem['LineItem']['line_items_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lineItem['LineItem']['line_items_id']), null, __('Are you sure you want to delete # %s?', $lineItem['LineItem']['line_items_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Line Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div>
    <?php echo $this->Html->link(__('Orders'), array('controller' => 'orders', 'action' => 'index')) ?>
    <?php echo $this->Html->link(__('Line Items'), array('controller' => 'line_items', 'action' => 'index')) ?>
</div>

<div class="lineItems index">
	<h3><?php echo __('Line Items'); ?></h3>
	<table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
                        <th><?php echo $this->Paginator->sort('order_id'); ?></th>
                        <th><?php echo $this->Paginator->sort('priority'); ?></th>
			<th><?php echo $this->Paginator->sort('start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('stop_time'); ?></th>
			<th><?php echo $this->Paginator->sort('rate'); ?></th>
	</tr>
	<?php foreach ($lineItems as $lineItem): ?>
	<tr>
		<td>
                    <?php echo $this->Html->link($lineItem['LineItem']['name'], array('action' => 'view', $lineItem['LineItem']['id'])); ?>
		</td>
                <td>
                    <?php echo $this->Html->link($lineItem['Order']['name'], array('controller' => 'orders', 'action' => 'view', $lineItem['Order']['id'])); ?>
                </td>
                <td><?php echo h($lineItem['LineItem']['priority']); ?>&nbsp;</td>
		<td><?php echo h($lineItem['LineItem']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($lineItem['LineItem']['stop_time']); ?>&nbsp;</td>
		<td>
                    <?php echo h($lineItem['LineItem']['rate']); ?>&nbsp;
                    <?php echo h($lineItem['LineItem']['rate_measure']); ?>&nbsp;
                </td>
                <!--
		<td class="actions">
			
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lineItem['LineItem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lineItem['LineItem']['id']), null, __('Are you sure you want to delete # %s?', $lineItem['LineItem']['id'])); ?>
		</td>
                -->
	</tr>
<?php endforeach; ?>
	</table>
        <?php echo $this->Html->link(__('New Line Item'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
        
        <!--
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
        -->
</div>
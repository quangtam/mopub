<?php echo $this->Html->script('vote'); ?>

<div>
    <ul class="breadcrumb">
      <li class="active">
          <?php  echo __('Overview'); ?>
      </li>
    </ul>
</div>

<div>
    <ul class="nav nav-tabs">
      <li class="active"><a href="#orders" data-toggle="tab">Orders</a></li>
      <li><a href="#line_items" data-toggle="tab">Line Items</a></li>
    </ul>
</div>

<div class="orders index tab-content">
    <div class="tab-pane active" id="orders">
        <h3><?php echo __('Orders'); ?> (<?php echo count($orders) ?>)</h3>
	<table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
        <thead>
            <tr>
    <!--
                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                            <th><?php echo $this->Paginator->sort('user'); ?></th>
    -->
                            <th><?php echo $this->Paginator->sort('name'); ?></th>
                            <th><?php echo $this->Paginator->sort('advertiser'); ?></th>
                            <th><?php echo $this->Paginator->sort('description'); ?></th>
                            <!--
                            <th class="actions"><?php echo __('Actions'); ?></th>
                            -->
            </tr>
        </thead>
	<?php foreach ($orders as $order): ?>
	<tr>
            <!--
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['user']); ?>&nbsp;</td>
            -->
		<td><?php echo $this->Html->link(h($order['Order']['name']), array('action' => 'view', $order['Order']['id'])); ?></td>
		<td><?php echo h($order['Order']['advertiser']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['description']); ?>&nbsp;</td>
		
                <!--
                <td class="actions">
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
		</td>
                -->
	</tr>
<?php endforeach; ?>
	</table>
        <?php echo $this->Html->link(__('Add A New Order'), array('action' => 'add'), array('class' => 'btn btn-primary btn-large')); ?>

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
    <div class="tab-pane" id="line_items">
        <h3><?php echo __('Line Items'); ?> (<?php echo count($lineItems) ?>)</h3>
	<table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
	<tr>
            <thead>
                            <th><?php echo __('Name'); ?></th>
                            <th><?php echo __('Order'); ?></th>
                            <th><?php echo __('Priority'); ?></th>
                            <th><?php echo __('Start Time'); ?></th>
                            <th><?php echo __('End Time'); ?></th>
                            <th><?php echo __('Rate'); ?></th>
            </thead>
	</tr>
	<?php foreach ($lineItems as $lineItem): ?>
	<tr>
		<td>
                    <?php echo $this->Html->link($lineItem['LineItem']['name'], array('controller' => 'line_items', 'action' => 'view', $lineItem['LineItem']['id'])); ?>
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
        <?php echo $this->Html->link(__('Add A New Line Item'), array('controller' => 'line_items', 'action' => 'add'), array('class' => 'btn btn-primary btn-large')); ?>
        
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
</div>

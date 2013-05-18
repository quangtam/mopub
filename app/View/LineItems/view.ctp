<div>
    <ul class="breadcrumb">
      <li>
          <?php echo $this->Html->link(__('Overview'), array('controller' => 'orders', 'action' => 'index')); ?>
          <span class="divider">/</span></li>
      <li>
          <?php echo $this->Html->link($lineItem['Order']['name'], array('controller' => 'orders', 'action' => 'view', $lineItem['Order']['id'])); ?>
          <span class="divider">/</span>
      </li>
      <li class="active">
          <?php  echo $lineItem['LineItem']['name']; ?>
      </li>
    </ul>
</div>

<div class="lineItems view">
<h2><?php  echo $lineItem['LineItem']['name']; ?></h2>
	<table class="table">
        <tr>
                        <th><?php echo __('Order'); ?></th>
                        <th><?php echo __('Type'); ?></th>
                        <th><?php echo __('Priority'); ?></th>
			<th><?php echo __('Start Time'); ?></th>
			<th><?php echo __('End Time'); ?></th>
			<th><?php echo __('Rate'); ?></th>
	</tr>
	<tr>
                <td>
                    <?php echo $this->Html->link($lineItem['Order']['name'], array('controller' => 'orders', 'action' => 'view', $lineItem['Order']['id'])); ?>
                </td>
                <td><?php echo h($lineItem['LineItem']['type']); ?>&nbsp;</td>
                <td><?php echo h($lineItem['LineItem']['priority']); ?>&nbsp;</td>
		<td><?php echo h($lineItem['LineItem']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($lineItem['LineItem']['stop_time']); ?>&nbsp;</td>
		<td>
                    <?php echo h($lineItem['LineItem']['rate']); ?>&nbsp;
                    <?php echo h($lineItem['LineItem']['rate_measure']); ?>&nbsp;
                </td>
	</tr>
	</table>
</div>
<?php echo $this->Html->link(__('Edit Line Item'), array('action' => 'edit', $lineItem['LineItem']['id']), array('class' => 'btn btn-large')); ?>

<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Line Item'), array('action' => 'edit', $lineItem['LineItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Line Item'), array('action' => 'delete', $lineItem['LineItem']['id']), null, __('Are you sure you want to delete # %s?', $lineItem['LineItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Line Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Line Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
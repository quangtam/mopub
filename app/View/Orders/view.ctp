<div>
    <ul class="breadcrumb">
      <li>
          <?php echo $this->Html->link(__('Overview'), array('controller' => 'orders', 'action' => 'index')); ?>
          <span class="divider">/</span></li>
      <li class="active">
          <?php  echo $order['Order']['name']; ?>
      </li>
    </ul>
</div>

<div class="orders view">
<h2><?php echo h($order['Order']['name']); ?></h2>
	<table class="table table-condensed">
            <tr>
                <th>
                    <?php echo __('Advertiser'); ?>
                <th/>
                <th>
                   <?php echo __('Description'); ?>
                <th/>
            </tr>
            <tr>
                <td>
                    <?php echo h($order['Order']['advertiser']); ?>
                <td/>
                <td>
                    <?php echo h($order['Order']['description']); ?>
                <td/>
            </tr>
	</table>
</div>

<div class="hero-unit">
  <h1>Graph goes here</h1>
  <p>need a JS plugin for this</p>
</div>

<div class="lineItems index">
	<h4><?php echo __('Line Items'); ?> (<?php echo count($lineItems);?>)</h4>
	<table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
        <thead>
            <tr>
                            <th><?php echo __('Name'); ?></th>
                            <th><?php echo __('Priority'); ?></th>
                            <th><?php echo __('Start Time'); ?></th>
                            <th><?php echo __('End Time'); ?></th>
                            <th><?php echo __('Rate'); ?></th>
            </tr>
        </thead>
	<?php foreach ($lineItems as $lineItem): ?>
	<tr>
		<td>
                    <?php echo $this->Html->link($lineItem['LineItem']['name'], array('controller' => 'line_items', 'action' => 'view', $lineItem['LineItem']['id'])); ?>
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

<div class="actions">
    <?php 
        echo $this->Html->link(
        __('Add A New Line Item'), 
        array('controller' => 'LineItems', 'action' => 'add', $order['Order']['id']),
        array('class' => 'btn btn-primary btn-large')
        ); 
    ?>
    <?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id']), array('class' => 'btn btn-large')); ?>
    <!--
    <?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
    -->
</div>

<div class="lineItems form">
<?php echo $this->Form->create('LineItem'); ?>
	<fieldset>
		<legend><?php echo __('Add Line Item'); ?></legend>
	<?php
		echo $this->Form->input('order_id');
		echo $this->Form->input('name');
                echo $this->Form->input('type', array(
                    'options' => array('guaranteed' => 'guaranteed', 'promotional' => 'promotional', 'marketplace' => 'marketplace', 'non-guaranteed' => 'non-guaranteed', 'backfill' => 'backfill'),
                    'empty' => '(choose one)'
                    ));
                echo $this->Form->input('priority', array(
                    'options' => array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10),
                    'empty' => '(choose one)'
                    ));
		echo $this->Form->input('start_time');
		echo $this->Form->input('stop_time');
		echo $this->Form->input('budget');
                echo $this->Form->input('budget_type', array(
                    'options' => array('daily impressions' => 'daily impressions', 'total impressions' => 'total impressions'),
                    'empty' => '(choose one)'
                    ));
		echo $this->Form->input('rate');
		echo $this->Form->input('rate_measure', array(
                    'options' => array('CPM' => 'CPM', 'CPC' => 'CPC'),
                    'empty' => '(choose one)'
                    ));
		echo $this->Form->input('delivery_speed', array(
                    'options' => array('spread evenly' => 'spread evently', 'all at once' => 'all at once'),
                    'empty' => '(choose one)'
                    ));
                /*
		echo $this->Form->input('targeting_days', array(
                    'options' => array('mon' => 'mon', 'tue' => 'tue', 'wed' => 'wed', 'thur' => 'thur', 'fri' => 'fri', 'sat' => 'sat', 'sun' => 'sun'),
                    'multiple' => 'checkbox'
                    ));
                 * 
                 */
		echo $this->Form->input('targeting_start_time');
		echo $this->Form->input('targeting_end_time');
	?>
	</fieldset>
<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-large')); ?>
</div>

<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Line Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
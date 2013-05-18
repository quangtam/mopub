<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><i class="icon-book"></i><?php echo __('Step 1 - Create New Order'); ?></legend>
                <small>An Order is a set of Line Items that is usually created for a campaign and targets one or more Ad Units.</small>
                <br/>

            <?php
		echo $this->Form->input('Order.user');
		echo $this->Form->input('Order.name');
		echo $this->Form->input('Order.advertiser');
		echo $this->Form->input('Order.description');
            ?>
        </fieldset>
        <fieldset>
                <legend><i class="icon-file"></i><?php echo __('Step 2 - Add A Line Item'); ?></legend>
                <small>Each Order has one or more Line Items. A Line Item is a set of creatives and targeting parameters that runs with a specific budget.</small>
                <br/>
            <?php        
		echo $this->Form->input('LineItem.0.name');
                echo $this->Form->input('LineItem.0.type', array(
                    'options' => array('guaranteed' => 'guaranteed', 'promotional' => 'promotional', 'marketplace' => 'marketplace', 'non-guaranteed' => 'non-guaranteed', 'backfill' => 'backfill'),
                    'empty' => '(choose one)'
                    ));
                echo $this->Form->input('LineItem.0.priority', array(
                    'options' => array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10),
                    'empty' => '(choose one)'
                    ));
		echo $this->Form->input('LineItem.0.start_time');
		echo $this->Form->input('LineItem.0.stop_time');
		echo $this->Form->input('LineItem.0.budget');
                echo $this->Form->input('LineItem.0.budget_type', array(
                    'options' => array('daily impressions' => 'daily impressions', 'total impressions' => 'total impressions'),
                    'empty' => '(choose one)'
                    ));
		echo $this->Form->input('LineItem.0.rate');
		echo $this->Form->input('LineItem.0.rate_measure', array(
                    'options' => array('CPM' => 'CPM', 'CPC' => 'CPC'),
                    'empty' => '(choose one)'
                    ));
		echo $this->Form->input('LineItem.0.delivery_speed', array(
                    'options' => array('spread evenly' => 'spread evenly', 'all at once' => 'all at once'),
                    'empty' => '(choose one)'
                    ));
                /*
		echo $this->Form->input('targeting_days', array(
                    'options' => array('mon' => 'mon', 'tue' => 'tue', 'wed' => 'wed', 'thur' => 'thur', 'fri' => 'fri', 'sat' => 'sat', 'sun' => 'sun'),
                    'multiple' => 'checkbox'
                    ));
                 * 
                 */
		echo $this->Form->input('LineItem.0.targeting_start_time');
		echo $this->Form->input('LineItem.0.targeting_end_time');
	?>
	</fieldset>
<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-large')); ?>
</div>

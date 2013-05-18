<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Edit Order'); ?></legend>
	<?php
		echo $this->Form->input('user');
		echo $this->Form->input('name');
		echo $this->Form->input('advertiser');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn')); ?>
</div>
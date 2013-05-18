<div class="navbar navbar-static-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
                        <?php echo $this->Html->link(__('Mobtick'), array('controller' => 'orders', 'action' => 'index'), array('class' => 'brand')) ?>
			<!-- <a class="brand" target="_blank" href="http://twitter.github.com/bootstrap/"><?php echo __('Mobtick'); ?></a> -->
			<div class="nav-collapse">
				<ul class="nav">
                                    <li>
					<?php 
                                            echo $this->Html->link('Inventory', '');
                                        ?>
                                    </li>
                                    <li class="active">
                                        <?php echo $this->Html->link(__('Orders'), array('controller' => 'orders', 'action' => 'index')) ?>
                                    </li>
                                    <li>
					<?php 
                                            echo $this->Html->link('Marketplace', '');
                                        ?>
                                    </li>
                                    <li>
					<?php 
                                            echo $this->Html->link('Networks', '');
                                        ?>
                                    </li>
				</ul>
			</div>
		</div>
	</div>
</div>
<br/>
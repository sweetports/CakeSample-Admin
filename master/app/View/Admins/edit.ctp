<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2 class="sub-header"><?php echo __('Admins'); ?></h2>
    <div class="table-responsive">
    <?php echo $this->Form->create('Admin'); ?>
	<fieldset>
		<legend><?php echo __('Edit Admin'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('del_flg');
		echo $this->Form->input('status');
		echo $this->Form->input('password');
	?>
	</fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
    </div>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Admin.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Admin.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Admins'), array('action' => 'index')); ?></li>
	</ul>
</div>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2 class="sub-header"><?php echo __('Admins'); ?></h2>
    <?php echo $this->Form->create('Admin',array('role'=>'form')); ?>
    <div class="form-group input-group-lg">
        <label>ID(E-mail)</label>
        <?php echo $this->Form->input('username',array('label'=>false,'class'=>'form-control'));?>
    </div>
    <div class="form-group input-group-lg">
        <label>Nickname</label>
        <?php echo $this->Form->input('nickname',array('label'=>false,'class'=>'form-control'));?>
    </div>
    <div class="form-group input-group-lg">
        <label>Password</label>
        <?php echo $this->Form->input('password',array('label'=>false,'class'=>'form-control'));?>
    </div>
    <?php echo $this->Form->end(__('Add'),array('div'=>false,'class'=>'btn btn-default btn-lg')); ?>
    <div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('List Admins'), array('action' => 'index')); ?></li>
        </ul>
    </div>
</div>
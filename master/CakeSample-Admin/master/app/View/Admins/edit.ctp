<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2 class="sub-header"><?php echo __('Admins'); ?></h2>
    <div class="actions text-right">
        <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back'), array('action' => 'index'),array('class'=>'','escape'=>false)); ?>
    </div>

    <div class="table-responsive">
    <?php echo $this->Form->create('Admin',array('type'=>'file','role'=>'form')); ?>

        <div class="form-group input-group-lg">
            <label>ID(E-mail)</label>
            <?php echo $this->Form->input('Admin.username',array('label'=>false,'class'=>'form-control'));?>
        </div>
        <div class="form-group input-group-lg">
            <label>Nickname</label>
            <?php echo $this->Form->input('nickname',array('label'=>false,'class'=>'form-control'));?>
        </div>
        <div class="form-group input-group-lg">
            <label>Password</label>
            <?php
            echo $this->Form->input('password',array(
                    'label'=>false,
                    'class'=>'form-control'
                )
            );
            ?>
        </div>
        <div class="form-group input-group-lg">
            <label>Status</label>
            <?php
            echo $this->Form->input('status',array(
                    'type' => 'select',
                    'options' => $select_status,
                    'label'=>false,
                    'class'=>'form-control'
                )
            );
            ?>
        </div>
    <button class="btn btn-lg btn-primary" type="submit">Update</button>
    </form>
</div>
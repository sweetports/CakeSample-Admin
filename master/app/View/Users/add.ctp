<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2 class="sub-header"><?php echo __('Users'); ?></h2>
    <div class="actions text-right">
        <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back'), array('action' => 'index'),array('class'=>'','escape'=>false)); ?>
    </div>
    <?php echo $this->Form->create('User',array('role'=>'form')); ?>
    <div class="form-group input-group-lg">
        <label>ID(Email)</label>
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
    <button class="btn btn-lg btn-primary" type="submit">Add</button>
    </form>
</div>
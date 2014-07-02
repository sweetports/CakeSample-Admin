<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2 class="sub-header"><?php echo __('お知らせ'); ?></h2>
    <?php echo $this->Form->create('Information',array('type'=>'file','role'=>'form')); ?>
	<?php
		echo $this->Form->input('id');
    ?>
    <div class="form-group input-group-lg">
    <label>タイトル</label>
    <?php echo $this->Form->input('Information.name',array('label'=>false,'class'=>'form-control'));?>
    </div>
    <div class="form-group input-group-lg">
        <label>コンテンツ</label>
        <?php echo $this->Form->input('Information.content',array('label'=>false,'class'=>'form-control'));?>
    </div>
    <div class="form-group input-group-lg">
        <label>画像</label>

        <?php
            foreach($files as $img){
                echo '<img src="'.DS.'files'.DS.'attachment'.DS.'photo_information'.DS.$img['Attachment']['id'].DS.$img['Attachment']['photo_information'].'">';
            }
        ?>
        <?php echo $this->Form->input('Attachment.0.photo_information',array('type'=>'file','label'=>false,'class'=>'form-control'));?>
        <?php echo $this->Form->input('Attachment.0.model', array('type' => 'hidden','value'=>'Information')); ?>
        <?php echo $this->Form->input('Attachment.0.dir', array('type' => 'hidden')); ?>
    </div>
    <?php
//		echo $this->Form->input('url',array('label'=>false));
//		echo $this->Form->input('del_flg',array('label'=>false));
//		echo $this->Form->input('status',array('label'=>false));
//		echo $this->Form->input('photo',array('label'=>false));
	?>
    <button class="btn btn-lg btn-primary" type="submit">更新</button>
    </form>
    <!--    --><?php //echo $this->Form->end(__('更新'),array('div'=>false,'class'=>'btn btn-default btn-lg')); ?>
    <div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Information.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Information.id'))); ?></li>
            <li><?php echo $this->Html->link(__('List Information'), array('action' => 'index')); ?></li>
        </ul>
    </div>
</div>
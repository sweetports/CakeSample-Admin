        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h2 class="sub-header"><?php echo __('お知らせ'); ?></h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th><?php echo $this->Paginator->sort('title'); ?></th>
                        <th><?php echo $this->Paginator->sort('image'); ?></th>
                        <th><?php echo $this->Paginator->sort('created'); ?></th>
                        <th><?php echo $this->Paginator->sort('modified'); ?></th>
                        <th><?php echo $this->Paginator->sort('status'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($information as $information): ?>
                        <tr>
                            <td><?php echo h($information['Information']['id']); ?>&nbsp;</td>
                            <td><?php echo h($information['Information']['name']); ?>&nbsp;</td>
                            <td><?php
                                //echo h($information['Attachment'][0]['imgpath']);

                                if(!empty($information['Attachment'])){
                                    foreach($information['Attachment'] as $image){
                                        if($image['del_flg']==0){
                                            echo '<img src="'.DS.'files'.DS.'attachment'.DS.'photo_information'.DS.$image['id'].DS.$image['photo_information'].'" width="50px">';
                                        }else{
                                        }

                                    }
                                }else{
                                    echo "-";
                                }

                                ?>&nbsp;</td>
                            <td><?php echo h($information['Information']['created']); ?>&nbsp;</td>
                            <td><?php echo h($information['Information']['modified']); ?>&nbsp;</td>
                            <td><?php echo h($information['Information']['status']); ?>&nbsp;</td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $information['Information']['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <p>
                    <?php
                    echo $this->Paginator->counter(array(
                        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                    ));
                    ?>	</p>
                <ul class="pagination">
                    <?php
                    echo $this->Paginator->prev(__('prev'), array('tag'=>'li'), null, array('tag'=>'li','class' => 'disabled','disabledTag'=>'a'));
                    echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1, 'ellipsis' => '<li class="disabled"><a>...</a></li>'));
                    echo $this->Paginator->next(__('next'), array('tag'=>'li'), null, array('tag'=>'li','class' => 'disabled','disabledTag'=>'a'));
                    ?>
                </ul>
                <div class="actions">
                    <?php echo $this->Html->link(__('Add'), array('action' => 'add')); ?>
                </div>
            </div>
        </div>
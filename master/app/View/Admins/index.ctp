    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h2 class="sub-header"><?php echo __('Admins'); ?></h2>
        <div class="table-responsive">
            <p>
                <?php
                echo $this->Paginator->counter(array(
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                ));
                ?>&nbsp;&nbsp;
                <?php echo $this->Html->link(__('<span class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Add</span>'), array('action' => 'add'),array('escape'=>false)); ?>
            </p>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('username'); ?></th>
                    <th><?php echo $this->Paginator->sort('nickname'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th><?php echo $this->Paginator->sort('status'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($admins as $admin): ?>
                <tr>
                    <td><?php echo h($admin['Admin']['id']); ?>&nbsp;</td>
                    <td><?php echo h($admin['Admin']['username']); ?>&nbsp;</td>
                    <td><?php echo h($admin['Admin']['nickname']); ?>&nbsp;</td>
                    <td><?php echo h($admin['Admin']['created']); ?>&nbsp;</td>
                    <td><?php echo h($admin['Admin']['modified']); ?>&nbsp;</td>
                    <td><?php
                        if($admin['Admin']['status'] == 0){
                            echo '<span class="label label-info">On</span>';
                        }else{
                            echo '<span class="label label-default">Off</span>';
                        }
                        ?>&nbsp;</td></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('<span class="btn btn-success"><span class="glyphicon glyphicon-edit"></span>&nbsp;Edit</span>'), array('action' => 'edit', $admin['Admin']['id']),array('escape'=>false)); ?>
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
        </div>
    </div>
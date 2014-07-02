<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2 class="sub-header"><?php echo __('Admins'); ?></h2>
    <div class="table-responsive">
        <table class="table table-striped">
	    <tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
<!--			<th>--><?php //echo $this->Paginator->sort('del_flg'); ?><!--</th>-->
			<th><?php echo $this->Paginator->sort('status'); ?></th>
<!--			<th>--><?php //echo $this->Paginator->sort('password'); ?><!--</th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($admins as $admin): ?>
        <tr>
            <td><?php echo h($admin['Admin']['id']); ?>&nbsp;</td>
            <td><?php echo h($admin['Admin']['username']); ?>&nbsp;</td>
            <td><?php echo h($admin['Admin']['created']); ?>&nbsp;</td>
            <td><?php echo h($admin['Admin']['modified']); ?>&nbsp;</td>
<!--            <td>--><?php //echo h($admin['Admin']['del_flg']); ?><!--&nbsp;</td>-->
            <td><?php echo h($admin['Admin']['status']); ?>&nbsp;</td>
<!--            <td>--><?php //echo h($admin['Admin']['password']); ?><!--&nbsp;</td>-->
            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('action' => 'view', $admin['Admin']['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $admin['Admin']['id'])); ?>
            </td>
        </tr>
        <?php endforeach; ?>
	    </table>
        <p>
        <?php
        echo $this->Paginator->counter(array(
        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>	</p>
        <div class="paging">
        <?php
            echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
        </div>
        <div class="actions">
            <h3><?php echo __('Actions'); ?></h3>
            <ul>
                <li><?php echo $this->Html->link(__('New Admin'), array('action' => 'add')); ?></li>
            </ul>
        </div>
    </div>
</div>
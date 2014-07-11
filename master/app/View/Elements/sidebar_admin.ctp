<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-user"></span>&nbsp;User'), array('controller'=>'users','action' => 'index','div'=>false),array('escape'=>false)); ?></li>
        <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-comment"></span>&nbsp;Community'), array('controller'=>'community','action' => 'index','div'=>false),array('escape'=>false)); ?></li>
        <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-info-sign"></span>&nbsp;Information'), array('controller'=>'information','action' => 'index','div'=>false),array('escape'=>false)); ?></li>
        <li class="divider"></li>
        <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-user"></span>&nbsp;Admin'), array('controller'=>'admins','action' => 'index','div'=>false),array('escape'=>false)); ?></li>
        <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign out'), array('controller'=>'admins','action' => 'logout','div'=>false),array('escape'=>false)); ?></li>
    </ul>
</div>

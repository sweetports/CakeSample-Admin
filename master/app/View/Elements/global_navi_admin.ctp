<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sample Management System</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a name="username">
                    <?php
                    if(!empty($username)){
                        echo "<span class=''>".$username."</span>";
                    }
                    ?></a>
                </li>

                <li><?php echo $this->Html->link(__('Sign out'), array('controller'=>'admins','action' => 'logout')); ?></li>
            </ul>
        </div>
    </div>
</div>
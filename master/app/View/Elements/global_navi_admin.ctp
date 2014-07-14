<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sample Management</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="/admins/edit/<?php echo $userid;?>" ><span class="glyphicon glyphicon-user"></span>&nbsp;
                        <?php
                        if(!empty($username)){
                            echo "<span class=''>".$username."</span>";
                        }
                        ?></a>
                </li>
                <li class="divider"></li>
                <li><a href="/admins/logout""><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
            </ul>
        </div>
    </div>
</div>
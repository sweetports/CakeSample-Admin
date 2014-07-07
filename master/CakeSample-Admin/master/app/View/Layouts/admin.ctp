<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Test Management System</title>
<link rel="start" href="/" title="home" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="copyright" content="(c). All Rights Reserved." />
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<?php echo $this->Html->css('dashboard');?>
</head>
<body>
<?php echo $this->element('global_navi_admin'); ?>
<div class="container-fluid">
    <div class="row">
        <?php echo $this->element('sidebar_admin'); ?>
        <?php echo $this->fetch('content'); ?>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>

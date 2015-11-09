<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title><?= $this->fetch('title') ?></title>	

	<?php echo $this->Html->css(array('bootstrap.min','style')); ?>
</head>
<body>
	<?php echo $this->element('template/navigation') ?>
	<?php echo $this->fetch('content') ?>
	<?php echo $this->Html->script(array('jquery.min','bootstrap.min','ie10-viewport-bug-workaround')); ?>
</body>
</html>

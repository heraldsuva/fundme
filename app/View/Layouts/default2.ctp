<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title><?= $this->fetch('title') ?> | <?= __('FundMe') ?></title>
        
    <?php echo $this->Html->css(array('bootstrap.min','style')); ?>
        
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>	    
  	<?php echo $this->element('navigation') ?>
  	<?php echo $this->fetch('content') ?>
  	<?php echo $this->Html->script(array('jquery.min','bootstrap.min','ie10-viewport-bug-workaround')) ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title><?= __('Sign In') ?> | <?= __('FundMe') ?></title>
        
    <?php echo $this->Html->css(array('bootstrap.min','signin')); ?>
        
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <?= $this->Form->create('User', array('novalidate' => true,'class' => 'form-signin', 'inputDefaults' => array('label' => array('class' => 'sr-only'), 'div' => false))) ?>
        <?= $this->Session->flash() ?>
        <div class="panel panel-default">
          <div class="panel-body">            
            <?= $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email')) ?>
            <?= $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password')) ?>
            <?= $this->Form->submit('Sign In', array('class' => 'btn btn-primary btn-block', 'div' => false)) ?>
          </div>
          <div class="panel-footer text-right">
            <?= $this->Html->link('Register', '/users/register') ?>
          </div>
        </div>        
      <?= $this->Form->end() ?>
    </div> <!-- /container -->

  <?php echo $this->Html->script(array('jquery.min','bootstrap.min','ie10-viewport-bug-workaround')) ?>
  </body>
</html>

<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <?= $this->Session->flash() ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">Registration</h4>
      </div>
      <div class="panel-body">
        <?= $this->Form->create('User', array(
            'novalidate' => true, 
            'inputDefaults' => array(
              'label' => false,
              'div' => array('class' => 'form-group'),
              'class' => 'form-control'
            )
        )) ?>          
        <?= $this->Form->input('name', array('placeholder' => 'Name')) ?>
        <?= $this->Form->input('email', array('placeholder' => 'Email')) ?>
        <?= $this->Form->input('password', array('placeholder' => 'Password')) ?>
        <?= $this->Form->input('repeat_password', array('type' => 'password','placeholder' => 'Repeat password')) ?>
        <?= $this->Form->submit('Register', array('class' => 'btn btn-primary btn-block', 'div' => false)) ?>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>
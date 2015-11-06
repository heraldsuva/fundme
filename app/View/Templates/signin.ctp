    <?= $this->Html->css('signin') ?>
  <div class="container">
    <form action="/templates/signin" novalidate="novalidate" class="form-signin" id="UserSigninForm" method="post" accept-charset="utf-8">      
      <div class="panel panel-default">
        <div class="panel-body">            
          <label for="UserEmail" class="sr-only">Email</label>
          <input name="data[User][email]" class="form-control" placeholder="Email" maxlength="100" type="email" id="UserEmail" required="required"/>
          <label for="UserPassword" class="sr-only">Password</label>
          <input name="data[User][password]" class="form-control" placeholder="Password" type="password" id="UserPassword" required="required"/>
          <input class="btn btn-primary btn-block" type="submit" value="Sign In"/>
        </div>
        <div class="panel-footer text-right">
          <a href="/templates/signup">Register</a>
        </div>
      </div>        
    </form>
  </div> <!-- /container -->
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Registration</h4>
        </div>
        <div class="panel-body">
          <form action="/templates/signup" novalidate="novalidate" id="UserSignupForm" method="post" accept-charset="utf-8">            
            <div class="form-group required">
              <input name="data[User][name]" class="form-control" placeholder="Name" maxlength="100" type="text" id="UserName" required="required"/></div>
            <div class="form-group required">
              <input name="data[User][email]" class="form-control" placeholder="Email" maxlength="100" type="email" id="UserEmail" required="required"/></div>
            <div class="form-group required">
              <input name="data[User][password]" class="form-control" placeholder="Password" type="password" id="UserPassword" required="required"/></div>
            <div class="form-group required">
              <input name="data[User][repeat_password]" class="form-control" placeholder="Repeat password" type="password" id="UserRepeatPassword" required="required"/></div>
              <input class="btn btn-primary btn-block" type="submit" value="Register"/>          
          </form>
        </div>
      </div>
    </div>
  </div>
</div> <!-- /container -->
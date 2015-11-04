<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="navbar-fixed-top.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">DISCOVER</a></li>
            <li><a href="#">HOW IT WORKS</a></li>            
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Sign In</a></li>            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-xs-4 col-sm-offset-1 sidebarCategory">          
          <div class="sidebar-module">
            <h4>CATEGORIES</h4>
            <ol class="list-unstyled">
              <li><a href="#">Carolina Foods</a></li>
              <li><a href="#">Medical</a></li>
              <li><a href="#">Volunteer</a></li>
              <li><a href="#">Emergencies</a></li>
              <li><a href="#">Education</a></li>
              <li><a href="#">Memorials</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Animals</a></li>              
            </ol>
          </div>        
        </div>
        <div class="col-sm-8">
          <div class="main-content">
              <div class="tab-container">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#latest" aria-controls="latest" role="tab" data-toggle="tab">Latest</a></li>
                  <li role="presentation"><a href="#near" aria-controls="profile" role="tab" data-toggle="tab">Near me</a></li>
                  <li role="presentation"><a href="#almost" aria-controls="almost" role="tab" data-toggle="tab">Almost There</a></li>
                  <li role="presentation"><a href="#friends" aria-controls="friends" role="tab" data-toggle="tab">My Friends</a></li>
                </ul>

                <!-- Tab panes -->  
                <div class="tab-content" style="margin-top: 20px;">
                  <div role="tabpanel" class="tab-pane fade in active" id="latest">
                    <div class="col-md-4">
                      <div class="panel panel-default">
                          <div class="panel-body">
                            <strong>Donec quam felis</strong>
                            <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                              and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>
                          </div>                          
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="panel panel-default">
                          <div class="panel-body">
                            <strong>Donec quam felis</strong>
                            <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                              and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>
                          </div>                          
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="panel panel-default">
                          <div class="panel-body">
                            <strong>Donec quam felis</strong>
                            <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                              and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>
                          </div>                          
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="panel panel-default">
                          <div class="panel-body">
                            <strong>Donec quam felis</strong>
                            <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                              and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>
                          </div>                          
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="near">
                    sdalfjasldfjsa
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="almost"><h1>Almost</h1></div>
                  <div role="tabpanel" class="tab-pane fade" id="friends"><h1>Friends</h1></div> 
                </div>               
              </div>
            </div>          
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<!--header-->
<body style="background-color:#707070 ;">
  <!--navbar-->
  <style media="screen">
  .navbar{
    border-radius:0px;
    color: white;
    margin-bottom: 75px;
  }
  body{
    background-color: #66757F;
  }
  #blokgri{
    background-color: #dddddd;
  }

  .well{
    color: white;
    border-color: #404040;
    background-color: #404040;
  }
  h3{
    font-size: 2.5em;
    text-align: center;
  }
  textarea {
    resize: none;
  }
  </style>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <style media="screen">

        </style>
        <ul class="nav navbar-nav navbar-right">
          <li><button type="submit" class="btn btn-success " style="margin-top:8px;"><span class="glyphicon glyphicon-user"></span>  Connecter</button></li>


        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!--Fin Navbar-->

  <div class ="row">
    <div class="col-md-6 col-md-offset-3 well">
      <h2 class="text-center">Connectez-vous</h2>
    </div>
    <div class="col-md-6 col-md-offset-3 well  ">
      <div class = "row">
        <div class="col-xs-12">
          <div class="col">
            <div class="col-xs-3 col-md-offset-3">
              <p><label>Identifiant:</label></p>
              <p><label>Mot de passe:</label></p>
            </div>
            <div class="col-xs-3">
              <p><input type="text" name="username" id="name" placeholder="Identifiant"/></p>
              <p><input type="password" name="password" id="password" placeholder="**********"/></p>
              <button type="button" name="button"  class ="btn-primary btn btn-block">Envoyer</button>
            </div>

          </div>
        </div>
      </div>


    <!--footer-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>
</div>

<!DOCTYPE html>

<?php	
	session_start();
	require_once('connect.php');
?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body>
<div class = "bg-img"></div>
<div class = "main-obj">
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar6">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar6">
        </a>
        <ul class="navbar-nav mx-auto">
		 <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          <img class="img-fluid d-block rounded-circle" src="Pic/logo.jpg" style="width:140px;height:140px;"></ul>
      </div>
    </div>
    <ul class="navbar-nav">
      <li class="nav-item"> <a class="nav-link text-dark" href="login.php">Log In</a> </li>
      <li class="nav-item"> <a class="nav-link text-dark" href="sign_up.php">Sign Up</a> </li>
    </ul>
  </nav>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container justify-content-center"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar9">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar9">
        <ul class="navbar-nav">
          <li class="nav-item mx-2"> <a class="nav-link text-light" href="homepage.php">Homepage</a> </li>
          <li class="nav-item mx-2 text-light"> <a class="nav-link text-light" href="journey.php">Journey</a> </li>
		  <li class="nav-item mx-2 text-light"> <a class="nav-link text-light" href="contact.php">Contact Us</a> </li>
        </ul>
      </div>
    </div>
  </nav>
</div


  <br>
  <br>
  <br>
  <div class="py-2" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-6" style="">
          <font size="6"> CONTACT US </font>
          <p class=""><br>Tel: 012 3456789<br><br>Email: traintick@gmail.com<br><br><br><br><br><br><br><br><br>FOLLOW US&nbsp;</p><i class="fa fa-fw fa-twitter fa-2x mx-3" style=""></i><i class="fa fa-fw fa-facebook fa-2x mx-3"></i><i class="fa fa-fw fa-instagram fa-2x mx-3"></i>
        </div>
        <div class="p-3 col-md-6">
          
            <div class="form-group"> <big>Send Us Question</big> </div>
			<form action="contact_us_send.php" method="post">
            <div class="form-group"><label>Email</label> <input class="form-control" type="email" name="Email"> </div>
            <div class="form-group"> <label>Name</label> <input class="form-control" type="text" name="Name"> </div>
            <div class="form-group"> <label>Question</label> <input class="form-control h-30 w-100" type="text" name="Question"> </div> 
			<button type="submit" class="btn mt-4 btn-block btn-outline-dark p-2" href="question"><b>SEND</b></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  
    <br>
  <br>
  <br> 
  <br>
  <br>
  <br>
  <hr>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex align-items-center"> <i class="d-block fa fa-stop-circle fa-2x mr-md-5 text-warning"></i>
          <ul class="nav mx-md-auto d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link active" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-md-between justify-content-center my-2"> <a href="#">
                <i class="d-block fa fa-facebook-official text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
              </a> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mt-2 mb-0" contenteditable="false">© 1993-2018 TrainTick. All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
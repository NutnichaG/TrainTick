<!DOCTYPE html>
<?php
require_once('connect.php');
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="/stylesheets/theme.css" type="text/css">
</head>

<body class="">
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
 
 
  <br>
  <br>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-12 col-10 bg-white p-1">
          <h1 class="lead">Log In</h1>
          <br>
          <h1><?php echo "5555555555555555555555555"?></h1>
<?php
$q = 'SELECT * FROM `studied-bounty-235113.traintick.users`WHERE Email="wichapol@gmail.com" ';
$count=0;
$queryJobConfig=$bigQuery->query($q);
$job = $bigQuery->startQuery($queryJobConfig);
$queryResults = $job->$queryResults();
if ($queryResults->isComplete()){
  foreach ($queryResults as $row){
    ?>

  
    <h1><?php echo $row['First_Name']?></h1>
    
<?php

  }
}
?>

          <form action="homepage.php" method="POST">
            <div class="form-group">
              <label>Email address</label>
              <input type="email" name="email" class="form-control" placeholder="Enter email">
              <small class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="pass" class="form-control" placeholder="Password">
              <small class="form-text text-muted text-right"><a href="forget_p.php" class="text-warning"> Forget your password</a></small>
            </div>
            <input class="btn text-white btn-warning" type="submit" value="Log in"></input>
          </form>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="" style="">
            <div class="form-group">
              <center><label><b>Not a Member?</b></label></center>
            </div>
            <center><a class="btn text-white btn-warning" href="sign_up.php">Sign Up</a></center>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>




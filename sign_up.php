<?php
if (isset($_POST['signup']) and isset($_POST['chk']))
{
	$title = $_POST['title'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$tel = $_POST['tel'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$naid = $_POST['naid'];
	$dob = $_POST['DOB'];
	$role = "User";
	$q = "INSERT INTO users (Title,First_Name,Last_Name,Tel,Address,Email,Password,National_ID,Birth_Date,Role) 
	VALUES('".$title."','".$fname."','".$lname."','".$tel."','".$address."','".$email."','".$pass."','".$naid."','".$dob."','".$role."')";
	echo $q;
	require_once('connect.php');
	if ($mysqli->query($q))
	{
		header("Location: homepage.php");
	}
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
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
  <div class="py-2 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-12 col-10" style="">
          <h1 class="lead">Sign Up</h1>
          <br>
          <form action="sign_up.php" method="POST" class="text-left">
            <div class="form-row">
              <div class="form-group col-md-1" style="">
                <label for="form19">Title</label>
                <select name="title" class="form-control" id="form19">
                  <option value="Mr.">Mr.</option>
                  <option value="Mrs.">Mrs.</option>
                  <option value="Ms.">Ms.</option>
                </select>
				</div>
				<div class="form-group col-md-5" style="">
                <label for="form19">First Name</label>
                <input type="text" name="fname" class="form-control" id="form19" placeholder="First Name">
              </div>
              <div class="form-group col-md-6" style="">
                <label for="form20">Last Name</label>
                <input type="text" name="lname" class="form-control" id="form19" placeholder="Last Name">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="form19">Tel</label>
                <input type="text" name="tel" class="form-control" id="form19" placeholder="081 234 5678">
              </div>
              <div class="form-group col-md-6" style="">
                <div class="form-group">
                  <label for="form19">Address</label>
                  <input type="text" name="address" class="form-control" id="form19" placeholder="Address">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="form19">Email</label>
                <input type="text" name="email" class="form-control" id="form19" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="form20">Confirm Email</label>
                <input type="text" name="email2" class="form-control" id="form20" placeholder="Confirm Email">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="form19">Password</label>
                <input type="password" name="pass" class="form-control" id="form19" placeholder="••••">
              </div>
              <div class="form-group col-md-6">
                <label for="form20">Confirm Password</label>
                <input type="password" name="pass2" class="form-control" id="form20" placeholder="••••">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="form19">National ID</label>
                <input type="text" name="naid" class="form-control" id="form19" placeholder="x xxxx xxxxx xx x">
              </div>
              <div class="form-group col-md-6" style="">
                  <label for="form19">Birthday</label>
                  <input type="date" name="DOB" class="form-control" id="form19">
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="form21" name="chk" value="on"><label class="form-check-label" for="form21"> I Agree with <a class="text-warning" href="#">Term and Conditions</a> of the service </label>
              </div>
            </div>
			<input type="hidden" name="signup" value="signup" >
			<input class="btn text-white btn-warning" type="submit" value="Sign up" >
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="form-group col-md-12">
        </div>
      </div>
    </div>
  </div>
  

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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" style=""></script>
  <label></label>
</body>

</html>
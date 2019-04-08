<?php
	session_start();
	require_once('connect.php');	
	
	$User_ID = $_SESSION['User_ID'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body >
	<nav class="navbar navbar-expand-md navbar-light">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar6">
        <ul class="navbar-nav mx-auto">
		 <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          <img class="img-fluid d-block rounded-circle" src="Pic/logo.jpg" style="width:140px;height:140px;"></ul>
      </div>
    </div>
    <div class="btn-group">
      <button class="btn dropdown-toggle btn-warning text-white" data-toggle="dropdown" contenteditable="false">USER</button>
	  <div class="dropdown-divider"></div> <a class="dropdown-item border-warning" href="noti.php">Notification</a>
      <div class="dropdown-menu"> <a class="dropdown-item border-warning" href="user_p.php">My Profile</a>
        <div class="dropdown-divider"></div> <a class="dropdown-item border-warning" href="history.php">History</a>
        <div class="dropdown-divider"></div> <a class="dropdown-item" href="homepage.php">Log Out</a>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container justify-content-center"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar9">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar9">
        <ul class="navbar-nav">
          <li class="nav-item mx-2"> <a class="nav-link text-light" href="homepage2.php">Homepage</a> </li>
          <li class="nav-item mx-2 text-light"> <a class="nav-link text-light" href="journey2.php">Journey</a> </li>
          <li class="nav-item mx-2 text-light"> <a class="nav-link text-light" href="booking_n.php">Booking</a> </li>
		  <li class="nav-item mx-2 text-light"> <a class="nav-link text-light" href="contact2.php">Contact Us</a> </li>
        </ul>
      </div>
    </div>
  </nav>
 
 
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="navbar-nav">
              <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <li class="nav-item mx-2"><a class="nav-link text-dark" href="#">Select Train</a></li>
              <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <li class="nav-item mx-2" style=""><a class="nav-link text-dark" href="#"> Select Seat</a></li>
              <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <li class="nav-item mx-2"><a class="nav-link text-dark" href="#">Information</a></li>
              <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <li class="nav-item mx-2"><a class="nav-link text-dark" href="#">Payment</a></li>
              <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <li class="nav-item mx-2"><a class="nav-link text-dark" href="#">Ticket</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <form action="payment2.php" method="POST">
  <br>
  <br>
  <br>
  <div class="text-center py-1">
    <div class="container">
      <div class="row">
		<p class="lead" contenteditable="false">Total Cost:&nbsp;&nbsp;<?php echo $_SESSION['payment'];?> </p>
        <div class="col-md-6"></div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tabone" role="tabpanel">
              <div class="row">
                <div class="mx-auto col-lg-6 col-10">
                  <font size="6">Credit Card / Debit Card</font>
                    <div class="form-group"> <input type="text" class="form-control" id="form16" name="Card_Number" placeholder="Card Number"> </div>
                    <div class="form-group"> <input type="text" class="form-control" id="form16" name="Name" placeholder="Card Holder Name"> </div>
                    <div class="form-group"> <input type="text" class="form-control" id="form16" placeholder="CVC/CVV"> </div>
                    <div class="form-group"> <div class="form-check"> <input class="form-check-input" type="checkbox" id="form16" value="on" name="chk"> <label class="form-check-label" for="form16">Accept Term of Service</label> </div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
		<input type="hidden" name="uid" value="<?php echo ($_SESSION['User_ID']) ?>">
		<input type="hidden" name="fname" value="<?php echo ($_SESSION['First_Name']) ?>">
		<input type="hidden" name="lname" value="<?php echo ($_SESSION['Last_Name']) ?>">
		<input type="hidden" name="date" value="<?php echo ($_SESSION['date']) ?>">
		<input type="hidden" name="dest" value="<?php echo ($_SESSION['dest']) ?>">
		<input type="hidden" name="arrt" value="<?php echo ($_SESSION['arrt']) ?>">
		<input type="hidden" name="dest1" value="<?php echo ($_SESSION['dest1']) ?>">
		<input type="hidden" name="dest2" value="<?php echo ($_SESSION['dest2']) ?>">
		<input type="hidden" name="type" value="<?php echo ($_SESSION['type']) ?>">
		<input type="hidden" name="seatno" value="<?php echo ($_SESSION['seatno']) ?>">
		<input type="hidden" name="tid" value="<?php echo ($_SESSION['tid']) ?>">
		<input type="hidden" name="ar" value="<?php foreach($_SESSION['ar'] as $k=>$v) {echo $v." ";} ?>">
		<input type="hidden" name="payment" value="<?php echo ($_SESSION['payment']) ?>">
		  <center><input class="btn m-3 btn-warning text-white" name="pay" type="submit" value="PAY" ></center>
</form>
  
  
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php
session_start();

require_once('connect.php');
                $uid = $_SESSION['User_ID'];
                $q = "SELECT * FROM users WHERE User_ID = $uid";
                $result = $mysqli->query($q);
                if(!$result){
                    echo "Select failed: ".$mysqli->error;
                }
                $urow = $result->fetch_array();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-light">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar6">
        <ul class="navbar-nav mx-auto">
		 <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          <img class="img-fluid d-block rounded-circle" src="Pic/logo.jpg" style="width:140px;height:140px;"></ul>
      </div>
    </div>
    <div class="btn-group">
      <button class="btn dropdown-toggle btn-warning text-white" data-toggle="dropdown" contenteditable="true">ADMIN</button>
      <div class="dropdown-menu"> <a class="dropdown-item border-warning" href="admin_p.php">Admin Profile</a>
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
          <li class="nav-item mx-2"> <a class="nav-link text-light" href="a_booking.php">Booking</a> </li>
          <li class="nav-item mx-2 text-light"> <a class="nav-link text-light" href="user_s.php">User Status</a> </li>
          <li class="nav-item mx-2 text-light"> <a class="nav-link text-light" href="contact.php">Contact from User</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  
  
      <div class="py-5">
    <div class="container">
        <center><div class="col-md-2" style=""><img class="img-fluid d-block rounded-circle" src="Pic/cute.jpg"></div></center>
      </div>
    </div>
  </div>
  <form action="edit_admin_pu.php" method="POST">
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <font size="5">Admin Info<br><br></font>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12" style="">
		  <p contenteditable="false"><font size="3">&nbsp; Name:</p>
		  <input type="text" class="form-control m-2 w-50" name="fname" value="<?=$urow['First_Name']?>" readonly> 		  
		  <p contenteditable="false"><font size="3">&nbsp; Surname:</p>
		  <input type="email" class="form-control m-2 w-50" name="lname" value="<?=$urow['Last_Name']?>" readonly> 		  
		  <p contenteditable="false"><font size="3">&nbsp; Email:</p>
		  <input type="email" class="form-control m-2 w-50" name="email" value="<?=$urow['Email']?>"> 
		  <p contenteditable="false"><font size="3">&nbsp; Password:</p>
		  <input type="password" class="form-control m-2 w-50" name="pass" value="<?=$urow['Password']?>">
		  <p contenteditable="false"><font size="3">&nbsp; National ID:</p>
		  <input type="text" class="form-control m-2 w-50" name="naid" value="<?=$urow['National_ID']?>" readonly> 
          <p contenteditable="false"><font size="3">&nbsp; Birthday:</p>
		  <input type="text" class="form-control m-2 w-50" name="DOB" value="<?=$urow['Birth_Date']?>" readonly> 
		  <p contenteditable="false"><font size="3">&nbsp; Tel:</p>
		  <input type="text" class="form-control m-2 w-50" name="tel" value="<?=$urow['Tel']?>"> 
		  <p contenteditable="false"><font size="3">&nbsp; Address:</p>
		  <input type="text" class="form-control m-2 w-50" name="address" value="<?=$urow['Address']?>">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
		  <center><input class="btn m-3 btn-warning text-white" type="submit" value="CONFIRM"></input></center>
        </div>
      </div>
    </div>
  </div>
  </form>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>



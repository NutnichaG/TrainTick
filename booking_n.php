<!DOCTYPE html>
<?php
session_start();

if($_SESSION['page'] != "northern"){
	$_SESSION['drop1'] = "Departure Station";
	$_SESSION['drop2'] = "Destination Station";
	$_SESSION['drop3'] = "Type";
}
$_SESSION['page'] = "north";

if(isset($_POST['drop1'])){
	$drop1 = $_POST['drop1'];
	$_SESSION['drop1'] = $_POST['drop1'];
}
else
	$drop1 = $_SESSION['drop1'];

if(isset($_POST['drop2'])){
	$drop2 = $_POST['drop2'];
	$_SESSION['drop2'] = $_POST['drop2'];
}
else
	$drop2 = $_SESSION['drop2'];

if(isset($_POST['drop3'])){
	$drop3 = $_POST['drop3'];
	$_SESSION['drop3'] = $_POST['drop3'];
}
else
	$drop3 = $_SESSION['drop3'];


if($drop1 != "Departure Station" and $drop2 != "Destination Station" and $drop3 != "Type"){
	if($drop1 == "Bangkok" and $drop2 != "Bangkok"){
		if(isset($_POST['depart']) and isset($_POST['num']))
			header("Location: s_train.php?d1=".$drop1."&d2=".$drop2."&d3=".$drop3."&d4=".$_POST['depart']."&d5=".$_POST['num']);
	}
	else if($drop1 != "Bangkok" and $drop2 == "Bangkok"){
		if(isset($_POST['depart']) and isset($_POST['num']))
			header("Location: s_train.php?d1=".$drop1."&d2=".$drop2."&d3=".$drop3."&d4=".$_POST['depart']."&d5=".$_POST['num']);
	}
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
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
              <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <li class="nav-item mx-2"><a class="nav-link text-dark" href="booking_n.php"> Northern </a></li>
              <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <li class="nav-item mx-2"><a class="nav-link text-dark" href="booking_ne.php"> NorthEastern </a></li>
              <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <li class="nav-item mx-2"><a class="nav-link text-dark" href="booking_s.php"> Southern </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
<!--- Form --->
 <form action="booking_n.php" method="post" id="form1">
  <center>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="btn-group">
            <select name="drop1" class="btn dropdown-toggle btn-light" data-toggle="dropdown" aria-expanded="false">
				<?php
					$s1 = array("Departure Station","Bangkok","Chiang Mai","Lampang");
					foreach ($s1 as $value) {
							if($_SESSION['drop1']==$value){
								$select = 'selected';
							}
							else{
								$select = '';
							}
						echo '<option value="'.$value.'"'.$select.'>'.$value.'';
					}
				?>
			</select>
            </div>
            <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <div class="btn-group">
              <select name="drop2" class="btn dropdown-toggle btn-light" data-toggle="dropdown" aria-expanded="false">
				<?php
					$s2 = array("Destination Station","Bangkok","Chiang Mai","Lampang");
					foreach ($s1 as $value) {
							if($_SESSION['drop2']==$value){
								$select = 'selected';
							}
							else{
								$select = '';
							}
						echo '<option value="'.$value.'"'.$select.'>'.$value.'';
					}
				?>
			</select>
              </div>
              <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <div class="btn-group">
                <select name="drop3" class="btn dropdown-toggle btn-light" data-toggle="dropdown" aria-expanded="false">
					<?php
						$s3 = array("Type","Seat","Berth");
						foreach ($s3 as $value) {
								if($_SESSION['drop3']==$value){
									$select = 'selected';
								}
								else{
									$select = '';
								}
							echo '<option value="'.$value.'"'.$select.'>'.$value.'';
						}
					?>
				</select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </center>
  <br>
  <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Departure Date&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Number</a>
  <center>
    <div class="container">
      <div class="row-1">
        <div class="btn-group col-md-5">
          <div class="col-md-6" style="">
            <input type="date" name="depart" class="form-control">
          </div>
          <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          <div class="col-md-3" style="">
            <input type="number" name="num" min="1" max="5" class="form-control">          
		  </div>
        </div>
      </div>
    </div>
  </center>
  <center>
    <div class="py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12"><input class="btn text-white btn-warning" type="submit" value="SEARCH"></input></div>    <!--- Button --->
        </div>
      </div>
    </div>
    <br>
  </center>
  </form>
  
  
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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" style=""></script>
</body>

</html>
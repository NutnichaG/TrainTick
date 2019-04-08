<?php
// Start the session
session_start();
$Question_ID=$_SESSION["Question_ID"];
$User_ID = $_SESSION['User_ID'];
$Email=$_POST['Email'];
$First_Name=$_POST['First_Name'];
$Question=$_POST['Question'];
$Answer=$_POST['ans'];

require_once('connect.php');

 $q= "UPDATE question SET User_ID='$User_ID',Answer='$Answer' where Question_ID='$Question_ID';";

$result = $mysqli->query($q);

if(!$result){
	die('ERROR:' .$q." ".$mysqli->error);
}

header("Location: a_contact.php");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	

<body>
</body>
</html>
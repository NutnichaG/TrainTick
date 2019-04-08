<?php

$connect = new mysqli('localhost','root','','traintick');
// Start the session
session_start();

$Email=$_POST['Email'];
$Name=$_POST['Name'];
$Question=$_POST['Question'];
$uid = $_SESSION['User_ID'];
require_once('connect.php');

 $q= "INSERT INTO question (User_ID,Email,First_Name,Question) VALUES('$uid','$Email','$Name','$Question')";

$result = $mysqli->query($q);

if(!$result){
	die('ERROR:' .$q." ".$mysqli->error);
}

header("Location: contact2.php");
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

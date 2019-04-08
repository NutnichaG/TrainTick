<?php
 $User_ID = $_GET['uid'];
 $mysqli = new mysqli('localhost','root','','traintick');
 if($mysqli->connect_errno){
 echo $mysqli->connect_errno.": ".$mysqli->connect_error;
 }
 $q="DELETE FROM users where User_ID=$User_ID";
 if(!$mysqli->query($q)){
echo "DELETE failed. Error: ".$mysqli->error ;
 }
 $mysqli->close();
 //redirect
 header("Location: user_s.php");
?>
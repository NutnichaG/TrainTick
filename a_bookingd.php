<?php
 $Ticket_ID = $_GET['id'];
 $mysqli = new mysqli('localhost','root','','traintick');
 if($mysqli->connect_errno){
 echo $mysqli->connect_errno.": ".$mysqli->connect_error;
 }
$q="DELETE FROM tickets where Ticket_ID=$Ticket_ID";
 if(!$mysqli->query($q)){
echo "DELETE failed. Error: ".$mysqli->error ;
 }
 $mysqli->close();
 //redirect
 header("Location: a_booking.php");
?>
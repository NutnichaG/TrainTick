<?php

	session_start();
	require_once('connect.php');
	
	$Ticket_ID = $_POST['Ticket_ID'];
	$mysqli = new mysqli('localhost','root','','traintick');

	if($mysqli->connect_errno){
	echo $mysqli->connect_errno.": ".$mysqli->connect_error;
	}
	
	$Train_ID = $_POST['Train_ID'];
	$Seat_No = $_POST['Seat_No'];
	$Departure_Time = $_POST['Departure_Time'];
	$Arrival_Time = $_POST['Arrival_Time'];
	$Departure_Station = $_POST['Departure_Station'];
	$Destination_Station = $_POST['Destination_Station'];

    $q = "UPDATE tickets SET Train_ID='$Train_ID', Seat_No='$Seat_No', Departure_Time='$Departure_Time', Arrival_Time='$Arrival_Time', Departure_Station='$Departure_Station', Destination_Station='$Destination_Station' WHERE Ticket_ID=$Ticket_ID";

    if(!$mysqli->query($q)){
        echo "Update failed: ". $mysqli->error;
    }else{
        header("Location: a_booking.php");
    }
?>
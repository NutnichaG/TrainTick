<?php

session_start();
require_once('connect.php');

$uid = $_POST['uid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$date1 = $_POST['date'];
$dest = $_POST['dest'];
$arrt = $_POST['arrt'];
$dest1 = $_POST['dest1'];
$dest2 = $_POST['dest2'];
$type = $_POST['type'];
$seatno = $_POST['seatno'];
$tid = $_POST['tid'];
$ar = $_POST['ar'];
$payment = $_POST['payment'];
$Card_Number = $_POST['Card_Number'];
$Name = $_POST['Name'];

	$q="CALL `insert_payment_ticket`(".$uid.",'".$date1."','".$dest."','".$arrt."','".$dest1."','".$dest2."','".$type."',".$seatno.",".$tid.",'".$ar."',".$payment.",".$Card_Number.",'".$Name."');";
	if(!$mysqli->query($q)){
        echo "Update failed: ". $mysqli->error;
    }else{
        header("Location: ticket.php");
    }
?>

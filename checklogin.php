<?php
session_start();
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	$q ="SELECT * from `studied-bounty-235113.traintick.users`"." WHERE Email='".$email."' and Password='".$pass."' ";

	require_once('connect.php');

	$queryJobConfig = $bigQuery->query($q);
	$job = $bigQuery->startQuery($queryJobConfig);
	$queryResults = $job->queryResults();
	if ($squeryResults -> isComplete()){
	{
		foreach ($queryResults as $row){
		if (
				isset($row['User_ID']) &&
				isset($row['Title']) &&
				isset($row['First_Name']) &&
				isset($row['Last_Name']) &&
				isset($row['Tel']) &&
				isset($row['Address']) &&
				isset($row['Email']) &&
				isset($row['Password']) &&
				isset($row['National_ID']) &&
				isset($row['Birth_Date']) &&
				isset($row['Role']) &&
				$row['DISABLE'] == 0
			)
	
	
			{
				$_SESSION['User_ID'] = $row['User_ID'];
				$_SESSION['Title'] = $row['Title'];
				$_SESSION['First_Name'] = $row['First_Name'];
				$_SESSION['Last_Name'] = $row['Last_Name'];
				$_SESSION['Tel'] = $row['Tel'];
				$_SESSION['Address'] = $row['Address'];
				$_SESSION['Email'] = $row['Email'];
				$_SESSION['Password'] = $row['Password'];
				$_SESSION['National_ID'] = $row['National_ID'];
				$_SESSION['Birth_Date'] = $row['Birth_Date'];
				$_SESSION['Role'] = $row['Role'];
				if($_SESSION['Role'] == 'Admin')
					header("Location: a_booking.php");
				else if($_SESSION['Role'] == 'User')
					header("Location: homepage2.php");
			}
		else
			{
				header("Location: login.php");
			}
		}
		}
	}
	else
	{
		header("Location: login.php");
	}
?>
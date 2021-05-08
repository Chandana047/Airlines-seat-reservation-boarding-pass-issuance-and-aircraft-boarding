<?php
require 'booking_connection.php';
session_start();
if(!isset($_SESSION['uid']))
{
	header('location:loginasrs.php');
}
else {
	if(isset($_POST['add'])){
		$uid=$_SESSION['uid'];
		$p_pnr=$_POST['p_pnr'];
		$check_data1 = mysqli_query($conn, "SELECT uid FROM passenger_details where uid='$uid' && p_pnr='$p_pnr'");
		$check_data2 = mysqli_query($conn, "SELECT uid FROM user_bookings where uid='$uid' && p_pnr='$p_pnr'");
		if(mysqli_num_rows($check_data2) > 0){
			$error= 'You have already added this ticket.';
			header( "location:../pnrinfo.php?error=".$error );
}else{
if (mysqli_num_rows($check_data2) <= 0 && mysqli_num_rows($check_data1) > 0){
		$sql = "INSERT INTO user_bookings (p_pnr, uid) VALUES ('$p_pnr', '$uid')";
		if ($conn->query($sql) === TRUE) {
			$msg = "You have added ticket successfully.";
			header( "location:../pnrinfo.php?msg=".$msg );
		} else {
			$error = "Error: " . $sql . "<br>" . $conn->error;
            header( "location:../pnrinfo.php?error=".$error );
		}
		$conn->close();
	}
	else
	{
		$error= 'Booking does not exist';
			header( "location:../pnrinfo.php?error=".$error );
	}
}
}
}
?>
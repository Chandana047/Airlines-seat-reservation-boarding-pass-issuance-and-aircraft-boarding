<?php
include "booking_connection.php";
    $ubid=$_GET['ubid'];
	$sql = "delete from user_bookings where ubid='$ubid'";
	if (mysqli_query($conn, $sql)) {
	$msg="You have deleted one booking";
	header("location:../pnrinfo.php?msg=".$msg );
    } else {
    $error="Error deleting record: " . mysqli_error($conn);
    header("location:../pnrinfo.php?error=".$error );
    }
    mysqli_close($conn);
?>
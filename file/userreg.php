<?php
if(isset($_POST['uregister'])){
	require 'booking_connection.php';
	$uname=$_POST['uname'];
	$uemail=$_POST['uemail'];
	$upassword=$_POST['upassword'];
	$uphone=$_POST['uphone'];
	$ucity=$_POST['ucity'];
	$allowedExts = array("pdf");
    $temp = explode(".", $_FILES["pdf_file"]["name"]);
    $extension = end($temp);
    $upload_pdf=$_FILES["pdf_file"]["name"];
    $contract_path = "uploades/pdf/$upload_pdf";
    copy($_FILES['pdf_file']['tmp_name'], $contract_path);
	$check_email = mysqli_query($conn, "SELECT uemail FROM user where uemail = '$uemail' ");
	if(mysqli_num_rows($check_email) > 0){
    $error= 'Email Already exists. Please try another Email.';
    header( "location:../register.php?error=".$error );
}else{
	$sql = "INSERT INTO user (uname, uemail, upassword, uphone, ucity, pdf_file)
	VALUES ('$uname','$uemail', '$upassword', '$uphone', '$ucity', '$upload_pdf')";
	if ($conn->query($sql) === TRUE) {
		$msg = "You have successfully registered. Please, login to continue.";
		header( "location:../loginasrs.php?msg=".$msg);
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../register.php?error=".$error );
	}
	$conn->close();
}
}
?>
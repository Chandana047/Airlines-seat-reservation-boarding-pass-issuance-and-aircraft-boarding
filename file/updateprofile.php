<?php 
session_start();
require 'booking_connection.php';
if (isset($_SESSION['uid'])) {
if(isset($_POST['update'])){
    $id=$_SESSION['uid'];
    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $uphone = $_POST['uphone'];
    $ucity = $_POST['ucity'];
    $upassword = $_POST['upassword'];
    $allowedExts = array("pdf");
    $temp = explode(".", $_FILES["pdf_file"]["name"]);
    $extension = end($temp);
    $pdf_file = $_POST['pdf_file'];
    $upload_pdf=$_FILES["pdf_file"]["name"];
    move_uploaded_file($_FILES["pdf_file"]["tmp_name"],"uploads/pdf/" . $_FILES["pdf_file"]["name"]);
    $check_email = mysqli_query($conn, "SELECT uemail FROM user where uemail = '$uemail' ");
    if(mysqli_num_rows($check_email) > 0){
    $error= 'Email Already exists. Please try another Email.';
    header( "location:../rprofile.php?error=".$error );}
    else{
    $update = "UPDATE user SET uname='$uname', uemail='$uemail', upassword='$upassword', uphone='$uphone',ucity='$ucity' WHERE id='$id'";
    if($pdf_file!="")
    {
        $updates = "UPDATE user SET pdf_file='$pdf_file' WHERE id='$id'";
        $conn->query($updates);
    }
    if ($conn->query($update) == TRUE) {
        $msg = "Your profile is updated successfully.";
        header( "location:../rprofile.php?msg=".$msg);
    } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../rprofile.php?error=".$error );
    }
    $conn->close();
}}


}elseif (isset($_SESSION['aaid'])) {
    if(isset($_POST['update'])){
    $id=$_SESSION['aaid'];
    $aid=$_POST["aid"];
    $aname = $_POST['aname'];
    $aemail = $_POST['aemail'];
    $aphone = $_POST['aphone'];
    $acity = $_POST['acity'];
    $apassword = $_POST['apassword'];
    $check_email = mysqli_query($conn, "SELECT aemail,aid FROM agents where aemail = '$aemail' or aid = '$aid'");
    if(mysqli_num_rows($check_email) > 0){
    $error= 'Email or Personal ID Already exists. Please try another Email or another Personal ID.';
    header( "location:../aprofile.php?error=".$error );}
    else{
    $update = "UPDATE agents SET aid='$aid', aname='$aname', aemail='$aemail', apassword='$apassword', aphone='$aphone', acity='$acity' WHERE id='$id'";
    if ($conn->query($update) === TRUE) {
        $msg= "Your profile is updated successfully.";
        header( "location:../aprofile.php?msg=".$msg);
    } else {
        $error= "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../aprofile.php?error=".$error);
    }
    $conn->close();
}}
}else{
    header("location:../loginasrs.php");
}
?>
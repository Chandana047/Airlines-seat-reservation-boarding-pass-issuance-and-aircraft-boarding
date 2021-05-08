<?php 
require_once('database.php');
if(!isset($_SESSION['uid'])){
  header('location:loginasrs.php');
}
if(isset($_SESSION['uid'])){
    $uid=$_SESSION['uid'];
  }
$db = new Database();
$p_class = $_SESSION['accomodation'];

$sql = "select p_class from passenger_details where passenger_details.p_pnr='$p_pnr'";
$p_class = $db->getRow($sql, [$p_class]);


$db->Disconnect();
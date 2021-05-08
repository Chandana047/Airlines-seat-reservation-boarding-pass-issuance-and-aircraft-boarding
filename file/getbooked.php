<?php
require_once('file/database.php');
global $uname;
global $uphone;
global $ucity;
if(!isset($_SESSION['uid'])){
  header('location:loginasrs.php');
}
if(isset($_SESSION['uid'])){
    $uid=$_SESSION['uid'];
  }
$db = new Database();
$uname = $_SESSION['uname']; 
$uphone = $_SESSION['uphone'];
$ucity = $_SESSION['ucity'];

$sqlo = "SELECT uname
		FROM user 
		WHERE id = '$uid';
";
$uname  = $db->getRows($sqlo, [$uname]);

$sqll = "SELECT uphone
		FROM user 
		WHERE id = '$uid';
";
$uphone = $db->getRows($sqll, [$uphone]);

$sqls = "SELECT ucity
		FROM user 
		WHERE id = '$uid';
";
$ucity = $db->getRows($sqls, [$ucity]);

// $return['valid'] = true;
// $return['url'] = "payment.php";

// echo json_encode($return);

$db->Disconnect();
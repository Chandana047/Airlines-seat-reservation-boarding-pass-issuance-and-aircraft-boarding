<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php 
require_once('database.php');
global $p_from;
global $p_to;
global $p_dedate;
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
$p_pnr=$_GET['p_pnr'];
$p_from = $_SESSION['p_from'];
$p_to = $_SESSION['destination'];
$p_dedate = $_SESSION['departure_date'];
$p_detime = $_SESSION['departure_time'];
$p_ardate = $_SESSION['arrival_date'];
$p_artime = $_SESSION['arrival_time'];
$uname = $_SESSION['name']; 
$uphone = $_SESSION['phone'];
$ucity = $_SESSION['city'];

$sqlOrig = "select p_from from passenger_details where passenger_details.p_pnr='$p_pnr'";
$p_from = $db->getRow($sqlOrig, [$p_from]);

$sqlDest = "select p_to from passenger_details where passenger_details.p_pnr='$p_pnr'";
$p_to = $db->getRow($sqlDest, [$p_to]);

$sqlDed = "select p_dedate from passenger_details where passenger_details.p_pnr='$p_pnr'";
$p_dedate = $db->getRow($sqlDed, [$p_dedate]);

$sqlDet = "select p_detime from passenger_details where passenger_details.p_pnr='$p_pnr'";
$p_detime = $db->getRow($sqlDet, [$p_detime]);

$sqlarr = "select p_ardate from passenger_details where passenger_details.p_pnr='$p_pnr'";
$p_ardate = $db->getRow($sqlarr, [$p_ardate]);

$sqlarrt = "select p_artime from passenger_details where passenger_details.p_pnr='$p_pnr'";
$p_artime = $db->getRow($sqlarrt, [$p_artime]);

$sql = "SELECT uname
		FROM user 
		WHERE id = '$uid';
";
$uname  = $db->getRows($sql, [$uname]);

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



$db->Disconnect();
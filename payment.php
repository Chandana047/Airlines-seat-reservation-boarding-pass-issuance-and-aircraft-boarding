<?php
session_start();
require 'file/booking_connection.php';
global $p_from;
global $p_to;
global $p_dedate;
global $uname;
global $uphone;
global $ucity;
if (!isset($_SESSION['uid'])) {
	header('location:loginasrs.php');
}
?>

<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
	<title>ASRS</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="qrcode.js"></script>

</head>

<body style="background-color: lightblue;">

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">ASRS Online Ticketing</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="#">Rerservation
						<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
					</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="Userpage.html"><span class="glyphicon glyphicon-backward"></span> Back To Home</a></li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2>
						<center>PAYMENT INFO</center>
					</h2>
					<br />
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">
								<center>DEPARTURE</center>
							</h3>
						</div>
						<div class="panel-body">
							<strong>
								<i>ASRS Services, Top notch services at your finger tips</i>
								<?php
								$uid = $_SESSION['uid'];
								$p_pnr = $_GET['p_pnr'];
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "airliness";
								$sql = "select p_pnr from passenger_details where passenger_details.p_pnr='$p_pnr'";
								$conn = new mysqli($servername, $username, $password, $dbname);
								$result = mysqli_query($conn, $sql); ?>
								<?php $row = mysqli_fetch_array($result) ?>
								<input id="text" type="hidden" value="<?php echo $row['p_pnr']; ?>" style="width:15%" /><br />
								<div id="qrcode" style="width:100px; height:100px; margin-top:15px; position:relative; right:1px"></div>

								<script type="text/javascript">
									var qrcode = new QRCode(document.getElementById("qrcode"), {
										width: 100,
										right: 200,
										height: 100
									});

									function makeCode() {
										var elText = document.getElementById("text");

										if (!elText.value) {
											alert("Input a text");
											elText.focus();
											return;
										}

										qrcode.makeCode(elText.value);
									}

									makeCode();

									$("#text").
									on("blur", function() {
										makeCode();
									}).
									on("keydown", function(e) {
										if (e.keyCode == 13) {
											makeCode();
										}
									});
								</script>
								<h3>
									<?php require_once('file/depart_from_to.php');
									echo $p_from['p_from'];
									?>
									-
									<?= $p_to['p_to']; ?>

								</h3>
								<p>Departure Date:<?php require_once('file/depart_from_to.php');
													echo $p_dedate['p_dedate'];
													?>
									@<?php require_once('file/depart_from_to.php');
													echo $p_detime['p_detime'];
													?></p>
								<p>Arrival Date:<?php require_once('file/depart_from_to.php');
													echo $p_ardate['p_ardate'];
													?>
									@<?php require_once('file/depart_from_to.php');
													echo $p_artime['p_artime'];
													?></p>
							</strong>
							<strong>Class:
								<?php require_once('file/get_accomodation.php');
								echo $p_class['p_class'];
								?>
							</strong>
						</div>
					</div>

					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">CONTACT INFO</h3>
						</div>
						<div class="panel-body">
							<strong>Booked By:<?php
												$uid = $_SESSION['uid'];
												$p_pnr = $_GET['p_pnr'];
												$servername = "localhost";
												$username = "root";
												$password = "";
												$dbname = "airliness";
												$sql = "select uname from user,passenger_details where passenger_details.p_pnr='$p_pnr' and user.id=passenger_details.uid";
												$conn = new mysqli($servername, $username, $password, $dbname);
												$result = mysqli_query($conn, $sql); ?>
								<?php $row = mysqli_fetch_array($result) ?>
								<?php echo ($row['uname']); ?>
							</strong>
							<br />
							<strong>Contact:<?php
											$uid = $_SESSION['uid'];
											$p_pnr = $_GET['p_pnr'];
											$servername = "localhost";
											$username = "root";
											$password = "";
											$dbname = "airliness";
											$sql = "select uphone from user,passenger_details where passenger_details.p_pnr='$p_pnr' and user.id=passenger_details.uid";
											$conn = new mysqli($servername, $username, $password, $dbname);
											$result = mysqli_query($conn, $sql); ?>
								<?php $row = mysqli_fetch_array($result) ?>
								<?php echo ($row['uphone']); ?>
							</strong>
							<br />
							<strong>Address:<?php
											$uid = $_SESSION['uid'];
											$p_pnr = $_GET['p_pnr'];
											$servername = "localhost";
											$username = "root";
											$password = "";
											$dbname = "airliness";
											$sql = "select ucity from user,passenger_details where passenger_details.p_pnr='$p_pnr' and user.id=passenger_details.uid";
											$conn = new mysqli($servername, $username, $password, $dbname);
											$result = mysqli_query($conn, $sql); ?>
								<?php $row = mysqli_fetch_array($result) ?>
								<?php echo ($row['ucity']); ?>
							</strong>
							<br />
						</div>
					</div>
					<div class="container-fluid">
						<strong>
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							PNR no:
							<?php
							$p_pnr = $_GET['p_pnr'];
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "airliness";
							$sql = "select p_pnr from passenger_details where passenger_details.p_pnr='$p_pnr'";
							$conn = new mysqli($servername, $username, $password, $dbname);
							$result = mysqli_query($conn, $sql); ?>
							<?php $row = mysqli_fetch_array($result) ?>
							<?php echo ($row['p_pnr'] . "<br>"); ?>
							<?php
							$p_pnr = $_GET['p_pnr'];
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "airliness";
							$sql = "select p_name,p_age,p_sex,p_passtype,p_seats,p_extra from passenger_details where passenger_details.p_pnr='$p_pnr'";
							$conn = new mysqli($servername, $username, $password, $dbname);
							$result = mysqli_query($conn, $sql);
							?>
							<table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>
											<center>
												Name
											</center>
										</th>
										<th>
											<center>
												Age
											</center>
										</th>
										<th>
											<center>
												Gender
											</center>
										</th>
										<th>
											<center>
												Class Type
											</center>
										</th>
										<th>
											<center>
												Seat_Id
											</center>
										</th>
										<th>
											<center>
												Extra
											</center>
										</th>
									</tr>
								</thead>
								<div>
									<?php
									if ($result) {
										$row = mysqli_num_rows($result);
										if ($row) { //echo "<b> Total ".$row." </b>";
										} else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Nothing to show.</b>';
									}
									?>
								</div>
								<?php while ($row = mysqli_fetch_array($result)) { ?>
									<tr>
										<td><?php echo ($row['p_name']); ?></td>
										<td><?php echo ($row['p_age']); ?></td>
										<td><?php echo ($row['p_sex']); ?></td>
										<td><?php echo ($row['p_passtype']); ?></td>
										<td><?php echo ($row['p_seats']); ?></td>
										<td><?php echo ($row['p_extra']); ?></td>
									</tr>
									<button onclick="window.print()">Print Ticket</button>

									<!-- <tbody>
						    <?php
									require_once('data/getBooked.php');
									$totalPayment = 0;
									$tracker = '';
									foreach ($bookPass as $bp) :
										$name = $bp['book_name'];
										$name = ucwords($name);
										$price = $bp['acc_price'];
										$totalPayment += $price;
										$tracker = $bp['book_tracker'];
							?>
						    	<tr align="center">
						    		<td><?= $name; ?></td>
						    		<td><?= $bp['book_age']; ?></td>
						    		<td><?= $bp['book_gender']; ?></td>
						    		<td><?= $price; ?></td>
						    	</tr>
						    <?php endforeach; ?>
						    	<tr>
						    		<td></td>
						    		<td></td>
						    		<td align="right"><strong>TOTAL:</strong></td>
						    		<td align="center"><strong><?= $totalPayment; ?></strong></td>
						    	</tr>
						    </tbody> -->
									<strong>- Booked ID: <?= $tracker; ?></strong>
							</table>
							<center>
								<a href="bookings.php" class="btn btn-success">Return Home
									<span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
								</a>
							</center>
					</div>
				</div>
			</div>
		</div>
		
	<?php } ?>
	<div class="col-md-3"></div>
	
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>

</html>
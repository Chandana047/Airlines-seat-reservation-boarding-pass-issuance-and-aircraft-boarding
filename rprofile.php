<?php
require 'file/booking_connection.php';
session_start();
if(!isset($_SESSION['uid']))
{
  header('location:loginasrs.php');
}
else {
	if(isset($_SESSION['uid'])){
		$id=$_SESSION['uid'];
		$sql = "SELECT * FROM user WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	}
}
?>

<!DOCTYPE html>
<html>
<?php $title="ASRS | User Profile"; ?>
<?php require 'head.php';?>
<style>
    body{
    background: url(image/ASR3.jpg) no-repeat center;
    background-size: cover;
    min-height: 0;
    height: 800px;
  }
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
</style>
<body>
	<?php require 'headerasrs.php'; ?>

	<div class="container cont">

		<?php require 'message.php'; ?>

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5" style = "position:relative; right:500px; bottom:5px">
				<div class="card">
					<div class="media justify-content-center mt-1">
						<img src="image/ASR6.png" alt="profile" class="rounded-circle" width="60" height="60">
					</div>
					<div class="card-body">
					   <form action="file/updateprofile.php" method="post">
					   	<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">User Name</label>
						<input type="text" name="uname" value="<?php echo $row['uname']; ?>" class="form-control mb-3" required minlength="3" maxlength="30"  title="Name must be in the size of 3-30 letters">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Email</label>
						<input type="email" name="uemail" value="<?php echo $row['uemail']; ?>" class="form-control mb-3" required pattern=".+@gmail.com"  minlength="13" maxlength="30" title="Format .....@gmail.com">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Password</label>
						<input type="text" name="upassword" value="<?php echo $row['upassword']; ?>" class="form-control mb-3" required minlength="6" title="Password must have more than 6 characters">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Phone Number</label>
						<input type="text" name="uphone" value="<?php echo $row['uphone']; ?>" class="form-control mb-3"  required pattern="[0,6-9]{1}[0-9]{9,11}" title="Ph.number must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">City</label>
						<input type="text" name="ucity" value="<?php echo $row['ucity']; ?>" class="form-control mb-3"  required minlength="3" maxlength="20"  title="City's name must be in the size of 3-20 letters">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">KYC File</label>
						<?php echo $row['pdf_file']; ?>
						<input type="file" name="pdf_file" id="pdf_file" accept="application/pdf">
						<input type="submit" name="update" class="btn btn-block btn-primary" value="Update">
					   </form>
					</div>
					<a href="Userpage.html" class="text-center">Cancel</a><br>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>
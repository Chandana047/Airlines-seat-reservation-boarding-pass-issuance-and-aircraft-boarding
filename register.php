<?php 
session_start();
if (isset($_SESSION['aid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['uid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
body{
    background: url(image/ASR5.jpg) no-repeat center;
    background-size: cover;
    min-height: 0;
    height: 530px;
  }
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
</style>
</head>
<?php $title="ASRS | Register"; ?>
<?php require 'head.php'; ?>
<body>
  <?php include 'headerasrs.php'; ?>

    <div class="container cont">

    <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5" style = "position:relative; right:350px; bottom:20px">
          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#user">User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#agent">Airport agent</a>
              </li>
            </ul>

    <div class="tab-content">

       <div class="tab-pane container active" id="user">

        <form action="file/userreg.php" method="post" enctype="multipart/form-data">
           <input type="text" name="uname" placeholder="Full Name" class="form-control mb-3" required minlength="3" maxlength="30" title="Name must be in the size of 3-30 letters">
          <input type="text" name="ucity" placeholder="City" class="form-control mb-3" required minlength="3" maxlength="20" title="City's name must be in the size of 3-20 letters">
          <input type="tel" name="uphone" placeholder="Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Ph.no must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
          <input type="email" name="uemail" placeholder="Email" class="form-control mb-3" required pattern=".+@gmail.com"  minlength="13" maxlength="30" title="Format .....@gmail.com">
          <input type="password" name="upassword" placeholder="Password" class="form-control mb-3" required minlength="6" title="Password must have more than 6 characters">
          KYC
          <input type="file" name="pdf_file"  id="pdf_file" accept="application/pdf" required>
          <input type="submit" name="uregister" value="Register" class="btn btn-primary btn-block mb-4">
        </form>

       </div>

       <div class="tab-pane container fade" id="agent">

         <form action="file/agentreg.php" method="post" enctype="multipart/form-data">
          <input type="tel" name="aid" placeholder="Personal ID" class="form-control mb-3" required pattern="[A-Z]{3}[0-9]{9}">
         <input type="text" name="aname" placeholder="Name" class="form-control mb-3" required minlength="3"maxlength="30" title="Name must be in the size of 3-30 letters">
          <input type="text" name="acity" placeholder="City" class="form-control mb-3" required minlength="3" maxlength="20" title="City's name must be in the size of 3-20 letters">
          <input type="tel" name="aphone" placeholder="Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Ph.no must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
          <input type="email" name="aemail" placeholder="Email" class="form-control mb-3" required>
          <input type="password" name="apassword" placeholder="Password" class="form-control mb-3" required minlength="6" title="Password must have more than 6 characters">
          <input type="submit" name="aregister" value="Register" class="btn btn-primary btn-block mb-4">
        </form>

       </div>
    </div>
    <a href="loginasrs.php" class="text-center mb-4" title="Click here">Already have account?</a>
</div>
</div>
</div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<?php } ?>
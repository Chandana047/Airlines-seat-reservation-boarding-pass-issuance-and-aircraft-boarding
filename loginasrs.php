<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    body{
    background: url(image/ASR8.jpg) no-repeat center;
    background-size: cover;
    min-height: 0;
    height: 650px;
  }
.login-form{
    position:relative;
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
</style>
</head>
<?php $title="ASRS | Login"; ?>
<?php require 'head.php'; ?>
<body>
  <?php require 'headerasrs.php'; ?>

    <div class="container cont">
      
      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5" style = "position:relative; left:500px">

          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
     <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#user">User</a>
     </li>
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#agent">Airport Agent</a>
      </li>
    </ul>
    <div class="tab-content">
    <div class="tab-pane container fade" id="user">
         <form action="file/userlogin.php" class="login-form" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Email</label>
          <input type="email" name="uemail"class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Password</label>
          <input type="password" name="upassword"class="form-control mb-4">
          <input type="submit" name="ulogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
      </div>
       <div class="tab-pane container active" id="agent">
        <form action="file/agentlogin.php" class="login-form" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Email</label>
          <input type="email" name="aemail"class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Password</label>
          <input type="password" name="apassword"class="form-control mb-4">
          <input type="submit" name="alogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
       </div>
    </div>
    <a href="register.php" class="text-center mb-4" title="Click here">Don't have account?</a>
</div>
</div>
</div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<?php ?>
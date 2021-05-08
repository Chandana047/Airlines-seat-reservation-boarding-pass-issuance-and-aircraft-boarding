<?php 
  require 'file/booking_connection.php';
  session_start();
  if(!isset($_SESSION['uid']))
  {
  header('location:loginasrs.php');
  }
  else {
?>
<!DOCTYPE html>
<html>
<?php $title="ASRS"; ?>
<?php require 'head.php'; ?>
<style>
    body{
    background: url(image/p2.png) no-repeat center;
    background-size: cover;
    min-height: 0;
    height: 100%;
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
          
         <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card">
            <div class="card-header title">Link your ticket by PNR number</div>
        <div class="card-body">
        <form action="file/bookind_add.php" method="post">
          <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" title="click to see">Term & conditions. </a><br>
          <div class="collapse" id="collapseExample">
          I here by confirm that I'm entering correct PNR number.<br><br>
        </div>
          <input type="checkbox" name="condition" value="agree" required> Agree<br><br>
          <input type="text" name="p_pnr" placeholder="PNR Number" class="form-control mb-3" required>
          <input type="submit" name="add" value="Add" class="btn btn-primary btn-block"><br>
          <a href="Userpage.html" class="float-right" title="click here">Cancel</a>
        </form>
         </div>
       </div>
     </div>

<?php   if(isset($_SESSION['uid'])){
    $uid=$_SESSION['uid'];
    $sql = "SELECT * from user_bookings where uid='$uid'";
    $result = mysqli_query($conn, $sql);
  }
  ?>
    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <table class="table table-striped table-responsive">
            <th colspan="4" class="title">User</th>
            <tr>
              <th>#</th>

              <th>PNR number</th>
              <th>Action</th>
            </tr>
            <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Nothing to show.</b>';
            }
            ?>
            </div>
            <?php while($row = mysqli_fetch_array($result)) { ?>
            <tr>
              <td><?php echo ++$counter; ?></td>

              <td><?php echo $row['p_pnr'];?></td>
              <td><a href="file/delete.php?ubid=<?php echo $row['ubid'];?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php } ?>
          </table>
      </div>

   </div>
</div>
<?php require 'footer.php' ?>
</body>
<?php } ?>
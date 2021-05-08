<?php 
session_start();
require 'file/booking_connection.php';
if(!isset($_SESSION['uid'])){
  header('location:loginasrs.php');
}
?>

<!DOCTYPE html>
<html>
<?php $title="ASRS | Bookings"; ?>
<?php require 'head.php'; ?>
<style>
    body{
    
    background-size: cover;
    min-height: 0;
    height: 900px;
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
<?php   if(isset($_SESSION['uid'])){
    $uid=$_SESSION['uid'];
    $sql = "select * from passenger_details,user_bookings where user_bookings.uid='$uid' and passenger_details.p_pnr=user_bookings.p_pnr and p_status='Pending' ";
    $result = mysqli_query($conn, $sql);
  }
  ?>
        <table class="table table-responsive table-striped rounded mb-15">
            <tr><th colspan="17" class="title">Bookings Pending</th></tr>
            <tr>
                <th>#</th>
                <th>PNR</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Plane-Type</th>
                <th>From</th>
                <th>To</th>
                <th>Dep-date</th>
                <th>Arr-Date</th>
                <th>Dep-time</th>
                <th>Arr-time</th>
                <th>Status</th>
                <th>Class</th>
                <th>Pass-type</th>
                <th>Flight-Id</th>
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
                <td><?php echo ++$counter;?></td>
                <td><?php echo ($row['p_pnr']);?></td>
                <td><?php echo ($row['p_name']); ?></td>
                <td><?php echo ($row['p_age']); ?></td>
                <td><?php echo ($row['p_sex']); ?></td>
                <td><?php echo ($row['p_fno']); ?></td>
                <td><?php echo $row['p_from'];?></td>
                <td><?php echo ($row['p_to']); ?></td>
                <td><?php echo ($row['p_dedate']); ?></td>
                <td><?php echo ($row['p_ardate']); ?></td>
                <td><?php echo ($row['p_detime']); ?></td>
                <td><?php echo $row['p_artime'];?></td>
                <td><?php echo ($row['p_status']); ?></td>
                <td><?php echo ($row['p_class']); ?></td>
                <td><?php echo ($row['p_passtype']); ?></td>
                <td><?php echo ($row['p_fid']); ?></td>
                <td><a href="seatlayout.php?p_pnr=<?php echo $row['p_pnr'];?>" class="btn btn-danger">Book seat</a></td>
            </tr>
        <?php } ?>
        </table>
    </div>
    <?php require 'footer.php' ?>
</body>
</html>
<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="image/ASR6.png" width="30" height="30" class="rounded-circle">Airline Seat Reservation System</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['hid'])) { ?>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

        <?php }  else { ?>
  
        <?php } ?>
       </div>
    </div>
</nav>
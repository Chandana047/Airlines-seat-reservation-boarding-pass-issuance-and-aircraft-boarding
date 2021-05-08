<?php
    session_start();
    session_unset();
    session_destroy();
    $msg="You have logged out.";
    header( "location:main.php?msg=".$msg );
?>
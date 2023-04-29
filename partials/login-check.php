<?php
// include ("./config/db.php");
if (!isset($_SESSION['admin'])) { //if user session is not active

    //user is not login in 
    //redirect to login page with this message
    $_SESSION['no-login']="<div class='failed' align='center';>Please login to access Admin Panel</div>";
    //redirect to login page 
    header('location: ../index.php');
} 
?>
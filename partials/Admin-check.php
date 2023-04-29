<?php
    include('../config/db.php');
    
    // $email=$_POST['email'];

    $sql="SELECT email FROM etudiant WHERE email='yassin@gmail.com'";

    $query=mysqli_query($conn,$sql);

    $res=mysqli_num_rows($query);

    if ($res==1){
        $_SESSION['login']="<div class='success'> login success </div>";
        header('location: ../students/Admin-manager.php');
    }else
    echo "error";

?>
<?php
include ("../config/db.php");

if (isset($_POST['submit'])){
    $nom_fil=$_POST['nom_fil'];
    $departement=$_POST['departement'];
    $nb_gr=$_POST['nb_gr'];

    // $password=$_POST['password'];
    
    $sql="UPDATE filiere SET 
    nom_fil='$nom_fil',
    departement='$departement',
    nb_gr='$nb_gr'
    where nom_fil='$nom_fil' ";

    $query_run=mysqli_query($conn, $sql);
    if ($query_run)
    {
        $_SESSION['update']="<div class='success'><span style='font-size:20px;'>&#9989;</span> Filiere $nom_fil a été modifiée avec succès.</div>";
        header('location:' .SITEURL.'students/filiere.php');
    }else{
        $_SESSION['update']="<div class='failed'>Echouée de modifier la filiére $nom_fil, essayer à nouveau.</div>";
        header('location:' .SITEURL.'students/update-filiere.php');
    }
}
?>
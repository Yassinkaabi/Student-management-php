<?php
include ("../config/db.php");
// Check if delete button active, start this 

$nom_fil=$_GET['nom_fil'];


    $sql = "DELETE FROM filiere WHERE nom_fil='$nom_fil'";
    $res = mysqli_query($conn,$sql);
    
// if successful redirect to delete_multiple.php 
if($res==true){
    $_SESSION['delete']="<div class='success'>Filiére a été supprimée avec succès <span style='font-size:30px; color:#222;'>&#10004;</span></div>";
    header('location:'.SITEURL.'students/filiere.php');  
}else {
    $_SESSION['delete']="<div class='failed'>échoué de supprimer la filiére $nom_fil</div>";
    header('location:'.SITEURL.'students/filiere.php');  
}
?>
<?php
include ("../config/db.php");
// Check if delete button active, start this 

$id=$_GET['id'];


    $sql = "DELETE FROM etudiant WHERE id='$id'";
    $res = mysqli_query($conn,$sql);
    
// if successful redirect to delete_multiple.php 
if($res==true){
    $_SESSION['delete']="<div class='success'><span style='font-size:20px;'>&#9989;</span> Etudiant a été supprimée avec succès.</div>";
    header('location:'.SITEURL.'students/Admin-manager.php');  
}else {
    $_SESSION['delete']="<div class='failed'>Echouée a supprimer , essayer à nouveau.</div>";
    header('location:'.SITEURL.'students/Admin-manager.php');  
}
?>
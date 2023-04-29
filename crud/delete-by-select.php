<?php
include ("../config/db.php");
// Check if delete button active, start this 

if(isset($_POST['delete']))
{
    $checkbox = $_POST['checkbox'];
    for($i=0;$i<count($checkbox);$i++){
        $matricule = $checkbox[$i];
        $sql = "DELETE FROM etudiant WHERE matricule='$matricule'";
    $res = mysqli_query($conn,$sql);
    }
// if successful redirect to delete_multiple.php 
if($res){
    $_SESSION['delete']="<div class='success'><span style='font-size:20px;'>&#9989;</span> les élèves $nom ont été supprimés avec succès</div>";
    header('location:'.SITEURL.'students/Admin-manager.php'); 
}else {
    $_SESSION['delete']="<div class='failed'>échoué de suppression</div>";
    echo "Error" ;
}
}

?>
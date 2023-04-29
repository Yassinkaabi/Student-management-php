<?php
include ("../config/db.php");
if (isset($_POST['submit'])){
    $id=$_POST['id'];
    $matricule=$_POST['matricule'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $adresse=$_POST['adresse'];
    $naissance=$_POST['naissance'];
    $filiere=$_POST['filiere'];
    $email=$_POST['email'];
    // $password=$_POST['password'];
    
    $sql1="UPDATE etudiant SET 
    matricule='$matricule',
    nom='$nom',
    prenom='$prenom',
    adresse='$adresse',
    naissance='$naissance',
    filiere='$filiere',
    email='$email'
    -- password='$password'
    where id='$id' ";

    $query_run=mysqli_query($conn, $sql1);
    if ($query_run)
    {
        $_SESSION['update']="<div class='success'><span style='font-size:20px;'>&#9989;</span> Etudiant a a été modifiée avec succès.</div>";
        header('location:' .SITEURL.'students/Admin-manager.php');
    }else{
        $_SESSION['update']="<div class='failed'>Echouée a ajouter, essayer à nouveau.</div>";
        header('location:' .SITEURL.'students/update-student.php');
    }
}
?>
<?php
include("../config/db.php");
if(isset($_POST['envoyer'])){
    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $naissance = $_POST['naissance'];
    $filiere = $_POST['filiere'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql2= "INSERT INTO etudiant (
    matricule,
    nom,
    prenom,
    adresse,
    naissance,
    filiere,
    email,
    password) VALUES (
    '$matricule',
    '$nom',
    '$prenom',
    '$adresse',
    '$naissance',
    '$filiere',
    '$email',
    '$password') ";

// $msg_erreur = "Erreur. Les champs suivants doivent être obligatoirement";
// Vérifier si le champ a une erreur
// if ($_POST['matriucle'] == 1){
// $msg_erreur .= "Vous êtes :<br/>";
// }

$res2=mysqli_query($conn,$sql2);
if($res2==true){
    $_SESSION['add']="<div class='success'><span style='font-size:20px;'>&#9989;</span> Etudiant $nom a été ajouté avec succès </div>";
    header('location:'.SITEURL.'students/Admin-manager.php');
}else{
    $_SESSION['add']="<div class='failed'>échoué d'ajouter $nom</div>";
    header('location:'.SITEURL.'students/Add-student.php');
}
}
?>
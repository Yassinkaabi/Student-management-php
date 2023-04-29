<?php
    include ("../config/db.php");

    if(isset($_POST['envoyer'])){
            
        $nom_fil = $_POST['nom_fil'];
        $departement = $_POST['departement'];
        $nb_gr = $_POST['nb_gr'];

        $sql = "INSERT INTO filiere VALUES (
            '$nom_fil',
            '$departement',
            '$nb_gr')";

    $res = mysqli_query($conn, $sql);
    if($res==true){
        $_SESSION['add']="<div class='success'> Filiére $nom_fil a été ajoutée avec succès <span style='font-size:30px; color:#222;'>&#10004;</span></div>";
        header('location:'.SITEURL.'students/filiere.php');
        exit(0);
    }else{
        $_SESSION['add']="<div class='failed'>échoué d'ajouter $nom_fil filiére </div>";
        header('location:'.SITEURL.'students/Add-filiere.php');
        }
    }
?>
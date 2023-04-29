<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='../css/style.css' >
</head>
<body>
    <div class="confirmation-delete" align='center'>
        <?php
        include("../config/db.php");

        $id = $_GET['id'];
        $sql = "SELECT * FROM etudiant WHERE id=$id";

        $query_run=mysqli_query($conn,$sql);
        // $count = mysqli_num_rows($query_run);
        $rows=mysqli_fetch_assoc($query_run);
        ?>
        <h2 align='center'>Confirmation de suppression</h2>
        <h3 class="confirmation">Vous etes sure de supprimer l'etudiant de matricule <span><?php echo $rows['matricule'] ?></span> et de l'email <span><?php echo $rows['email'] ?></sapn></h3>
        <div class='button-confirmation'>
            <a href="<?php echo SITEURL; ?>students/delete-student.php?id=<?php echo $rows['id']; ?>" class="btn-danger">Supprimer</a>
            <!-- <a href="../students/delete-student.php">Supprimer</a> -->
            <a href="<?php echo SITEURL; ?>students/Admin-manager.php" class="btn-cancel">Annuler</a>
        </div>
    </div>
</body>
</html>
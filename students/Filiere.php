<?php
    include ("../config/db.php");
    include("../partials/header.php");
    include("../partials/login-check.php");

?>

    <main>
        <div class="main">
        <h1>Filiéres</h1>
        <br>
        <?php
                if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                    header("Refresh:3");

                }

                if(isset($_SESSION['delete'])){
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                    header("Refresh:3");

                }

                if(isset($_SESSION['update'])){
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                    header("Refresh:3");

                }
            ?>
            <br>
            <div class="btn">
                <a href="Add-filiere.php" class="btn-primary">Ajoute filiere</a>
            </div>
            <div class="container-admin">
                <table>
                    <tr>
                            <th>Nom filiére</th>
                            <th>Departement</th>
                            <th>Nombre de groupe</th>
                            <th>Action</th>

                    </tr>
                    <?php
                    $sql="SELECT * FROM filiere ";
                    $res=mysqli_query($conn,$sql);
                    $conn->close();
                    ?>
                        <?php 
                        while($ligne=mysqli_fetch_array($res)){
                        ?>
                    <tr class="center-info-admin">
                        <td><?php echo $ligne['nom_fil'] ?></td>
                        <td><?php echo $ligne['departement'] ?></td>
                        <td><?php echo $ligne['nb_gr'] ?> groupes</td>

                        <!-- btn modifier et supprimer  -->
                        <td class="">
                                <a href="<?php echo SITEURL; ?>students/update-filiere.php?nom_fil=<?php echo $ligne['nom_fil']; ?>"" class="btn-secondary">Modifier</a>
                                <a href="<?php echo SITEURL; ?>students/delete-filiere.php?nom_fil=<?php echo $ligne['nom_fil']; ?>" class="btn-danger">Supprimer</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </main>
<?php
    include("../partials/footer.php");
?>
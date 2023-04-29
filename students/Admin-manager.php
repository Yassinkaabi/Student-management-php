<?php
    include ("../config/db.php");
    include("../partials/header.php");
    session_regenerate_id(true);
    include("../partials/login-check.php");
?>

    <main>
        <div class="main">
        <h1>Management etudiant </h1>
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
                if (isset($_SESSION['login'])){
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                    header("Refresh:3");

                }
            ?>
            <div class="btn">
                <a href="Add-student.php" class="btn-primary">Ajoute étudiant</a>
            </div>
            <div class="container-admin">
                <table>
                    <tr>
                            <th>Matricule</th>
                            <th >Nom</th>
                            <th >Prenom</th>
                            <th >Adresse</th>
                            <th class="th-width">Naissance</th>
                            <th class="th-width">Filiére</th>
                            <th class="th-width">Email</th>
                            <th>Action</th>
                            <th>Suppression</th>
                    </tr>
                    <?php
                    $sql="SELECT * FROM etudiant order by id DESC";
                    $res=mysqli_query($conn,$sql);
                    $conn->close();
                    ?>
                    <?php 
                    while($ligne=mysqli_fetch_array($res)){
                    ?>
                    <tr class="center-info-admin">
                        <td align="center" bgcolor="#FFFFFF"><?php echo $ligne['matricule']?></td><br>
                        <td ><?php echo $ligne['nom'] ?></td><br>
                        <td ><?php echo $ligne['prenom'] ?></td><br>
                        <td ><?php echo $ligne['adresse'] ?></td><br>
                        <td ><?php echo $ligne['naissance'] ?></td><br>
                        <td ><?php echo $ligne['filiere'] ?></td><br>
                        <td class=" email"><?php echo $ligne['email'] ?></td>
                        <!-- btn modifier et supprimer  -->
                        <td class="flex-btn">
                                <a href="<?php echo SITEURL; ?>students/update-student.php?id=<?php echo $ligne['id']; ?>"" class="btn-secondary">Modifier</a>
                                <a href="<?php echo SITEURL; ?>crud/confirmation-supp.php?id=<?php echo $ligne['id']; ?>" class="btn-danger">Supprimer</a>
                                
                                <!-- <a onclick="return(confirm('Etes-vous sûr de supprimer le etuduiant de matricule <?php echo $ligne['matricule']; ?> et de nom <?php echo $ligne['nom']; ?> et de prénom <?php echo $ligne['prenom']; ?> &#9940'))" href="<?php echo SITEURL; ?>students/delete-student.php?matricule=<?php echo $ligne['matricule']; ?>" class="btn-danger">Supprimer</a> -->
                        </td>
                        <form action="../crud/delete-by-select.php" method="post">
                        <td align="center" bgcolor="#FFFFFF">
                            <input name="checkbox[]" type="checkbox" value="<?php echo $ligne['matricule']; ?>">
                        </td>
                                <?php
                                }
                                ?>
                            <tr>
                                <td colspan="8"></td>
                                <td>
                                    <button onclick="return(confirm('vous etes sur de supprimer les etudiants'))" type="submit" name='delete' class="btn-danger" >Supprimer</button>
                                </td>
                            </tr>
                        </form>
                </tr>
                </table>
            </div>
        </div>
    </main>
<?php
    include("../partials/footer.php");
?>
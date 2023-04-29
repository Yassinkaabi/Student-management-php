<?php 
    include ("../partials/header.php");
    include ("../config/db.php");
    include("../partials/login-check.php");

?>
<main>
    <div class="main">
        <h1>Ajoute etudiant</h1>
        <div class="formAdd">
            <form  method="POST" action="../crud/Add-student.php" class="formAdd">
                <table class="tbl-add-student">
                    <tr>
                        <td><label for="matricule">Matricule</td>
                        <td><input class="input" type="text" name="matricule" placeholder=" Votre matricule"" required>
                    </td>
                    </tr>
                    <tr>
                        <td><label for="nom">Nom</label> </td>
                        <td><input class="input" type="text" name="nom" placeholder=" Votre nom" required></td>
                    </tr>
                    <tr>
                        <td><label for="prenom">Prénom</label> </td>
                        <td><input class="input" type="text" name="prenom" placeholder=" Votre prenom" required></td>
                    </tr>
                    <tr>
                        <td><label for="adresse">Adresse</label> </td>
                        <td><input class="input" type="text" name="adresse" placeholder=" Votre adresse" required></td>
                    </tr>
                    <tr>
                        <td><label for="naissance">Date de naissance</label> </td>
                        <td><input class="input" type="date" name="naissance" placeholder=" Votre naissance" required></td>
                    </tr>
                    <tr>
                        <td>Filiére : </td>
                        <td>
                            <select name="filiere" class="input cursor">
                            <?php 
                                //Create PHP Code to display categories from Database
                                //1. CReate SQL to get all active categories from database
                                $sql = "SELECT * FROM filiere ";
                                //Executing qUery
                                $res = mysqli_query($conn, $sql);
                                //Count Rows to check whether we have categories or not
                                $count = mysqli_num_rows($res);
                                //IF count is greater than zero, we have Filiere else we donot have filiere
                                if($count>0)
                                {
                                    while($row=mysqli_fetch_assoc($res))
                                    {
                                        $nom_fil = $row['nom_fil'];
                                        ?>
                                        <option value="<?php echo $nom_fil; ?>"><?php echo $nom_fil;?></option>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <option value="0">filiere est vide</option>
                                    <?php
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label> </td>
                        <td><input class="input" type="email" name="email" placeholder=" Votre email" required></td>
                    </tr>
                    <tr>
                        <td><label for="password">Mot de passe</label></td>
                        <td><input class="input" type="password" name="password"  placeholder=" Votre mot de passe" required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="envoyer" value="Ajoute etudiant" class="btn-primary">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </div>
</main>
<?php
    include ("../partials/footer.php");
?>
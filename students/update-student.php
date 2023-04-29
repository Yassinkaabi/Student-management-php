<?php 
include('../config/db.php');
include("../partials/header.php"); 
include("../partials/login-check.php");
?>
<main>
    <div class="main">
        <h1>Modifier etudiant</h1>
        <?php 
            //CHeck whether id is set or not 
                $id = $_GET['id'];
                //SQL Query to Get the Selected Food
                $sql = "SELECT * FROM etudiant WHERE id=$id";
                //execute the Query
                $res = mysqli_query($conn, $sql);

                //Get the value based on query executed
                if ($res==TRUE){
                    $count=mysqli_num_rows($res);
                            if ($count==1){
                                //get the details
                                $rows=mysqli_fetch_assoc($res);
                                $matricule=$rows['matricule'];
                                $nom=$rows['nom'];
                                $prenom=$rows['prenom'];
                                $adresse=$rows['adresse'];
                                $naissance=$rows['naissance'];
                                $current_filiere = $rows['filiere'];
                                $email=$rows['email'];
                                // $password=$rows['password'];
                            }
                }else{
                    header('location' .SITEURL.'index.php');
                }
        ?>
        
        <div class="formAdd">
            <form  method="POST" action="../crud/update-student.php" class="formAdd">  
                <table class="tbl-add">
                <tr>
                        <td>
                            <label for="matricule">Matricule</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="matricule" value='<?php echo $matricule; ?>' required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nom">Nom</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="nom" value='<?php echo $nom; ?>' required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="prenom">Prénom</label> </td>
                        <td><input class="input" type="text" name="prenom" value='<?php echo $prenom; ?>' required></td>
                    </tr>
                    <tr>
                        <td><label for="adresse">Adresse</label> </td>
                        <td><input class="input" type="text" name="adresse" value='<?php echo $adresse; ?>' required></td>
                    </tr>
                    <tr>
                        <td><label for="naissance">Date de naissance</label> </td>
                        <td><input class="input" type="date" name="naissance" value='<?php echo $naissance; ?>'  required></td>
                    </tr>
                    <tr>
                        <td><label for="filiere">Filiére</label> </td>
                    <td>
                        <select name="filiere" class="input cursor">

                            <?php 
                            //Query to Get ACtive Categories
                            $sql = "SELECT * FROM filiere ";
                            //Execute the Query
                            $res = mysqli_query($conn, $sql);
                            //Count Rows
                            $count = mysqli_num_rows($res);

                            //Check whether category available or not
                            if($count>0)
                            {
                                //CAtegory Available
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $nom_fil = $row['nom_fil'];
                                    ?>
                                    <option <?php if($current_filiere==$nom_fil){echo "selected";} ?> value="<?php echo $nom_fil; ?>"><?php echo $nom_fil; ?></option>
                                    <?php
                                }
                            }
                            else
                            {
                                //CAtegory Not Available
                                echo "<option value='0'>Filiere Not Available.</option>";
                            }
                        ?>
                        </select>
                    </td>
                    </tr>
                    
                    <tr>
                        <td><label for="email">email</label></td>
                        <td><input class="input" type="email" name="email" value='<?php echo $email; ?>' placeholder="votre adresse email" required></td>
                    </tr>
                    <!-- <tr>
                        <td><label for="password">Mot de passe</label></td>
                        <td><input class="input" type="password" name="password" placeholder=" Saisir a nouveau le mot de passe" required></td>
                    </tr> -->
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="submit" value="Modifier etudiant" class="btn-secondary">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</main>



<?php include("../partials/footer.php"); ?>
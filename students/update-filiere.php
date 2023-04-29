<?php 
include("../partials/header.php"); 
include('../config/db.php');
?>
<main>
    <div class="main">
        <h1>Modifier Filiére</h1>
        <?php 
            //CHeck whether id is set or not 
                $nom_fil = $_GET['nom_fil'];
                //SQL Query to Get the Selected Food
                $sql1= "SELECT * FROM filiere where nom_fil='$nom_fil'";
                //execute the Query
                // echo $nom_fil;
                $res1 = mysqli_query($conn, $sql1);

                //Get the value based on query executed
                if ($res1==TRUE){
                    $count=mysqli_num_rows($res1);
                            if ($count==1){
                                //get the details
                                $rows=mysqli_fetch_assoc($res1);
                                $nom_fil=$rows['nom_fil'];
                                $departement=$rows['departement'];
                                $nb_gr=$rows['nb_gr'];
                            }
                }else{
                    header('location' .SITEURL.'students/filiere.php.php');
                }
        ?>
        
        <div class="formAdd">
            <form  method="POST" action="../crud/update-filiere.php" class="formAdd" >  
                <table class="tbl-add">
                <tr>
                        <td>
                            <label for="matricule">Nom filiére</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="nom_fil" value='<?php echo $nom_fil; ?>' required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nom">Departement</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="departement" value='<?php echo $departement; ?>' required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="prenom">Nombre de Groupe</label> </td>
                        <td><input class="input" type="text" name="nb_gr" value='<?php echo $nb_gr; ?>' required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="nom_fil" value="<?php echo $nom_fil; ?>">
                            <a href='filiere.php' class="btn-danger">Annuler</a>
                            <input onclick="return(confirm('vous etes sur de modifier cette filiére'))" type="submit" name="submit" value="Modifier filiére" class="btn-secondary">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</main>



<?php include("../partials/footer.php"); ?>
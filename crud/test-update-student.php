<?php 
include("partials/header.php"); 
include('../config/db.php');
?>

<main>
    <div class="main">
        <h1>Modifier etudiant</h1>
        <?php 
                //get the id selector for admin
                $id = $_GET['id'];
                //create sql query to get the details
                $sql = "SELECT * FROM etudiant WHERE id=$id";
                //execute the query 
                    $res=mysqli_query($conn,$sql);
                    //chech the query is executed or not 
                    if ($res==TRUE){
                        $count=mysqli_num_rows($res);
                                if ($count==1){
                                    //get the details
                                    $rows=mysqli_fetch_assoc($res);
                                    $nom=$rows['nom'];
                                    $prenom=$rows['prenom'];
                                    $adresse=$rows['adresse'];
                                    $naissance=$rows['naissance'];
                                    $current_filiere = $rows['filiere'];
                                    $email=$rows['email'];
                                    $password=$rows['password'];
                                }
                    }else{
                        header('location' .SITEURL.'index.php');
                    }
        ?>
        <div class="formAdd">
            <form  method="POST" action="" class="formAdd">
                <table class="tbl-add">
                    <tr>
                        <td>
                            <label for="nom">Nom</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="nom"  placeholder=" votre nom" value = "<?php echo $nom ;?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="prenom">Prénom</label> </td>
                        <td><input class="input" type="text" name="prenom"  placeholder=" Votre prénom" value = "<?php echo $prenom ;?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="adresse">Adresse</label> </td>
                        <td><input class="input" type="text" name="adresse"  placeholder=" Your username" value = "<?php echo $adresse ;?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="naissance">Date de naissance</label> </td>
                        <td><input class="input" type="date" name="naissance"  placeholder=" Your username" value = "<?php echo $naissance ;?>" required></td>
                    </tr>
                    
                    <tr>
                        <td><label for="email">email</label></td>
                        <td><input class="input" type="email" name="email"  placeholder="votre adresse email" value = "<?php echo $email ;?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="password">Mot de passe</label></td>
                        <td><input class="input" type="password" name="password" placeholder=" Saisir a nouveau le mot de passe" required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="id" value = "<?php echo $id ;?>">
                            <input type="submit" name="submit" value="Modifier etudiant" class="btn-secondary">
                        </td>
                    </tr>
                </table>
            </form>

            <?php

if (isset($_POST['submit'])){
    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $adresse=$_POST['adresse'];
    $naissance=$_POST['naissance'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql1="UPDATE etudiant SET 
    nom='$nom',
    prenom='$prenom',
    adresse='$adresse',
    naissance='$naissance',
    email='$email',
    password='$password'
    where id='$id' ";

    $res1=mysqli_query($conn, $sql1);
    if ($res1)
    {
        // $_SESSION['update']="<div class='success'>Admin has been updated.</div>";
        header('location:' .SITEURL.'index.php');
    }else{
        // $_SESSION['update']="<div class='failed'>Admin is not updated, Try again.</div>";
        header('location:' .SITEURL.'students/update-student.php');
    }
}
?>
        </div>
    </div>
</main>

<?php include("partials/footer.php"); ?>
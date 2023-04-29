<?php
    include ("../partials/header.php");
    include ("../config/db.php") ;
    include("../partials/login-check.php");
    
//     if (!isset($_SESSION['user'])){
//         $_SESSION['no-login']="<div class='failed' align='center'>Please login to access Admin Panel</div>";
//         header('location: ../loginPage.php');
// }

?>
<main>
    <div class="main">
        <h1>Ajoute Filiére</h1>
        <div class="formAdd">
            <form  method="POST" action="../crud/Add-filiere.php" class="formAdd">
                <table class="tbl-add-student">
                    <tr>
                        <td><label for="nom_filiere">Nom filiere</td>
                        <td><input class="input" type="text" name="nom_fil" placeholder=" Préciser le nom filiere" required></td>
                    </tr>
                    <tr>
                        <td><label for="departement">Departement</label> </td>
                        <td><input class="input" type="text" name="departement" placeholder=" Préciser le nom de departement" required></td>
                    </tr>
                    <tr>
                        <td><label for="nombre de groupe">Nombre de groupe</label> </td>
                        <td><input class="input" type="number" name="nb_gr" placeholder=" préciser le nombre de groupe" required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="envoyer" value="Ajoute filiére" class="btn-primary">
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
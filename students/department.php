<?php
    include ("../partials/header.php");
    include('../config/db.php');
?>

<main>
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore departement</h2>
            <?php
                $sql = "SELECT * FROM filiere";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $nom_fil = $row['nom_fil'];
                        $departement = $row['departement'];
                        // $nb_gr = $row['nb_gr'];
                        ?>
                        <div class="food-menu-desc">
                            <h5 class="food-price"><?php echo $departement; ?></h5>
                            <a href="<?php echo SITEURL; ?>students/Filiere.php?nom_fil=<?php echo $nom_fil; ?>" class="btn btn-primary">Visite maintenant</a>
                        </div>
                        <?php
                    }
                }
                else
                {
                    //department not Available
                    echo "<div class='error'>Departement not Added.</div>";
                }
            ?>
            <div class="clearfix"></div>
        </div>
    </section>


</main>
<?php
    include ("../partials/footer.php")
?>
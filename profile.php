<?php
    include("config/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="front/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Profile</title>
</head>
<body>
<div class="second-nav">
    <div class="nav-left-second">
        <a class="logo" href='index.php'><img src="front/image/cropped-logo-polytech.png " alt=""></a>
    </div>

    <div class="nav-right-second">
        <li><a href="">NOTRE ÉCOLE</a>
            <!-- <ul class='dropdown'>
                <li><a href="">action</a></li>
                <li><a href="">action</a></li>
                <li><a href="">action</a></li>
                <li><a href="">action</a></li>
            </ul> -->
        </li>
        <li><a href="">Nos Formations</a></li>
        <li><a href="">Admission</a></li>
        <li><a href="">Vie Étudiante</a></li>
        <li><a href="">Recrutement</a></li>
        <li><a href="">Contact</a></li>
    </div>
    <div class="user">
        <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
</div>
<section class="vh-120 " style="background-color: #f4f5f7;">
<?php
                if (isset($_SESSION['login'])){
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                    // header("Refresh:3");
                }
                ?>
    <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <!-- <div class="row g-1"> -->
            <!-- <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="image/dev.jpg" alt="Avatar" class="img-fluid my-5" style="width: 150px; border-radius:8px;" />
              <h5>Marie Horwitz</h5>
              <p>Web Designer</p>
              <i class="far fa-edit mb-5"></i>
            </div> -->
            <div class="col-md-13">
                <?php
                    // $email =$_GET['id'];
                    $email = $_SESSION['user'];
                    $sql="SELECT * FROM etudiant WHERE email='$email'";
                    $res=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_assoc($res);
                    $matricule=$row['matricule'];
                    $nom=$row['nom'];
                    $prenom=$row['prenom'];
                    
                    // echo 'Welcome, ' . $nom .$prenom;
                ?>
              <div class="card-body p-4">
                <h4>Information de <?php echo $row['prenom'] ?>,</h4>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Nom</h6>
                    <p class="text-muted"><?php echo $row['nom'] ;?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Prénom</h6>
                    <p class="text-muted"><?php echo $row['prenom'] ;?></p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Adresse</h6>
                    <p class="text-muted"><?php echo $row['adresse'] ;?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Date de naissance</h6>
                    <p class="text-muted"><?php echo $row['naissance'] ;?></p>
                  </div>
                </div>
                <!-- <h6>Projects</h6> -->
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Matricule</h6>
                    <p class="text-muted"><?php echo $row['matricule'] ;?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Filiére</h6>
                    <p class="text-muted"><?php echo $row['filiere'] ;?></p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<?php
    include("footer.php");
?>
</body>
</html>
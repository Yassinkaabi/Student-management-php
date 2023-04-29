<?php
  include ('config/db.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <!-- logo -->
        <link rel="icon" type="image/png" sizes="16x16"
        href="front/image/cropped-logo-polytech.png">
        <!-- title -->
        <title>Ecole Polytechnique Sousse – école architecture, ingénierie et préparatoire</title>
        <!-- pour le style -->
        
        <link rel="stylesheet" href="front/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      </head>
        <body>
        <header>
            <nav>
                <div class="nav-left">
                    <li class="email-logo"><i class="fa-regular fa-envelope" style="color: edf0f2" ></i><a href="#">contact@polytecsousse.tn</a></li>
                    <li style="color: #edf0f2; font-size: 14px;"><p class="numero">(+216) 99 277 877 - (+216) 96 277 877</p></li>
                </div>
                <div class="nav-right">
                    <li><a class="social-media" href=""><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a class="social-media" href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a class="social-media" href=""><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a class="social-media" href=""><i class="fa-brands fa-instagram"></i></a></li>
                                    <!-- <a class="login" href="./loginPage.php">Login</a> -->
                <!-- <a class="registre" href="registre.php">Registre</a> -->
                    
                <li><a href="loginPage.php">
                  <?php
                          if(isset($_SESSION['admin'])){
                            echo 'Profile';
                          }else{
                            echo 'Espace enseignant';
                          }
                      ?>
                  
                </a></li>
                <li><a  style="color: white;">/</a></li>
                    <li><a href="loginPage.php">
                      <?php
                          if(isset($_SESSION['user'])){
                            echo 'Profile';
                          }else{
                            echo 'Espace étudiant';
                          }
                      ?>
                      </a></li>
                </div>
            </nav>
          </header>
            <div class="second-nav">
                <div class="nav-left-second">
                    <a class="logo" href='#'><img src="front/image/cropped-logo-polytech.png " alt=""></a>
                </div>

                <div class="nav-right-second">
                    <li><a href="">NOTRE ÉCOLE</a>
                        <ul class='dropdown'>
                          <li><a href="">action</a></li>
                          <li><a href="">action</a></li>
                          <li><a href="">action</a></li>
                          <li><a href="">action</a></li>

                        </ul>
                    </li>
                    <li><a href="">Nos Formations</a></li>
                    <li><a href="">Admission</a></li>
                    <li><a href="">Vie Étudiante</a></li>
                    <li><a href="">Recrutement</a></li>
                    <li><a href="">Contact</a></li>
                </div>
            </div>

        <section>
          <div class="edubin-slider-background-overlay">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item ">
                <img style="background: linear-gradient(rgba(30, 30, 33, 0.323),rgba(72, 67, 94, 0.422)), url(front/image/poly-dipolme-2.jpg);background-position: center;background-size: cover;" class="d-block w-100" >
              </div>
              <div class="carousel-item">
                <img style="background: linear-gradient(rgba(30, 30, 33, 0.323),rgba(72, 67, 94, 0.422)), url(front/image/poly-dipolme-3.jpg);background-position: center;background-size: cover;" class="d-block w-100" >
              </div>
              <div class="carousel-item">
                <img style="background: linear-gradient(rgba(30, 30, 33, 0.323),rgba(72, 67, 94, 0.422)), url(front/image/banniere2.jpg);background-position: center;background-size: cover;" class="d-block w-100" >
              </div>
              <div class="carousel-item">
                <img style="background: linear-gradient(rgba(30, 30, 33, 0.323),rgba(72, 67, 94, 0.422)), url(front/image/banniere1.jpg);background-position: center;background-size: cover;" class="d-block w-100" >
              </div>
              <div class="carousel-item">
                <img style="background: linear-gradient(rgba(30, 30, 33, 0.323),rgba(72, 67, 94, 0.422)), url(front/image/poly-dipolme-1.jpg);background-position: center;background-size: cover;" class="d-block w-100" >
              </div>
              <div class="carousel-item active">
                <img style="background: linear-gradient(rgba(30, 30, 33, 0.323),rgba(72, 67, 94, 0.422)), url(front/image/baniere-eurace.jpg);background-position: center;background-size: cover;" class="d-block w-100" >
              </div>
              <div class="carousel-item">
                <img style="background: linear-gradient(rgba(30, 30, 33, 0.323),rgba(72, 67, 94, 0.422)), url(front/image/polytec-banniere-scaled.jpg);background-position: center;background-size: cover;" class="d-block w-100" >
              </div>
              <div class="carousel-item">
                <img style="background: linear-gradient(rgba(30, 30, 33, 0.323),rgba(72, 67, 94, 0.422)), url(front/image/poly-dipolme-1.png);background-position: center;background-size: cover;" class="d-block w-100" >
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          </div>
        </section>
        <section id="inner-section">
          <div class="section-inner-section-caroussel">
            <div class="container-carousel">
              <div class="center-container">
                <div class="title-section">
                  <h1>Le succès commence par un bon choix</h1>
                </div>
                <div class="container-next-pre">
                  <div class="pre-btn">
                    <span><</span>
                  </div>
                  <div class="container-card">
                    <div class="speciality-card" style="background-color: #1C75BC;">
                      <img src="front/image/graduation-hat-150x150.png" width="90" alt="prepaImage">
                      <a href="#">Estim Business School</a>
                    </div>
                    <div class="speciality-card" style="background-color: #F7901E;">
                      <img src="front/image/icone-Ingenieurs-150x150.png" width="90" alt="ingénieurImage">
                      <a href="#">Poly Ingénieurs</a>
                    </div>
                    <div class="speciality-card" style="background-color: #0ED0EA;">
                      <img src="front/image/icone-Preparatoire-150x150.png" width="90" alt="LicenceImage">
                      <a href="#">Poly Licences</a>
                    </div>
                  </div>
                  
                  <div class="next-btn">
                    <span>></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> 
        <section class="section-under-carousel-specialty">
          <div class="elementor-container">
            <div class="description-poly">
              <div class="justify-container">
                <h1>Bienvenue à l'école<br> Polytechnique de<br> Sousse</h1>
                <p>Fondée en 2009, L’Ecole Polytechnique de Sousse est
                  une grande école privée d’enseignement et de recherche
                  à vocation internationale, accréditée EUR- ACE et qui
                  a pour unique vocation de former des ingénieurs ayant
                  un niveau technique et scientifique conforme  aux meilleurs
                  standards internationaux. Elle se fixe résolument comme
                  mission de garantir une excellente insertion professionnelle
                  à ses jeunes diplômés en les propulsant directement
                  à l’employabilité.</p>
                <a href="">Voir plus</a>
              </div>    
            </div>
            <div class="evenement-poly">
              <div class="evenement-container">
                <h1>Nos Événement</h1>
                <div class="even-canada">
                  <p><i class="fa-solid fa-calendar-days"></i> 22. octobre</p>
                  <a href="">TEF / TEF Canada</a>
                  <p><i class="fa-solid fa-clock"></i> 08:00 - 16:00</p>
                </div>
                <div class="ligne"></div>
                <div class="even-symposium">
                  <p><i class="fa-solid fa-calendar-days"></i> 10. september</p>
                  <a href="">Symposium 2021</a>
                  <p><i class="fa-solid fa-clock"></i> 08:00 - 17:00</p>
                </div>
              </div>
            </div>
          </div>
        </section>         
        <section class="section-under-carousel-specialty">
          <div class="elementor-container">
            <div class="description-poly">
              <div class="justify-container">
                <h1>Bienvenue à l'école<br> Polytechnique de<br> Sousse</h1>
                <p>Fondée en 2009, L’Ecole Polytechnique de Sousse est
                  une grande école privée d’enseignement et de recherche
                  à vocation internationale, accréditée EUR- ACE et qui
                  a pour unique vocation de former des ingénieurs ayant
                  un niveau technique et scientifique conforme  aux meilleurs
                  standards internationaux. Elle se fixe résolument comme
                  mission de garantir une excellente insertion professionnelle
                  à ses jeunes diplômés en les propulsant directement
                  à l’employabilité.</p>
                <a href="">Voir plus</a>
              </div>    
            </div>
            <div class="evenement-poly">
              <div class="evenement-container">
                <h1>Nos Événement</h1>
                <div class="even-canada">
                  <p><i class="fa-solid fa-calendar-days"></i> 22. octobre</p>
                  <a href="">TEF / TEF Canada</a>
                  <p><i class="fa-solid fa-clock"></i> 08:00 - 16:00</p>
                </div>
                <div class="ligne"></div>
                <div class="even-symposium">
                  <p><i class="fa-solid fa-calendar-days"></i> 10. september</p>
                  <a href="">Symposium 2021</a>
                  <p><i class="fa-solid fa-clock"></i> 08:00 - 17:00</p>
                </div>
              </div>
            </div>
          </div>
        </section>  
        <section class="section-under-carousel-specialty">
          <div class="elementor-container">
            <div class="description-poly">
              <div class="justify-container">
                <h1>Bienvenue à l'école<br> Polytechnique de<br> Sousse</h1>
                <p>Fondée en 2009, L’Ecole Polytechnique de Sousse est
                  une grande école privée d’enseignement et de recherche
                  à vocation internationale, accréditée EUR- ACE et qui
                  a pour unique vocation de former des ingénieurs ayant
                  un niveau technique et scientifique conforme  aux meilleurs
                  standards internationaux. Elle se fixe résolument comme
                  mission de garantir une excellente insertion professionnelle
                  à ses jeunes diplômés en les propulsant directement
                  à l’employabilité.</p>
                <a href="">Voir plus</a>
              </div>    
            </div>
            <div class="evenement-poly">
              <div class="evenement-container">
                <h1>Nos Événement</h1>
                <div class="even-canada">
                  <p><i class="fa-solid fa-calendar-days"></i> 22. octobre</p>
                  <a href="">TEF / TEF Canada</a>
                  <p><i class="fa-solid fa-clock"></i> 08:00 - 16:00</p>
                </div>
                <div class="ligne"></div>
                <div class="even-symposium">
                  <p><i class="fa-solid fa-calendar-days"></i> 10. september</p>
                  <a href="">Symposium 2021</a>
                  <p><i class="fa-solid fa-clock"></i> 08:00 - 17:00</p>
                </div>
              </div>
            </div>
          </div>
        </section>  
    </body>
</html>
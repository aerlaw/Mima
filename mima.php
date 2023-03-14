<!DOCTYPE html>
<html lang="fr" id="home">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1253beb9d2.js" crossorigin="anonymous"></script>

    <title>Mima</title>
</head>

<body>
    <!-- Header -->
    <div class="topnav">
        <a href="#home" id="A">Mima</a>
        <a href="#">Tissus Unis</a>
        <a href="#">Tissus à Carreaux</a>
        <a href="#">Tissus à Motif</a>
        <a href="mailto:mima0525@orange.fr?Subject= Contacted by Mima's Website">Acheter</a>            
    </div>

    <header class="mt-5">
        <h1 id="pres_title" class="mt-3">Bienvenue dans la Boutique Mima, votre fournisseur de tissu de qualité</h1>
        <div id="header_grid" class="mt-5">
            <img id="pres_img" src="img/pres.webp" alt="image d'une machine à coudre">
            <div id="pres_txt">Créer en 2004, l'atelier Mima est une institution pour tout créateur de vêtements, designeur, styliste qui se veut être à la mode. Depuis son lancement, Julijana, la gérante, se démène pour fournir tout le temps une qualité irréprochable à ses clients afin de garentir la qualité Made In France que leurs clients aiment tant. L'atelier Mima à vu et à aider à batir les plus grands noms de la mode d'aujourd'hui tels que: Jacquemus, Marie Labarelle, Barbara Lang et tant d'autres.</div>
        </div>
    </header>

    <!-- End Header -->

    <!-- Slideshow -->

    <div id="carouselExampleCaptions" class="carousel slide mt-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/jacquemus.png" class="d-block w-100 ss_img" alt="slideshow 1 | Jacquemus">
                        <div class="carousel-caption d-none d-md-block mt-5">
                            <p>Started in 2011</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/elsa.png" class="d-block w-100 ss_img" alt="slideshow 2 | Elsa Esturgie">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Started in 2009</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/barbara.png" class="d-block w-100 ss_img" alt="slideshow 3 | Barbara Lang">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Started in 2007</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/adn.png" class="d-block w-100 ss_img" alt="slideshow 4 | ADN">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>

    <!-- End Header -->
    <div class="title">Nos tissus</div>
    <div class="tissu">
    <?php 
        include 'connexion.php';
        $stmt = $conn->prepare('SELECT * FROM mima order by id asc');
        $stmt->execute();
        if($stmt->rowCount() > 0) {
            while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row); ?>
        <!-- Card Section -->
        <div class="card">
            <div class="card-inner">
                <img src="tissu/<?php echo $row['file']?>" class="card-img-top" alt="image tissu">
                <div class="card-body">
                    <p><?php echo $metrage ?> m</p>
                    <h5 class="card-title"><?php echo $name ?></h5>
                    <p class="card-text"><?php echo $description ?></p>
                    <button class="btn btn-primary bouton">Afficher en détails</button>
                </div>
            </div>
        </div>
    <?php
            }
        }
    ?>
    </div>
    <!-- End card section-->

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <h3>Mima Development</h3>
            <ul class="socials">
                <li><a href="https://www.instagram.com/latelier.julie/?hl=fr"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/julijana.vicentijevic"><i class="fa fa-facebook"></i></a></li>
                <li><a href="mailto:mima0525@orange.fr?Subject= Contacted by Mima's Website"><i class="fa fa-envelope"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <div class="footer_end text-center"><a href="https://github.com/aerlaw">Milan V. | Aerlaw</a></div>
            <div class="footer_end text-center">&copy; 2023 - All rights reserved</div>
        </div>

    </footer>
    <!-- End Footer -->
</body>

</html>
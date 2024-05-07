<?php
require ('./private/init.php');

$result = index_variables();
$data = array();

while($row = mysqli_fetch_assoc($result)) {
    $data = $row;
}

include (SHARED_PATH . 'indexHeader.php');
?>

<div class="Landing">
    <nav class="navbar fixed-top navbar-expand-md navbar-light bg-faded">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <?php echo $data["navbar_title"]; ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="about.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $data["about_us"]; ?>

                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg">
                            <div class="row">
                                <div class="col-md-6 m-3">
                                    <li><a class="dropdown-item" href="about.php">Nuestra historia</a></li>
                                    <li><a class="dropdown-item" href="about.php">Misión y visión</a></li>
                                    <li><a class="dropdown-item" href="about.php">Nuestra comunidad</a></li>
                                    <li><a class="dropdown-item" href="about.php">Valores</a></li>
                                    <li><a class="dropdown-item" href="about.php">Responsabilidad social </a></li>
                                    <li><a class="dropdown-item" href="about.php">Compromiso </a></li>
                                </div>
                                <div class="col-md-6 m-3 ">
                                    <li><a class="dropdown-item dropdown-item-small" href="about.php">Equipo</a>
                                    </li>
                                    <li><a class="dropdown-item dropdown-item-small" href="about.php">Filosofía</a>
                                    </li>
                                    <li><a class="dropdown-item dropdown-item-small"
                                            href="about.php">Reconocimientos</a></li>
                                    <li><a class="dropdown-item dropdown-item-small" href="about.php">Premios y
                                            logros</a></li>
                                    <li><a class="dropdown-item dropdown-item-small" href="about.php">Colaboraciones</a>
                                    </li>
                                    <li><a class="dropdown-item dropdown-item-small" href="about.php">Patrocinios</a>
                                    </li>
                                    <li><a class="dropdown-item dropdown-item-small" href="about.php">Productos</a>
                                    </li>
                                    <li><a class="dropdown-item dropdown-item-small" href="about.php">Servicios</a>
                                    </li>
                                    <li><a class="dropdown-item dropdown-item-small" href="about.php">Eventos</a>
                                    </li>
                                    <li><a class="dropdown-item dropdown-item-small" href="about.php">Competiciones</a>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <?php echo $data["home"]; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="individual.php">
                            <?php echo $data["individual"]; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutPage.php">
                            <?php echo $data["archive"]; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">
                            <?php echo $data["contact"]; ?>
                        </a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link btn btn-transparent" href="JoinUs.php">
                            <?php echo $data["get_started"]; ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <style>
        .nav-item:hover .dropdown-menu {
            display: block;
        }
    </style>


    <script>
        window.addEventListener('scroll', function () {
            var navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-black');
            } else {
                navbar.classList.remove('bg-black');
            }
        });
    </script>


    <div class="container mainTitle">
        <div class="row justify-content-center mainTitle">
            <div class="col text-center">
                <h1 class="display-4">
                    <?php echo $data["main_title1"]; ?>
                </h1>
                <h1 class="display-4 MasterPiece">
                    <?php echo $data["main_title2"]; ?>
                </h1>
            </div>
        </div>
    </div>

    <div class="container mainPar">
        <div class="row">
            <div class="col-12">
                <p class="text-center">
                    <?php echo $data["main_paragraph"]; ?>
                </p>
            </div>
        </div>
        <div class="row justify-content-center pb-15  boton-join-us">
            <div class="col-auto">
                <a href="joinUs.php" class="btn btn-dark">
                    <?php echo $data["join_us"]; ?>
                </a><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
    <div class="FondoBlanco">
        <div class="row">
            <div class="col text-center">
                <h1>
                    <?php echo $data["ultimate_equipment"]; ?>
                </h1>
            </div>
        </div>
        <div class="container CardsPies">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $data["card1_image"]; ?>" class="d-block w-100 card-img-top" alt="...">
                            </div>

                            <div class="carousel-item">
                                <img src="<?php echo $data["fotoCarrusel1"]; ?>" class="d-block w-100 card-img-top" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $data["card2_image"]; ?>" class="d-block w-100 card-img-top" alt="...">
                            </div>

                            <div class="carousel-item">
                                <img src="<?php echo $data["fotoCarrusel2"]; ?>" class="d-block w-100 card-img-top" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div id="carousel3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $data["card3_image"]; ?>" class="d-block w-100 card-img-top" alt="...">
                            </div>

                            <div class="carousel-item">
                                <img src="<?php echo $data["fotoCarrusel3"]; ?>" class="d-block w-100 card-img-top" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel3"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel3"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="container CardsPar">
            <div class="row justify-content-center">
                <div class="col">
                    <p class="text-center">
                        <?php echo $data["cards_paragraph"]; ?>
                    </p>
                </div>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-auto">
                    <a href="joinUs.php"><button type="button" class="btn btn-dark">
                            <?php echo $data["join_us"]; ?>
                        </button></a>
                </div>
            </div>
        </div>
        <div class="FondoVerde">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-4">
                        <div class="contenedor">
                            <p class="texto-vertical">
                                <?php echo $data["contact"]; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 iconos">
                        <div class="contenedor">
                            <p><i class="fa-solid fa-phone"></i>
                                <?php echo $data["phone_number"]; ?>
                            </p>
                            <p><i class="fa-regular fa-envelope"></i>
                                <?php echo $data["email_address"]; ?>
                            </p>
                            <p><i class="fa-regular fa-message"></i> <a href="mailto:<?php echo $data["email_address"]; ?>">
                                    <?php echo $data["email_address"]; ?>
                                </a></p>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-4">
                        <div class="contenedor ImgVerde">
                            <img src="<?php echo $data["green_background_image"]; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="aboutus">
            <div class="container-fluid">
                <div class="row position-relative">
                    <div class="col-6 position-relative">
                        <img src="<?php echo $data["about_image1"]; ?>" alt="">
                    </div>
                    <div class="col-6">
                        <img src="<?php echo $data["about_image2"]; ?>" alt="">
                    </div>
                    <div class="position-absolute top-50 start-50 translate-middle justify-content-center">
                        <h1>
                            <?php echo $data["about_title"]; ?>
                        </h1>
                        <p class="bg-transparent justify-content-center ">
                            <?php echo $data["about_paragraph"]; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include (SHARED_PATH . 'footer.php');
        ?>

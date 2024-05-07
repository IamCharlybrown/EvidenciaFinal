<?php
require ('./private/init.php');

$result = about_variables();

while ($row = mysqli_fetch_assoc($result)) {
    $navbar_title = $row["navbar_title"];
    $about_us = $row["about_us"];
    $home = $row["home"];
    $individual = $row["individual"];
    $archive = $row["archive"];
    $contact = $row["contact"];
    $get_started = $row["get_started"];
    $ruta_imagen_hombre = $row["ruta_imagen_hombre"];
    $ruta_imagen_mujer = $row["ruta_imagen_mujer"];
    $texto_rectangulo1 = $row["texto_rectangulo1"];
    $texto_rectangulo2 = $row["texto_rectangulo2"];
    $texto_rectangulo3 = $row["texto_rectangulo3"];
}

include (SHARED_PATH . 'aboutHeader.php');
?>

<nav class="navbar fixed-top navbar-expand-md navbar-light bg-black">
    <div class="container-fluid">
        <a class="m-2
             navbar-brand" href="index.php">
            <?php echo $navbar_title; ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="about.php">
                        <?php echo $about_us; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <?php echo $home; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="individual.php">
                        <?php echo $individual; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutPage.php">
                        <?php echo $archive; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">
                        <?php echo $contact; ?>
                    </a>
                </li>
                <li class="nav-item ml-auto">
                    <a class="nav-link btn btn-transparent" href="JoinUs.php">
                        <?php echo $get_started; ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </div>
</nav>
</div>
</div>
</div>
<!-- Contenido Principal -->
<div class="container-fluid mt-4">
    <div class="row">
        <div id="rect1" class="col colored-background rect1">
            <!-- Primer rectángulo -->
            <div class="row">
                <div class="col-md-5 d-flex align-items-center">
                    <div>
                        <h2 class="text-light welcome" class="welcome">
                            <?php ;
                            echo $texto_rectangulo1; ?></h2>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <img src="<?php include 'php/datos.php';
                    echo $ruta_imagen_hombre; ?>" class="img-fluid"
                        alt="Hombre">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Segundo rectángulo con color verde -->
        <div id="rect2" class="col colored-background rect2">
            <div class="row">
                <div class="col-md-3 mb-3 colored-background square1 d-flex align-items-center justify-content-center">
                    <h2 class="rotated-text"><?php ;
                    echo $texto_about; ?></h2>
                </div>
                <div
                    class="col-md-6 mb-3 colored-background rectangle d-flex align-items-center justify-content-center">
                    <p class="larger-text"><?php ;
                    echo $texto_rectangulo2; ?></p>
                </div>
                <div class="col-md-3 mb-3 colored-background square2"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="rect3" class="col colored-background rect3">
            <!-- Tercer rectángulo con color azul -->
            <div class="row">
                <div class="col-md-6 ms-auto">
                    <img src="<?php ;
                    echo $ruta_imagen_mujer; ?>" class="img-fluid" alt="Mujer">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <p class="text-light larger-text"><?php ;
                    echo $texto_rectangulo3; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include (SHARED_PATH . 'footer.php');
?>
<?php
require ('./private/init.php');

$result = individual_variables();

while ($row = mysqli_fetch_assoc($result)) {
    $navbar_title = $row['navbar_title'];
    $about_us = $row['about_us'];
    $home = $row['home'];
    $individual = $row['individual'];
    $archive = $row['archive'];
    $contact = $row['contact'];
    $get_started = $row['get_started'];
    $imagen = $row['imagen'];
    $titulo = $row['titulo'];
    $descripcion = $row['descripcion'];
    $precio = $row['precio'];
    $car = $row['car'];
}

include (SHARED_PATH . 'individualHeader.php');

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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-5 my-auto">
           
            <img src="<?php echo $imagen; ?>" class="img-fluid Tabla" alt="Tabla">
        </div>
        <div class="col-md-6 text-dark text-start">
            <div class="d-flex flex-column align-items-center" style="height: 100vh;">
                <h1 style="margin-top: 10vw;"><?php echo $titulo; ?></h1>
                <p style="margin-top: 3vw;" class="parrafo">
                    <?php echo $descripcion; ?>
                </p>
                <div id="textoImagenContainer">
                    <div id="contenedorEstrella">
                        <img src="imagenes/estrella.png" alt="Estrella" id="estrella">
                    </div>
                    <p id="precioTexto" class="precio">$<?php echo $precio; ?></p>
                    <button type="button" class="btn btn-dark" id="agregarCarritoBtn"><?php echo $car; ?></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include (SHARED_PATH . 'footer.php');
?>
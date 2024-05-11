<?php
require ('./private/init.php');

$result = menu_data();


$aboutData = about_page_variables();
$aboutRow = mysqli_fetch_assoc($aboutData);
$main_title = $aboutRow['main_title'];
$right_image = $aboutRow['right_image'];
$navbar_title = $aboutRow['navbar_title'];
$about_us = $aboutRow['about_us'];
$home = $aboutRow['home'];
$individual = $aboutRow['individual'];
$archive = $aboutRow['archive'];
$contact = $aboutRow['contact'];
$get_started = $aboutRow['get_started'];

include (SHARED_PATH . 'aboutPageHeader.php');
?>

<nav class="navbar fixed-top navbar-expand-md navbar-light bg-black">
    <div class="container-fluid"> 
        <a class="m-2 navbar-brand" href="index.php">
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
</nav>
</div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <br><br><br><br>
            <h1 class="text-center">
                <?php echo $main_title; ?>
            </h1><br>

            <div class="row row-cols-1 row-cols-md-3 justify-content-center">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-md-4 mb-3">
                        <div class="card mx-auto" style="width: 250px;">
                            <a href="#">
                                <img src="<?php echo $row['img']; ?>" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">
                                    <?php echo $row['nombre']; ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <br>

        </div>
        <div class="col-lg-4 d-none d-lg-block mt-5 pt-5 justify-content-center fixed-image">
            <img class="imagen_surfista img-fluid" src="<?php echo $right_image; ?>" alt="">
        </div>
    </div>
</div>

<?php
// Incluir el pie de página
include (SHARED_PATH . 'footer.php');
?>

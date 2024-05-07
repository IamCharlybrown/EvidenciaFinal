<?php
require ('./private/init.php');

$result = about_page_variables();

$row = mysqli_fetch_assoc($result);

$main_title = $row['main_title'];
$image1 = $row['image1'];
$product1 = $row['product1'];
$image2 = $row['image2'];
$product2 = $row['product2'];
$image3 = $row['image3'];
$product3 = $row['product3'];
$image4 = $row['image4'];
$product4 = $row['product4'];
$image5 = $row['image5'];
$product5 = $row['product5'];
$image6 = $row['image6'];
$product6 = $row['product6'];
$right_image = $row['right_image'];
$navbar_title = $row['navbar_title'];
$about_us = $row['about_us'];
$home = $row['home'];
$individual = $row['individual'];
$archive = $row['archive'];
$contact = $row['contact'];
$get_started = $row['get_started'];


include (SHARED_PATH . 'aboutPageHeader.php');
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

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <br><br><br><br>
            <h1 class="text-center">
                <?php echo $main_title; ?>
            </h1><br>

            <div class="row row-cols-1 row-cols-md-3 justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card mx-auto" style="width: 250px;">
                        <a href="Wetsuite.php">
                            <img src="<?php echo $image1; ?>" class="card-img-top" alt="...">
                        </a>


                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <?php echo $product1; ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card mx-auto" style="width: 250px;">
                        <a href="#">
                            <img src="<?php echo $image2; ?>" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <?php echo $product2; ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card mx-auto" style="width: 250px;">
                        <a href="#">
                            <img src="<?php echo $image3; ?>" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <?php echo $product3; ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card mx-auto" style="width: 250px;">
                        <a href="#">
                            <img src="<?php echo $image4; ?>" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <?php echo $product4; ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card mx-auto" style="width: 250px;">
                        <a href="#">
                            <img src="<?php echo $image5; ?>" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <?php echo $product5; ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card mx-auto" style="width: 250px;">
                        <a href="#">
                            <img src="<?php echo $image6; ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <?php echo $product6; ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <br>

        </div>
        <div class="col-lg-4 d-none d-lg-block mt-5 pt-5 justify-content-center fixed-image">
            <img class="imagen_surfista img-fluid" src="<?php echo $right_image; ?>" alt="">
        </div>
    </div>
</div>
<?php
include (SHARED_PATH . 'footer.php');
?>
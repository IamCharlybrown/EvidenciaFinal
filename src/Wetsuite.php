<?php
require ('./private/init.php');

$result = wetsuites_data();
$data = array();

while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

include (SHARED_PATH . 'aboutPageHeader.php');
?>
<?php include_once ("php/datos.php"); ?>
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
        <div class="col-lg-8">
            <br><br><br><br>
            <h1 class="text-center">
                <?php echo $main_title_wetsuites; ?>
            </h1><br>

            <div class="row row-cols-1 row-cols-md-3 justify-content-center">
                <?php foreach ($data as $row): ?>
                <div class="col-md-4 mb-3">
                    <div class="card mx-auto" style="width: 250px;">
                        <a href="#">
                            <img src="<?php echo $row['img']; ?>" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <?php echo $row['nombre_wetsuite']; ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <br>

        </div>
        <div class="col-lg-4 d-none d-lg-block mt-5 pt-5 justify-content-center fixed-image">
            <img class="imagen_surfista img-fluid" src="<?php echo $wetside; ?>" alt="">
        </div>
    </div>
</div>

<?php
include (SHARED_PATH . 'footer.php');
?>

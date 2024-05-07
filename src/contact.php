<?php
require ('./private/init.php');

$result = contact_variables();
$row = mysqli_fetch_assoc($result);
$navbar_title = $row['navbar_title'];
$about_us = $row['about_us'];
$home = $row['home'];
$individual = $row['individual'];
$archive = $row['archive'];
$contact = $row['contact'];
$get_started = $row['get_started'];
$image_sufista = $row['image_sufista'];
$title_meet_us = $row['title_meet_us'];
$phone_icon = $row['phone_icon'];
$phone_number = $row['phone_number'];
$envelope_icon = $row['envelope_icon'];
$email = $row['email'];
$message_icon = $row['message_icon'];
$email_address = $row['email_address'];
$title_pitch_us = $row['title_pitch_us'];
$pitch_text = $row['pitch_text'];


include (SHARED_PATH . 'contactHeader.php');
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
        <div class="col-12 p-0 m-0 justify-content-center">
            <img id="FotoSurfista" src="<?php echo $image_sufista; ?>" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 cuadrado1">
            <h1>
                <?php echo $title_meet_us; ?>
            </h1><br>
            <p><i class="<?php echo $phone_icon; ?>"></i>
                <?php echo $phone_number; ?>
            </p>
            <br>
            <p><i class="<?php echo $envelope_icon; ?>"></i>
                <?php echo $email; ?>
            </p>
            <br>
            <p><i class="<?php echo $message_icon; ?>"></i> <a href="">
                    <?php echo $email_address; ?>
                </a></p>
        </div>
        <div class="col-lg-4 cuadrado2">

        </div>
        <div class="col-lg-4 cuadrado3">
            <h1>
                <?php echo $title_pitch_us; ?>
            </h1><br>
            <p>
                <?php echo $pitch_text; ?>
            </p>
        </div>
    </div>
</div>


</body>

</html>
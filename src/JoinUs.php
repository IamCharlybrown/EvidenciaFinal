<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Css/JoinUs.css">
    <title>Document</title>
</head>

<body>
    <?php include_once ("php/datos.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar fixed-top navbar-expand-md navbar-light bg-black">
                    <div class="container-fluid">
                        <a class="m-2
             navbar-brand" href="index.php">
                            <?php echo $navbar_title; ?>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
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
    <div class="container justify-content-center CenterDiv">
        <div class="row">
            <div class="col">
                <div class="form-container">
                    <h2 class="mb-4 text-center">Vamos a empezar!!</h2>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="terms">
                            <label class="form-check-label" for="terms">Acepto los términos y condiciones</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Crear cuenta</button>
                    </form>
                </div>
            </div>
        </div>

</body>

</html>
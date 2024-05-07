<?php require_once('../private/init.php'); ?>


<?php include(SHARED_PATH . '/aboutheader.php'); ?>

<div class="container py-5">
    <div class="row">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Panel de Administración</h1>
            </header>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Administrar Página Principal</h5>
                    <p class="card-text">Administra los contenidos de la página principal.</p>
                    <a href="index_edit.php" class="btn btn-primary">Acceder</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Administrar Página Acerca de Nosotros</h5>
                    <p class="card-text">Administra los contenidos de la página "Acerca de Nosotros".</p>
                    <a href="about_edit.php" class="btn btn-primary">Acceder</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Administrar Página de Individual</h5>
                    <p class="card-text">Administra los contenidos de la página de Individual.</p>
                    <a href="individual_edit.php" class="btn btn-primary">Acceder</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Administrar Página Contacto</h5>
                    <p class="card-text">Administra los contenidos de la página de contacto.</p>
                    <a href="contact_edit.php" class="btn btn-primary">Acceder</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Administrar Menu</h5>
                    <p class="card-text">Administra los contenidos de la página del Menu.</p>
                    <a href="aboutPage_edit.php" class="btn btn-primary">Acceder</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Administrar Wetsuites</h5>
                    <p class="card-text">Administra los contenidos de la página de Wetsuites.</p>
                    <a href="../crud\indexProduct.php" class="btn btn-primary">Acceder</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>

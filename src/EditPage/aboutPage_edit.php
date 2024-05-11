<?php
require ('../private/init.php');

$result = aboutPage_data();
$data = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $navbar_title = $_POST['navbar_title'];
    $about_us = $_POST['about_us'];
    $home = $_POST['home'];
    $individual = $_POST['individual'];
    $archive = $_POST['archive'];
    $contact = $_POST['contact'];
    $get_started = $_POST['get_started'];
    $main_title = $_POST['main_title'];
    $right_image = $_POST['right_image'];

    // Actualizar los campos que no son productos ni imágenes de productos
    $result = update_aboutPage($navbar_title, $about_us, $home, $individual, $archive, $contact, $get_started, $main_title, $right_image);

    header("Location: {$_SERVER['REQUEST_URI']}");
    exit;
}

include (SHARED_PATH . 'aboutPageHeader.php');
?>

<div class="container py-5">
  <div class="row">
    <div class="col">
      <header class="py-3 bg-danger text-center text-white">
        <h1 class="mb-0">Panel de Administración</h1>
      </header>
      <a href="../EditPage/index.php"><button class="btn btn-warning px-5 my-3">Regresar</button></a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <form method="post">
        <div class="form-group">
          <label for="navbar_title" class="fw-semibold fs-5">Título de la barra de navegación</label>
          <input type="text" class="form-control" id="navbar_title" name="navbar_title"
            value="<?= $data['navbar_title'] ?>">
        </div>
        <div class="form-group">
          <label for="about_us" class="fw-semibold fs-5">Sobre Nosotros</label>
          <textarea class="form-control" id="about_us" name="about_us"><?= $data['about_us'] ?></textarea>
        </div>
        <div class="form-group">
          <label for="home" class="fw-semibold fs-5">Título de la página principal</label>
          <input type="text" class="form-control" id="home" name="home" value="<?= $data['home'] ?>">
        </div>
        <div class="form-group">
          <label for="individual" class="fw-semibold fs-5">Título de la página individual</label>
          <input type="text" class="form-control" id="individual" name="individual" value="<?= $data['individual'] ?>">
        </div>
        <div class="form-group">
          <label for="archive" class="fw-semibold fs-5">Título de la página de archivo</label>
          <input type="text" class="form-control" id="archive" name="archive" value="<?= $data['archive'] ?>">
        </div>
        <div class="form-group">
          <label for="contact" class="fw-semibold fs-5">Título de la página de contacto</label>
          <input type="text" class="form-control" id="contact" name="contact" value="<?= $data['contact'] ?>">
        </div>
        <div class="form-group">
          <label for="get_started" class="fw-semibold fs-5">Texto del botón 'Empezar'</label>
          <input type="text" class="form-control" id="get_started" name="get_started"
            value="<?= $data['get_started'] ?>">
        </div>
        <div class="form-group">
          <label for="main_title" class="fw-semibold fs-5">Título principal</label>
          <input type="text" class="form-control" id="main_title" name="main_title" value="<?= $data['main_title'] ?>">
        </div>
        <div class="form-group">
          <label for="right_image" class="fw-semibold fs-5">Imagen de la derecha</label>
          <input type="text" class="form-control" id="right_image" name="right_image"
            value="<?= $data['right_image'] ?>">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary m-3">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
include (SHARED_PATH . 'footer.php');
?>

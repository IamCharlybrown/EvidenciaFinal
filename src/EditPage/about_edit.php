<?php
require ('../private/init.php');

$result = about_data();
$data = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $navbar_title = $_POST['navbar_title'];
  $about_us = $_POST['about_us'];
  $home = $_POST['home'];
  $individual = $_POST['individual'];
  $archive = $_POST['archive'];
  $contact = $_POST['contact'];
  $get_started = $_POST['get_started'];
  $texto_rectangulo1 = $_POST['texto_rectangulo1'];
  $ruta_imagen_hombre = $_POST['ruta_imagen_hombre'];
  $texto_about = $_POST['texto_about'];
  $texto_rectangulo2 = $_POST['texto_rectangulo2'];
  $ruta_imagen_mujer = $_POST['ruta_imagen_mujer'];
  $texto_rectangulo3 = $_POST['texto_rectangulo3'];

  $result = update_about($navbar_title, $about_us, $home, $individual, $archive, $contact, $get_started, $texto_rectangulo1, $ruta_imagen_hombre, $texto_about, $texto_rectangulo2, $ruta_imagen_mujer, $texto_rectangulo3);

  header("Location: {$_SERVER['REQUEST_URI']}");
  exit;
}


include (SHARED_PATH . 'aboutHeader.php');
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
          <label for="texto_rectangulo1" class="fw-semibold fs-5">Texto del rectángulo 1</label>
          <textarea class="form-control" id="texto_rectangulo1"
            name="texto_rectangulo1"><?= $data['texto_rectangulo1'] ?></textarea>
        </div>
        <div class="form-group">
          <label for="ruta_imagen_hombre" class="fw-semibold fs-5">Ruta de la imagen del hombre</label>
          <input type="text" class="form-control" id="ruta_imagen_hombre" name="ruta_imagen_hombre"
            value="<?= $data['ruta_imagen_hombre'] ?>">
        </div>
        <div class="form-group">
          <label for="texto_about" class="fw-semibold fs-5">Texto Acerca de Nosotros</label>
          <textarea class="form-control" id="texto_about" name="texto_about"><?= $data['texto_about'] ?></textarea>
        </div>
        <div class="form-group">
          <label for="texto_rectangulo2" class="fw-semibold fs-5">Texto del rectángulo 2</label>
          <textarea class="form-control" id="texto_rectangulo2"
            name="texto_rectangulo2"><?= $data['texto_rectangulo2'] ?></textarea>
        </div>
        <div class="form-group">
          <label for="ruta_imagen_mujer" class="fw-semibold fs-5">Ruta de la imagen de la mujer</label>
          <input type="text" class="form-control" id="ruta_imagen_mujer" name="ruta_imagen_mujer"
            value="<?= $data['ruta_imagen_mujer'] ?>">
        </div>
        <div class="form-group">
          <label for="texto_rectangulo3" class="fw-semibold fs-5">Texto del rectángulo 3</label>
          <textarea class="form-control" id="texto_rectangulo3"
            name="texto_rectangulo3"><?= $data['texto_rectangulo3'] ?></textarea>
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
<?php
require ('../private/init.php');

$result = individual_data();
$data = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $result = individual_data();
  $data = mysqli_fetch_assoc($result);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $navbar_title = $_POST['navbar_title'];
    $about_us = $_POST['about_us'];
    $home = $_POST['home'];
    $individual = $_POST['individual'];
    $archive = $_POST['archive'];
    $contact = $_POST['contact'];
    $get_started = $_POST['get_started'];
    $imagen = $_POST['imagen'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $car = $_POST['car'];


    $result = update_individual($navbar_title, $about_us, $home, $individual, $archive, $contact, $get_started, $imagen, $titulo, $descripcion, $precio, $car);

    header("Location: {$_SERVER['REQUEST_URI']}");
  }
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
        <div class="form-group fw-semibold fs-5">
          <label for="navbar_title">Título de la barra de navegación</label>
          <input type="text" class="form-control" id="navbar_title" name="navbar_title"
            value="<?= $data['navbar_title'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="about_us">Sobre Nosotros</label>
          <textarea class="form-control" id="about_us" name="about_us"><?= $data['about_us'] ?></textarea>
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="home">Título de la página principal</label>
          <input type="text" class="form-control" id="home" name="home" value="<?= $data['home'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="individual">Título de la página individual</label>
          <input type="text" class="form-control" id="individual" name="individual" value="<?= $data['individual'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="archive">Título de la página de archivo</label>
          <input type="text" class="form-control" id="archive" name="archive" value="<?= $data['archive'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="contact">Título de la página de contacto</label>
          <input type="text" class="form-control" id="contact" name="contact" value="<?= $data['contact'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="get_started">Texto del botón 'Empezar'</label>
          <input type="text" class="form-control" id="get_started" name="get_started"
            value="<?= $data['get_started'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="imagen">Imagen</label>
          <input type="text" class="form-control" id="imagen" name="imagen" value="<?= $data['imagen'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="titulo">Título</label>
          <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $data['titulo'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="descripcion">Descripción</label>
          <textarea class="form-control" id="descripcion" name="descripcion"><?= $data['descripcion'] ?></textarea>
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="precio">Precio</label>
          <input type="text" class="form-control" id="precio" name="precio" value="<?= $data['precio'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="car">Car</label>
          <input type="text" class="form-control" id="car" name="car" value="<?= $data['car'] ?>">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
include (SHARED_PATH . 'footer.php');
?>
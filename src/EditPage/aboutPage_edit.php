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
  $image1 = $_POST['image1'];
  $product1 = $_POST['product1'];
  $image2 = $_POST['image2'];
  $product2 = $_POST['product2'];
  $image3 = $_POST['image3'];
  $product3 = $_POST['product3'];
  $image4 = $_POST['image4'];
  $product4 = $_POST['product4'];
  $image5 = $_POST['image5'];
  $product5 = $_POST['product5'];
  $image6 = $_POST['image6'];
  $product6 = $_POST['product6'];
  $right_image = $_POST['right_image'];


  $result = update_aboutPage($navbar_title, $about_us, $home, $individual, $archive, $contact, $get_started, $main_title, $image1, $product1, $image2, $product2, $image3, $product3, $image4, $product4, $image5, $product5, $image6, $product6, $right_image);

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
          <label for="image1" class="fw-semibold fs-5">Imagen 1</label>
          <input type="text" class="form-control" id="image1" name="image1" value="<?= $data['image1'] ?>">
        </div>
        <div class="form-group">
          <label for="product1" class="fw-semibold fs-5">Producto 1</label>
          <input type="text" class="form-control" id="product1" name="product1" value="<?= $data['product1'] ?>">
        </div>
        <div class="form-group">
          <label for="image2" class="fw-semibold fs-5">Imagen 2</label>
          <input type="text" class="form-control" id="image2" name="image2" value="<?= $data['image2'] ?>">
        </div>
        <div class="form-group">
          <label for="product2" class="fw-semibold fs-5">Producto 2</label>
          <input type="text" class="form-control" id="product2" name="product2" value="<?= $data['product2'] ?>">
        </div>
        <div class="form-group">
          <label for="image3" class="fw-semibold fs-5">Imagen 3</label>
          <input type="text" class="form-control" id="image3" name="image3" value="<?= $data['image3'] ?>">
        </div>
        <div class="form-group">
          <label for="product3" class="fw-semibold fs-5">Producto 3</label>
          <input type="text" class="form-control" id="product3" name="product3" value="<?= $data['product3'] ?>">
        </div>
        <div class="form-group">
          <label for="image4" class="fw-semibold fs-5">Imagen 4</label>
          <input type="text" class="form-control" id="image4" name="image4" value="<?= $data['image4'] ?>">
        </div>
        <div class="form-group">
          <label for="product4" class="fw-semibold fs-5">Producto 4</label>
          <input type="text" class="form-control" id="product4" name="product4" value="<?= $data['product4'] ?>">
        </div>
        <div class="form-group">
          <label for="image5" class="fw-semibold fs-5">Imagen 5</label>
          <input type="text" class="form-control" id="image5" name="image5" value="<?= $data['image5'] ?>">
        </div>
        <div class="form-group">
          <label for="product5" class="fw-semibold fs-5">Producto 5</label>
          <input type="text" class="form-control" id="product5" name="product5" value="<?= $data['product5'] ?>">
        </div>
        <div class="form-group">
          <label for="image6" class="fw-semibold fs-5">Imagen 6</label>
          <input type="text" class="form-control" id="image6" name="image6" value="<?= $data['image6'] ?>">
        </div>
        <div class="form-group">
          <label for="product6" class="fw-semibold fs-5">Producto 6</label>
          <input type="text" class="form-control" id="product6" name="product6" value="<?= $data['product6'] ?>">
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
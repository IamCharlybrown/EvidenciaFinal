<?php
require ('../private/init.php');

$result = main_index_data();
$data = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $navbar_title = $_POST['navbar_title'];
  $about_us = $_POST['about_us'];
  $home = $_POST['home'];
  $individual = $_POST['individual'];
  $archive = $_POST['archive'];
  $contact = $_POST['contact'];
  $get_started = $_POST['get_started'];
  $main_title1 = $_POST['main_title1'];
  $main_title2 = $_POST['main_title2'];
  $main_paragraph = $_POST['main_paragraph'];
  $join_us = $_POST['join_us'];
  $ultimate_equipment = $_POST['ultimate_equipment'];
  $card1_image = $_POST['card1_image'];
  $fotoCarrusel1 = $_POST['fotoCarrusel1'];
  $card2_image = $_POST['card2_image'];
  $fotoCarrusel2 = $_POST['fotoCarrusel2'];
  $card3_image = $_POST['card3_image'];
  $fotoCarrusel3 = $_POST['fotoCarrusel3'];
  $cards_paragraph = $_POST['cards_paragraph'];
  $phone_number = $_POST['phone_number'];
  $email_address = $_POST['email_address'];
  $green_background_image = $_POST['green_background_image'];
  $about_image1 = $_POST['about_image1'];
  $about_image2 = $_POST['about_image2'];
  $about_title = $_POST['about_title'];
  $about_paragraph = $_POST['about_paragraph'];

  $result = update_main_index($navbar_title, $about_us, $home, $individual, $archive, $contact, $get_started, $main_title1, $main_title2, $main_paragraph, $join_us, $ultimate_equipment, $card1_image, $fotoCarrusel1, $card2_image, $fotoCarrusel2, $card3_image, $fotoCarrusel3, $cards_paragraph, $phone_number, $email_address, $green_background_image, $about_image1, $about_image2, $about_title, $about_paragraph);

  header("Location: {$_SERVER['REQUEST_URI']}");
  exit;
}


include (SHARED_PATH . 'indexHeader.php');
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
          <label for="main_title1">Título principal 1</label>
          <input type="text" class="form-control" id="main_title1" name="main_title1"
            value="<?= $data['main_title1'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="main_title2">Título principal 2</label>
          <input type="text" class="form-control" id="main_title2" name="main_title2"
            value="<?= $data['main_title2'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="main_paragraph">Párrafo principal</label>
          <textarea class="form-control" id="main_paragraph"
            name="main_paragraph"><?= $data['main_paragraph'] ?></textarea>
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="join_us">Texto 'Únete a nosotros'</label>
          <input type="text" class="form-control" id="join_us" name="join_us" value="<?= $data['join_us'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="ultimate_equipment">Equipo definitivo</label>
          <input type="text" class="form-control" id="ultimate_equipment" name="ultimate_equipment"
            value="<?= $data['ultimate_equipment'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="card1_image">Imagen de la tarjeta 1</label>
          <input type="text" class="form-control" id="card1_image" name="card1_image"
            value="<?= $data['card1_image'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="fotoCarrusel1">Imagen del carrusel 1</label>
          <input type="text" class="form-control" id="fotoCarrusel1" name="fotoCarrusel1"
            value="<?= $data['fotoCarrusel1'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="card2_image">Imagen de la tarjeta 2</label>
          <input type="text" class="form-control" id="card2_image" name="card2_image"
            value="<?= $data['card2_image'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="fotoCarrusel2">Imagen del carrusel 2</label>
          <input type="text" class="form-control" id="fotoCarrusel2" name="fotoCarrusel2"
            value="<?= $data['fotoCarrusel2'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="card3_image">Imagen de la tarjeta 3</label>
          <input type="text" class="form-control" id="card3_image" name="card3_image"
            value="<?= $data['card3_image'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="fotoCarrusel3">Imagen del carrusel 3</label>
          <input type="text" class="form-control" id="fotoCarrusel3" name="fotoCarrusel3"
            value="<?= $data['fotoCarrusel3'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="cards_paragraph">Párrafo de las tarjetas</label>
          <textarea class="form-control" id="cards_paragraph"
            name="cards_paragraph"><?= $data['cards_paragraph'] ?></textarea>
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="phone_number">Número de teléfono</label>
          <input type="text" class="form-control" id="phone_number" name="phone_number"
            value="<?= $data['phone_number'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="email_address">Dirección de correo electrónico</label>
          <input type="text" class="form-control" id="email_address" name="email_address"
            value="<?= $data['email_address'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="green_background_image">Imagen de fondo verde</label>
          <input type="text" class="form-control" id="green_background_image" name="green_background_image"
            value="<?= $data['green_background_image'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="about_image1">Imagen de Acerca de Nosotros 1</label>
          <input type="text" class="form-control" id="about_image1" name="about_image1"
            value="<?= $data['about_image1'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="about_image2">Imagen de Acerca de Nosotros 2</label>
          <input type="text" class="form-control" id="about_image2" name="about_image2"
            value="<?= $data['about_image2'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="about_title">Título de Acerca de Nosotros</label>
          <input type="text" class="form-control" id="about_title" name="about_title"
            value="<?= $data['about_title'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="about_paragraph">Párrafo de Acerca de Nosotros</label>
          <textarea class="form-control" id="about_paragraph"
            name="about_paragraph"><?= $data['about_paragraph'] ?></textarea>
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
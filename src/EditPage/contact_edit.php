<?php
require ('../private/init.php');

$result = contact_data();
$data = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $navbar_title = $_POST['navbar_title'];
  $about_us = $_POST['about_us'];
  $home = $_POST['home'];
  $individual = $_POST['individual'];
  $archive = $_POST['archive'];
  $contact = $_POST['contact'];
  $get_started = $_POST['get_started'];
  $image_sufista = $_POST['image_sufista'];
  $title_meet_us = $_POST['title_meet_us'];
  $phone_icon = $_POST['phone_icon'];
  $phone_number = $_POST['phone_number'];
  $envelope_icon = $_POST['envelope_icon'];
  $email = $_POST['email'];
  $message_icon = $_POST['message_icon'];
  $email_address = $_POST['email_address'];
  $title_pitch_us = $_POST['title_pitch_us'];
  $pitch_text = $_POST['pitch_text'];

  $result = update_contact($navbar_title, $about_us, $home, $individual, $archive, $contact, $get_started, $image_sufista, $title_meet_us, $phone_icon, $phone_number, $envelope_icon, $email, $message_icon, $email_address, $title_pitch_us, $pitch_text);


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
          <label for="image_sufista">Imagen del surfista</label>
          <input type="text" class="form-control" id="image_sufista" name="image_sufista"
            value="<?= $data['image_sufista'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="title_meet_us">Título 'Conócenos'</label>
          <input type="text" class="form-control" id="title_meet_us" name="title_meet_us"
            value="<?= $data['title_meet_us'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="phone_icon">Ícono de teléfono</label>
          <input type="text" class="form-control" id="phone_icon" name="phone_icon" value="<?= $data['phone_icon'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="phone_number">Número de teléfono</label>
          <input type="text" class="form-control" id="phone_number" name="phone_number"
            value="<?= $data['phone_number'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="envelope_icon">Ícono de sobre</label>
          <input type="text" class="form-control" id="envelope_icon" name="envelope_icon"
            value="<?= $data['envelope_icon'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="email">Correo electrónico</label>
          <input type="text" class="form-control" id="email" name="email" value="<?= $data['email'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="message_icon">Ícono de mensaje</label>
          <input type="text" class="form-control" id="message_icon" name="message_icon"
            value="<?= $data['message_icon'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="email_address">Dirección de correo electrónico</label>
          <input type="text" class="form-control" id="email_address" name="email_address"
            value="<?= $data['email_address'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="title_pitch_us">Título 'Convéncenos'</label>
          <input type="text" class="form-control" id="title_pitch_us" name="title_pitch_us"
            value="<?= $data['title_pitch_us'] ?>">
        </div>
        <div class="form-group fw-semibold fs-5">
          <label for="pitch_text">Texto de convencimiento</label>
          <textarea class="form-control" id="pitch_text" name="pitch_text"><?= $data['pitch_text'] ?></textarea>
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
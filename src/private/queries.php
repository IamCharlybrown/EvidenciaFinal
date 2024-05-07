<?php

function index_variables()
{
  global $db;
  $sql = "SELECT * FROM main_index";
  return mysqli_query($db, $sql);
}

function about_variables()
{
  global $db;
  $sql = "SELECT * FROM about";
  return mysqli_query($db, $sql);
}

function individual_variables()
{
  global $db;
  $sql = "SELECT * FROM individual";
  return mysqli_query($db, $sql);
}

function contact_variables()
{
  global $db;
  $sql = "SELECT * FROM contact";
  return mysqli_query($db, $sql);
}

function about_page_variables()
{
  global $db;
  $sql = "SELECT * FROM about_page";
  return mysqli_query($db, $sql);
}

function wetsuites_data()
{
  global $db;
  $sql = "SELECT * FROM wetsuite_products";
  return mysqli_query($db, $sql);
}

function nuevo_wetsuite($wetsuite, $img)
{
  global $db;
  $sql = "INSERT INTO wetsuite_products (nombre_wetsuite, img) VALUES ('$wetsuite', '$img')";
  return mysqli_query($db, $sql);
}

function wetsuite_id($id)
{
  global $db;
  $sql = "SELECT * FROM wetsuite_products WHERE id=$id";
  return mysqli_query($db, $sql);
}

function actualizar_wetsuite($id, $nombre_wetsuite, $img)
{
  global $db;
  $sql = "UPDATE wetsuite_products SET nombre_wetsuite ='$nombre_wetsuite', img='$img' WHERE id=$id";
  return mysqli_query($db, $sql);
}

function eliminar_wetsuite($id)
{
  global $db;
  $sql = "DELETE FROM wetsuite_products WHERE id=$id";
  return mysqli_query($db, $sql);
}

function main_index_data()
{
  global $db;
  $sql = "SELECT * FROM main_index";
  return mysqli_query($db, $sql);
}

function update_main_index($navbar_title, $about_us, $home, $individual, $archive, $contact, $get_started, $main_title1, $main_title2, $main_paragraph, $join_us, $ultimate_equipment, $card1_image, $fotoCarrusel1, $card2_image, $fotoCarrusel2, $card3_image, $fotoCarrusel3, $cards_paragraph, $phone_number, $email_address, $green_background_image, $about_image1, $about_image2, $about_title, $about_paragraph)
{
  global $db;
  $sql = "UPDATE main_index SET 
          navbar_title='$navbar_title', 
          about_us='$about_us', 
          home='$home', 
          individual='$individual', 
          archive='$archive', 
          contact='$contact', 
          get_started='$get_started', 
          main_title1='$main_title1', 
          main_title2='$main_title2', 
          main_paragraph='$main_paragraph', 
          join_us='$join_us', 
          ultimate_equipment='$ultimate_equipment', 
          card1_image='$card1_image', 
          fotoCarrusel1='$fotoCarrusel1', 
          card2_image='$card2_image', 
          fotoCarrusel2='$fotoCarrusel2', 
          card3_image='$card3_image', 
          fotoCarrusel3='$fotoCarrusel3', 
          cards_paragraph='$cards_paragraph', 
          phone_number='$phone_number', 
          email_address='$email_address', 
          green_background_image='$green_background_image', 
          about_image1='$about_image1', 
          about_image2='$about_image2', 
          about_title='$about_title', 
          about_paragraph='$about_paragraph'";
  return mysqli_query($db, $sql);
}

function individual_data()
{
  global $db;
  $sql = "SELECT * FROM individual";
  return mysqli_query($db, $sql);
}

function update_individual($navbar_title, $about_us, $home, $individual, $archive, $contact, $get_started, $imagen, $titulo, $descripcion, $precio, $car)
{
  global $db;
  $sql = "UPDATE individual SET 
          navbar_title='$navbar_title', 
          about_us='$about_us', 
          home='$home', 
          individual='$individual', 
          archive='$archive', 
          contact='$contact', 
          get_started='$get_started', 
          imagen='$imagen', 
          titulo='$titulo', 
          descripcion='$descripcion', 
          precio='$precio', 
          car='$car'";
  return mysqli_query($db, $sql);
}

function about_data()
{
  global $db;
  $sql = "SELECT * FROM about";
  return mysqli_query($db, $sql);
}

function update_about($navbar_title, $about_us, $home, $individual, $archive, $contact, $get_started, $texto_rectangulo1, $ruta_imagen_hombre, $texto_about, $texto_rectangulo2, $ruta_imagen_mujer, $texto_rectangulo3)
{
  global $db;
  $sql = "UPDATE about SET 
          navbar_title='$navbar_title', 
          about_us='$about_us', 
          home='$home', 
          individual='$individual', 
          archive='$archive', 
          contact='$contact', 
          get_started='$get_started', 
          texto_rectangulo1='$texto_rectangulo1', 
          ruta_imagen_hombre='$ruta_imagen_hombre', 
          texto_about='$texto_about', 
          texto_rectangulo2='$texto_rectangulo2', 
          ruta_imagen_mujer='$ruta_imagen_mujer', 
          texto_rectangulo3='$texto_rectangulo3'";
  return mysqli_query($db, $sql);
}

function contact_data()
{
  global $db;
  $sql = "SELECT * FROM contact";
  return mysqli_query($db, $sql);
}

function update_contact($navbar_title, $about_us, $home, $individual, $archive, $contact, $get_started, $image_sufista, $title_meet_us, $phone_icon, $phone_number, $envelope_icon, $email, $message_icon, $email_address, $title_pitch_us, $pitch_text)
{
  global $db;
  $sql = "UPDATE contact SET 
          navbar_title='$navbar_title', 
          about_us='$about_us', 
          home='$home', 
          individual='$individual', 
          archive='$archive', 
          contact='$contact', 
          get_started='$get_started', 
          image_sufista='$image_sufista', 
          title_meet_us='$title_meet_us', 
          phone_icon='$phone_icon', 
          phone_number='$phone_number', 
          envelope_icon='$envelope_icon', 
          email='$email', 
          message_icon='$message_icon', 
          email_address='$email_address', 
          title_pitch_us='$title_pitch_us', 
          pitch_text='$pitch_text'";
  return mysqli_query($db, $sql);
}


function aboutPage_data() {
    global $db;
    $sql = "SELECT * FROM about_page";
    return mysqli_query($db, $sql);
}

function update_aboutPage($navbar_title, $about_us, $home, $individual, $archive, $contact, $get_started, $main_title, $image1, $product1, $image2, $product2, $image3, $product3, $image4, $product4, $image5, $product5, $image6, $product6, $right_image) {
    global $db;
    $sql = "UPDATE about_page SET 
            navbar_title='$navbar_title', 
            about_us='$about_us', 
            home='$home', 
            individual='$individual', 
            archive='$archive', 
            contact='$contact', 
            get_started='$get_started', 
            main_title='$main_title', 
            image1='$image1', 
            product1='$product1', 
            image2='$image2', 
            product2='$product2', 
            image3='$image3', 
            product3='$product3', 
            image4='$image4', 
            product4='$product4', 
            image5='$image5', 
            product5='$product5', 
            image6='$image6', 
            product6='$product6', 
            right_image='$right_image'";
    return mysqli_query($db, $sql);
}

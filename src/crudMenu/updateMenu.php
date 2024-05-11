<?php
require ('../private/init.php');

actualizar_menu($_POST['id'],$_POST['nombre'], $_POST['img']);
db_disconnect($db);

header("Location: indexProduct.php"); 
exit;
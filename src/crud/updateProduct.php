<?php
require ('../private/init.php');

actualizar_wetsuite($_POST['id'],$_POST['nombre_wetsuite'], $_POST['img']);
db_disconnect($db);

header("Location: indexProduct.php"); 
exit;
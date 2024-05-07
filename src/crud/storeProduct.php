<?php
require ('../private/init.php');



nuevo_wetsuite($_POST['nombre_wetsuite'], $_POST['img']);
db_disconnect($db);

header("Location: indexProduct.php"); 
exit;
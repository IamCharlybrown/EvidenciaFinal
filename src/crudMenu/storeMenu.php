<?php
require ('../private/init.php');



nuevo_menu($_POST['nombre'], $_POST['img']);
db_disconnect($db);

header("Location: indexProduct.php"); 
exit;
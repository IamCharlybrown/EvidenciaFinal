<?php
require ('../private/init.php');


eliminar_wetsuite($_GET['id']);
db_disconnect($db);

header("Location: indexProduct.php"); 
exit; 
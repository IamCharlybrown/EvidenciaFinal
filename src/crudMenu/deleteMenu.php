<?php
require ('../private/init.php');


eliminar_menu($_GET['id']);
db_disconnect($db);

header("Location: indexMenu.php"); 
exit; 
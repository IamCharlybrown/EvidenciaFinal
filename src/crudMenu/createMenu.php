<?php
require ('../private/init.php');



include (SHARED_PATH . 'aboutHeader.php');
?>

<div class="container py-5">

  <div class="row">
    <div class="col">
      <header class="py-3 bg-danger text-center text-white">
        <h1 class="mb-0">Crear menu</h1>
      </header>
    </div>
  </div>
  
  <div class="row justify-content-center">
    <div class="col-12 col-md-9 col-lg-6">
      <a href="../crudMenu/indexMenu.php"><button class="btn btn-warning px-5 my-3">Regresar</button></a>
        <form action="storeMenu.php" method="post">
            <div class="mb-3 mt-3">
              <label for="" class="form-label">Nombre</label>
              <input type="text" name="nombre_menu" id="" class="form-control">
              <label for="" class="form-label">IMG</label>
              <input type="text" name="img" id="" class="form-control">
            </div>
            <div class="text-end">
              <input type="submit" value="Crear menu" class="btn btn-success">          
            </div>
        </form>
    </div>
  </div>
</div>

<?php
include (SHARED_PATH . 'footer.php');
?>
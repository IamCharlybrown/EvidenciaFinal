<?php
require ('../private/init.php');
$id = $_GET['id'];
$wetsuite = mysqli_fetch_assoc(wetsuite_id($id));



include (SHARED_PATH . 'aboutPageHeader.php');
?>

<div class="container py-5">

  <div class="row">
    <div class="col">
      <header class="py-3 bg-danger text-center text-white">
        <h1 class="mb-0">Editar categorias</h1>
      </header>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-12 col-md-9 col-lg-6">

      <form action="updateProduct.php" method="post">
        <input type="hidden" name="id" value="<?= $wetsuite['id'] ?>">
        <div class="mb-3 mt-3">
          <label for="" class="form-label">Nombre</label>
          <input value="<?= $wetsuite['nombre_wetsuite'] ?>" type="text" name="nombre_wetsuite" id=""
            class="form-control">
          <label for="" class="form-label">IMG</label>
          <input type="text" name="img" id="" class="form-control" value="<?= $wetsuite['img'] ?>">
        </div>
        <div class="text-end">
          <input type="submit" value="Editar wetsuite" class="btn btn-success">
          <a href="../crud/indexProduct.php"><button class="btn btn-primary px-5 my-3">Regresar</button></a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
include (SHARED_PATH . 'footer.php');
?>
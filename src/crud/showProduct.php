<?php
require ('../private/init.php');

$id = $_GET['id'];
$wetsuite = mysqli_fetch_assoc(wetsuite_id($id));
include (SHARED_PATH . 'aboutHeader.php');
?>

<div class="container  py-5">
  <div class="row mb-4">
    <div class="col">
      <header class="py-3 bg-danger text-center text-white">
        <h1 class="mb-0">Categoria : <?= $wetsuite['id'] ?>
        </h1>
      </header>
    </div>
  </div>

  <div class="row justify-content-center mb-4">
    <div class="col-12 col-md-9 col-lg-6">
      
      <p><b>Nombre: </b><?= $wetsuite['nombre_wetsuite'] ?>
      </p>
    </div>
  </div>

  <div class="row">
    <div class="col text-end">
      <a class="btn btn-warning" href="editProduct.php?id=<?= $wetsuite['id'] ?>">Editar</a>
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Eliminar
      </button>
      <a href="../crud/indexProduct.php"><button class="btn btn-primary px-5 my-3">Regresar</button></a>
    </div>
  </div>
</div>
<!-- Ventana modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p>Seguro que quieres eliminarlo?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a class="btn btn-danger" href="deleteProduct.php?id=<?= $wetsuite['id']?>">Eliminar</a>
      </div>
    </div>
  </div>
</div>
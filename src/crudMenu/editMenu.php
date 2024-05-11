<?php
require ('../private/init.php');
$id = $_GET['id'];
$menu = mysqli_fetch_assoc(menu_id($id));



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

      <form action="updateMenu.php" method="post">
        <input type="hidden" name="id" value="<?= $menu['id'] ?>">
        <div class="mb-3 mt-3">
          <label for="" class="form-label">Nombre</label>
          <input value="<?= $menu['nombre'] ?>" type="text" name="nombre" id=""
            class="form-control">
          <label for="" class="form-label">IMG</label>
          <input type="text" name="img" id="" class="form-control" value="<?= $menu['img'] ?>">
        </div>
        <div class="text-end">
          <input type="submit" value="Editar menu" class="btn btn-success">
          <a href="../crudMenu/indexMenu.php"><button class="btn btn-primary px-5 my-3">Regresar</button></a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
include (SHARED_PATH . 'footer.php');
?>
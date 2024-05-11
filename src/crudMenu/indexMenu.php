<?php
require ('../private/init.php');

$result = menu_data();

$data = array();

while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Include the header file
include (SHARED_PATH . 'aboutHeader.php');
?>

<div class="container py-5">
  <div class="row">
    <div class="col">
      <header class="py-3 bg-danger text-center text-white">
        <h1 class="mb-0">Todos los productos</h1>
      </header>
    </div>
  </div>
  <div class="row">
      <div class="col">
      <a href="../EditPage/index.php"><button class="btn btn-warning px-5 my-3">Regresar</button></a>
        <a href="createMenu.php" class="btn btn-success px-5">Crear</a>
      </div>
    </div>
  <div class="row">
    <div class="col">
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>categorias</th>
            <th>IMG</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $row) { ?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><?= $row['nombre'] ?></td>
              <td><?= $row['img'] ?></td>
              <td>
                <a href="showMenu.php?id=<?= $row['id']?>" class="btn btn-primary">Ver</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
// Include the footer file
include (SHARED_PATH . 'footer.php');
?>

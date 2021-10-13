<?php
$nombres = ["Isaac", "Ana", "Maria", "Carlos"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .color {
      color: red;
    }
  </style>
</head>

<body>

  <!-- PRESENTAR LOS NOMBRES EN LISTAS -->
  <?php
  echo "<ul>";
  foreach ($nombres as $nombre) {
    echo "<li>$nombre</li>";
  }
  echo "</ul>";
  ?>

  <hr>
  <!-- esto es lo recomendable -->
  <ul>
    <?php foreach ($nombres as $nombre) : ?>
      <li class="color"><?= $nombre ?></li>
    <?php endforeach; ?>
  </ul>

</body>

</html>
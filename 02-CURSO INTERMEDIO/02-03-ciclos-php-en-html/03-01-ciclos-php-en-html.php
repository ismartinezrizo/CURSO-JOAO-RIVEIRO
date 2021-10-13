<?php

//? CICLOS DE PHP EN HTML
// la escritura de codigo php debe ser lo mas simple posible para facilitar la lectura del flujo. Por otro lado, debemos intentar crear condiciones para rapidamente modificar el aspecto visual de los datos que presentamos.
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
  <?php
  // usando solo php
  for ($i = 1; $i <= 10; $i++) {
    echo "<p>$i</p>";
  }
  ?>
  <hr>
  <!-- HTML + PHP -->
  <?php for ($i = 1; $i <= 10; $i++) : ?>
    <p class="color"><?= $i ?></p>
  <?php endfor; ?>

</body>

</html>
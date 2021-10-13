<?php
$presentar = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicionales php en Html</title>
</head>

<body>
  <!-- <?php
        if ($presentar) {
          echo "<p>Este parrafo sera presentado</p>";
        } else {
          echo "<p>No existe nada para presentar</p>";
        }
        ?> -->

  <?php if (isset($presentar)) : ?>
    <p>Este parrafo sera presentado</p>
  <?php else : ?>
    <p>Este parrafo no sera presentado</p>
  <?php endif; ?>

</body>

</html>
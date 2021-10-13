<?php
// echo es lo mas usado en php para presentar datos, tambien podemos usar print pero es mas lento y tiene menos potencial,
// podemos usar echo con o sin parentesis(es una construccion especial de php) puede ser usado con multiples parametros.
?>
<?php
$nombre = "Isaac";
$apellido = "Martinez";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>usando echo</title>
  <style>
    .texto-rojo {
      color: red;
    }
  </style>
</head>

<body>
  <?= $nombre . ' ' . $apellido; ?><br>
  <?php echo ("$nombre $apellido") ?><br>
  <?php echo $nombre, " ", $apellido; ?>
  <h3><?= "$nombre $apellido" ?></h3>
  <h3 class='texto-rojo'><?= "$nombre $apellido" ?></h3>
  <h3 class="texto-rojo"><?= "$nombre $apellido " ?></h3>
  <p>Nombre del cliente: <?= "<strong>$nombre $apellido</strong>" ?></p>
  <p><?= substr($apellido, 0, 4) ?></p>

</body>

</html>
<?php
// Estructuran - Nombre  Genero  Pais
$datos = [
  ['Isaac', 'M', 'Nicaragua'],
  ['Monica', 'F', 'Brasil'],
  ['Joao', 'M', 'Portugal'],
  ['Gustavo Guanabara', 'M', 'Brasil']
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio Array</title>
  <style>
    .tabla {
      background-color: #ddd;
      border: 1px solid #000;

    }

    .tabla thead th {
      background-color: gray;
      font-size: 1.3em;
      padding: 10px;
    }

    .tabla tbody td {
      background-color: lightblue;
      padding: 10px;
    }
  </style>
</head>

<body>
  <table class="tabla">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Genero</th>
        <th>Pais</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($datos as $dato) : ?>
        <tr>
          <td><?= $dato[0]; ?></td>
          <td><?= $dato[1]; ?></td>
          <td><?= $dato[2]; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body>

</html>
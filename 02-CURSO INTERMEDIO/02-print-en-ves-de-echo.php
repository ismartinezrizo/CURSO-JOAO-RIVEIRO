<?php
// print es una construccion del lenguaje php muy similiar a echo
// las principales diferencias son:
// 1-print acepta un argumento
// 2-print siempre retorna el valor 1

$nombre = "Isaac";
$apellido = "Martinez";

print "$nombre $apellido \n"; //valido

// valido
print $nombre . ' ' . $apellido . "\n";

// print $nombre, ' ', $apellido; //Invalido

if (print($nombre)) {
  print(" $apellido");
}

// lo mismo que pasa con echo tambien podemos representar resultados de una funcion
print "\n";
print strlen("Isaac"); //5

?>

<p><?php echo "Abraham" ?></p>
<p><?= "Abraham" ?></p>
<p><?php print "Abraham" ?></p>


<!-- debemos usar echo por ser mas rapido -->
<?php
// apartir del momento que definimos una fecha(podemos hacerlo en el constructor de la clase Datatime), podemos usar los metodos para operar de los valores. Una fecha y hora contienen inmensos parametros, ano, mes, dia, dia de la semana, hora, minuto, segundo, etc.

// Existen varios metodos para modificar los valores de la fecha y hora, agregando periodos de tiempo

$fecha = new DateTime('NOW');
$fecha->setTime(10, 05); //modificamos la hora
$fecha->setDate(2022, 8, 24); //modificamos la fecha
echo $fecha->format('d-m-Y H:i:s');

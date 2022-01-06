<?php 
// array - aprovechar para mezclar

// imaginemos un escenario en que tenemos de respuestas multiples. 
// Queremos que las respuestas aparezcan siempre en una pocicion diferente.

$pregunta = 'Cual es la capital de Portugal?';
$respuestas = [
    'Lisboa',
    'Porto',
    'Coimbra'
];

// shuffle — Mezcla los elementos de un array
shuffle($respuestas);
print($pregunta) . PHP_EOL;
foreach($respuestas as $respuesta):
    echo " > $respuesta" .PHP_EOL;
endforeach;




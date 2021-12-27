<?php 
// ARRAY - VERIFICA UN ARRAY Y OTROS DATOS

// las funciones usadas para array solo es posible usarlas en array asi que debemos estar seguro que es un array

$valor = "Isaac";
$valor = [1,2,3];
if(is_array($valor)){
    echo "Es un array";
}else{
    echo "No es un array";
}

echo PHP_EOL;

// EMPTY() - PUEDE SER USADO EN UN STRING, EN VARIABLES, CON VALOR NULL O EN UN ARRAY PARA DETERMINAR SI ESTAN VACIOS
$valor2 = null;
$nombre = "";
$valores = [1,2,3];

// DEVUELVE 1 SI ESTAN VACIOS
echo (int)empty($valor2);
echo PHP_EOL;
echo (int)empty($nombre);
echo PHP_EOL;
echo (int)empty($valores);

echo PHP_EOL;
// is_countable()

echo PHP_EOL;
if(is_countable($valores)){
    echo "Es contable";
}else{
    echo "No es contable";
}

echo PHP_EOL;

if(is_countable($nombre)){
    echo "es contable";
}else{
    echo "No es contable";
}

echo PHP_EOL;
if(is_iterable($nombre)){
    echo "Es iterable";
}else{
    echo "No es iterable";
}

echo PHP_EOL;
if(is_iterable($valores)){
    echo "Es iterable";
}else{
    echo "No es iterable";
}

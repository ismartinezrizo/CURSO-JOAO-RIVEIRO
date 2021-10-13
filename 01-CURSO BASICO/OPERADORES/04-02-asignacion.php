<?php
// Operadores de asignación 
// El operador básico de asignación es "=". Se podría inclinar a pensar primero que es como un "igual a". No lo es. Realmente significa que el operando de la izquierda se establece con el valor de la expresión de la derecha (es decir, "se define como").

// El valor de una expresión de asignación es el valor asignado. Es decir, el valor de "$a = 3" es de 3. Esto permite hacer algunas cosas intrincadas:

$a = 3;
$a += 5; // establece $a en 8, como si se hubiera dicho: $a = $a + 5;
echo "$a \n";

$b = "Hola";
$b .= " mundo"; // establece $b en "Hola Mundo!", al igual que $b = $b . "Mundo!";
echo "$b \n";

$nombre = "Isaac";
$apellido = " Martinez";
$nombre .= $apellido;
echo "$nombre \n";

// Observe que la asignación copia la variable original en la nueva (asignación por valor)

# Asignación por referencia 

// La asignación por referencia también está soportada, utilizando la sintaxis "$var = &$othervar;". Asignación por referencia significa que ambas variables terminan apuntando a los mismos datos y nada es copiado en ninguna parte.
echo "-----------------------\n";
echo " VALOR POR REFERENCIA \n";
echo "-----------------------\n";
$a = 5;
$b = &$a;  // $b es una referencia para $a

echo "VALOR DE A: $a \n";
echo "VALOR DE B: $b \n";

$a = 10; //cambia el valor de b porque si se cambia a cambia b por ser a referencia de b
echo "VALOR DE A: $a \n";
echo "VALOR DE B: $b \n";

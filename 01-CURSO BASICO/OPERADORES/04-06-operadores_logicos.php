<?php
//! OPERADORES LOGICOS
//^ Ejemplo	Nombre	Resultado
//^ $a and $b	And (y)	true si tanto $a como $b son true.
//^ $a or $b	Or (o inclusivo)	true si cualquiera de $a o $b es true.
//^ $a xor $b	Xor (o exclusivo)	true si $a o $b es true, pero no ambos.
//^ ! $a	Not (no)	true si $a no es true.
//^ $a && $b	And (y)	true si tanto $a como $b son true.
//^ $a || $b	Or (o inclusivo)	true si cualquiera de $a o $b es true.

$a = true || false;
$b = true && false;
$c = !false; //diferente de false es true

print("$a \n");
print("$b \n");
print("$c \n");

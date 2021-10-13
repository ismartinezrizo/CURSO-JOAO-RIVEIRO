<?php
// Ejemplo #1 Ejemplo de goto
goto a; //le dijo vamos a bar
echo "Comida";

a: //label
echo "Bar";

for ($i = 1; $i <= 10; $i++) {
  echo "$i \n";
  if ($i == 5) {
    echo "I es igual a 5";
    goto fin;
  }
}

fin:
echo "Has llegado al fin";

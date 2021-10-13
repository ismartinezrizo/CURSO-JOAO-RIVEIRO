<?php
$a = 5;
$b = 10;

if ($a > $b) {
  echo "A es mayor";
} elseif ($a == $b) {
  echo "A y B Son iguales";
} else {
  echo "B es mayor";
}
echo "\n";


//* otra forma
if ($a > $b) :
  echo "A es mayor";
elseif ($a == $b) :
  echo "A y B Son iguales";
else :
  echo "B es mayor";
endif;

echo "\n";

//* otra forma con operador ternario
echo $a > $b ? "A es mayor" : "B es mayor";

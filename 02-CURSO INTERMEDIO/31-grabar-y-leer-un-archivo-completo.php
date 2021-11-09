<?php

// VAMOS A VER COMO PODEMOS GRABAR UN TEXTO COMPLETO EN UN FICHERO, Y COMO LEER ESE TEXTO COMPLETO PARA EL INTERIOR DE UNA VARIABLE PHP.

// GRABAR TEXTO COMPLETO.
$texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi consequuntur placeat, voluptatibus enim exercitationem accusamus. Recusandae placeat libero dolor similique architecto, sed asperiores possimus eos ducimus ea excepturi earum aperiam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi consequuntur placeat, voluptatibus enim exercitationem accusamus. Recusandae placeat libero dolor similique architecto, sed asperiores possimus eos ducimus ea excepturi earum aperiam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi consequuntur placeat, voluptatibus enim exercitationem accusamus. Recusandae placeat libero dolor similique architecto, sed asperiores possimus eos ducimus ea excepturi earum aperiam.";

// nombre del archivo
$archivo_txt = dirname(__FILE__) . "/31-texto_completo.txt";

// guarda informacion en un archivo
// file_put_contents($archivo_txt, $texto);

// Esta funcion es equivalente a llamar a fopen, fwrite y fclose todo en la misma funcion.

// ---------------------------------------------
// LEER TODO EL CONTENIDO DE UN FICHERO POR UNA VARIABLE
$texto = file_get_contents($archivo_txt);
echo $texto;

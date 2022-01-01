<?php 
    $empresa = [
        'administrador'=> 'isaac',
        'secretaria' => 'ana',
        'contabilidad' => 'carlos'
    ];

    // existe la llave administrador en el array empresa
    if(key_exists('administrador', $empresa)){
        echo "SI existe";
    }else{
        echo "NO existe";
    }

    echo PHP_EOL;

    // BUSCA POR LOS VALORES
    if(in_array('ana', $empresa)){
        echo "SI se encuentra";
    }else{
        echo "No esta en el array desea crearlo";
    }


?>

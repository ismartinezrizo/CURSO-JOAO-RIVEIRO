<?php 

// $datos = [
//   [10,20,30,40],
//   [100,200,300,400],
//   [1000,2000,3000,4000]
// ];

// print_r($datos);
// echo $datos[0][2].PHP_EOL; //30
// echo $datos[1][1]. PHP_EOL;//200
// echo $datos[2][0]. PHP_EOL;//1000

// ciudades
$ciudades = [
  "Jinotega" =>[
    "El cua" =>["El cedro","El bote","La pita"],
    "Bocay",
    "San Rafael",
    "Yaly",
    "Wiwili"],
  "Managua" => ["Tipitapa","Ciudad sandino","San Rafael del Sur"],
  "Esteli"=>["San Nicolas","La Trinidad","Pueblo Nuevo"],
    "Matagalpa"=> [
      "La Dalia" => ["El tuma","La Estrella"],
      "Sebaco",
      "Dario",
      "San Ramon"
    ]
];

// print_r($ciudades);

// print_r($ciudades["Jinotega"]) . PHP_EOL;
// print_r($ciudades["Managua"]) . PHP_EOL;
// print_r($ciudades["Esteli"]) . PHP_EOL;

print_r($ciudades["Jinotega"]["El cua"]) . PHP_EOL;//El Cua

print_r($ciudades["Jinotega"]["El cua"][0]). PHP_EOL; //El Cedro

// aqui Bocay seria el 0
echo $ciudades["Jinotega"][0] . PHP_EOL;//Bocay
echo $ciudades["Jinotega"][1] . PHP_EOL;//San Rafael
echo $ciudades["Jinotega"][2] . PHP_EOL;//Yaly
echo $ciudades["Jinotega"][3] . PHP_EOL;//Wiwili

echo $ciudades["Managua"][0]. PHP_EOL; //Tipitapa
echo $ciudades["Esteli"][0] . PHP_EOL; //San Nicolas
echo $ciudades["Matagalpa"]["La Dalia"][0] . PHP_EOL; //El tuma






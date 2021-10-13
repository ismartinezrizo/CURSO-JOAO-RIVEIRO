<?php
//& ACCESS LEVEL - ASPECTOS IMPORTANTES A TOMAR.

//^ UNA BUENA PRACTICA ES CREAR EL MENOR NUMERO DE PROPIEDADES DE UNA CLASE COMO PUBLICAS
//^ COLOCAR UNA PROPIEDAD COMO PUBLICA ES EXPONER DEMACIADO ESA PROPIEDAD.
//^ UN EJEMPLO: IMAGINEN QUE QUEREMOS QUE UNA PROPIEDAD DE UNA CLASE SEA SIEMPRE UN NUMERO.

// class Humano
// {
//   public $edad;
// }

// $yo = new Humano();
// echo $yo->edad = 'Hola mundo'; //^ Esto es Posible porque php no es strongly type

//^ PARA DEFINIR CORRECTAMENTE ESTE TIPO DE SITUACIONES, PODEMOS USAR METODOS PARA DEFINIR Y IR A BUSCAR LOS VALORES DE LAS PROPIEDADES PRIVADAS. ESTOS METODOS PERMITEN GARANTIR QUE LA INTEGRIDAD DE LAS PROPIEDADES SEAN MANTENIDAS.

// class Humano1
// {
//   private $edad;
// }

// $yo1 = new Humano1();
// $yo1->edad = '10'; //! No es posible porque la propiedad es privada.

//* USANDO GET AND SET
// SEGUNDO EJEMPLO

// class Humano
// {
//   private $edad = 0;

//   public function setEdad($edad)
//   {
// verifica si la edad es numerica
//     if (is_numeric($edad)) {
//       $this->edad = $edad;
//     }
//   }

//   public function getEdad()
//   {
//     return $this->edad;
//   }
// }

// $yo = new Humano();
// $yo->setEdad(31);
// echo $yo->getEdad();

class Tiempo
{
  private $segundos;

  public function setSegundos($valor)
  {
    // si no es numerico o es menor a 0
    if (!is_numeric($valor) || $valor < 0) {
      $this->segundos = 0;
    } else {
      $this->segundos = $valor;
    }
  }

  public function getSegundos()
  {
    return $this->segundos;
  }


  public function setMinutos($valor)
  {
    if ($valor === 0) {
      $this->segundos = 0;
    } else {
      $this->segundos = $valor * 60;
    }
  }

  public function getMinutos()
  {
    return $this->segundos / 60;
  }
}

$tiempo = new Tiempo();
$tiempo->setSegundos(300);
echo "En {$tiempo->getSegundos()} segundos hay {$tiempo->getMinutos()} Minutos";

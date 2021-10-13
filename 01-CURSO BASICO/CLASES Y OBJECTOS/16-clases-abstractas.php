<?php
//^ CLASE ABSTRACTA
//^ UNA CLASE ABSTRACTA ES CONTITUIDA POR UNA IMPLEMENTACION PARCIAL A PARTIR DELAS CUALES PUEDEN CRECER.

//^ CUANDO UNA CLASE ES DECLARADA COMO ABSTRACTA, ESO SIGNIFICA QUE ELLA TIENE METODOS INCOMPLETOS QUE, OBLIGATORIAMENTE TIENEN QUE SER IMPLEMENTADOS EN LAS CLASE QUE LA HEREDAN.

//^ LAS CLASES ABSTRACTAS NO PUEDEN SER INSTANCIADAS. SIRVEN APENAS PARA PODER SER HEREDADAS POR OTRA CLASE.

abstract class Forma
{
  public $anchura = 100;
  public $altura = 200;

  abstract public function area();

  function altura()
  {
    return $this->altura;
  }
}

// $cuadrado = new Forma(); //!ESTO NO ES PERMITIDO

class Rectangulo1 extends Forma
{
  function area()
  {
    return $this->anchura * $this->altura;
  }
}

$rectangulo = new Rectangulo1();
echo $rectangulo->area() . "\n";
echo $rectangulo->altura() . "\n";

// ES UNA MATERIA FUNDAMENTAL DESTINADA A QUIEN CONTRUYE CODIGO IMPLEMENTADA POR OTROS PROGRAMADORES.

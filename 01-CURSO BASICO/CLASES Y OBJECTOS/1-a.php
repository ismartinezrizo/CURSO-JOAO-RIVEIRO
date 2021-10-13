<?php

//^ Una clase es un molden/forma/modelo apartir del cual creamos objetos.
//& Ejemplo la clase Humano es un modelo para, apartir de ella, crear un conjunto de hombres y mujeres, cada uno compartiendo el mismo molde pero con propiedades y funciones diferentes.
//& Hombres y mujeres ambos tienen cabellos, pero el hombre puede tener cabello oscuroo y la mujer cabello claro.

//* Teoricamente:
// class Humano
//   >  cabello
//   >  genero
//   >  peso
//   >  caminar

//* Hombre -> Humano
//   > cabello - castanho
//   > genero - masculino
//   > peso - 75
//   > caminar()

//* Mujer -> Humano
// cabello - claro
// genero - femenino
// peso - 63
// caminar()
// cantar() - puede tener funciones adicionales

class Humano
{
  // propiedades y metodos
}

class JugadorFutbol
{
  // propiedades y metodos
}

//^ Las variables pertenecientes a una clase se llaman "propiedades". También se les puede llamar usando otros términos como "atributos" o "campos", pero para los propósitos de esta referencia se va a utilizar "propiedades"

class FiguraGeometrica
{

  //! PROPIEDADES
  public $largura, $altura;
  public $x;
  public $y;

  //! METODO
  function nuevaArea($a, $b)
  {
    return $a * $b;
  }
}

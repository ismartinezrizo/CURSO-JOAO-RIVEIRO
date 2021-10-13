<?php

# como el php 7 introdujo un consepto usando en otros lenguajes y que se designa por clases anonimas. Este tipo de clases solo tiene sentido cuando queremos instanciar apenas un objeto desa clase.


#----------------------------------------
# clase NORMAL
#----------------------------------------

class Objeto1
{

  public function test()
  {
    echo "Test Normal";
  }
}

$objeto = new Objeto1();
$objeto->test();


echo "\n";



#----------------------------------------
# clase ANONIMA
#----------------------------------------
$b = new class
{
  function test()
  {
    echo "Test Clase anonima";
  }
}; //Es importante saber que se tiene que terminar con punto y coma.

$b->test();

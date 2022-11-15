<?php
//Classes Abstradas tem metodos implementados parcialmente, que devem ser completadas pelas classes que a herdam
//Não pode ser instanciadas, servem apenas para poder ser herdadas por outras classes.

abstract class Forma{
   public $largura = 100;
   public $altura = 200;
   abstract public function area();
   function altura(){
      return $this -> altura;
   }
}


class Retangulo extends Forma { 
   public function area(){
      return $this -> largura * $this -> altura;
   }
}


$retangulo = new Retangulo;
echo $retangulo -> area();
echo '</br>';
echo $retangulo -> altura();

?>

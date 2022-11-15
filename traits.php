<?php
   // saõ grupos de metodos quue podem ser utilizados dentro de classes.
      trait Habilidades{
      public function falar($mensage){
         echo ' Eu digo:  ' . $mensage;
      }

      public function andar($metros){
         echo ' Eu ando:  ' . $metros;
      }
   }


   class Humano{
      use Habilidades;

   }
   $carol =  new humano();
   $carol->falar("Olá eu sou Carol");
   echo '</br>';
   $carol -> andar('3 metros');
?>
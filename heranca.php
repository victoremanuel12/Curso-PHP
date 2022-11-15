<?php
   class Animal{
      public $especie;
      public $peso;
      function tipoEspecie(){
         return  "Este animal é da espécie {$this->especie}  </br>";
      }

   }

   class Mamifero extends Animal {
      public $quantidadePernas;
      public $temPelo;

      function TemQuantasPatas(){
         return  "Este animal é da espécie {$this->especie} e tem {$this->quantidadePernas} patas </br>";
      }
   }
   $zebra = new Animal();
   $cavalo =  new Mamifero();
   $cavalo-> especie = "Mamifero";
   $cavalo-> quantidadePernas = 4;
   echo $cavalo->tipoEspecie();



   $zebra->especie = "Mamifero";
   echo $cavalo->TemQuantasPatas();

?>
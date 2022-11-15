<?php
   class Humano{
     private $nome = "A  </br>";
      function setPrivate($objeto,$valor){
         $objeto -> nome = $valor;
      }
      function Print(){
         echo $this->nome;
      }

   }
   // uma Instancia está manipulando a outra 
   $instancia1 = new Humano();
   $instancia2 = new Humano();
   $instancia1 -> setPrivate($instancia2,'Victor');
   $instancia1 -> Print();
   $instancia2 -> Print()
?> 
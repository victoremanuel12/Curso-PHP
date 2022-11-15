<?php
   // valor varia automaticamente dependendo de onde estao sendo usadas 
   echo  __LINE__ . '</br>'; //identifica a linha do codigo
   echo  __FILE__ . '</br>'; // identifica o documento do codigo
   echo  __DIR__ . '</br>';  // identifica a pasta do codigo

   teste();
   function teste(){
      $a = true ;
      echo __FUNCTION__ .'</br>'; // identifica o nome da função 
   }

   class MinhaClasse{
      Static function identificar(){
         echo __CLASS__ . "</br>"; // indetifica o nome da classe 
         echo __METHOD__ . "</br>";// identifica o nome do metodo
      }
   }
   MinhaClasse::identificar();
?>
<?php
   const APP_NAME = "Minha Aplicação";

   function teste(){
      echo APP_NAME;
   }
   teste();

   echo "<br>  Nome: " . APP_NAME;

   echo'</br>';

   if(!defined('APP_OTHER')){
      define('APP_OTHER',"Minha Aplicação em outra variavel"); // se der um echo devolve 1 ou 0 (true ou false)
      echo'</br>';
   }
   echo APP_OTHER;
   echo'</br>';


   define('NAMES', ['Victor', 'Luana']);
   echo NAMES[0];
   echo'</br>';

   const NOMES = ['Emanuel','Salles'];
   echo NOMES[0];

   // define permite defirnir constantes globais e locais mas nao dentro de calsses 
   // constatnes tem acesso global 
?>
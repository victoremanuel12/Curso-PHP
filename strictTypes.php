<?php
 
 declare(strict_types=1);
 //declarado sempre no inicio sempre, declarando que os parametros devem ser respeitados de acordo com suas definições
 function falar (string $mensagem){
      echo $mensagem . "</br>";
}
falar('olá'); // é possivel
// falar(123); // é possivel converte para string automaticamente  sem a definiçao do strict_types

function somar(int $v1, int $v2){
   return $v1 + $v2;
}


echo somar(10,20);
// echo somar('a','b'); // é possivel converte para string automaticamente  sem a definiçao do strict_types

// essa interrogação define um padrao de variavel de recebimento na função mas tbm permite cetar null
function conversar(?string $mensagem){
   return $mensagem;
}
echo conversar("Mensagem </br>");
echo conversar(null);


function gritar(int|string $mensagem){
   return $mensagem;
}
echo gritar("Porra");
echo gritar(200);
?>
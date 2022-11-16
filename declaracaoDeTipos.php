<?php
   // no php é possivel especificar claramente o tipo de valor que receberemos como parametro na funcao ou metodo e seus retornos 
   function falar (array $mensagems){
      foreach($mensagems as $mensagem){
         echo $mensagem . "</br>";
      } 
   }
   falar(['joao','maria']);
   //falar('oi'); error passando string para um array

   function conversar(string $mensagem){
      echo $mensagem . '</br>';
   }
   conversar('oi');
   conversar(250);
   // definçãpo de parametro estritamente como uma função 
   $falar = function($mensagem){echo 'minha menssagem é: ' . $mensagem;};

   function minhaFuncao(callable $funcao, $dados){
      $funcao($dados);
   }
   minhaFuncao($falar,'Sou foda');


   // também é possivel atribuir tipois de retorno de dados de uma funcao

   function funcao(): array{
      return[
         1,2,3
      ];
   }
   // function funcao2(): string{
   //    return[
   //       1,2,3
   //    ];
   // } error de definição de retorno diferente do real retorno

   // definir padroes de retorno e de recebimento de parametros dá mais segurança ao codigo 
?>
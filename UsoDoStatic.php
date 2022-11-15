<?php
   class Operacoes{
      static function numeroAleatorio($min,$max){
         return rand($min,$max);
      }
      static function calculaFormula($a,$b){
         return ($a*2) + ($b*$a);
      }

      static function criarUmNome(){
         $nomes = ['joao', 'ana', 'carlos', 'francisco', 'rui','nuno'];
         $sobrenome = ['silva', 'almeida', 'santos', 'rodrigues', 'oliveira'];
         return $nomes[rand(0,count($nomes) - 1)] . ' ' . $sobrenome[rand(0,count($sobrenome) - 1)];
      } 

   }
   echo Operacoes::numeroAleatorio(0,1000);
   echo '</br>';
   echo Operacoes::calculaFormula(2,4);
   echo '</br>';
   echo Operacoes::criarUmNome();
   // não há necessidade de criar uma instancia para utilizar os metodos da classe, sendo acessiveis diretatemnte pelo "nomedaFunção1::metodo();"
  
?> 
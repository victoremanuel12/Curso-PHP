<?php
   $meuBoleano = true;

   echo (int)$meuBoleano . '</br>';
   // desnecessario uso do if(variavel == true || false)


   $nomes = [
      'joao',
      'maria',
      'pedro'
   ];
   print_r($nomes);


   $nomes1 = (object)$nomes;
   echo '<pre>';
   print_r($nomes1);


   foreach($nomes1 as $nomesForEach){
      echo $nomesForEach . "</br>";
   }

   $nome = 'joao';
   $nomeArray= (array) $nome;
   print_r($nomeArray)

?>
<?php
   $a = 1;
   if(isset($a)){
      echo 'varaivel existe </br>';
   }else{
      echo 'varaivel não existe </br>';

   }
   // null para php é igual a inexistente 
   $b = null;
   echo isset($b) ? 'sim' : 'não';

   $c = 'joao';
   empty($c); // false
   is_null($c);//false

   $d = false;
   empty($d); // true
   is_null($d);// true

   $e = [];
   empty($e);// true
   is_null($e);// true

   $f = null;
   empty($f); // true

   is_null($h);//error $h nao existe

   $nome = 'victor';
   unset($nome); // destriu a variavel da memoria do sistema 
   $sobrenome = 'Emanuel';
   $sobrenome = null;// variavel existe ainda mas sem valor atribuido apesar de libetar a memoria quanto ao seu valor 

   //saber se uma variavel é nula ??
   $x = null;
   $xy =  $x ?? 'sem nome';
   //apelido é nulo? se for atribua "silva"
   $apelido= null;
   $apelido ??=  'Silva';
   echo $apelido;


   // ========= verificar os tipos de variaveis  ===========
   $sono = 'dormindo';
   if(is_array($sono)){
      echo " está dormindo";

   }

   if(is_double($sono)){
      echo "está dormindo " 
   }

?>
<?php
   $x =20;
   $y = 30;
 // funções closuere sao funçoes anonimas que podem usar variaveis do escopo global 
   $minhaFuncao = function($z) use($x,$y){
      echo "$z - $x - $y";
      $y += 1000;
   };
   $minhaFuncao(10);
   echo "<p> $y</p>"



?>
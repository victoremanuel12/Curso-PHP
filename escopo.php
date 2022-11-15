<?php
//  $variavel = 10 ;

//  echo "<p> $variavel</p>";

//  escopo(1,2);
//  function escopo($a, $b){
//   global $variavel ;
//    $variavel = "Agora sou uma string";
//    echo $variavel;
//    echo "<p> $a e $b</p>";
//  }

//  echo "$variavel + fora da função";




//  $variavel2 = 10 ;

//  echo "<p> $variavel2</p>";

//  escopo2(1,2);
//  function escopo2($a, $b){
  
//    $variavel2 = 20 . '</br>';
//    echo $variavel2;
//    echo " $a + $b"  . '</br>';
//  }

//  echo $variavel2;


// dentro de loops nao existe escopo local, podendo ser acessado em qualquer lugar 
   // if(true){
   //    $a= 10;

   // }
   // echo "<p> $a </p>";
   // for($i = 0 ; $i < 10 ; $i++){
   //    $x=1000;
   // }


   // echo " <p> $i e $x </p>"



   // funções anonimas

   // $a = function(){
   //    echo"<p>oi funcao 'a'</p>";
   // };
   // $a();

   // $falar = function($mensagem){
   //    echo "<p> Eu digo: $mensagem </p>";
   // };
   // $falar("Olá funcao 'falar'")




   $a = function(){
      echo " Função A"  ; 
   };
    function falar ( $falarMenssagem){
       echo $falarMenssagem; 
   }
   falar($a())

?>
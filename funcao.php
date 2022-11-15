<?php 
//    echo 'Inicio da nossa Função';
//    echo '<hr/>';
//    $a = 1;
//    $b =2;
//    executarSoma($a , $b );
//    function executarSoma($a , $b){
//       echo "A Soma de $a + $b  é  = " . ($a + $b) . "<br/>";
//       echo func_num_args();
//    }


//    $nomes = [' Joao', 'victor'];
//    foreach($nomes as $nome){
//       saudacao($nome);
//    }
//    function saudacao($nomePessoa){
//       echo " Bom dia, $nomePessoa.<br/>";
//    }

//    function somar($a, $b=2 ,$c = 3){
//       echo $a + $b + $c . "<br/>";
//    }

//    somar(2, c: 1 );
//    somar(a:0 , b: 4 );

// function funcaoComVariosArgumentos(...$argumentos){
//    foreach($argumentos as $argumento){
//       echo "$argumento <br/> <hr/>";
//    }
// }
// funcaoComVariosArgumentos(1,2,3,4,5,6,7,8,9,10);

function funcaoComRetorno($a,$b){
   $funcao = $a + $b;
   if($funcao == 30){
      $funcao = "Você está gastando demais"
   }
   return $funcao;

}
echo funcaoComRetorno(10,20);



// Arrow Function


// $x = 10;
// $y = 20;
// $minhaFuncao = fn($z) =>  "$x - $y - $z";
// $minhaFuncao(10)


function buscarNumero(){
   for($i = 0; $i < 10; $i++){
      yield $i;
   };
}

foreach(buscarNumero() as $numero){
   echo "$numero</br>"
}
 ?>
 <!-- A função antes ou depois do comando de chamamento da função nao altera nada igual a js -->
 <!-- Parametros opcionais vem apos o parametro nao opicional -->
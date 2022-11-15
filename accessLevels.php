<?php
   class ClassePublica{
      public $variavel;
      public function metodo(){
         echo 'Metodo Público' . "</br>" ;
      }
   }
   $objPublico = new ClassePublica();
   $objPublico -> variavel = 'Modificando a variavel publica dentro da classe publica';
   $objPublico-> metodo();

   
   class ClasseProtected{
      public $variavel= "A"; // possivel ser mostrada e modificda em qualquer lugar
      protected $variavel2 = "B"; // Nao é possivel alterar diretamente valores isso deve ser feito pelos metodos
      private $variavel3 = "C"; // Só pode ser visível dentro da propria classe, nao é visivel pelas classes herdadas ou objetos instanciados
      

      function mostrarVariavelPrivada(){
         echo $this -> variavel3;
      }
      
   }
   class ClasseDerivadaProtected extends ClasseProtected{
      public function metodoMostrar(){
         echo $this -> variavel ;
         echo $this -> variavel2 ;
         echo $this -> variavel3 ; // gera erro pq so pode ser vista na propria classe criadora da variavel
      } 
   }

   $objProtected = new ClasseDerivadaProtected();
   $objProtected-> metodoMostrar();

   $mostrarVariavelPrivadaDentroDaClasseMae = new ClasseProtected();
   $mostrarVariavelPrivadaDentroDaClasseMae -> mostrarVariavelPrivada();
?>
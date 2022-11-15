<?php
   class Humano{
      public $nome = 'Pablo';
      public  $sobrenome = 'Arruda';

      public function nomeCompleto(){
         return $this -> nome . " " . $this->sobrenome;
      }
   }
      $homem = new Humano();
      $homem -> nome = "Roberto";



      echo $homem->nomeCompleto() . "</br>";

      class HumanoComConstrutorRecebendoParametro{
         private $nome;
         private  $sobrenome ;

            function __construct($n,$s){
               $this->nome = $n;
               $this -> sobrenome = $s;
            }

   
         public function nomeCompleto(){
            return $this -> nome . " " . $this->sobrenome;
         }
         private function andar(){
            return $this-> nome . " " . "está andando/se movimentado" . "</br>";
         }
         public function movimento(){
            return $this->andar();
         }
      }
         $homem2 = new HumanoComConstrutorRecebendoParametro('João', 'Carlos');
         $mulher = new HumanoComConstrutorRecebendoParametro('Luana', 'Salles');
         echo $mulher->movimento();

         echo $homem2->nomeCompleto()  . "</br>"; 
         echo $mulher->nomeCompleto() . "</br>";







         class HumanoComConstrutorRecebendoParametroNoConstructor{
               function __construct( private $nome, private  $sobrenome ){
                  $this->nome = $nome;
                  $this -> sobrenome = $sobrenome;
               }
   
      
            public function nomeCompleto(){
               return $this -> nome . " " . $this->sobrenome;
            }
            private function andar(){
               return $this-> nome . " " . "está andando/se movimentado" . "</br>";
            }
            public function movimento(){
               return $this->andar();
            }
         }
            $homem2 = new HumanoComConstrutorRecebendoParametroNoConstructor('Marcos', 'Carlos');
            $mulher = new HumanoComConstrutorRecebendoParametroNoConstructor('Victor', 'Salles');
            echo $mulher->movimento();
   
            echo $homem2->nomeCompleto()  . "</br>"; 
            echo $mulher->nomeCompleto();

   ?>
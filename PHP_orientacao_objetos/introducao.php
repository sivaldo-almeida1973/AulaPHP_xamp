<?php 
   //introducao a Orientação a Objetos

   //Paradigmas de Programação(padrao,forma de fazer)

   //=======Procedural/Estruturado/Imperativo================
  
   #chamada de procedimentos (procedures) para manipulacao de dados

   $a = 10;
   $b = 7;
   $operador = 'soma';

   function calcular($a, $b, $operador) {
      if($operador == 'soma' ) {
         return $a + $b;
      }
      return false;
   }

   echo calcular($a, $b , $operador);

   #Funcional-----------
   #Lógico--------------

    echo "<hr>";
   //============Orientado a Objetos=========================

   #paradigma de Orientação a Objetos


   class Calculadora {
      public $a = 10;
      public $b = 8;
      public $operador = 'soma';

      public function calcular() {
         if($this->operador == 'soma' ) {
             return $this-> a + $this->b;
         }
         return false;
      }
   }
   $calcular = new Calculadora();
   echo $calcular-> calcular();




   #Concorrente--------
   #Reativo------------



?>
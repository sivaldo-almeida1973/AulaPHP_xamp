<?php 

    class Exemplo {

      public static $atributo1 = 'Eu sou um atributo estatico';
      public $atributo2 = 'Eu sou uma tributo normal';

      public static function metodo1() {
        echo'Eu sou um metodo estatico';

      }
      public function metodo2() {
        echo 'Eu sou um metodo normal';
      }
    }

    //cria uma instancia da classe
    $x = new Exemplo();
    echo Exemplo::$atributo1;
    echo'<br>';
    Exemplo::metodo1();
    echo'<br>';
    
    //echo Exemplo::metodo2(); //erro

    echo $x->atributo2;



?>
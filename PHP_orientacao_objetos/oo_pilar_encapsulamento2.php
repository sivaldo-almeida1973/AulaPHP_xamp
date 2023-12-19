<?php 
    
    class Pai {
      private $nome = 'Sivaldo';
      protected $sobrenome = 'vieira';
      public $humor = 'feliz';

      //metodos magicos(recupera valor contido atributos private e protected)
      public function __get($attr) {
        return $this->$attr;
      }

      public function __set($attr, $value) {
        $this->$attr = $value;
      }
      //metodos------------------------------------------
      private function executarMania() {
        echo 'Assobiar';
        
      }

      protected function responder() {
        echo 'Oi';
      }
      //atraves do metodo publico posso chamar (metodos private e protected)
      public function executarAcao() {
        $x = rand(1,10);

        if ($x >= 1 && $x <= 8) {
          $this->responder();
        } else {
          $this->executarMania();
        }    
      }   
    }

    $pai = new Pai();
    // //echo $pai->humor;
    // echo $pai->nome;
    // echo '<br>';
    // echo $pai->sobrenome;
    // echo '<br>';
    // $pai->sobrenome = 'almeida';
    // echo '<br>';
    // echo $pai->sobrenome;

    //chamando metodos
    echo $pai->executarAcao();
   




   

?>
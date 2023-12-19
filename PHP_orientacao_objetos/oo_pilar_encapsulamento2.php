<?php 
    
    class Pai {
      private $nome = 'Sivaldo';
      protected $sobrenome = 'vieira';
      public $humor = 'feliz';
     
      // //metodos magicos(recupera valor contido atributos private e protected)

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

  
    class Filho extends Pai {

      public function __construct() {
        //exibir os metodos do objeto
          echo "<pre>";
          print_r(get_class_methods($this));
          echo "<pre>";
      
      }

      private function executarMania() {
        echo 'Cantar';
      }

      public function x() {
        $this->executarMania();
      }
      
    }

    // $pai = new Pai();
    // //chamando metodos
    // echo $pai->executarAcao();

    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '</pre>';
  
    $filho->executarAcao();
    echo '<br>';
    $filho->x();
   
   
  

?>
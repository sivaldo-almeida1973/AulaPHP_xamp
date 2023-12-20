<?php 

    namespace A;

    class Cliente implements \B\CadastroInterface {
      public $nome = 'sivaldo';

      public function __construct() {
        echo'<pre>';
        print_r(get_class_methods($this));
        echo'</pre>';
      }

      public function remover() {
        echo 'remover';
      }

     
      public function __get($attr) {
        return $this->$attr;
      }

       //temos que declarar a cadastroInterface
      public function salvar() {
        echo 'Salvar';
      }
    }
    
    //===============================
    interface CadastroInterface {
      public function salvar();

    }


    namespace B;//===================================

    class Cliente implements \A\CadastroInterface {
      public $nome = 'lucas';

      public function __construct() {
        echo'<pre>';
        print_r(get_class_methods($this));
        echo'</pre>';
      }

      public function __get($attr) {
        return $this->$attr;
      }
      //temos que declarar a cadastroInterface
      public function remover() {
        echo 'remover';
      }

      public function salvar() {
        echo 'Salvar';
      }
    }

   //================================================
    interface CadastroInterface {
      public function remover();

    }

   //=====================================



    //acessar o name espace \A\:

    $c = new \B\Cliente();
    print_r($c);
    echo $c->__get('nome');



    // $c = new Cliente();
    // print_r($c);
    // echo $c->__get('nome');



?>
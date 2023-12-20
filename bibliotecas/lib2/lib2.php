<?php 

    namespace B;

    class Cliente implements CadastroInterface {
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


?>
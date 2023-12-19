<?php 

    class Pessoa {

      public $nome = null;

      //metodo construt
      function __construct($nome) {
        echo 'Objeto iniciado';
        $this->nome = $nome;
      }

      function __destruct() {
        echo 'Objeto removido';
        
      }
   
      function __get($atributo) {
        return $this->$atributo;
      }

      function correr() {
        return $this->__get('nome') . 'esta correndo';
      }

    }

    //criar uma instancia
    $pessoa = new Pessoa(' Phill ');
    echo '<br>';
    echo 'Nome: '.$pessoa->__get('nome');
    echo '<br>';
    echo  $pessoa->correr();


    echo '<br>';
    //unset($pessoa);//proposital





?>
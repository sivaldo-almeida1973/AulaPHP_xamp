<?php 

   //modelo
  class Funcionario {
    //atributos
    public $nome = null;
    public $telefone = null; 
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //getters e setters (overloading / sobrecarga)
    function __set($atributo, $valor) {
      $this->$atributo = $valor;

    }

    function __get($atributo) {
      return $this->$atributo;

    }

    /*
    function setNome($nome) {
      $this->nome = $nome;

    }
    function setTelefone( $telefone ) {
      $this->telefone = $telefone;
    }

    function setNumFilhos( $numFilhos ) {
      $this->numFilhos = $numFilhos;
    }


    function getNome() {
      return $this->nome;
    }

    function getTelefone(){
      return $this->telefone;
    }

    function getNumFilhos() {
      return $this->numFilhos;
    }

    */
    //metodos(funcoes)podemos ou não retornar valores
    /*
    function resumirCadFunc(){
      return "$this->nome possui $this->numFilhos filho(s) e seu telefone é: $this->telefone";   
    }

    function modificarNumFilhos($numFilhos) {
      //afetar um atributo do objeto
      $this->numFilhos = $numFilhos;
      
    }
    */

  }


  $y = new Funcionario(); 
  $y->__set('nome', 'sivaldo');
  $y->__set('telefone', '88888888888');
  $y->__set('numFilhos', 1);
  $y->__set('cargo', 'eng software');
  $y->__set('salario', 10000);


  //echo $y->resumirCadFunc();
  echo 'Nome:'. $y->__get('nome') . ', Filhos :' . $y->__get('numFilhos') .' filho, telefone contato: '. $y->__get('telefone') . ', Cargo:'.$y->__get('cargo') .', Salario:'. $y->__get('salario');
  
  echo "<br>";


  
  $x = new Funcionario(); 
  $x->__set('nome','lucas');
  $x->__set('telefone','888888-888888');
  $x->__set('numFilhos',0);
  $x->__set('cargo', 'Advogado');
  $x->__set('salario', 11000);


  echo 'Nome:'. $x->__get('nome') . ', tem ' . $x->__get('numFilhos') .' filho: Seu telefone '. $x->__get('telefone') .', Cargo:'. $x->__get('cargo') .', Salario R$:'. $x->__get('salario');









  



?>
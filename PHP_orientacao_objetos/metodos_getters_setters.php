<?php 

   //modelo
  class Funcionario {
    //atributos
    public $nome = null;
    public $telefone = null; 
    public $numFilhos = null;

    //getters e setters-----------------------
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

    //metodos(funcoes)podemos ou não retornar valores
    function resumirCadFunc(){
      return "$this->nome possui $this->numFilhos filho(s) e seu telefone é: $this->telefone";   
    }

    function modificarNumFilhos($numFilhos) {
      //afetar um atributo do objeto
      $this->numFilhos = $numFilhos;
    }

  }


  $y = new Funcionario(); 
  $y->setNome("sivaldo");
  $y->setNumFilhos(1);
  $y->setTelefone("9999999999");

  //echo $y->resumirCadFunc();
  echo $y->getNome() . ' tem ' . $y->getNumFilhos() .' filho: '. $y->getTelefone() .' contato';
  
  echo "<br>";

  $x = new Funcionario(); 
  $x->setNome('lucas');
  $x->setNumFilhos(0);
  $x->setTelefone('8899887777');

  echo $x->getNome() . ' tem ' . $x->getNumFilhos() .' filho: Seu telefone '. $x->getTelefone() .' contato';








  



?>
<?php 
  //=============Pilar da Abstração==================

  # entidade ->      Produto,    ideia,        funcionario

  # identidade -> new Porduto(), New ideia(), new Funcionario()
  
  # caracteristicas -> categoria , tiutlo, descricao, valor, tipo, descrição, nome, complexidade,telefone, numFilhos

  # acoes -> exibirValores, exibirResumoProduto, alterarValorProduto, modificarTipoIdeia, resumirCadFunc, modificarNumFilhos


  //modelo==============(class())

  class Funcionario {
    //atributos
    public $nome = 'lucas';
    public $telefone = '94 999999-9999'; 
    public $numFilhos = 1;

    //metodos(funcoes)podemos ou não retornar valores
    function resumirCadFunc(){
      return "$this->nome possui $this->numFilhos filho(s) e seu telefone é: $this->telefone";   
    }

    function modificarNumFilhos($numFilhos) {
      //afetar um atributo do objeto
      $this->numFilhos = $numFilhos;
    }

  }

  //criar uma variavel que vai receber uma instancia da classe funcionario
  $y = new Funcionario();
//precisa do echo para imprimir
  echo $y->resumirCadFunc();

//podemos modificar quantidade de filhos
  $y->modificarNumFilhos(3);

  echo "<br>";
  echo $y->resumirCadFunc();

  echo"<hr>";

  $x = new Funcionario(); 
  echo $x->resumirCadFunc();
  $x->modificarNumFilhos(4);
  echo "<br>";
  echo $x->resumirCadFunc();






  



?>
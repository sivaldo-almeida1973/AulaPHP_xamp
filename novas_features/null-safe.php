<?php 
    // $objeto = null;

    // //isso corresponde ->
    // if (isset($ojeto) && $objeto != null) {
    //     $objeto->total();
    // }

    // // ->a isso aqui
    // $objeto?->total();//op null safe

    //=======================================================

    class Funcionario {
        public function __construct (
            private string $nome = "",
            private float $salario = 0,
        ){}

        public function info() {    
            return "Nome: $this->nome - Salario: $this->salario";
        }
    }   


    class FolhaPagamento {

        private $funcionarios = null;

        public function __construct () {

            $this->funcionarios = [

                new Funcionario('Maria', 12000),
                new Funcionario('Fernado', 5000),
                new Funcionario('Lucas', 15000),
                new Funcionario('Alice', 11000)      
             ];
           
        }


        public function getTotalFuncionarios() {
            return count($this->funcionarios);
        }

        public function getFuncionario() {
            return $this->funcionarios[3]; //null
        }
    
    }

   
   $folhaPagamento = new FolhaPagamento();

   //$folhaPagamento = null;

   //if($folhaPagamento !== null && isset($folhaPagamento))

   //operador null safe ? evita um erro
    echo $folhaPagamento?->getTotalFuncionarios();
    echo '<br>';
    print_r($folhaPagamento?->getFuncionario()?->info());
?>
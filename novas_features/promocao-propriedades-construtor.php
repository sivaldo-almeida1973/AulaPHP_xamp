<?php 
  
    // class Produto {
    //   public string $name = "";//atributo
    //   public float $valor = 0;
      
    //   //construtor da class
    //   public function __construct($name,$valor) {
    //     $this->name = $name;
    //     $this->valor = $valor;
    //   }
     
    // }


    //refatorar
    class Produto {
      public function __construct(
        //definir atributos no proprio const
        public string $name = "",
        public float $valor = 0,
      ) {}


      }


    //criando instancia da class, passando parametros
    $produto = new Produto("Smartphone" , 3000);

    //recupera o obj e acessa seus valores
    echo "Produto:". $produto->name;
    echo "<br>";
    echo"Valor:". $produto->valor;

    echo "<hr>";
    $produto2 = new Produto("Geladeira" , 5000);

    //recupera o obj e acessa seus valores
    echo "Produto:". $produto2->name;
    echo "<br>";
    echo"Valor:". $produto2->valor;
?>


<?php 

   class Carro extends Veiculo{
      
       public $teto_solar = true;

       function __construct($placa, $cor) {
           $this->placa = $placa;
           $this->cor = $cor;

       }
        
       function abrirTetoSolar() {
        echo 'Abrindo teto solar';
       }

       function alterarPosicaoVolante() {
           echo 'mudando posicao volante';
       }     
   }     //fim class carro-------------


   class Moto extends Veiculo{  //inicio class moto-------------
      
       public $contra_peso_guidao = true;

       function __construct($placa, $cor) {
        $this->placa = $placa;
        $this->cor = $cor;
       }

       function empinar() {
        echo 'empinar';
       }
   }     //----------fim class moto-------------


   class Veiculo {  //-inicio class veiculo-------------
    public $placa = null;
    public $cor = null;
    
    
    function acelerar() {
      echo 'acelerar ';
    }

    function freiar() {
      echo 'freiando';
    }

    




   }     //fim class veiculo-------------


   $carro = new Carro('abc1234','branco');
   $moto = new Moto('xyz4567','vermelha');

   echo '<pre>';
   print_r($carro);
   echo'<br>';
   print_r($moto);
   echo '</pre>';
   echo '<hr>';


   $carro->abrirTetoSolar();
   echo '<br>';
   $carro->acelerar();
   echo '<br>';
   $carro->freiar();
   echo '<br>';
   $moto->acelerar();
   echo '<br>';
   $moto->empinar();
   echo '<br>';
   $moto->freiar();
   



?>
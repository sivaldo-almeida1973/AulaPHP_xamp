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

       function trocarMarcha() {
        echo 'Moto:Desengatar embreagem com a mão e engatar marcha com o pé';
  
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

    function trocarMarcha() {
      echo 'Carro:Desengatar embreagem com o pé e engatar marcha com a mão';

    }

   }     //fim class veiculo-------------

   class Caminhao extends Veiculo {

   }

   $carro = new Carro('abc1234','branco');
   $moto = new Moto('xyz4567','vermelha');
   $caminhao = new Caminhao('xtz3333','Azul');


  $carro->trocarMarcha();
  echo'<br>';
  $moto->trocarMarcha();
  echo '<br>';
  $caminhao->trocarMarcha();
  

?>
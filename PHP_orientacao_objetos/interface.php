<?php 

    interface EquipamentoEletronicoInterface {

      public function ligar();
      public function desligar();

    }



    class Geladeira implements EquipamentoEletronicoInterface {

      public function abrirPorta() {
        echo 'Abrir a porta';

      }
      public function ligar() {
        echo 'ligar';
      }
      public function desligar() {
        echo 'Desligar';
      }

    }
    

    class TV implements EquipamentoEletronicoInterface {

      public function abrirTrcarCanal() {
        echo 'Trocar canal';

      }
      public function ligar() {
        echo 'Ligar tv';

      }

      public function desligar() {
        echo 'Desligar tv';
      }
      
    }






   $gel = new Geladeira();
   $tv = new TV(); 


?>
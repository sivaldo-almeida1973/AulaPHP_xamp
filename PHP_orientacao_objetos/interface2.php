<?php 
   
    interface MamiferoInterface {
        public function respirar();

    }

    interface TerrrestreInterface {
      public function andar();
    }

    interface AquaticoInterface {     
      public function nadar();
    }


    class Humano implements MamiferoInterface , TerrrestreInterface {
      public function conversar() {
        echo "Conversar";
      }
      public function respirar() {
        echo "respirar";
      }
       
      public function andar() {
        echo "andar";
      }

    }


    class Baleia implements MamiferoInterface , AquaticoInterface {
      protected function esguichar() {
        echo "Esguichar";
      }
      public function respirar() {
        echo "respirar";
    }

    public function nadar() {
        echo "nadar";
    }
   }


   //=========================================================

   interface AnimalInterface {
    public function comer();
   }

   interface AveInterface extends AnimalInterface {
    public function voar();


   }


   class Papagaio implements AveInterface {
    public function comer() {
      echo 'comer';
    }

    public function voar() {
      echo 'Voar';
    }
  }


?>
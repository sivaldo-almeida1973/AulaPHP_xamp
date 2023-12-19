<?php 
   class Pai {
    //vizibilidades 

      private $nome = 'sivaldo';
      protected $sobrenome = 'vieira';
      public $humor = 'feliz';
     
      //esse metodo publico vai permitir acesso ao atributo privado($nome)
      public  function getNome() {
        return $this->nome;
      }
      //esse metodo permite alterar um atributo privado
      public function setNome($value) {
        if(strlen($value) >= 3) {
            $this->nome = $value;
        }
       
      }

      //esse metodo publico vai permitir acesso ao atributo privado($nome)
      public  function getSobrenome() {
        return $this->sobrenome;
      }
      //esse metodo permite alterar um atributo privado
      public function setSobrenome($value) {
        if(strlen($value) >= 3) {
            $this->sobrenome = $value;
        }
        
      }
  }

   $pai = new Pai();
   //echo $pai->humor;
   echo $pai->getNome();
   
   $pai->setNome('Lucas'); 
   echo '<br/>';
   echo $pai->getNome();
   echo '<br/>';

   $pai = new Pai();
   //echo $pai->humor;
   echo $pai->getSobrenome();
   
   $pai->setSobrenome('Almeida'); 
   echo '<br/>';
   echo $pai->getSobrenome();



?>
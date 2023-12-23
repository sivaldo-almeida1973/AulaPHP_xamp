<?php 
    
    $busca = 35;

    switch ($busca) {//comparacao por igualdade/igualdade (==)
      case '1':
        $retornoSwitch = 'Encontrou o texto 1';
        break;
      case '2':
          $retornoSwitch = 'Econtrou o numero 2';
          break;
      default:
        $retornoSwitch = 'Não encontrou';

    }

    echo "Resultado switch: ". $retornoSwitch;
    echo "<br>";
    echo "<br>";

    //comparacao por identidade restrita (===)
    /*
    $retornoMatch = match($busca) {
         '1' => 'Econntrou o texto 1',
         1=> 'encontrou o numero 1',
         5, '8',12, 'x' => 'Econtrou os valores 5 ou 12, ou os textos 8 ou x',

         default => 'Não encontrou'


    };
    */

    //March com condicionais e operacoes logicas
    $retornoMatch = match (true) {  
      $busca < 20 =>"Encontrou",
      $busca >= 20 && $busca <= 30 => 'Encontrou um valor maior ou igual a 20 e menor e igual a 30',
      default => 'Não encontrou'

    };
    echo 'Resultado do Match: '.$retornoMatch;



?>
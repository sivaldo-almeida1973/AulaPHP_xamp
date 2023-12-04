<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
  <body>
      <?php

        //=======Serevem para conectar op de comparação======

        // Operaor E (AND ou &&)- Verdadeiro se todas as expressoes forem verdades
        if(3==3 And 10 > 3){
          echo "Verdadeiro <br/>";

      } else {
           echo "Falso <br/>";
      }
       
     //Ex 2 &&
      if(3==3 And 10 > 3 && 4 != 4){
        echo "Verdadeiro <br/>";

    } else {
         echo "Falso <br/>";
    }
     
      // Operador OU(OR ou ||)-Verdadeiro se pelo menos uma expressão for verdade
        if(3==4 or 10 > 3){
          echo "Verdadeiro <br>";

      } else {
           echo "Falso <br>";
      }

      // Operador XOR(XOR)-Verdadeiro se apenas uma das expressões for verdade, mas não ambas
        if(3==4 xor 10 > 3){
          echo "Verdadeiro  <br>";

      } else {
           echo "Falso <br>";
      }
      // Operador Negação(!)-Inverte o resultado da expressão
       
      if(!(4==4 and 10 > 3)){
        echo "Verdadeiro  <br>";

      } else {
          echo "Falso  <br>";
      }
    
    //Ex 2  ! negação

      if(!(4==3 and 10 > 3)){
        echo "Verdadeiro  <br>";

      } else {
          echo "Falso <br>";
      }

      // () estabelece precedente

      if((3==3 And 10 > 3) || 4!= 4){
        echo "Verdadeiro <br/>";

      } else {
          echo "Falso <br/>";
      }
      
  
      
      ?>
  </body>
</html>
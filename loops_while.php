<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula PHP</title>

</head>
<body>
  
  <?php 
  /*
     $num = 1; //num começa em 1
    //operadores de comparação /lógicos
    echo"--inicio do loop--<br>";
     while ($num < 10) {
        echo"$num <br>";  //enquanto for menor que 10 iprime 1,2,3,4,5,5,6,6,7,8,9
         
        $num++;  //acresc 1 a cada loop, até num ser igual a 10 forçando a parada

     }
     echo "--fim do loop--";

     */



     //=======================================================
     /*===================================================
     $num = 1; //num começa em 1
     //operadores de comparação /lógicos
     echo"--inicio do loop--<br>";
      while ($num <= 50) {
         echo"$num <br>";  //enquanto for menor que 10 iprime 1,2,3,4,5,5,6,6,7,8,9
          
         $num += 5;  //acresc 1 a cada loop, até num ser igual a 10 forçando a parada
 
         break;  //break força a para em um unico loop
      }
      echo "--fim do loop--";
   
     /*=========================================================
     /*=======================================================
     $num = 1;
     
     echo"Inicio do loop <br>";

     while (true) {
      echo "$num <br>";

      $num += 5;

      if( $num > 50) {
        break;
      }

     }

     echo "fim do loop";

     /*


    $num = 1;
     
     echo"Inicio do loop <br>";

     while (true) {
      echo "$num <br>";

      $num += 5;

      if( $num > 50) {
        break;
      }

     }

     echo "fim do loop";
    */

    $num = 0;
     
    echo"Inicio do loop <br>";

    while ($num < 10 ){

      $num += 1; // criterio de parada tem que ficar antes do continue
     
      if( $num == 2 || $num == 6) {
        continue;   //quando chegar no 2 e no 6 pula para o proximo numero
     }

      echo "$num <br>";
   
    }
      echo "fim do loop";
  
  ?>



  
</body>
</html>
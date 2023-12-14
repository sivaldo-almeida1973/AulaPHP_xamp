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
     for (variavel; condicao; incremento) { 

     }
     */

     for ($x = 1; $x <= 10 ; $x++) { 
      echo "$x <br>";  //se condicao for verdade ,imprime 1,2,3,4,5,6,7,8,9,10
      
     }

     echo "<br>";

     
     for ($x = 1; true ; $x++) { 

      if($x >= 20) {
        break;
      }
      echo "$x <br>";  //se condicao for verdade ,imprime 1,2,3,4,5,6,7,8,9,10
      
     }


     echo "<br>";

     for ($x = 10; $x > 0 ; $x--) { //decremento

      echo "$x <br>";  //se condicao for verdade ,imprime 1,2,3,4,5,6,7,8,9,10
      
     }
     
  
     
  
  
  ?>
  
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula PHP</title>
</head>
<body>

  <?php 

     $x = 1;
      //o do while executa ao menos uma vez , independenye da condicão
     do {
      echo"x = $x <br>";
       
      $x += 1;  //condicao de parada
      //continue
      //break
     } while ($x < 10);

     


     /*


     //o while só executara se a condicao for verdade
     while ($x < 9) {
      echo "Entrou no while";
     };

     echo "pulou o while........";

     //
  
     */
  ?>
  
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>
     <?php
        //String
        $nome = 'Sivaldo vieira';

        //Int
        $idade = 23;

        //float
        $peso = 85.5;

        //boolean
        $fumante_sn = true;//(true = 1, false = 0)

        
     
     ?>

     <h1>Ficha cadastral</h1>
     <br>
     <h5>Nome: <?= $nome ?> </h5>
     <h5>Idade: <?= $idade ?> </h5>
     <h5>Peso: <?= $peso ?> </h5>
     <h5>Fumante: <?= $fumante_sn ?> </h5>
    
 
    
  </body>
</html>
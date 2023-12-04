<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>
      <?php
        $nome = 'Jorge';
        $cor = 'Azul';
        $esporte = 'futebol';
        $atividade = 'cinema';

       //operador .
        echo 'Olá '. $nome . ', vi que sua cor preferida é '.$cor.', estou vendo
        que você gosta de ' .$esporte .', e sua atividade preferida é '. $atividade;

        //aspas duplas sem utilizar os pontos
        echo '<br/>';

        echo "Olá $nome, vie que sua cor preferida é $cor, estou vendo que coce gosta de $esporte
        e sua atividade preferida é $atividade";

        

      
      ?>
  </body>
</html>
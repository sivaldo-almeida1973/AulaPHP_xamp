<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
  <body>
    <?php
    //Fazendo Casting------------------------------------
      //gettype() => retorna o tipo da variável
      //$valor = 10.55;  #-------------------
      //$valor2 = (double) $valor;   #casting
      //$valor2 = (string) $valor;
      //$valor2 = (int) $valor;


      //$valor = '22.12'; #------------
      //$valor = 'abc';   #-----------
      //$valor = ''; retorna false  #-----

      //$valor2 = (integer) $valor;  #casting
      //$valor2 = (string) $valor;
      //$valor2 = (bool) $valor;


      $valor = true;
      //$valor = false;  #--------------

      $valor2 = (string) $valor;
      $valor3 = (int) $valor2;

      //imprime na tela
      echo $valor.' '.gettype($valor);
      echo '<br/>';
      echo $valor2.' '.gettype($valor2);
      echo '<br/>';
      echo $valor3.' '.gettype($valor3);


    ?>
    
     

  </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
  <body>
    <h3>Pós-incremento</h3>
    <?php
       $a = 7;

       echo"O valor contido em a é $a <br>"; 
       echo"O valor contido em a apos o incremento é". $a++." <br>"; #resultado = 7
       echo"O valor atualizado é $a <br>";  #resultado = 8

    ?>
    
    <h3>Pré-incremento</h3>
    <?php
       $a = 7;

       echo"O valor contido em a é $a <br>"; 
       echo"O valor contido em a apos o pré-incremento é". ++$a." <br>"; #resultado = 8
       echo"O valor atualizado é $a <br>";  #resultado = 8

    ?>

<h3>Pós-decremento</h3>
    <?php
       $a = 7;

       echo"O valor contido em a é $a <br>"; 
       echo"O valor contido em a apos o pós-decremento é". $a--." <br>"; #resultado = 7
       echo"O valor atualizado é $a <br>";  #resultado = 6

    ?>

<h3>Pré-decremento</h3>
    <?php
       $a = 7;

       echo"O valor contido em a é $a <br>"; 
       echo"O valor contido em a apos o pré-decremento é". --$a ." <br>"; #resultado = 6
       echo"O valor atualizado é $a <br>";  #resultado = 6

    ?>
    
     

  </body>
</html>
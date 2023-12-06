<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
  <body>
    <h3>Funções</h3>
    <?php
      

       $texto = 'Curso completo de PHP <br>';
        //string to lower
        echo $texto;
        echo strtolower($texto);
        
        echo '<hr>';
        //string to lower
        echo $texto;
        echo strtoupper($texto);

        echo '<hr>'; 
        //upper case first  (primeira letra maiuscula)
        echo $texto;
        echo ucfirst($texto);

        echo '<hr>';
        //string length (tamanho da string)
        echo $texto;
        echo strlen($texto);

        echo '<hr>';
        //str_replace (substitui determinada caracter)
        echo $texto ;
        echo str_replace('PHP', 'JavaScript', $texto);
        echo str_replace('P', 'F', $texto);#troca P por F
        echo str_replace('.', ',', '22.30');#troca o ponto por virgula

        echo '<hr>';
        //substr()
        echo $texto;
        //echo substr($texto,1 ,4);
        //echo substr($texto,0 ,25);
        echo substr($texto,0 ,14).'...';



  
    ?>
    
     

  </body>
</html>
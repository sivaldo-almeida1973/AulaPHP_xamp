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
     //in_array()
     //array_search()

     $lista_frutas = ["banana","Maçã","Morango","Uva"];


     echo"<pre>";
     print_r($lista_frutas);
     echo"<pre>";

     echo in_array('Maçã', $lista_frutas);

     
      


  ?>



</body>

</html>
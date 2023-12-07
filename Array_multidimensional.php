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

     // array multidimensional ()
     //$lista_frutas = array("Bnana","Maçã","Pessego","Uva","Laranja","Abacaxi",) ;
     $lista_coisas = [];

    // $lista_coisas1['Frutas'] = ['Banana','Maçã','Laranja', 'Uva']; #ex numerico
     $lista_coisas['frutas'] = [1=>'Banana',2=>'Maçã',3=>'Laranja', 4=>'Uva']; #ex associativo

     
     $lista_coisas['pessoas'] = [1=> 'Lucas',2=> 'Lice',3=> 'Sivaldo',  4=> 'Antonio'];

     echo'<pre>';
     print_r($lista_coisas); 
     echo'<pre>'; 

     
     //procurar item no array
     echo'<hr>'; #cria uma linha

     echo $lista_coisas['frutas'][3];   //procurar item no array
     echo'<hr>'; #cria uma linha
     echo $lista_coisas['pessoas'][3];   //procurar item no array





    


  ?>



</body>

</html>
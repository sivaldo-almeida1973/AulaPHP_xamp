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

     // array sequenciais (numericos)

     //podemos criar array assim com parenteses-------------------------------

     //$lista_frutas = array("Banana","Maçã","Morango","Uva", "abacate");

     //Ou assim com coxetes-----------------------

     
     /*
     $lista_frutas = ["Banana","Maçã","Morango","Uva", "abacate"];



     $lista_frutas[] = 'Abacaxi'; #inserir no array

     echo"<pre>";  #serve para formatar o array
     var_dump( $lista_frutas ); #imprime o array inteiro
     echo"<hr>";
     echo"<pre>";
     print_r( $lista_frutas );
     echo"<pre>";
   

    echo $lista_frutas[2]; #imprimir um determinado item do array
    echo"<hr>";
    echo $lista_frutas[3]; #imprimir um determinado item do array

     */


     //array associativos
     $lista_frutas = array('a'=>"Banana",
                           'b'=>"Maçã",
                           'x'=>"Morango",
                           'z'=>"Uva", 
                           '2'=>"abacate");

    //incluir item
    $lista_frutas["w"] = "Abacaxi";

    echo"<pre>";
    var_dump($lista_frutas);
    echo"<pre>";

   
    echo $lista_frutas['x']; #iprime do indice x



  ?>



</body>

</html>
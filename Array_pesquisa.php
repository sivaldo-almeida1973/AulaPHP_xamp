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
     //in_array() -> retorna true ou false para a existencia do que sta sendo pesqisado
     //array_search() -> retorna o indice do valor pesquisado

     $lista_frutas = ["Banana","Maçã","Morango","Uva"];

    /*

     echo"<pre>"; #faz formatação do array
     print_r($lista_frutas);
     echo"<pre>";

 
     //variavel existe recebe valor da pesquisa, se item existe ou não no array
     //$existe = in_array('Pessego', $lista_frutas); #pesquisar item

    //echo array_search("Banana", $lista_frutas);#exibe o indice de Banana
    //echo array_search("Maçã", $lista_frutas);#exibe o indice de Maçã
    $existe = array_search("Abacaxi", $lista_frutas);#exibe o indice de Uva


    
     if($existe != null) {
      echo 'Sim, o valor pesquisado existe no array';
     }else{
      echo 'Não , o valor pesquisado não existe no array';

     }

     */


     $lista_coisas = [
      'frutas' => $lista_frutas,
      'pessoas'=> ['Joao', 'Maria']
     ];
    

      echo"<pre>"; #faz formatação do array
      print_r($lista_coisas);
      echo"<pre>";

      echo in_array('Joao', $lista_coisas['pessoas']);
  ?>



</body>

</html>
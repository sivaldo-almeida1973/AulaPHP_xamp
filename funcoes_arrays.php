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
    //is_array(array) -> verifica se o parametro é um array.
    /*
      $array = array('Notebook', 'Celular');
      $retorno = is_array($array);

      if($retorno) {
        echo'Sim, é um array';
      } else {
        echo 'Não,não é um array!';
      }
      */

      //array_keys(array)->Retorna todas as chaves de um array.--------------------------

      /*
      $array = [1 => 'a', 7 =>'b', 18 =>'c'];
      
      echo '<pre>';
      print_r($array);
      echo '<pre>';

      $chaves_array = array_keys($array);
      echo'<pre>';
         print_r($chaves_array);
      echo'<pre>';
      */

      //sort(array) => Ordena um array e eajusta seus índices-----------------------------

      /*
      $array = array( 'teclado','Mouse', 'Cabo hdmi','gabinete', 
                      'fonte atx','Notebook', 'Celular');

      //imprime normal
      echo '<pre>';
          print_r($array);
      echo '<pre>';
      
      //imprime usando sort() ordenado, não preserva os indices
      echo sort($array);
      echo '<pre>';
      print_r($array);
      echo '<pre>';
     */

       //asort(array) => Ordena um array e mantem seus índices-----------------------------
    
       /*

     $array = array( 'teclado','Mouse', 'Cabo hdmi','gabinete', 
     'fonte atx','Notebook', 'Celular');

      //imprime normal
      echo '<pre>';
      print_r($array);
      echo '<pre>';

      //imprime usando sort() ordenado, mas mantem os indices
      echo asort($array);
      echo '<pre>';
      print_r($array);
      echo '<pre>';

      */


      /*
      //count(array)-> conta a quantidade de elementos de um array

      $array = array("teclado","mouse","cabo hdmi","gabinte","fonte atx","notebook","celular");
      //inprime array original
      echo"<pre>";
       print_r($array); 
      echo"<pre>";

      //array reordenado com asort(), preserva indice/valor
      asort($array); // true ou false
      echo"<pre>";
      print_r($array);
      echo"<pre>";
      */

      /*

      //count()-----------------------------------

      $array = array("teclado","mouse","cabo hdmi","gabinte","fonte atx","notebook","celular");
      //inprime array original
      echo"<pre>";
       print_r($array); 
       echo count($array);
      echo"<pre>";

      */

      /*
      // merge()  junta ou concatena os arrays


      $array1 = ['osx', 'windows'];
      $array2 = ['linux'];
      $array3 = ['solaris'];


      $novo_array = array_merge($array1, $array2, $array3); 

      echo'<pre>';
        print_r ($novo_array);
      echo '<pre>';

      */

      /*
      //explode(array) ->divide uma string baseada em um delimitador

      $string = '26/04/2023';      //data em formato brasileiro----------------
      $array_retorno = explode('/', $string);

      echo'<pre>';
       echo $string;
       print_r($array_retorno);
       //--------------------------------data em formato americano
       echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
      echo'<pre>';
     
      */


      // implode(array) -> junta elementos de um array em uma string
      $array = ['a','b','c','d','e'];  // a,b,c,d,e
      $string_retorno = implode(',', $array);
      
      echo $string_retorno;





  ?>



</body>

</html>
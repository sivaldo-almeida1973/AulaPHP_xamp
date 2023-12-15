<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula PHP</title>
</head>
<body>
  <?php 
     //array multidimensional
     $registros = array(
            array('Titulo'=>'Titulo noticia 1' ,'Conteudo'=>'Conteudo Noticia 1'), 
            array('Titulo'=>'Titulo noticia 2' ,'Conteudo'=>'Conteudo Noticia 2'),
            array('Titulo'=>'Titulo noticia 3' ,'Conteudo'=>'Conteudo Noticia 3'),
            array('Titulo'=>'Titulo noticia 4' ,'Conteudo'=>'Conteudo Noticia 4')
                
      ) ;



      echo '<pre>';
      print_r($registros);
      echo '<pre>';
      echo'<br/> <br/> <br/>';
      //$indice = 0;  //com for essa variavel não precisa ser declarada aqui

      //count() -> conta a quatidade de elementos de um array
      echo'O array possui:'. count($registros).' registros';
     /*
      while($indice < count($registros)) {  //count() faz a impressao de acordo 

          echo '<h3>'.$registros[$indice]['Titulo'].'</h3>';
          echo '<p>'.$registros[$indice]['Conteudo'].'</p>';
          echo '<hr>';

          $indice++;

      }
      */

      /*
      //o  mesmo resultado com do while-----------------------------
      do {
        echo '<h3>'.$registros[$indice]['Titulo'].'</h3>';
        echo '<p>'.$registros[$indice]['Conteudo'].'</p>';
        echo '<hr>';
        
        $indice++;

      } while ($indice < count($registros));
    

      */

     //o count() define o criterio de parada , se aumentar ou
     // diminuir os elementos

      for( $indice = 0; $indice < count($registros);  $indice++ ) {
        echo '<h3>'.$registros[$indice]['Titulo'].'</h3>';
        echo '<p>'.$registros[$indice]['Conteudo'].'</p>';
        echo '<hr>';
        
       
      }


  ?>


  
</body>
</html>
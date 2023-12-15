<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula PHP</title>
</head>
<body>
  <?php 
     $funcionarios = array(
           array('Nome'=>'João','Salario'=> 2500,'data nascimento'=>'20/10/2023'),
           array('Nome'=>'Maria','Salario'=> 3500),
           array('Nome'=>'Julia','Salario'=> 4500),
           array('Nome'=>'Julia','Salario'=> 4500),
           array('Nome'=>'Julia','Salario'=> 4500),
           array('Nome'=>'Julia','Salario'=> 4500),
           array('Nome'=>'Julia','Salario'=> 4500),
           array('Nome'=>'Julia','Salario'=> 4500)
           
           
     ); 

     echo'<pre>';
     print_r($funcionarios);
     echo'</pre>';

     //como recuperar os indices
     foreach ($funcionarios as $idx => $funcionario) {

         foreach ($funcionario as $idx2 => $valor) {
          echo "$idx2 - $valor <br>";
     }
     echo"<hr>";
    }
  
  ?>
  
</body>
</html>
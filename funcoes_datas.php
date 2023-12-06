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
  /*
       //recuperar data atual do sistema--------------------
       //dia/mes/ano/horas/minutos
       echo date('d/m/Y-H:i');
       
       echo '<br>';

       echo date_default_timezone_get();
       date_default_timezone_set('America/Sao_Paulo');
       echo '<br>';
       echo date('d/m/Y-H:i');
*/

    //Calculo diferença entre datas
    $data_inicial = '2023/11/06';
    $data_final = '2023/12/06';

    //timestamp
    //01/01/1970 -calcula a diferença em segundos entre datas -2023-12-06  

    $time_inicial = strtotime($data_inicial); #converter data_inicial
    $time_final = strtotime($data_final);



    echo $data_inicial . ' = '. $time_inicial; #imprime a diferenca entre as datas em segundo
    echo '<br>';
    echo $data_final . ' = ' . $time_final;  #imprime a diferenca entre as datas em segundo
      
    $diferenca_times = abs($time_final - $time_inicial);

    echo '<br>';
    echo 'A diferença de segundos entre a data inicial e final é '. $diferenca_times;

    $segundo_exitem_dia = 24*60*60; 

    echo '<br>';
    echo 'Umdia possui ' . $segundo_exitem_dia . ' segundos ';

    $diferenca_dia_entre_as_datas = $diferenca_times / $segundo_exitem_dia;

    echo '<br>';
    echo 'A diferença em dias é: '.$diferenca_dia_entre_as_datas;



    ?>



</body>

</html>
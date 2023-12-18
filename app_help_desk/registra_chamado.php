<?php 

   session_start();


   //trabalhando na montagem do texto
   $titulo = str_replace("#","-", $_POST["titulo"]);
   $categoria = str_replace("#","-", $_POST["categoria"]);
   $descricao = str_replace("#","-", $_POST["descricao"]);


   //implode('#', $_POST);
   //definir o que vai ser escrito no arquivo
   //  PHP_EOL , faz pular linhas no arquivo a cada chamado
   $texto = $_SESSION['id'] .'#'. $titulo .'#' . $categoria . '#' . $descricao . PHP_EOL;

   //abrir um arquivo
   $arquivo = fopen('../../../app_help_desk/arquivo.txt', 'a');

    //escrevendo em um arquivo
   fwrite($arquivo, $texto);

   fclose($arquivo);//fechar arquivo
   //echo $texto;

   header('Location: abrir_chamado.php');

?>


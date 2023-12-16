<?php 
   session_start();

   if (!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] != 'SIM') {
    header("Location: index.php ?login=erro2");//força um redirecionamento caso de um 
    }

?>

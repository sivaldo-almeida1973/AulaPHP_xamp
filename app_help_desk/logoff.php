<?php 
  session_start();

  /*
  echo"<pre>";
  print_r($_SESSION);
  echo"</pre>";


  //remover indices do array de sessão
  //unset()

  unset($_SESSION["x"]); // para remover o indice se apenas existir

  echo"<pre>";
  print_r($_SESSION);
  echo"</pre>";


  //destruir a variavel de sessão
  //session_distroy()

  session_destroy();  //será destruida 
  //forçar um redirecionamento
  
  echo"<pre>";
  print_r($_SESSION);
  echo"</pre>";

  */

  session_destroy();
  header("Location: index.php");


?>
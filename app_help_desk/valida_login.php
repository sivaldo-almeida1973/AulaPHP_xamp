<?php 
   //instrução de inicializacao de seção
   session_start(); 



  //variavel que verifica se a autenticação foi realizada
  $usuario_autenticado = false;

  //usuarios do sistema
  $usuarios_app = array(
    array("email"=> "adm@teste.com.br","senha"=> "123456"),
    array("email"=> "user@teste.com.br","senha"=> "abcd"),
    
    
  );

  /*
  echo '<pre>';
  print_r($usuarios_app);
  echo '</pre>';
  */

  foreach ($usuarios_app as $user) {
    
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
      $usuario_autenticado = true;
     
    }
   

  }

  if ($usuario_autenticado) {
    echo "Usuario autenticado";
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['x'] = 'um valor';
    $_SESSION['y'] = 'outro valor';
    header("Location: home.php ?login=erro");//força um redirecionamento
  } else {  
    $_SESSION['autenticado'] = 'NAO';
    header("Location: index.php ?login=erro");//força um redirecionamento caso de um erro
  }
  /*
  print_r($_GET);

  echo"<br>";

  echo $_GET["email"];
  echo "<br>";
  echo $_GET["senha"];
  */

  /*
  print_r($_POST);
  echo"<br>";

  echo $_POST["email"];
  echo "<br>";
  echo $_POST["senha"];
  */
?>
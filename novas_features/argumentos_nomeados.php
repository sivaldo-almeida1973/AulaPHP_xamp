<?php 

    function sendamail($destinatarios = "" , $cc = "", $assunto="", $mensagem = "") {
      echo"Destinatarios: ".$destinatarios ."<br>" ;
      echo "CC:".$cc ."<br>";
      echo "Assunto:".$assunto ."<br>";
      echo "Mensagem:". $mensagem."<br>";
    }

    sendamail( 
      destinatarios:"vieiralmeida.com@hotmail.com", 
      assunto:"Argumentos Nomeados",
      mensagem:"Dominando a feature de argumentos nomeados do PHP 8"
    );

    echo"<hr>";


    /* convecional -> respeitando a ordem dos parametros*/ 
    sendamail( 
      "vieiralmeida.com@hotmail.com", 
      "teste@teste.com.br",
      "Argumentos Nomeados",
      "Dominando a feature de argumentos nomeados do PHP 8"
    );

    echo"<hr>";

    sendamail( 
      "vieiralmeida.com@hotmail.com", 
      "Argumentos Nomeados",
      "Dominando a feature de argumentos nomeados do PHP 8"
    );



?>
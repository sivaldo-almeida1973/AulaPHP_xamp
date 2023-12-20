<?php 
    
    //tente(try) pegar(catch) finalmente (finally) lançar (throw)

    try {

      echo"<h3> **try***</h3>";

        // $sql = 'select * from clientes';
        // mysql_query($sql);   //erro

      if(!file_exists(' require_arquivo_a.php')) {
        throw new Exception('O arquivo em questão deveria esta disponivel
        as ' . date('d/m/Y H:i:s') . ' mas não estava.Vamos seguir em frente.');
      }

    }catch (Error $e) {

        echo"<h3> **catch do Error***</h3>";
        echo '<p style="color:red">' .$e . '</p>';
        //armazenando esse erro em banco de dados

    } catch (Exception $e) {
        
        echo"<h3> **catch Exception***</h3>";
        echo '<p style="color:red">' .$e . '</p>';
        //armazenando esse erro em banco de dados


    } finally {  //opcional (finally)

        echo"<h3> **finally***</h3>";

    }



?>
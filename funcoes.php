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
    //funcao do tipo void, porque não tem um retorno
       function exibirBooasVindas() {
          echo 'Bem-vindo ao curso PHP!<br>';
       }
      //chamada da função
       exibirBooasVindas();


       //funcao com retorno
       function calculaAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
       }

       $resultado = calculaAreaTerreno(100,100);
      echo $resultado;
     

     
    ?>
    
     

  </body>
</html>
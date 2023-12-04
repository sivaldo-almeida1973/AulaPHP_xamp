<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
  <body>
      <?php
        $parametro = 'abc';

        switch ($parametro) {
            case 1:
              echo 'Entrou no case 1';
              break; #so para se tiver break, caso contrario executa tudo abaixo

            case 'abc':
              echo 'Entrou no case ' .$parametro;
              break;
              
            case false:
              echo 'Entrou no case 3';
              break;

            default:
              echo 'Entrou no bloco default';
              break;
        }
        


      ?>

  </body>
</html>
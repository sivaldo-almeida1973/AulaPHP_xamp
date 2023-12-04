<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
  <body>
      <?php
          // Regra de negocio
          $usuario_tem_cartao_loja = true ;
          $valor_compra = 300 ;  

          $valor_frete = 50 ; #se não atender requisitos de frete gratis
          $recebeu_desconto_frete = true ;


          if ($usuario_tem_cartao_loja && $valor_compra >= 400) {
              $valor_frete = 0;
              

          }else if($usuario_tem_cartao_loja && $valor_compra >= 300){
              $valor_frete = 10;
              

          }else if($usuario_tem_cartao_loja && $valor_compra >= 100){
            $valor_frete = 25;
            $recebeu_desconto_frete = true ;
        } else {
            $recebeu_desconto_frete = false ;
        }


       ?>

          <h1>Detalhes do pedido</h1>

          <p>Possui cartão da loja?

            <?php
                if ($usuario_tem_cartao_loja == true) {
                    echo"SIM";
                } else {
                  echo "NÂO";
                }

            ?>
      </p>
          
        <p>Valor da compra: <?= $valor_compra ?> </p>

        <p>Recebeu desconto no frete?
        
          <?php
                if ($recebeu_desconto_frete == true) {
                    echo"SIM";
                } else {
                  echo "NÂO";
                }
          ?>
        </p>

        <p>Valor da frete:<?= $valor_frete ?> </p>

  </body>
</html>
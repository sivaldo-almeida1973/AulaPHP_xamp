<?php 
   
    require "../bibliotecas/lib1/lib1.php";
    require "../bibliotecas/lib2/lib2.php";


    // use B\Cliente;

    // $c = new Cliente();
    // print_r($c);
    // echo $c->__get('nome');

    //processo de importação
    use A\Cliente as C1;
    use B\Cliente;
     //C1 é um apelido para evitar conflito
    $c = new C1();
    print_r($c);
    echo $c->__get('nome');


    $c = new Cliente();
    print_r($c);
    echo $c->__get('nome');

?>
<?php
    require 'contaCorrente.php';
    // atribuindo novo objeto partindo da classe contaCorrente
    // o new está sendo capturado pelo construct
    $conta = new ContaCorrente(1000);

    $conta->sacar(1001);
    echo "Saldo = ".$conta->consultarSaldo();
    //var_dump($conta);
    die;
    ?>


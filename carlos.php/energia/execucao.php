<?php

require_once("modelo/Residencial.php");
require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");
require_once("modelo/IConsumidorEnergia.php");


    $cosumiu = new Residencial;
    $cosumiu = new Comercial;
    $cosumiu = new Industrial;

do {
    echo "\n\n------MENU------\n";
    echo "1- Residencial!\n";
    echo "2- Comercial\n";
    echo "3- Industrial\n";
    echo "0- Sair!\n";
    $opcao = readline("Informe a opção: ");

    echo "\n";
    $cosumiu = null;
    switch ($opcao) {
        case 1:
            $cosumiu = new Residencial;
            break;

        case 2:
            $cosumiu = new Comercial;
            break;

        case 3:
            $cosumiu = new Industrial;
            break;

        default:
            echo "Opção Invalida!\n";
            break;

    }

if($cosumiu != null){
    $cosumiu->setconsumo(readline("Informe o consumo: "));

    echo "O valor da sua fatura é R$: " . $cosumiu->getValorFatura() . "\n";
}

} while ($opcao != 0);
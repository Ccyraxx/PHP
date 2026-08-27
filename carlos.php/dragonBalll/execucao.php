<?php

require_once("modelo/Bills.php");
require_once("modelo/Whis.php");
require_once("modelo/Zeno.php");
require_once("modelo/IGuerreiro.php");

$dragon = new Bills;
$dragon = new Whis;
$dragon = new Zeno;
$dragon = new IGuerreiro;

do {
    echo "\n\n------MENU------\n";
    echo "Escolhar seu pergonagem\n";
    echo "1- Bills\n";
    echo "2- Whis\n";
    echo "3- Zeno\n";
    echo "0- Sair!\n";
    $opcao = readline("Informe a opção: ");

    echo "\n";
    $dragon = null;
    switch ($opcao) {
        case 1:
            $dragon = new Bills;
            break;

        case 2:
            $dragon = new Whis;
            break;

        case 3:
            $cosumdragoniu = new Zeno;
            break;

        default:
            echo "Opção Invalida!\n";
            break;

    }

    

} while ($opcao != 0);
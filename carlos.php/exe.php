<?php


function escolher(){

    echo "1-exe\n2-exe1\n3-exe2\n4-exe3\n5-exe4\n6-exe5\n";
    $escolha = readline("Informe quais das funções existente você deseja?\n");
    if ($escolha == "1") {
            exe();
        }else if ($escolha == "2") {
                exe1();
        }   else if ($escolha == "3") {
                    exe2();
            }   else if ($escolha == "4") {
                        exe3();
                }   else if ($escolha == "5") {
                            exe4();
                    }   else if ($escolha == "6") {
                            exe5();
                            }
    }
function exe(){

    for ($ano=1980; $ano <= 2024; $ano++) { 
        if ($ano % 4 == 0 && $ano % 100 != 0 ||
        $ano % 4 == 0 && $ano % 400 != 0) {
        echo $ano . "\n";
        sleep(1);
        }
    }
    escolher();
}
function exe1(){

    $vez = 10;

    while ($vez > 0) {
        $numeros = Readline ("Digite um numero: ");

        if ($numeros >0) {
            echo "$numeros é positivo.\n";
        } else {
            echo "$numeros é negativo.\n";
        }
        $vez--;

    }
    escolher();
}
function exe2(){

    $final = 0;
    $num = readline("Informe um numero!");

    while ($num >= $final) {
        echo $num . "\n";
        sleep(1);
        $num--;
    }
    escolher();

}
function exe3(){


    $vez = 5;

    while ($vez >= 0) {

        $nome = readline("Informe seu nome!\n");
        $altura = readline("Informe sua altura!\n");
        $peso = readline("Informe seu peso!\n");

        $IMC = $peso/($altura*$altura);

        echo "Está pessoa esta com:" . $IMC . "\n";

        $vez--;
    }
    escolher();
}
function exe4(){

       $vez = 10;

    while ($vez > 0) {
        $numeros = Readline ("Digite um numero: ");

        if ($numeros >0) {
            echo $numeros*2 . "\n";
        } else {
            echo $numeros*3 . "\n";
        }
        $vez--;

    } 
    escolher();
}
function exe(){
}

escolher();
<?php

function primo($num){

$divisores = 0;

for ($i=($num / 2); $i >= 1; $i--) {
    $multi = $num * $i;

    if ($multi == 0) {
z
        $divisores++;
    }
}
if ($divisores == 1) {
    return true;
} else {
    return false;
}
}

$num = 2;

while ($num >= 2) {
    
    $num = readline("Informe um numero: ");

    if (primo($num)) {
        echo "$num é primo.\n";
    } else {
        echo "$num não é primo.\n";
    }
}

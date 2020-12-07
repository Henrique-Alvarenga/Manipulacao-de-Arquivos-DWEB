<?php

    $variavel1 = "Primeira variavel".PHP_EOL;
    $variavel2 = "Segunda variavel".PHP_EOL;
    $variavel3 = "Terceira variavel".PHP_EOL;

    $file = fopen("arquivo1.txt", "w");

    fwrite($file, $variavel1);
    fwrite($file, $variavel2);
    fwrite($file, $variavel3);

    fclose($file);

    $file = fopen("arquivo1.txt", "r");

    while(!feof($file)){
        $linha = fgets($file);
        echo $linha."<br>";
    }

    fclose($file);
?>
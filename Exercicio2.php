<?php
    
    function recebeVetor($materias, $file){
        foreach($materias as $valor){
            fwrite($file, $valor.PHP_EOL);
        }
    }

    $materias = array ("Matematica", "Historia", "DWEB", "Geografia", "POO");
    
    $file = fopen("arquivo2.txt", "w");

    recebeVetor($materias, $file);
    recebeVetor($materias, $file);

    fclose($file);

    copy("arquivo2.txt", "destino2.txt");
    unlink("arquivo2.txt");
    
    $file = fopen("destino2.txt", "r");

    while(!feof($file)){
        $linha = fgets($file);
        echo $linha."<br>";
    }

    fclose($file);
?>
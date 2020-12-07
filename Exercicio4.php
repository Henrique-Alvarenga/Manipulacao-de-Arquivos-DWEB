<?php

    function recebeAgenda($agenda, $file){
        foreach($agenda as $nome => $numero){
            fwrite($file, "Nome: $nome".PHP_EOL."Numero: $numero".PHP_EOL."<br>");
        }
    }
    
    $agenda = array("Lucas" => "1111-1111",
                    "Daniel" => "2222-2222",
                    "Ana" => "3333-3333",
                    "Pedro" => "44444-4444",
                    "Guilherme" => "6666-6666",
                    "Isabela" => "7777-7777",
                    "Joao" => "8888-8888",
                    "Hilton" => "9999-9999",
                    "Edison" => "0000-0000");

    $file = fopen("arquivo4.txt", "w");

    recebeAgenda($agenda, $file);
    
    fclose($file);

    $file = fopen("arquivo4.txt", "r");

    while(!feof($file)){
        $linha = fgets($file);
        echo $linha."<br>";
    }
    

    fclose($file);
?>
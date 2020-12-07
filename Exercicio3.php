<?php
    
    function valorCorrigido($tipo, $valor, $meses, $file){
        
        $valorCorrigido = array();
        
        for($i = 0; $i < 5; $i++){
            
            if($tipo[$i] == 1){
                $valorCorrigido[$i] = $valor[$i] * 1.03 * $meses[$i];
            }
            else {
                $valorCorrigido[$i] = $valor[$i] * 1.04 * $meses[$i];
            }
            
            fwrite($file, 
                   "Tipo: $tipo[$i]".PHP_EOL."<br>".
                   "Valor do investimento: R$ $valor[$i]".PHP_EOL."<br>".
                   "Quantidade de meses: $meses[$i] meses".PHP_EOL."<br>".
                   "Valor corrigido R$ $valorCorrigido[$i]".PHP_EOL."<br>".
                   "<br><br>".PHP_EOL);
        }
    }

    $tipo = array(1, 2, 1, 2, 1);
    $valor = array(100, 200, 300, 400, 500);
    $meses = array(5, 6, 7, 8, 9);

    $file = fopen("arquivo3.txt", "w");

    valorCorrigido($tipo, $valor, $meses, $file);

    fclose($file);

    $file = fopen("arquivo3.txt", "r");
        
        while(!feof($file)){
            $linha = fgets($file);
            echo $linha;
        }
        
        fclose($file);
?>
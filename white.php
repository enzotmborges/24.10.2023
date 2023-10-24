<?php
    $contagem = 0;
    
    while($contagem <= 42){
        if ($contagem % 3 == 0){
            if ($contagem % 2 == 0){
                echo "$contagem === contagem";
                echo "<hr>";
            }
        }
        $contagem = $contagem+1;
    }
    echo "Fim";
?>
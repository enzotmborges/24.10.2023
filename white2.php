<?php
    $tabuada = 1;
    $multiplicador = 1;

    echo "Tabuada de $tabuada";
    echo "<hr>";
    
    while($multiplicador <= 10){
        echo "$tabuada x $multiplicador = " . ($tabuada * $multiplicador);
        echo "<br>";
        $multiplicador++;
    }
?>
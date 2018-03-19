<?php

     $n=15;

    for ($i=1; $i<=$n; $i++) {
        $suma=0;
        for ($j = 1; $j < $i; $j++)
            if ($i%$j == 0) {
                $suma = $suma +$j;
            }
        if ($suma == 1)  {
            echo "prawda";
            return;
        }



    }

?>
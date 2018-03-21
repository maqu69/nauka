<?php

     $n=50; // liczba ktora podajemy aby sprawdzic czy jest doskonala

     for ($i=1; $i<=$n; $i++) {
         $suma = 0;
         for ($j = 1; $j < $i; $j++)
             if ($i % $j == 0) {
                 $suma = $suma + $j;
             }
         if ($suma == $n) {
             echo "liczba jest doskonala";
             return false;
         }


     }

?>
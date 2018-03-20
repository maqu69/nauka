<?php

     $n=496;

     for ($i=1; $i<=$n; $i++) {
         $suma = 0;
         for ($j = 1; $j < $i; $j++)
             if ($i % $j == 0) {
                 $suma = $suma + $j;
             }
         if ($suma == $n) {
             echo "Liczba $n jest liczba doskonala";
             return false;
         }


     }

?>
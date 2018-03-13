<?php


$owoce = array ("d"=>"mango", "a"=>"papaja", "b"=>"jablko", "c"=>"aronia");

    ksort ($owoce);
    reset ($owoce);

    while(list($klucz, $wartosc)= each  ($owoce))
        {
            echo "$klucz: $wartosc<br>";


        }
?>
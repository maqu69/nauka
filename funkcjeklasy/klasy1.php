<?php
class jablko {
    var $kolor = "czerwony"; // wartosci nei musimy dopisywac, jesli podajemy w funkcji zmienne $jakie, $ilewazy
    var $waga = 5; // wartosci nei musimy dopisywac, jesli podajemy w funkcji zmienne $jakie, $ilewazy

    function jablko($jakie, $ilewazy){
        $this->kolor = $jakie;
        $this->waga = $ilewazy;
    }
    function ugryz(){
        $this->waga--;
    }
}
$ojablko = new jablko('czerwone', '10' );
echo ($ojablko->kolor." ".$ojablko->waga.'<br>');

$ojablko->ugryz();
echo ($ojablko->kolor." ".$ojablko->waga.'<br>');




?>
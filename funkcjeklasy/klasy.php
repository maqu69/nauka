<?php
// pcozatek klasy koszyk

class koszyk {
    // Definicja zmiennej - tablicy asocjacyjnej zawierającej numery artykułów i
    // ich ilość
var $artykuly;

function dodaj($numer, $ilosc){

    $this->artykuly["$numer"] += $ilosc; //metoda dodajaca podana ilosc artykulow do koszyka
}
function usun($numer, $ilosc){ //metoda usuwajaca podana ilosc artykulwo  ksozyka
    if($this->artykuly["$numer"]>$ilosc)
        $this->artykuly["$numer"]-=$ilosc;
    else
        $this->artykuly["$numer"]=0;
}
//metoda wyswietlajaca zawartosc koszyka

function wyswietl(){
    while(list($k, $v) = each($this->artykuly))
        if($v>0)
            echo "Artykul nr $k - $v sztuk<br>";
}

}

//przyklad wykorzystania

$koszyk = new Koszyk;
$koszyk->dodaj('20', 2);
$koszyk->dodaj('12', 4);
$koszyk->dodaj('20', 5);
$koszyk->usun('12', 4);
$koszyk->wyswietl();
?>

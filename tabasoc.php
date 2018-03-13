<?php


echo "-------tablica asocjacyjna--------<br>";

$tablica["imie"] = "jan";
$tablica["nazwisko"] = "kowalski";
$tablica["adres"] = "polna 1";


echo $tablica["imie"]." ".$tablica["nazwisko"]." ul. ".$tablica["adres"]."<br>";


$tbl[]=1;
$tbl[]=2;
$tbl[]=3;
$tbl[]=4;
$tbl[]=5;

for ($x=0; $x < 5; $x++ ) { //petla wykona sie 4 razy 0, 1, 2, 3, 4

    echo $tbl[$x];

}

?>
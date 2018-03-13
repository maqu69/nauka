<?php

$tbl[]=1;
$tbl[]=2;
$tbl[]=3;
$tbl[]=4;
$tbl[]=5;

for( $x = 0, $cnt = count($tbl); $x < $cnt; $x++ ){

    echo "$tbl[$x]<br>";

}

$tablica["imie"] = "Jan";
$tablica["nazwisko"] = "Kowalski";
$tablica["adres"] = "Polna 1";

while( list($klucz, $wartosc) = each($tablica) )
    echo "$klucz => $wartosc<BR>";







?>
<?php
echo "PHP umożliwia zamianę ciągów na tablice i odwrotnie. Zamiana ciągu na tablicę jest bardzo przydatna jeśli zachodzi potrzeba wyciągnięcie jakiegoś fragmentu danych z ciągu";

$dane = "PHP umożliwia zamianę ciągów na tablice i odwrotnie. Zamiana ciągu na tablicę jest bardzo przydatna jeśli zachodzi potrzeba wyciągnięcie jakiegoś fragmentu danych z ciągu";
echo "<br>";

$tablica = explode (" ", $dane); //umozliwia nam wyciagniecie danych z konkretnego pliku/tekstu/kodu

echo $tablica[1]."<br>";
echo $tablica[5]."<br>";

echo count($tablica). ", tyle nzajduje sie spacji w tekscie"; //policzylismy ile jest spacji w tekscie $dame
?>
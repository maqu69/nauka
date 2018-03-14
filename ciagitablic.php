<?php
echo "PHP umożliwia zamianę ciągów na tablice i odwrotnie. Zamiana ciągu na tablicę jest bardzo przydatna jeśli zachodzi potrzeba wyciągnięcie jakiegoś fragmentu danych z ciągu";

$dane = "PHP umożliwia zamianę ciągów na tablice i odwrotnie. Zamiana ciągu na tablicę jest bardzo przydatna jeśli zachodzi potrzeba wyciągnięcie jakiegoś fragmentu danych z ciągu";
echo "<br>";

$tablica = explode (" ", $dane); //zamienia ciag na tablice

echo $tablica[1]."<br>";
echo $tablica[5]."<br>";

echo count($tablica). ", tyle znajduje sie spacji w tekscie<br>"; //policzylismy ile jest spacji w tekscie $dame



$uzytkownik = "Piotr,Nowak,Warszawa,Informatyk";
$tablica = explode(",", $uzytkownik);

echo "$tablica[0] <br>";
echo "$tablica[1] <br>";
echo "$tablica[2] <br>";
echo "$tablica[3] <br>";


echo "-----funkcja implode-----<br>";

$tab = array("Polska","Niemcy","Francja");
$ciag = implode(", ",$tab); // zamienia tablice na ciag

echo $ciag;


?>

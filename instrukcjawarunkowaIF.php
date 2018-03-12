<?php
echo "-----------------------instrukcje warunkowe-------------------<br>";

$aa = 2;
$bb = 5;
$cc = 1;

if($aa > $bb)
    echo "$aa jest większe od $bb<br>";

elseif ($bb > $cc)
    echo "$bb jest większe od $cc<br>";
else
    echo "$cc jest większe od $aa i $bb<br>";

if($aa)
    echo "Zmienna $aa ma wartość większą od zera<br>";




$a = 6;
$b = 5;
$c = 1;

if($a > $b) {
    echo "$a jest wiekszy od $b ";

    if ($a > $c)
        echo "i od $c<br>"; #Powinien zostać wyświetlony napis "6 jest większe od 5 i od 1"
}

echo "-----grupowanie warunkowe-------<br>";

$z = 6;
$x = 5;
$ccc = 7;
$v = 6;
$bbb = 6;

if (($z > $x || $z > $ccc) && $v == $bbb)
    echo 'Zmienna $z jest większa od $x a zmienna $v jest równa $bbb, '.
        'więc ten tekst pokaże się.';
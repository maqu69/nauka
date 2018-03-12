
<?php

    echo "siema<br>"; #komentarz do linijki

    echo "tekst tekst<br>";  /*linijka komentarza
            dalej linijka komentarza
            tu sie konczy */
    $nazwa1 = 1; //do zmiennej "nazwa1" jest przypisana 1
    $nazwa2 = 2; //do zmiennej "nazwa2" jest przypisana 2
    echo "1+0=$nazwa1<br>";
    echo "1+1=$nazwa2<br>";
    echo '$nazwa1<br>';
    echo "$nazwa2<br>";


    echo "------------- Typy zmiennych----------------<br>";
        $a = 10.5; #liczy dziesietne

    echo "Hania ma $a lat<br>";
        settype($a, "integer");
    echo "Hania ma $a lat<br>"; #po zmianie zmiennej przez settype


    echo "-------------- Definiowanie stałych----------------<br>";

    define("STALA", "Hello World!");
    echo "STALA<br>";


    echo "----------------Operatory------------------<br>";



    echo "----------------operator przypisywania----------<br>";

    $ab = 10;
    echo "$ab<br>";

    $ab /= 3;
    echo "$ab<br>";

   echo "-----------------operator porownania<br>";

    //$a == $b sa rowne. Prawda jesli $a i $b sa rowne
    //$a != $b sa nie rowne. Prawda jesli $a i $b sa rozne
    //$a < $b jest mniejsza. Prawda jesli $a jest mniejsza od $b
    //$a > $b jest wieksza. Prawda jesli $a jest wieksze od $b
    //$a <= $b jest mniejsze badz rowne. Prawda jesli $a jest mniejsza badz rowny od $b
    //$a >= $b jest wieksza badz rowna. Prawda jesli $a jest wiekszy badz rowny od $b

    echo "----------Operatory inkrementacji i dekrementaci<br>";

    echo "Postinkrementacja<br>";
    $abc = 5;
    echo "Powinno być 5: " . $abc++ . "<br>";
    echo "Powinno być 6: " . $abc   . "<br>";
    echo "Preinkrementacja<br>";
    $abc = 5;
    echo "Powinno być 6: " . ++$abc . "<br>";
    echo "Powinno być 6: " . $abc  . "<br>";

    echo "Postdekrementacja<br>";
    $abc = 5;
    echo "Powinno być 5: " . $abc-- . "<br>";
    echo "Powinno być 4: " . $abc   . "<br>";

    echo "Predekrementacja<br>";
    $abc = 5;
    echo "Powinno być 4: " . --$abc . "<br>";
    echo "Powinno być 4: " . $abc   . "<br>";

    echo "---------------------operator logiczne--------------<br>";
      /*$a && $b 	AND 	Prawda, jeśli $a i $b są prawdą
        $a || $b 	OR  	Prawda, jeśli $a lub $b są prawdą
        ! $a 	    NOT 	Prawda, jeśli $a nie jest prawdą
      */
    echo "---------------------operator ciagu-----------------<br>";
    $zmienna1 = "Wartosc zmiennej 'zmienna2' to ";
    $zmienna2 = 5;

    echo "$zmienna1.$zmienna2 <br>";














    ?>


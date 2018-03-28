<?php



function exchange($val){ // val = zlotowki
    $plntousd = 3.40;

    static $counter=0;
            $counter++;
    $dolars=$val*$plntousd;


    echo "Wymiana nr $counter dla $val złotówek po kursie $plntousd da $dolars dolarów";

}


 exchange( 30);





?>
<?php

function rentcost($days){
    echo "wynajem trwa 1 dzien, koszt pobytu 200zl";
}


echo rentcost();




function wypisz($a){
    echo 'argument z listy argumentow $a = '.$a;
    echo 'ponadto mamy '.(func_num_args()-1).'
    dodatkowych argumentów oto one :';
    for($i=1; $i < func_num_args(); ++$i){
        echo func_get_arg($i);
    }
}
wypisz(1,2,3,4,5,6);




function rentCost($days){
    $days = func_get_args();
    if ($days=1)
        echo "wynajem pokoju na 1 dobe wynosi 200zl";
    else ($days=2  $days=3)
        echo

}











?>









?>
















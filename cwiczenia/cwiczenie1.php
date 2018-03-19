<?php



function wypisz($a){
    echo 'argument z listy argumentow $a = '.$a;
    echo 'ponadto mamy '.(func_num_args()-1).'
    dodatkowych argumentów oto one :';
    for($i=1; $i < func_num_args(); ++$i){
        echo func_get_arg($i);
    }
}
wypisz(1,2,3,4,5,6);







?>

















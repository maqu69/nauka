<?php




function exchange($val){ // val = zlotowki
    $plntousd = 3.40;
    return $dolary = $plntousd*$val;

}

echo exchange( 50);

?>
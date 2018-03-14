<?php

for($x=1; $x<=100; $x++)   {

    if ($x % 2 !=0)
        continue;
        echo "$x ";

}

for($a=2; $a<=10; $a+=2) {

    echo "a = $a, ";
}



$b=1;
while($b<10) {

    if($b ==5){
        $b++;
        continue;
    }
    echo "<br>".$b;
    $b++;
}
echo "<br>---------<br>";

while($b<10) {

    if ($b == 5) {
        break; // instrukcja break przy wartosci = 5 konczy petle
    }
    echo "$b";
}

?>
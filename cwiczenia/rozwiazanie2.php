<?php

function getDividersSum($n)
{
    $sumDividers = 0;
    for ($divider = 2; $divider < $n; $divider++) {
        if ($n % $divider == 0) {
            $sumDividers += $divider;
        }
    }
    return $sumDividers + 1;
}

function perfectNumber($n)
{
    return ($n == 1) ? true : $n == getDividersSum($n);
}

echo perfectNumber(1);
echo perfectNumber(6);
echo perfectNumber(28);
?>






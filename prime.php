<?php
function primeNumber($num)
{
    $check = 0;
    for ($i = 2; $i <= $num-1; $i++) {
        if ($num % $i == 0) {
            $check = 1;
            break;
        }
    }
    if ($check == 0) {
        echo "$num.is a Prime Number";
    } else {
        echo "$num.is not a  Prime Number";
    }
}
echo primeNumber(11);

?>
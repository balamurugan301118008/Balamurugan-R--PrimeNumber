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
        echo "prime";
    } else {
        echo "not prime";
    }
}
echo primeNumber(11);

?>
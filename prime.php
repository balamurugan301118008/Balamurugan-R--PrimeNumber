<?php
function primeNumber($num)
{

    if($num > 0){
        $check = 0;
    for ($i = 2; $i <= $num - 1; $i++) {
        if ($num % $i == 0) {
            $check = 1;
            break;
        }
    }
    if ($check == 0) {
        echo "$num is a Prime Number"."\n";
    } else {
        echo "$num is not a  Prime Number"."\n";
    }
    }
    else{
        echo "$num empty value so please put greater 0 and 1 values"."\n";
    }
    
}
echo primeNumber(11);

?>
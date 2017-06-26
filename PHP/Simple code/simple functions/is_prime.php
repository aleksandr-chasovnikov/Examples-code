<?php

function is_prime($n)
{
    for($i=2; $i <= sqrt($n); $i++) {
        if($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$list = range(1,100);

foreach($list as $l) {
	if( is_prime($l) ) {
		echo $l . '- простое число';
	}
}

// sqrt() - если число - не простое, то один из делителейб кроме 1, будет находиться до корня данного числа, - дальше проверять смысла нет
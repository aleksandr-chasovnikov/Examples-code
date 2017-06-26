<?php

$arr = ['2', '4', '23', '21', '3'];

$max = $arr['0'];

foreach($arr as $v) {

	if($max<$v) {
		$max = $v;
	}
}

echo $max;

assert(3<2);
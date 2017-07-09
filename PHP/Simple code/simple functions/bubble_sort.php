<?php 

function bubble_sort(&$array) {

	for ($i=0; $i<count($array); $i++) {

		for ($y=($i+1); $y<count($array); $i++) {

			if ($array[$i] > $array[$y]) {

				$tmp = $array[$i];
				$array[$i] = $array[$y];
				$array[$y] = $tmp;
				// list($array[$i], $array[$y]) = [$array[$y], $array[$i]];
			}
		}
	}
}

$arr = range(0, 10);
shuffle($arr);

bubble_sort($arr);
print_r($arr);
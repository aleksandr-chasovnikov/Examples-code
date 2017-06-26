<?php
// 0 + 1 + 1 + 2 + 3 + 5 + 8 + 13 + ...

function fib($y) {

	if ($y <= 3) {
		return $y;
	}
	return fib($y-1) + fib($y-2);
}
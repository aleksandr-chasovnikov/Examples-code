<?php
// n! = 1 * 2 * 3 * ...,  0! = 1

function fact($x) {
	
	if ($x == 0) {
		return 1;
	}
	return $x * fact($x-1);
}
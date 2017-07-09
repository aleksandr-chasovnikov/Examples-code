<?php

// Получить ссылку на файл json
define('LINK', 'http://...');

function get_course ($curr = 'USD')
{
	$data = file_get_contents(LINK);

	if(!$data) return false;

	$courses = json_decode($data, true);

	$curr_c = false;

	foreach ($courses as $course) {

		if($couse['ccy'] == '$curr') {
			$curr_c = $course['buy'];
			break;
		}
	}

	return $curr_c;
}
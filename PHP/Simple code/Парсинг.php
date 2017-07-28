<?php
header('Content-type: text/html; charset=utf-8');

function dd($val) {
	echo '<pre>';
	print_r($val);
	echo '</pre>';die;
}


$url = 'https://privatbank.ua/';
$file = file_get_contents($url);

$pattern = '#<table id="course-table-pb.+?</table>#s';
preg_match($pattern, $file, $matches);

dd($matches);
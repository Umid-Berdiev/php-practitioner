<?php

function dd($data) {
	echo '<pre>';

	die(var_dump($data));

	echo '</pre>';
}

function views($name, $data = []) {
	extract($data);
	return require "app/views/$name.view.php";
}

function redirect($url, $status_code = 303) {
	header("Location: /$url", true, $status_code);
	// die();
}

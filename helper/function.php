<?php

if (!function_exists('dd')) {
	function dd($content)
	{
		echo '<pre>';
		var_dump($content);
		echo '</pre>';
		die;
	}
}

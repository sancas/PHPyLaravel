<?php
	
	require "config.php";
	require "helpers.php";

	$language = "PHP";
	$confidencial = "wow suck private very confidential";
	$titulo = "MejorandoPHP";

	//Llamando una funcion
	view("view", compact('language', 'titulo'));
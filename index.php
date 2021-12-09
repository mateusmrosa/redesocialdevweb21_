<?php
	session_start();
	require("vendor/autoload.php");

	define("INCLUDE_PATH_STATIC", "http://localhost/redesocialdevweb21_/ProjetoModelo/Views/pages/");
	define("INCLUDE_PATH", "http://localhost/redesocialdevweb21_/");

	$app = new ProjetoModelo\Application();
	$app->run();

?>
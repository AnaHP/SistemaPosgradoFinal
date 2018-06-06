<?php
	date_default_timezone_set('America/Mexico_City');
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');

	//define( 'URL' ,"http://148.220.52.120/".basename(getcwd())."/");
	define( 'URL' ,"http://localhost/".basename(getcwd())."/");

	define( 'CSS' , URL."public/css/");
	define( 'JS' , URL."public/js/" );
	define( 'IMG', URL."public/images/");
	define( 'LIB', URL."libs/");

	//Crean el archivo de config.js
	//Constantes de la base de datos
	define( 'DB_HOST' , '127.0.0.1');
	define( 'DB_USER' , 'root');
	define( 'DB_PASS' , '');
	define( 'DB_NAME' , 'posgrado1');

	define( 'DB_CHARSET' ,'utf8');

	define( 'ALGOR', 'sha512');
	define( 'KEY', 'dWVjbzIxrdNw==');
	define( 'ID_SESSION', 'posgrado1');

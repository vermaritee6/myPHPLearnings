<?php

//This is Setting file

################ All Constants ##########################
define('HOST','localhost:3308');
define('USER','root');
define('PASSWORD','');
define('DBNAME','app-2021');
define('BASE_URL','http://localhost:8000/');

################ All Constants ##########################
return [
	
	'db:config'=>[
		'host'=>'localhost:3308',
		'user'=>'root',
		'password'=>'',
		'dbname'=>'app-2021',
	],
	
	'connection:debug' => false,
];

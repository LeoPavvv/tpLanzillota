<?php
define('DB_HOST','127.0.0.1');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','materias');
define('DB_CHARSET','utf8');
function getDBConexion(){
	//va a dar la conexion a la base de datos
	return mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
}

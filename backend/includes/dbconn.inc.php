<?php
/**
 * Archivo de conexión a la base de datos.
 * 
 * Este archivo contiene los datos de conexión a la base de datos y crea una instancia de conexión a la misma.
 * 
 * @package sportixdb
 */

$host 		= "localhost";
$dbusername = "root";
$dbpassword = "rOb3rt0!";
$dbname 	= "sportixdb";
$port       = 3306;

global $mysqli;
// Crear Conexion a la base de datos
try {
	$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname, $port);
	if ($mysqli->connect_error) {
		throw new Exception("Error de conexion: " . $mysqli->connect_error);
	}
} catch (Exception $e) {
	echo "Error: " . $e->getMessage();
}
?>

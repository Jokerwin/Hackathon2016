<?php

include_once('../conexion.php');

$titulo = trim($_POST['titulo']);
$descripcion = trim($_POST['descripcion']);
$enlace = trim($_POST['enlace']);
$autor = trim($_POST['autor']);

// Realizar una consulta MySQL
$query = 'INSERT INTO apuntes (titulo, descripcion, enlace, autor) VALUES ("'.$titulo.'", "'.$descripcion.'", "'.$enlace.'", "'.$autor.'")';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());



?>
<?php

// Conectando, seleccionando la base de datos
$link = mysql_connect('us-cdbr-azure-west-c.cloudapp.net', 'b8eb1266f98eb8', '2715c26b')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('utnbook') or die('No se pudo seleccionar la base de datos');


?>
<?php
define('DB_SERVER', 'us-cdbr-azure-west-c.cloudapp.net');
define('DB_USERNAME', 'b8eb1266f98eb8');    // DB username
define('DB_PASSWORD', '2715c26b');    // DB password
define('DB_DATABASE', 'utnbook');      // DB name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>
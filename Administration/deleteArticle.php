<?php
include "../config.php";

$sqlConn = new mysqli(DBSERVERNAME, DBUSERNAME, DBPASSWORD, DBNAME);

$sql = "SET CHARACTER SET UTF8"; // SQL dotaz nastavující kódovou stránku pro komunikaci s DB serverem
$sqlConn->query($sql);

//todo

$sqlConn->close();

?>
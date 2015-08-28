<?php
// mysql hostname
$mysql_hostname = 'sandbox.alzadvocacy.org';
// mysql username
$mysql_username = 'alison';
// mysql password
$mysql_password = 'Alz.Org!';
//mysql database
$mysql_dbname = 'test';

// Database Connection using PDO
try {
$dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);

/*** set the error mode to excptions ***/
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

catch(PDOException $e)

    {
    echo $e->getMessage();
    }

?>
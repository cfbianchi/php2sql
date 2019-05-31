<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");

/*
$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
*/
$connectionInfo = array( $dbname, $dbuser, $dbpwd );
$connection = sqlsrv_connect( $dbhost, $connectionInfo);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>

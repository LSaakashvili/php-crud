<?php

$server = "localhost";
$username = "root";
$dbname = "mydb";
$pass = "";

$db = mysqli_connect($server, $username, $pass, $dbname);

if ($db->connect_error)
{
    die("Connection to MySQL failed, check your database");
}

?>
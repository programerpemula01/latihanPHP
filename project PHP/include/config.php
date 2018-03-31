<?php
global $connection;
$servername = "localhost";
$username   = "dumet";
$password   = "school";
$dbname     = "webmaster";

$connection = mysqli_connect($servername,$username,$password,$dbname);

if(!$connection){
    die("connection failed: ".mysqli_connect_error());
}
?>
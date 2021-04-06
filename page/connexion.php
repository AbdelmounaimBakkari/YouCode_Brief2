<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname="restaurant";

if(!($cnx = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)))
{
    die("failed to connect");
}
?>
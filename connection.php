<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "est_oujda";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

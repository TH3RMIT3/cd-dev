<?php
ob_start(); //Turns on output buffering
session_start();

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']); //Connection variable

if(mysqli_connect_errno())
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>

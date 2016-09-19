<?php

ini_set( "display_errors", true );
date_default_timezone_set( "Africa/Lagos" );

//database connection
function connect()
{
	$connnect = mysql_connect("localhost", "root", "") or die("Can not connect to server");
	mysql_select_db("nypfnorth", $connnect) or die("Can not connect to database");
}

//validate login
function checkLogin()
{
	session_start();
	
	if($_SESSION['userLogin'])
	{
		connect();
	}
	else
	{
		header("location:index.php");
	}
}
?>
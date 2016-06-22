<?php
//session_atart();
date_default_timezone_set("Asia/Manila");

$DBHost = "localhost";
$DBUser = "root";
$DBPass = "032119902ne1";
// $db = $location;
$db = 'online_resume';

$dbhandle = mysql_connect($DBHost, $DBUser, $DBPass);
  //or die("Couldn't connect to SQL Server on $DBHost");
  
$selected = mysql_select_db($db, $dbhandle)
  or die("Couldn't open database $DBName");
  
$today_date = date("m/d/Y");
$today_time = date("h:i:s A");
?>



<!--
<?php
/**************** MYSQL SETTINGS*******************/
$host="localhost:3306";
$databasename="airlines";
$user="root";
$pass="";
/****************MYSQL SETTINGS*******************/
$conn=mysql_connect($host,$user,$pass);
if($conn)
{
	$db_selected=mysql_select_db($databasename,$conn);                                     

	if(!$db_selected)                                                              
		{
			die("can\t use :".mysql_error());
		}
}
	else
	{
	die('not connected :'.mysql_error());
	}
?>
 -->
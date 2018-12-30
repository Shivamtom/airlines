<?php
include("con1.php");  
$c=0;

try
{
	$r=mysql_query("select * from admin where admin_id='$_POST[uid]' and admin_pass='$_POST[pw]'");
  
	if(!$r)
       {
		echo mysql_error();
	   }
	else
	   {
		while($row=mysql_fetch_row($r))
			{
			$c++;
			session_start();
			$_SESSION['name']=$row[0];
			}
	   }
  	if($c>0)
		{
			session_start();
			$_SESSION['sid']=session_id();
			header("location:securepageadmin.php");
		}

	else
		{
			echo"<script> alert('User name or Password not same') </script>";
			header("location:adminlogin.php");
		}
}

catch(Exception $e)
{
	echo $e;
}

mysql_close();

?>
 
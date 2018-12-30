<?php
include("con1.php");  
$c=0;

try
{
	$r=mysql_query("select * from register where username='$_POST[uid]' and password='$_POST[pw]'");
  
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
			header("location:securepage.php");
		}

	else
		{
			echo"<script> alert('User name or Password not same') </script>";
			header("location:register.php");
		}
}

catch(Exception $e)
{
	echo $e;
}

mysql_close();

?>
 
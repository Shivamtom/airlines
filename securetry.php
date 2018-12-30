<form method="POST" action="securepage.php">
<?php
include("con1.php");

session_start();
$name=$_SESSION['name'];
$_SESSION['name1']=$name;

if($_SESSION['sid']==session_id())
	{
		
		echo"welcome to you ".$name."<br><br>";
		echo" Your Details are as Follow ";
		
		
		$sql=mysql_query("select * from register where username='".$name."'");
	
			if(!$sql)
			{
			echo mysql_error();
			}
			else
			{
				echo"<center>";
				echo"<table border='1'><tr><td> username </td><td> first name </td><td> last name </td><td> email </td></tr>";
				while($row=mysql_fetch_array($sql))
					{
						echo"<tr><td> $row[0]</td><td> $row[3]</td><td> $row[4]</td><td> $row[5]</td></tr>";
					}
				echo"</table>";
				echo"</center>";
			}
		
	
		echo"<br>";
		echo"<br>";
		echo"<a href='logout.php'>logout </a>";
 
		
    }
 else
	{
		header("location:register.php");
	}
   
 ?>
 
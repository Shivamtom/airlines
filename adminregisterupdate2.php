<html>
<head>
<title> Indian Airlines </title>
<style>
#a1{left:0%; top:0%; width:100%; height:150%; position:absolute; background-color:#00ace6;}
    #b1{left:10%; top:10%; width:80%; height:90%; position:absolute; background-color:white;}      
#c1{left:3%; top:2%; width:95%; height:95%; position:absolute; background-color:#80bfff;}
#c2{right:10%; top:10%; width:30%; height:30%; position:absolute; background-color:lime;}


</style>
</head>
<body>
<div id="a1"><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre>


  <div id="b1">

<?php
include("con1.php");

session_start();
$name=$_SESSION['name'];
$_SESSION['name1']=$name;

if($_SESSION['sid']==session_id())
	{
		echo"<div id='c2'>"; 
		echo"welcome to you  Admin ".$name."<br><br>";
		echo"<center>";
		echo" Your Details are as Follow ";
		
		
		$sql=mysql_query("select * from admin where admin_id='".$name."'");
	
			if(!$sql)
			{
			echo mysql_error();
			}
			else
			{
				echo"<center>";
				echo"<table border='1'><tr><td> username </td><td> password</td></tr>";
				while($row=mysql_fetch_array($sql))
					{
						echo"<tr><td> $row[0]</td><td> $row[1]</td></tr>";
					}
				echo"</table>";
				echo"</center>";
			}
		
	
		echo"<br>";
		echo"<br>";
		echo"<a href='logout.php'>logout </a>";
         echo"</center>";
		
    }
 else
	{
		header("location:index.php");
	}
   
   echo"</div>";
 ?>
        
          
                          <div id="c1">		
<form method="POST" action="adminregisterupdate3.php">
<center>
						  <br>
<h3>						ENTER DETAILS TO UPDATE-</h3> 
						  <br>
<hr>
<br>
<br>

<?php
$c=0;
include("con1.php");
$str=mysql_query("select * from register where username='$_POST[rn]'");
	if(!$str)
		{
			echo mysql_error();
		}
	else
		{
			while($row=mysql_fetch_array($str))
			{
				$c++;
			}
		}
if($c>0)
{
	$str=mysql_query("select * from register where username='$_POST[rn]'");
	if(!$str)
		{
			echo mysql_error();
		}
	else
    {
     echo"<table height='50%' width='60%'>";
	while($row=mysql_fetch_array($str))
    {
    echo"<tr><td>USERNAME</td><td><input type='text' name='b1' value='$row[0]' readonly ></td></tr>";  
	echo"<tr><td>PASSWORD</td><td><input type='text' name='b2' value='$row[1]' >         </td></tr>";  
	echo"<tr><td>RE-PASSWORD</td><td><input type='text' name='b3' value='$row[2]' >         </td></tr>";  
	echo"<tr><td>FIRST NAME</td><td><input type='text' name='b4' value='$row[3]'  >         </td></tr>";  
	echo"<tr><td>LAST NAME</td><td><input type='text' name='b5' value='$row[4]' >         </td></tr>";  
	echo"<tr><td>EMAIL</td><td><input type='text' name='b6' value='$row[5]'  </td></tr>";  
    }
    echo"</table>";
	echo"<br>";
	echo"<br>";
    echo"<input type='submit' name='s2' value='update'>";
    }
}
   else
    {
     echo"<font color='red'>such records not found </font>";
    }
?>
						  
</form>						  
						  
<br>
<br>
<br>
<a href="adminregisterupdate1.php"><font color="blue">BACK>> </font></a>
</center>

						  
						  </div>
                    		
			</div>                 
</div>




</body>
</html> 
 
 
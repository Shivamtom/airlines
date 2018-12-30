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
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre>   <div id="b1">
<form method="POST" action="bookadminupdate3.php">
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
						  <br>
						  <br>

<center>
<h3> ENTER DETAILS OF PASSENGER FOR UPDATE-</h3>
<br>
<hr>
<?php
$c=0;
include("con1.php");
$str=mysql_query("select * from details where passport='$_POST[rn]'");
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
	$str=mysql_query("select * from details where passport='$_POST[rn]'");
	if(!$str)
		{
			echo mysql_error();
		}
	else
    {
     echo"<table height='60%' width='50%'>";
	while($row=mysql_fetch_array($str))
    {
    echo"<tr><td>TITLE</td><td><input type='text' name='b1' value='$row[0]'  ></td></tr>";  
	echo"<tr><td>FIRST NAME</td><td><input type='text' name='b2' value='$row[1]' >         </td></tr>";  
	echo"<tr><td>LAST NAME</td><td><input type='text' name='b3' value='$row[2]' >         </td></tr>";  
	echo"<tr><td>PASSPORT NUMBER</td><td><input type='text' name='b4' value='$row[3]'  readonly>         </td></tr>";  
	echo"<tr><td>VISA NUMBER</td><td><input type='text' name='b5' value='$row[4]' >         </td></tr>";  
	echo"<tr><td>COUNTRY</td><td><input type='text' name='b6' value='$row[5]'  </td></tr>";  
	echo"<tr><td>ADDRESS1</td><td><input type='text' name='b7' value='$row[6]'  </td></tr>";  
	echo"<tr><td>ADDRESS@</td><td><input type='text' name='b8' value='$row[7]'  </td></tr>";  
	echo"<tr><td>EMAIL</td><td><input type='text' name='b9' value='$row[8]'  </td></tr>";  
	echo"<tr><td>CONTACT</td><td><input type='text' name='b10' value='$row[9]'  </td></tr>";  
	echo"<tr><td>PINCODE</td><td><input type='text' name='b11' value='$row[10]'  </td></tr>";  
    }
    echo"</table>";
	echo"<br>";
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
						  
						  
						  
<br>

</form>
<br>
<a href="bookadminupdate1.php"><font color="blue">BACK>> </font></a>						  

</center>


						  </div>
                    		
			</div>                 
</div>




</body>
</html> 
 
 
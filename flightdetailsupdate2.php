<html>
<head>
<title> Indian Airlines </title>
<style>
#a1{left:0%; top:0%; width:100%; height:150%; position:absolute; background-color:#00ace6;}
    #b1{left:10%; top:12%; width:80%; height:90%; position:absolute; background-color:white;}      
#c1{left:3%; top:2%; width:95%; height:95%; position:absolute; background-color:#80bfff;}
#c2{right:10%; top:10%; width:30%; height:30%; position:absolute; background-color:lime;}



</style>
</head>
<body>
<div id="a1"><br><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
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
<form method="POST" action="flightdetailsupdate3.php">
						  <br>
						  <center>
						  <br>
						  <h3>ENTER DETAILS FOR FLIGHT UPDATE-</h3>
						  <br>
						  <hr>
						  <br>

<center>
<?php
$c=0;
include("con1.php");
$str=mysql_query("select * from fee where flight_no='$_POST[rn]'");
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
	$str=mysql_query("select * from fee where flight_no='$_POST[rn]'");
	if(!$str)
		{
			echo mysql_error();
		}
	else
    {
     echo"<table height='50%' width='60%'>";
	while($row=mysql_fetch_array($str))
    {
    echo"<tr><td>FROM</td><td><input type='text' name='rn' value='$row[0]'  ></td></tr>";  
	echo"<tr><td>TO </td><td><input type='text' name='nm' value='$row[1]' >         </td></tr>";  
	echo"<tr><td>DEPARTURE TIME </td><td><input type='time' name='co' value='$row[2]' >         </td></tr>";  
	echo"<tr><td>ARRIVAL TIME</td><td><input type='time' name='mr' value='$row[3]' >         </td></tr>";  
	echo"<tr><td>TICKET COST</td><td><input type='text' name='fe' value='$row[4]' >         </td></tr>";  
	echo"<tr><td>FLIGHT NUMBER </td><td><input type='text' name='cr' value='$row[5]' readonly>         </td></tr>";  
    }
    echo"</table>";
	echo"<br>";
	echo"<br>";
    echo"<input type='submit' name='s2' value='UPDATE'>";
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
<a href="flightdetailsupdate1.php"><font color="blue">BACK>> </font></a>
</center>

						  
						  </div>
                    		
			</div>                 
</div>




</body>
</html> 
 
 
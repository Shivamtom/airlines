<html>
<head>
<title> Indian Airlines </title>
<style>
#a1{left:0%; top:0%; width:100%; height:150%; position:absolute; background-color:#00ace6;}
    #b1{left:10%; top:10%; width:80%; height:90%; position:absolute; background-color:white;}      
#c1{left:3%; top:2%; width:95%; height:90%; position:absolute; background-color:#80bfff;}
#c2{right:10%; top:10%; width:30%; height:30%; position:absolute; background-color:lime;}


</style>
</head>
<body>
<div id="a1"><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre> <div id="b1">
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
<?php
include("con1.php");
$str=mysql_query("update details set title='$_POST[b1]',first='$_POST[b2]',last='$_POST[b3]',visa='$_POST[b5]',country='$_POST[b6]',address1='$_POST[b7]',address2='$_POST[b8]',email='$_POST[b9]',contact='$_POST[b10]',pin='$_POST[b11]' where passport='$_POST[b4]'");
  
  if(!$str)
	{
	echo mysql_error();
	}
  else
	{
	echo"<script>alert('Data updated successfully')</script>";
	}
	
?>


<br>
<a href="checkadminbookings.php"> BACK >></a>
</center>
                  	  </div>
                    		
			</div>                 
</div>



  </form>
</body>
</html> 
 
 
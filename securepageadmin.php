<html>
<head>
<title> Indian Airlines </title>
<style>
#a1{left:0%; top:0%; width:100%; height:150%; position:absolute; background-color:#00ace6;}
    #b1{left:10%; top:10%; width:80%; height:90%; position:absolute; background-color:white;}      
#c1{left:3%; top:2%; width:63%; height:95%; position:absolute; background-color:#80bfff;}
#c2{right:3%; top:2%; width:30%; height:95%; position:absolute; background-color:#00ace6;}


</style>
</head>
<body>
<div id="a1"><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre> <div id="b1">

<?php
include("con1.php");

session_start();
$name=$_SESSION['name'];
$_SESSION['name1']=$name;

if($_SESSION['sid']==session_id())
	{
		echo"<div id='c2'>"; 
		echo"<br>";
		echo"<br>";
		echo"<br>";
		echo"<br>";
		
		echo"<h3> Welcome u to Admin  Page:- &nbsp&nbsp".$name."</h3>"."<br><br>";
		echo"<center>";
		echo" Your username and password are as Follow:- ";
		
		
		$sql=mysql_query("select * from admin where admin_id='".$name."'");
	
			if(!$sql)
			{
			echo mysql_error();
			}
			else
			{
				echo"<center>";
				echo"<br>";
				echo"<br>";
				echo"<br>";
				echo"<br>";
				echo"<table height='10%' width='80%'><tr><th> USERNAME </th><th> PASSWORD</th></tr>";
				while($row=mysql_fetch_array($sql))
					{
						echo"<tr><td>&nbsp&nbsp&nbsp&nbsp $row[0]</td><td>&nbsp&nbsp&nbsp&nbsp  $row[1]</td></tr>";
					}
				echo"</table>";
				echo"</center>";
			}
		
	
		echo"<br>";
		echo"<br>";
		echo"<br>";
		echo"<br>";
		echo"<a href='logout.php'><input type='submit' value='logout'></a>";
       echo"<br>";
		echo"<br>";
		echo"<br>";
        echo"<a href='admintry.php'><input type='submit' value='change password'></a>";



		echo"</center>";
		
    }
 else
	{
		header("location:register.php");
	}
   
   echo"</div>";
 ?>
        
           
                          <div id="c1">
<form method="POST" action="securepageadmin.php">

						  <br>
						  <br><br><br><br><br><br>
					>>	 <a href="admincheckregister.php"> check register candidates</a>
						  <br>
						  <br>
					>>	 <a href="checkadminflights.php">  check flights</a>
						  <br>
						  <br>
					>>	  <a href="checkadminbookings.php">check booked tickets</a>
						  <br>
						  <br>
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  </div>
                    		
			</div>                 
</div>




</body>
</html> 
 
 
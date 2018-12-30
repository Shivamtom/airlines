<html>
<head>
<title> Indian Airlines </title>
<style>
#a1{left:0%; top:0%; width:100%; height:150%; position:absolute; background-color:#00ace6;}
    #b1{left:10%; top:10%; width:80%; height:90%; position:absolute; background-color:white;}      
#c1{left:3%; top:2%; width:95%; height:95%; position:absolute; background-color:#80bfff;}
#c2{right:6%; top:6%; width:30%; height:30%; position:absolute; background-color:lime;}


</style>
</head>
<body>
<div id="a1"><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre> <div id="b1">
<form method="POST" action="checkadminflights.php">
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
		header("location:register.php");
	}
   
   echo"</div>";
 ?>
        
           
                          <div id="c1">
						 			<?php
$cn=mysql_connect('localhost:3306','root','');

mysql_select_db("airlines",$cn);

$result=mysql_query("select * from fee");  // hostname  

 if(!$result)
  {
   echo mysql_error();
  }
  else
  {
   echo"<center>";
 
   echo"<h1> FLIGHTS DETAILS </h1><br>";
   echo"<table border='5' height='70%' width='80%'><tr><th>FROM </th><th>TO</th><th>DEPARTURE TIME </th><th>ARRIVAL TIME</th><th>TICKET COST</th><th>FLIGHTS NUMBER</th><th>";
   
   while($row=mysql_fetch_row($result))
   {
   echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
   }
   echo"</table>";
   echo"</center>";
  }
   
?>			  
						  
						  
<br>
<br>
<br>
<pre>          <a href="flightdetailsupdate1.php"><font color='red'>UPDTAE</font></a>                       <a href="flightsdetaildelete.php"><font color='red'>DELETE</font></a>                      <a href="flightsinsertadmin.php"><font color='red'>INSERT</font></a>                    <a href="securepageadmin.php"><font color='red'>BACK>></font></a> 					  
						  
						  
						  </div>
                    		
			</div>                 
</div>




</body>
</html> 
 
 
<?php
session_start();
?>
<html>
<head>
<title> Indian Airlines </title>
<style>
#a1{left:0%; top:0%; width:100%; height:150%; position:absolute; background-color:#00ace6;}
    #b1{left:10%; top:10%; width:80%; height:90%; position:absolute; background-color:white;}      
#c1{left:3%; top:2%; width:63%; height:95%; position:absolute; background-color:#80bfff;;}
#c2{right:3%; top:2%; width:30%; height:95%; position:absolute; background-color:#00ace6;}


</style>
</head>

<body>
<div id="a1"><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre> <div id="b1">

<?php
include("con1.php");
$name=$_SESSION['name'];
$_SESSION['name1']=$name;

if($_SESSION['sid']==session_id())
	{
		echo"<div id='c2'>";
echo"<br>";echo"<br>";		
		echo"TICKETS ARE DONE:".$name."<br><br>";
		echo"<center>";
		
		
		
		$sql=mysql_query("select * from register where username='".$name."'");
	
			if(!$sql)
			{
			echo mysql_error();
			}
			else
			{
				echo"<center>";
				
				while($row=mysql_fetch_array($sql))
					{
						
					}
				echo"</table>";
				echo"</center>";
			}
		
	
		echo"<br>";
		echo"<br>";
		echo"<a href='logout.php'><input type='submit' value='logout'> </a>";
		echo"<br>";
		echo"<br>";
		echo"<br>";
		echo"<a href='book.php'><input type='submit' value='Book Another Ticket'> </a>";
		echo"<br>";
		echo"<br>";
		echo"<br>";
		echo"<a href='search.php'><input type='submit' value='check another flights'> </a>";
		
         echo"</center>";
		
    }
 else
	{
		header("location:index.php");
	}
   
   echo"</div>";
 ?>
        
           
                          <div id="c1">   <fieldset style="width:80%">
                            E-TICKET<br>
							<br>
							Your ticket for your journey is as follows:
							
<fieldset>

<?php

        	$title=$_POST['title'];         							
			$first=$_POST['first'];
			$last=$_POST['last'];
			$passport=$_POST['passport'];
			$visa=$_POST['visa'];	
			$contact=$_POST['contact'];
			
			echo"value is ".$title;
			echo"value is ".$first;
           echo" contact
		
			
?>		
</div>                 
</div>


</body>
</html> 
 
 
<html>
<head>
<title> Indian Airlines </title>
<style>
#a1{left:0%; top:0%; width:100%; height:150%; position:absolute; background-color:#00ace6;}
    #b1{left:10%; top:10%; width:80%; height:90%; position:absolute; background-color:white;}      
#c1{left:3%; top:2%; width:95%; height:95%; position:absolute; background-color:#80bfff;}
#c2{right:8%; top:8%; width:30%; height:30%; position:absolute; background-color:lime;}


</style>
</head>
<body>
<div id="a1"><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre>   <div id="b1">
<form method="POST" action="bookdeleteadmin.php">
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
						  <br>
						  <br>
						  
<center>
<h3>DELETE FROM EXISTING PASSENGER BOOKING DETAILS-</h3>
<br>
<br> 
Enter PASSPORT NUMBER you want to be delete:&nbsp&nbsp&nbsp
<input type="text" name="rn" size="20"> 
<br>
<br>
<br>
<input type="submit" name="s1" size="delete">
<br>
<br>
<?php
$c=0;
include("con1.php");
if(isset($_POST['s1']))
{
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
  $str=mysql_query("delete from details where passport='$_POST[rn]'");
  if(!$str)                                            
  {
  echo mysql_error();
  }
  else
  { 
  echo"<font color='red'> Data delete successfully </font>";
  }
}
  else
  {
  echo"<font color='red'> such record not found </font>";
  }
}
?>

</form>
<br>
<br>
<br>
<br>
<a href="checkadminbookings.php"><font color="blue">BACK>> </font></a>
</center>						  </div>
                    		
			</div>                 
</div>



  </form>
</body>
</html> 
 
 
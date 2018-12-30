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
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre> <div id="b1">

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
        
         
                          <div id="c1">	<br>
<form method="POST" action="adminregisterinsert.php">
<center>						  <br>
<h3>ENTER DETAILS OF NEW REGISTRATION-</h3>
<hr> 
<br>

<table height="50%" width="60%">
<tr>
   <td> USERNAME </td> 
   <td><input type='text' name='a1' size='20'></td>
</tr>
<tr>
   <td>PASSWORD</td> 
   <td><input type='text' name='a2' size='20'></td>
</tr>
<tr>
   <td> RE-PASSWORD</td> 
   <td><input type='text' name='a3' size='20'></td>
</tr>  
 <tr>
   <td> FIRST NAME</td> 
   <td><input type='text' name='a4' size='20'></td>
</tr>
<tr>
   <td>LAST NAME</td> 
   <td><input type='text' name='a5' size='20'></td>
</tr>
<tr>
   <td> EMAIL</td> 
   <td><input type='text' name='a6' size='20'></td>
</tr>
</table>
<br>
<br>
<br>
<input type='submit' name='s1' value='Insert'>&nbsp&nbsp&nbsp&nbsp
<input type='reset' name='r1' value='Reset'>
</form>
<?php
include("con1.php");
if(isset($_POST['s1']))
{
   $c=0;
   $a1=$_POST['a1'];
   $a2=$_POST['a2'];
   $a3=$_POST['a3'];
   $a4=$_POST['a4'];
   $a5=$_POST['a5'];
   $a6=$_POST['a6'];
   
   if(trim($_POST['a1'])=='' || trim($_POST['a2'])=='' || trim($_POST['a3'])==''|| trim($_POST['a4'])==''|| trim($_POST['a5'])==''|| trim($_POST['a6'])=='')
   {
		echo "fill correctly";
   }
   
   else
   {
		$sql=mysql_query("select * from register where username='$_POST[a1]'");
	
			if(!$sql)
			{
			echo mysql_error();
			}
			else
			{
			while($row=mysql_fetch_row($sql))
				{
				$c++;
				}
			}
	
		if($c==0)
		{
			$sql=mysql_query("insert into register(username,password,repassword,first_name,last_name,email) values('$_POST[a1]','$_POST[a2]','$_POST[a3]','$_POST[a4]','$_POST[a5]','$_POST[a6]')");
 
			if(!$sql)
			{
				echo mysql_error();
			}
			else
			{
			echo"<script>alert('details feeded')</script>";
			}
		}

		else
    	{
		echo"<font color='red'> fill correct </font>";    
	    }
   }
}
?>
 			  
<br><br><br>
						
<a href="admincheckregister.php"><font color="blue">BACK>> </font></a>
						  
						  </center>
						  </div>
                    		
			</div>                 
</div>



  
</body>
</html> 
 
 
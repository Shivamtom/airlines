<html>
<head>
<title> Indian Airlines </title>
<style>
#a1{left:0%; top:0%; width:100%; height:150%; position:absolute; background-color:#00ace6;}
    #b1{left:10%; top:10%; width:80%; height:90%; position:absolute; background-color:white;}      
#c1{left:5%; top:2%; width:90%; height:90%; position:absolute; background-color:#80bfff;}
#c2{right:6%; top:2%; width:30%; height:30%; position:absolute; background-color:lime;}


</style>
</head>
<body>
<div id="a1"><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre>  <div id="b1">
<form method="POST" action="bookinsertadmin.php">
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
        
         
                          <div id="c1">	<br>
<br>
<center>
<h3>ENTER THE DETAILS:</h3>
<hr>
<table height="60%" width="60%">
<tr>
   <td> Title </td> 
   <td><select name="a1">
           <option value='Mr.'>Mr</option>
		   <option value='Mrs.'>Mrs</option>
		</select>
	</td>
</tr>
<tr>
   <td>First name </td> 
   <td><input type='text' name='a2' size='20'></td>
</tr>
<tr>
   <td> Last name</td> 
   <td><input type='text' name='a3' size='20'></td>
</tr>  
 <tr>
   <td> Passport number </td> 
   <td><input type='text' name='a4' size='20' maxlength="10"></td>
</tr>
<tr>
   <td> Visa Number </td> 
   <td><input type='text' name='a5' size='20'></td>
</tr>
<tr>
   <td> Country </td> 
   <td><input type='text' name='a6' size='20'></td>
</tr><tr>
   <td> Address1 </td> 
   <td><input type='text' name='a7' size='20'></td>
</tr><tr>
   <td> Address2 </td> 
   <td><input type='text' name='a8' size='20'></td>
</tr><tr>
   <td> Email </td> 
   <td><input type='text' name='a9' size='20'></td>
</tr><tr>
   <td> Contact </td> 
   <td><input type='text' name='a10' size='20' maxlength="10"></td>
</tr><tr>
   <td> PIN </td> 
   <td><input type='text' name='a11' size='20' maxlength="6"></td>
</tr>
</table>
<br>
<br>
<input type='submit' name='s1' value='Insert'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type='reset' name='r1' value='Reset'>

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
   $a7=$_POST['a7'];
   $a8=$_POST['a8'];
   $a9=$_POST['a9'];
   $a10=$_POST['a10'];
   $a11=$_POST['a11'];
   
   if(trim($_POST['a1'])=='' || trim($_POST['a2'])=='' || trim($_POST['a3'])==''|| trim($_POST['a4'])==''|| trim($_POST['a5'])==''|| trim($_POST['a6'])==''|| trim($_POST['a7'])==''|| trim($_POST['a8'])==''|| trim($_POST['a9'])==''|| trim($_POST['a10'])==''|| trim($_POST['a11'])=='')
   {
		echo "fill correctly";
   }
   
   else
   {
		$sql=mysql_query("select * from details where first='$_POST[a2]'");
	
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
			$sql=mysql_query("insert into details values('$_POST[a1]','$_POST[a2]','$_POST[a3]','$_POST[a4]','$_POST[a5]','$_POST[a6]','$_POST[a7]','$_POST[a8]','$_POST[a9]','$_POST[a10]','$_POST[a11]')");
 
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
		echo"<font color='red'> fill correctly ADMIN </font>";    
	    }
   }
}
?>
 			  
<br>
<br><br>						
<a href="checkadminbookings.php"><font color="blue">BACK>> </font></a>
						  </div>
                    		
			</div>                 
</div>



  </form>
</body>
</html> 
 
 
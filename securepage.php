<?php
session_start();
?>
<html>
<head>
<title> Indian Airlines </title>
<script type="text/javascript">

function yesno()
{
 
if(document.getElementById('m1').checked)
{
 document.getElementById("shootdate2").style.visibility="hidden";
}
else if(document.getElementById('m2').checked)
{
document.getElementById("shootdate2").style.visibility="visible";
}
}
</script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	<script>
	  		$( function() 
			{
	   			$( "#shootdate" ).datepicker({
	   				minDate: 0
	   			});
	  		});
			
			$( function() 
			{
	   			$( "#shootdate2" ).datepicker({
	   				minDate: 0
	   			});
	  		});
	  	</script>


</script>
<style>
#a1{left:0%; top:0%; width:100%; height:150%; position:absolute; background-color:#00ace6;}
    #b1{left:10%; top:10%; width:80%; height:90%; position:absolute; background-color:white;}      
#c1{left:3%; top:2%; width:62%; height:95%; position:absolute; background-color:#80bfff;;}
#c2{right:3%; top:2%; width:30%; height:95%; position:absolute; background-color:#00ace6;}
#m1(left:0%; top:1%; width:100%; height:20%; position:absolute; background-color:yellow;}
#m2(left:0%; top:1%; width:100%; height:20%; position:absolute; background-color:yellow;}
 

</style>
</head>
<body>
<div id="a1"><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre>    <div id="b1">

<?php
include("con1.php");

$name=$_SESSION['name'];
$_SESSION['name1']=$name;

if($_SESSION['sid']==session_id())
	{
		echo"<div id='c2'>"; 
		echo"<br>";
		echo"<br>";
		echo"<h2> Welcome to you :- ".$name."!</h2><br><br>";
		echo"<center>";
		
		
		$sql=mysql_query("select * from register where username='".$name."'");
	
			if(!$sql)
			{
			echo mysql_error();
			}
			else
			{
				echo"<center>";
				echo"<br>";
				echo"<br>";
				echo"<table border='1'><tr><th> Username </th><th> email </th></tr>";
				while($row=mysql_fetch_array($sql))
					{
						echo"<tr><td> $row[0]</td><td>$row[5]</td></tr>";
						echo"<br>";
						echo"<img src='$row[6]' width='200' height='200' border='5px'>";
						
					}
				echo"</table>";
				echo"</center>";
			}
		
	    echo "<br><br><a href='upload1.php'><input type='submit' value='Image upload'> </a><br>";
		echo"<br>";
		echo"<br>";
		echo"<a href='logout.php'><input type='submit' value='logout'> </a>";
        echo"<br>";
		echo"<br>";
		echo"<br>";
		
		echo"<a href='try1.php' target='blank'><input type='submit' value='change password'> </a>";
       
	   echo"</center>";
		
    }
 else
	{
		header("location:index.php");
	}
   
   echo"</div>";
   
   
 ?>
        
           
                          <div id="c1"> <br>
<form method="POST" action="search.php" onsubmit="if(document.getElementById('agree').checked){return true;} else{alert('please  indicate that you have read and agree to the Terms and Conditions.'); return false; }">          
	 	<center>
		<h2>Book Tickets</h2>                        
                                
							   <br>
                                <br>
						<input type="radio" name="g" id="m1" onclick="yesno();"> one-way 
						<input type="radio" name="g" id="m2" onclick="yesno();"> Round trip 
								 <br>
						
						<br>
				FROM: <select name="rn">
				      <option value="select">Leaving From   </option>
					  <option value="DELHI">DELHI </option>
					  <option value="RANCHI">RANCHI   </option>
					  <option value="MUMBAI">MUMBAI   </option>
					  <option value="PUNJAB">PUNJAB   </option>
					  <option value="GUJRAT">GUJRAT   </option>
				</select>
&nbsp&nbsp&nbsp&nbsp				TO :  <select name="mn">
				      <option value="select">Going To   </option>
					  <option value="DELHI">DELHI </option>
					  <option value="RANCHI">RANCHI   </option>
					  <option value="MUMBAI">MUMBAI   </option>
					  <option value="PUNJAB">PUNJAB   </option>
					  <option value="GUJRAT">GUJRAT   </option>
				</select>
				<br>
				<br>
				<br>
		<div id="m1">		<label for="shootdate">Date of journey:</label>
    	<input required type="text" name="shootdate" id="shootdate" title="Choose   your desired date" ></div>
		  <br>
		  <br>
		<div id="m2"><label for="shootdate">Date of return:</label>
    	<input required type="text" name="shootdate" id="shootdate2" title="Choose   your desired date" ></div>
                  <br>
				  <br>
				<select>
				      <option value="select">ADULTS  </option>
					  <option value="1">1 </option>
					  <option value="2">2   </option>
					  <option value="3">3   </option>
					  <option value="4">4   </option>
					  <option value="5">5   </option>
				</select>  
				<select>
				      <option value="select">CHILDREN</option>
					  <option value="1">1 </option>
					  <option value="2">2   </option>
					  <option value="3">3   </option>
					  <option value="4">4   </option>
					  <option value="5">5   </option>
				</select>  
                <br>
<br>
				
               <input type="checkbox" name="checkbox" value="check" id="agree"> TERMS AND CONDITION
			   <br>
			   <br>
			   <input type="submit" name="ac" value="search flight">
					        </center>                    







</form>
							</div>
                    		
			</div>                 
</div>


</form>




</body>
</html> 
 
 
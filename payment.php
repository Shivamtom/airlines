<?php
session_start();
?>
<html>
<head>
<title> PAYMENT </title>
<script type="text/javascript">

  function doSubmit(form) {
    var urls = form['url'];
    var i = urls && urls.length;
    while (i--) {
      if (urls[i].checked) {
        window.location = urls[i].value;
      }
    }
    return false;
  }

  </script>

</script>
<style>
#a1{left:0%; top:0%; width:100%; height:150%; position:absolute; background-color:#00ace6;}
    #b1{left:10%; top:10%; width:80%; height:90%; position:absolute; background-color:white;}      
#c1{left:3%; top:2%; width:63%; height:95%; position:absolute; background-color:#80bfff;;}
#c2{right:3%; top:2%; width:30%; height:40%; position:absolute; background-color:#00ace6;}
#c3{right:3%; top:44%; width:30%; height:53%; position:absolute; background-color:#00ace6;}

#d1{left:5%; top:45%; width:70%; height:25%; position:absolute; background-color:pink;}
#d1{left:5%; top:55%; width:70%; height:25%; position:absolute; background-color:pink;}

</style>
</head>
<body>
<div id="a1"> <pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre> 
             <div id="b1">
                    <div id="c1"> <div id="d1">
					<img src="card.jpg" height="100%" width="100%"></div>

					<br><h2> PAY IN : </h2>
<hr>
<br>
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp  Pay the amount:<?php echo $cost=$_SESSION['cost'];?>  

<br>
<br>
&nbsp&nbsp&nbsp <h3> SELECT PAYMENT METHOD:</h3>
<br><br>
 	
	<form action="ticket.php" onsubmit="return doSubmit(this)">
    <input type="radio" name="url" value="ticket.php"> CASH
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

    <input type="radio" name="url" value="https://www.payubiz.in/"> CARD
	
	<br>
	<br><br>
&nbsp&nbsp&nbsp    <input type="submit" value="Submit">
  </form>
  
  
</div>
<?php
include("con1.php");
$name=$_SESSION['name'];
$_SESSION['name1']=$name;

if($_SESSION['sid']==session_id())
	{
		echo"<div id='c2'>"; 
		echo"<br>";
		echo"<center>";
		echo"Previously entered details of this account:- ";
		echo"<br>";echo"<br>";
		
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
						 echo"<table border='1' >
						<tr>
						   <td> username </td>
						   <td> $row[0]</td>
						   </tr>
						   <tr>
						   <td> first name </td>
						   <td> $row[3]</td>
						   </tr>
						   <tr>
						     <td> last name </td>
							 <td> $row[4]</td>
							</tr>
                            <tr>							
						      <td> email </td>
							  <td> $row[5]</td>
							 </tr>";
				
					}
				echo"</table>";
				echo"</center>";
			}
		
	
		echo"<br>";
		echo"<br>";
		echo"<a href='logout.php'><input type='submit' value='logout'> </a>";
        echo"</center>";
		
    }
 else
	{
		header("location:index.php");
	}
   
   echo"</div>";
 ?>


<div id="c3"><img src="gym.png"  height="100%" width="100%"></div>

</div>
</div>

</html>
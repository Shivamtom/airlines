<?php
session_start();
?>
<html>
<head>
<title>BOOKING PAGE</title>
<script>

function checkname()
{
 var n, nc ,vn;
 n=document.getElementById("cc1");
 
 nc= /^[a-zA-Z ]+$/;
 vn=document.getElementById("cc1").value;
 
 if(!n.value.match(nc)  ||  vn.charAt(0)==' ')
{
document.getElementById("name").innerHTML="** check name";
return 1;
}
else
 {
document.getElementById("name").innerHTML=" " ;
return 0;
 }
}

function checknamee()
{
 var n, nc ,vn;
 n=document.getElementById("cc2");
 
 nc= /^[a-zA-Z ]+$/;
 vn=document.getElementById("cc2").value;
 
 if(!n.value.match(nc)  ||  vn.charAt(0)==' ')
{
document.getElementById("namee").innerHTML="** check name";
return 1;
}
else
 {
document.getElementById("namee").innerHTML=" " ;
return 0;
 }
}

function checkadd()
{
 var n, nc ,vn;
 n=document.getElementById("cc7");
 
 nc= /^[a-zA-Z ]+$/;
 vn=document.getElementById("cc7").value;
 
 if(!n.value.match(nc)  ||  vn.charAt(0)==' ')
{
document.getElementById("add").innerHTML="** check address";
return 1;
}
else
 {
document.getElementById("add").innerHTML=" " ;
return 0;
 }
}

function checkpass()
{
 var e, ec;
 e=document.getElementById("cc3");
 
 ec= /[a-zA-Z]{2}[0-9]{7}/;
 
 if(!e.value.match(ec) )
{
document.getElementById("pass").innerHTML="** check passport number";
return 1;
}
else 
 {
document.getElementById("pass").innerHTML='';
return 0;
 }
}
  

  function checkemail()
{
 var e, ec;
 e=document.getElementById("cc4");
 
 ec= /^[0-9a-zA-Z_-]+\@[a-zA-Z0-9]+\.[a-zA-Z]{2,6}$/;
 
 if(!e.value.match(ec) )
{
document.getElementById("mail").innerHTML="** check mail";
return 1;
}
else 
 {
document.getElementById("mail").innerHTML='';
return 0;
 }
}


function checknumber()
{
 var p, pc ;
 p=document.getElementById("cc5");
 
 pc= /^[0-9]{10,10}$/;
 
 if(!p.value.match(pc) )
{
document.getElementById("mobile").innerHTML="** check number";
return 1;
}
else 
 {
document.getElementById("mobile").innerHTML='';
return 0;
 }
}

function checkpin()
{
 var p, pc ;
 p=document.getElementById("cc6");
 
 pc= /^[0-9]{6,6}$/;
 
 if(!p.value.match(pc) )
{
document.getElementById("pin").innerHTML="** check number";
return 1;
}
else 
 {
document.getElementById("pin").innerHTML='';
return 0;
 }
}

function sub()
 {
 if(checkname()==0 || checknamee()==0 || checkpass()==0|| checkadd()==0|| checkemail()==0|| checknumber()==0|| checkpin()==0 )
 {
 var a,b,c,d,e,f,g;
 a=document.getElementById("cc1").value;
 b=document.getElementById("cc2").value;
 c=document.getElementById("cc3").value;
 d=document.getElementById("cc4").value; 
 e=document.getElementById("cc5").value;
 f=document.getElementById("cc6").value;
 g=document.getElementById("cc7").value; 
 }
 else
 {
 checkname();
 checknamee();
 checkpass();
 checkadd(); 
 checkemail();
 checknumber();
 checkpin();
 
 alert("plz check entered data");
 }
 
 }

</script>
<style>

#a1{left:0%; top:0%; width:100%; height:150%; position:absolute; background-color:#00ace6;}
    #b1{left:10%; top:10%; width:80%; height:90%; position:absolute; background-color:white;}      
#c1{left:3%; top:2%; width:62%; height:95%; position:absolute; background-color:#80bfff;}
#c2{right:3%; top:2%; width:30%; height:40%; position:absolute; background-color:#00ace6;}
#c4{right:3%; top:45%; width:30%; height:52%; position:absolute; background-color:#00ace6;}

</style>
</head>

<body>
<div id="a1"><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre>  
             <div id="b1">
                    <div id="c1"> 
					<br><h3> ENTER DETAILS OF PASSENGER :</h3><br>
<hr>
<br>

<form method="POST" action="book.php"> 
<center>
<pre>
TITLE:       <select name="z1">
              <option value="select">   select			</option>
			  <option value="Mr">         Mr					</option>
			  <option value="Mrs.">      Mrs				</option>
      </select>
<br>
FIRST NAME       <input type="text" name="z2" size="20" id="cc1" onblur="checkname();"><span id="name"></span>
    
LAST NAME        <input type="text" name="z3" size="20" id="cc2" onblur="checknamee();"><span id="namee"></span>

PASSPORT NUMBER   <input type="text" name="z4" maxlength="10" size="20" id="cc3" onblur="checkpass();" placeholder="ft-87987689"><span id="pass"> </span>

VISA NUMBER       <input type="text" name="z5" maxlength="14" size="20">

  COUNTRY       <select name="z6">
					<option value="select">select</option>
					<option value="India">India</option>
					<option value="Belgium">Belgium</option>
					<option value="Iraq">Iraq</option>
					<option value="New york">New york</option>
					<option value="Pakistan">Pakistan</option>
					<option value="Afganistan">Afganistan</option>
					</select>	  
	  
   ADDRESS1	    <input type="text" name="z7" size="20" id="cc7" onblur="checkadd();"><span id="add"> </span>
	  
  ADDRESS2	   <input type="text" name="z8" size="20">
	  
      EMAIL        <input type="text" name="z9" size="20" id="cc4" onblur="checkemail();"><span id="mail"> </span>
	  
    CONTACT NO.	   <input type="text" name="z10" size="20" maxlength="10" id="cc5"  onblur="checknumber();"><span id="mobile"> </span>
	  
         PIN NO.    <input type="text" name="z11" size="20" maxlength="6" id="cc6"  onblur="checkpin();"><span id="pin"> </span>

<br>
<br>

<input type="submit" value="BOOK" name="z12" onclick="sub()">

<br>
</pre>
</form>
<a href="payment.php"><input type="submit" value="PAY NOW"></a>

<?php

include("con1.php");

if(isset($_POST['z12']))
{
$a=0;
    $c=0;
   $z1=$_POST['z1'];
   $z2=$_POST['z2'];
   $z3=$_POST['z3'];
   $z4=$_POST['z4'];
   $z5=$_POST['z5'];
   $z6=$_POST['z6'];
   $z7=$_POST['z7'];
   $z8=$_POST['z8'];
   $z9=$_POST['z9'];
   $z10=$_POST['z10'];
   $z11=$_POST['z11'];
   
   if(trim($_POST['z1'])=='' || trim($_POST['z2'])=='' || trim($_POST['z3'])==''|| trim($_POST['z4'])==''|| trim($_POST['z5'])==''|| trim($_POST['z6'])=='' ||
    trim($_POST['z7'])=='' || trim($_POST['z8'])==''|| trim($_POST['z9'])==''|| trim($_POST['z10'])==''|| trim($_POST['z11'])=='')
   {
		echo "fill correctly";
   }
   
   else if($z5>0)
   {
		$sql=mysql_query("select * from details where first='$_POST[z2]'");
	
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
			$sql=mysql_query("insert into details values('$_POST[z1]','$_POST[z2]','$_POST[z3]','$_POST[z4]','$_POST[z5]','$_POST[z6]','$_POST[z7]','$_POST[z8]','$_POST[z9]','$_POST[z10]','$_POST[z11]')");
 
			if(!$sql)
			{
				echo mysql_error();
			}
			else
			{
			echo"<script>alert('DETAILS FEEDED') </script>";
	         		
			}
		}

		else
    	{
		echo"<font color='red'> error try again  </font>";    
	    }
   }
} 

?>
	  </center>
	  
	
	</div>
	
	
	

		
	
	
	
	
<?php

echo"<div id='c2'>";
include("con1.php");



$name=$_SESSION['name'];
$_SESSION['name1']=$name;

$sour=$_SESSION['sour'];
$desc=$_SESSION['desc'];

if($_SESSION['sid']==session_id())
	{
		 echo"<br>";
		
		echo"Previously entered details of this account:- ";
		echo"<center>";
		echo"<br>";
		echo"<br>";
		echo"<br>";
		
		
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
     


                   <div id="c3">             </div>			
<div id="c4">
<?php

$first=$_GET["name"];

$sour=$_SESSION['sour'];
$desc=$_SESSION['desc'];

$str=mysql_query("select * from fee where flight_no='".$first."'");
	if(!$str)
	{
	echo mysql_query();
	}
	else
	{
	echo"<br>";
	echo"<h3>BOOKING FLIGHT DETAILS:</h3>";
	echo"<br>";
	echo"<br>";
	echo"<center>";
    while($row=mysql_fetch_array($str))
	{
    echo"<table border='5' height='60%' width='50%'>
	             <tr>
				     <th>FROM</th>
					 <td>$sour</td>
				</tr>
				<tr>
				   <th>TO</th>
				   <td> $desc </td>
				</tr>
				<tr>
				    <th>DEPARTURE TIME</th>
					<td>$row[2]</td>
				</tr>
				<tr>
				<th>ARRIVAL TIME</th>
				<td>$row[3]</td>
				</tr>
				<tr>
				<th>TICKET COST</th>
				<td>$row[4]</td>
				</tr>
				<tr>
				<th>FLIGHT NUMBER</th>
				<td> $row[5]</td>
				</tr>";
    $_SESSION['cost']=$row[4];                               
	}
	echo"</table>";                     
}
?>
</center>
</div>

</div>
</html>
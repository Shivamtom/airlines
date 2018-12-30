<html>
<head>
<title> Register </title>
<script>

function checkemail()
{
 var e, ec;
 e=document.getElementById("cc3");
 
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

function sub()
 {
 if(checkname()==0 || checknamee()==0 || checkemail()==0 )
 {
 var a,b,c,d,e,f,g,z;
 a=document.getElementById("cc1").value;
 b=document.getElementById("cc2").value;
 c=document.getElementById("cc3").value;
 }
 else
 {
 checkname();
 checknamee();
 checkemail();
 
 alert("plz check entered data");
 }
 
 }


</script>
<style>
#a1{left:0%; top:0%; width:100%; height:170%; position:absolute; background-color:#00ace6;}
	#b1{left:10%; top:9%; width:80%; height:90%; position:absolute; background-color:white; box-shadow: -3px -3px 5px 2px black;}      
		#c1{left:3%; top:2%; width:63%; height:95%; position:absolute; background-color:#80bfff;}
		#c2{right:3%; top:2%; width:30%; height:40%; position:absolute; background-color:#00ace6;}
       
		#c4{right:3%;  top:45%;  width:30%;  height:52%; position:absolute; background-color:red;}

</style>
</head>
<body>
<div id="a1"><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>                                                               <a href="adminlogin.php">ADMIN LOGIN</a>           </pre>
						<div id="b1"> 
									<div id="c1">
									<center>
									<br>
									<br>
	<h3>PLEASE REGISTER TO CONTINUE:</h3>
<br>
<br>	
											<fieldset width="70%" >
																<legend><h4> REGISTER </h4></legend> 
											<br>
											<br>
											<br>
												
											<br>
											<br>
											<br>

											<form method="POST" action="register.php">
										<pre> Username:         <input type="text" name ="s4" size="20"> </pre>	
										
										<pre> Password:         <input type="text" name ="s5" size="20"> </pre>	
											
										 <pre>Same Password:    <input type="text" name ="s6" size="20"></pre> 	
										
										<pre>         First Name:       <input type="text" name ="s7" size="20" id="cc1" onblur="checkname();"><span id="name"></span>		</pre> 	
											
										<pre>    Last Name:        <input type="text" name ="s8" size="20" id="cc2" onblur="checknamee();"><span id="namee"></span>    </pre> 	
											
									    <pre>      Email:           <input type="text" id="cc3" onblur="checkemail();" name="s9"><span id="mail"> </span>    </pre>
											<br>
											<br>
											<br>
													<input type="submit" value="Register" name="s10" onclick="sub()">
													&nbsp&nbsp&nbsp&nbsp&nbsp <input type="reset"  value="Reset" name="s11">
											<br>
											<br>
 
											</form> 
											</fieldset>


											
<?php
include("con1.php");
	if(isset($_POST['s10']))
	{
		$c=0;
		$s4=$_POST['s4'];
		$s5=$_POST['s5'];
		$s6=$_POST['s6'];
		$s7=$_POST['s7'];
		$s8=$_POST['s8'];
		$s9=$_POST['s9'];
   
		if(trim($_POST['s4'])=='' || trim($_POST['s5'])=='' || trim($_POST['s6'])==''|| trim($_POST['s7'])==''|| trim($_POST['s8'])==''|| trim($_POST['s9'])=='')
			{
				echo "fill correctly";
			}
   
		else if($s5==$s6)
		{
				$sql=mysql_query("select * from register where username='$_POST[s4]'");
	
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
						$sql=mysql_query("insert into register(username,password,repassword,first_name,last_name,email) values('$_POST[s4]','$_POST[s5]','$_POST[s6]','$_POST[s7]','$_POST[s8]','$_POST[s9]')");
 
						if(!$sql)
						{
							echo mysql_error();
						}
						else
						{
							echo"<script>alert(' User created successfully '); window.location.href='index.php'</script>";
						}
					}

		else
				{
					echo"<font color='red'> Both password not same </font>";    
				}
		}
	}

	echo"</center>";
	echo"</div>";
?>

											
																				
							<div id="c2">   
										<br>
												LOGIN/REGISTER
										<hr> 
										<center>
													<br>
													<br>

											  	
													<form method="POST" action="checklogin.php">
													Username: <input type="text"     name="uid" size="20">
													<br>
													<br>
													Password: <input type="password" name="pw"  size="20">
													<br>
													<br><br>
													<input id="button"  type="submit" name="submit" value="Log-In">
													<br>
													<br>
													
													<br>
													Need help <a href="try.php">forgot password ?</a>
													<br>
													<br><br>
												<a href="register.php"><input type="submit" value="Signup!"></a>					 
										</center>	
																				</div>		
 <div id="c3">   </div>						 
 <div id="c4"> <img src='zu.jpg' height="100%" width="100%">  </div>														
			</div>                 
</div>
</form>
</body>
</html>
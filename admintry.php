<html>
<head>
<title> Indian Airlines </title>
<style>
#a1{left:0%; top:0%; width:100%; height:150%; position:absolute; background-color:#00ace6;}
    #b1{left:10%; top:10%; width:80%; height:90%; position:absolute; background-color:white;}      

#c1{right:3%; top:2%; width:95%; height:95%; position:absolute; background-color:#80bfff;}


</style>
</head>
<body>
<div id="a1"><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre> <div id="b1">

<div id="c1">
<form method="POST" action="admintry.php">

<fieldset>
	          <legend>Change Password</legend>
        <dl>
			<dt>
				Old Password
			</dt>
				<dd>
					<input type="password" name="old_pass"  value="" required />
				</dd>
		</dl>
		<dl>
			<dt>
				New Password
			</dt>
				<dd>
					<input type="password" name="new_pass" value=""  required />
				</dd>
		</dl>
		<dl>
			<dt>
				Retype New Password
			</dt>
				<dd>
					<input type="password" name="re_pass"  value="" required />
				</dd>
		</dl>
 
		</center>
			<input type="submit" class="btn" value="Reset Password" name="re_password" />
		</p>
	
	</fieldset>
<?php
include("con1.php");

session_start();
$name=$_SESSION['name'];
$_SESSION['name1']=$name;

if($_SESSION['sid']==session_id())
	{
	
	  
		$sql=mysql_query("select * from admin where admin_id='".$name."'");
	
			if(!$sql)
			{
			echo mysql_error();
			}
			else
			{
				echo"<center>";
		if(isset($_POST['re_password']))
		{
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
		
		$chg_pwd=mysql_query("select * from admin where admin_id='".$name."'");
		
		$chg_pwd1=mysql_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['admin_pass'];
		
		if($data_pwd==$old_pass)
		{
		   if($new_pass==$re_pass)
		   {
			$update_pwd=mysql_query("update admin set admin_pass='$new_pass' where admin_id='".$name."'");
			echo "<script>alert('Update Sucessfully');
			     window.location.href='index.php';</script>";
			}
		else
			{
			echo "<script>alert('Your new and Retype Password is not match')</script>";
			}
		}
		else
		{
		echo "<script>alert('Your old password is wrong')</script>";
		}
		}
       	}  
				echo"</center>";
			}
		
		echo"<br>";
		echo"<br>";
	   echo"</center>";
		
     
   echo"</div>";
   
   
 ?>
</form> 

<br>
<br>

   
                          
                    		
			</div>                 
</div>




</body>
</html> 
 
 
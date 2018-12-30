<html>
<head>
<title> Indian Airlines </title>
<style>
#a1{left:0%; top:0%; width:100%; height:150%; position:absolute; background-color:00ace6;}
    #b1{left:10%; top:10%; width:80%; height:90%; position:absolute; background-color:white; box-shadow: -3px -3px 5px 2px black;}      
#c1{left:3%; top:2%; width:95%; height:95%; position:absolute; background-color:#80bfff;}



</style>
</head>
<body>
<div id="a1"><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre>  <div id="b1">
        
         
                          <div id="c1"><br><br>	
<center>
<br><br><br><br><br>
<?php 
echo '

<form action="try4.php" method="POST">

E-mail Address: <input type="text" name="email" size="20" />
<br><br><br>

New Password: <input type="password" name="password" size="20" />
<br><br><br>


Confirm Password: <input type="password" name="confirmpassword" size="20" />

<br>
<br>
<br>

<input type="hidden" name="q" value="';

if (isset($_GET["q"])) 

{

    echo $_GET["q"];

}

echo '" /><input type="submit" name="ResetPasswordForm" value=" Reset Password " />

</form>';
?>
 </center>
 
 

						  </div>
					     
                    		
			</div>                 
</div>
</body>
</html> 
 
 
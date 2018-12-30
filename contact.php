<html>
<head>
<title> Indian Airlines </title>
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
#a1{left:0%; top:0%; width:100%; height:150%; position:absolute; background-color:#00ace6;}
    #b1{left:10%; top:10%; width:80%; height:90%; position:absolute; background-color:white;box-shadow: -3px -3px 5px 2px black;}      
#c1{left:2%; top:36%; width:95%; height:60%; position:absolute; background-color:#80bfff;}
#c2{left:2%; top:2%; width:95%; height:30%; position:absolute; background-color:#00ace6;}


</style>
</head>
<body>
<div id="a1"><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>  </pre>
 <div id="b1">
           
                          <div id="c1">
<?php
if(isset($_POST['submit']))
{
 $to="modisubham190@gmail.com";
 $from=$_POST['email'];
 
 $first_name=$_POST['first_name'];
 $last_name=$_POST['last_name'];
 
 $subject=$_POST['sub'];
 $subject2="copy of your form submission";
 
 $message=$first_name."".$last_name."wrote the following : "."\n\n".$_POST['message'];
 $message2="here is a copy of your message ".$first_name.""."\n\n".$_POST['message'];

$headers="from :".$from;
$headers2="from: ".$to;

mail($to,$subject,$message,$headers);
mail($from,$subject2,$message2,$headers2);
echo"<script>alert('mail has been sent Thank u ".$first_name."we will contact you  shortly .')</script>";
}
?>

<br>
<br>
<font size="8%"><u>&nbsp&nbsp&nbspCONTACT US..... </u></font>
<form method="POST" action="contact.php">
<br>

<pre>
     first name:  <input type="text" name="first_name" id="cc1" onblur="checkname();"><span id="name"></span></pre>
<pre>
     Last name:   <input type="text" name="last_name" id="cc2" onblur="checknamee();"><span id="namee"></span></pre>
<pre>
     Email:       <input type="text" name="email" id="cc3" onblur="checkemail();"><span id="mail"></span></pre>
			
<pre>	 
     Subject:     <input type="text" name="sub"><br></pre>
<pre>
     Message:<br>                  <textarea rows="5" name="message" cols="30"></textarea></pre><br>
	 


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp      <input type="submit" name="submit" value="submit" onclick="sub()">
</form>


	  </div>
						  <div id="c2"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/QYjkQUN_1LE" frameborder="0" allowfullscreen></iframe> </div>                 
</div>




</body>
</html> 
 
 
 
<html>
<head>
<title> Welcome To Indian Airlines </title>
<script>
var i=1;
var x=new Array(11);

function change()
{

   if(i<11)
   {
    i++;
   }
   else
   {
    i=1;
   }
document.getElementById("imagename").src="z"+i+".jpg";    
}
</script>
<script>
var i=1;
var x=new Array();
x[1]="";
x[2]="";
x[3]="";
x[4]="";
function slider()
{
 if(i<4)
 {
 i++;
 }
 else
 {
 i=1;
 }
 document.getElementById("m").src="a"+i+".jpg";
 document.getElementById("s").innerHTML=x[i];
 setTimeout("slider()",4000);
 }

 
 
 
 </script>
<style>
#a1{left:0%; top:0%; width:100%; height:180%; position:absolute; background-color:#00ace6;}
    #b1{left:10%; top:9%; width:80%; height:85%; position:absolute; background-color:#ccebff ;box-shadow: -3px -3px 5px 2px black;}      
		#c1{left:0%;  top:0%;  width:100%;  height:60%; position:absolute; background-color:white;}
		        #y1{top:40%; width:8%; left:0%; height:20%; position:absolute; cursor:pointer;}
				#y2{top:40%; width:8%; right:0%; height:20%; position:absolute; cursor:pointer; }
                                                                                                
		#c2{right:0%; top:60%; width:30%;   height:40%; position:absolute; background-color:#5d95ef; }
		
        
        #c3{left:2%; top:35%; width:0%;   height:0%; position:absolute; background-color:black;}
		

</style>
</head>
<body onload="slider()">
<div id="a1"><pre><font size="6%"><font color="black">        INDIAN AIRLINES       </font> </pre>
<pre><font size="4.5%">                 <a href="index.php">HOME</a>      <a href="register.php">FLIGHTS</a>      <a href="about.php">ABOUT US</a>    <a href="contact.php">CONTACT US</a>                                                               <a href="adminlogin.php">ADMIN LOGIN</a>           </pre>
           
					<div id="b1">
									<div id="c1"> 

 						<img src="z4.jpg" width="100%" height="100%" id="imagename"> 
                          
						<div id="y1"><font onclick="change()" size="20%" color="black">    <<  </font>            </div>
						<div id="y2"><font onclick="change()" size="20%" color="black">    >>  </font>   


						</div>   
<br>
<br>
<h1>BOOK FLIGHTS WITH US....</h1>
<br>
<h3>
<ul shape="circle">
    <li>EASY TICKETING WITH US</li>
    <li>AFFORDABLE PRICES </li>
    <li>VERSATILE FACILITES. </li>
	<li>AND MUCH MORE... </li>
<ul>
</h3>	
         						</div>
									<div id="c2"> 
												<br>
	&nbsp&nbsp												LOGIN/REGISTER
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
													<br>
													<input id="button"  type="submit" name="submit" value="Log-In">
                                                    <br>
													<br>
	
													<a href="register.php"><input type="submit" value="Signup!"> </a>					 
												</center>	
																				</div>	
                                 <div id="c3" >
 <img src="a1.jpg" width="100%" height="100%" id="m">
<span id="s"></span> 

								 </div>
		
								 
					</div>                 
</div>
					
</div>
</body>
</html>
<?php
$cn=mysqli_connect('localhost:3306','root','');

mysqli_select_db($cn,'airlines');

 if(mysqli_connect_error())
  {
  echo"fail to connect to sql".mysql_connect_error();
  }
 
$sql="create table register(username char(10),password char(10),repassword char(10),first_name char(10),last_name char(10),email char(25))";
 
  if(mysqli_query($cn,$sql))
  {
  echo" table created successfully";
  }
  else
  {
  echo"error creating table ".mysqli_connect_error($cn);
  }
?>
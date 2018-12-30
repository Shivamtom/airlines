<?php
$cn=mysqli_connect('localhost:3306','root',''); //root universal username.
if(mysqli_connect_error())
{
 echo"fail to connect to SQL ".mysql_connect_error();
}

$sql="create database airlines";             // database name airlines.
 
if(mysqli_query($cn,$sql))s
 {
  echo"database created succesfully";
 }
else
 {
  echo"error creating database".mysqli_connect_error($cn);
 }
 ?>
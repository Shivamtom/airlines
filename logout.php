<?php

 echo"logged out successfully ";
 session_start();
 session_destroy();
 
 echo"<a href='index.php'>HOMEPAGE </a>";
 
 ?>
<?php
session_start();
  echo "<h3>";
  echo "Welcome ". $_SESSION['uname']."!!! <br> <br>";
  echo "</h3>";
 
  echo "<a href='group.php'>View By Blood Group</a>","<br> <br>";
  echo "<a href='location.php'>View By Location</a>","<br> <br>";
  echo "<a href='logout.php'>Log out</a>";
?>

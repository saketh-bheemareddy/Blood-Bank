<?php 
session_start();
session_destroy();
echo "successfully logged out <br> <br>";
echo "<a href='index.php'>Click here to go to Home page</a>"
?>
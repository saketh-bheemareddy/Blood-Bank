<?php
if( isset( $_GET['wrong_pwd'] ) AND $_GET['wrong_pwd'] == 'true' ) {
  echo "<script>alert('Invalid login details');</script>";

}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.login{
  width: 400px;
  height: auto;
  margin: auto;
  padding: 20px 30px;
  background: rgba(0,0,0,0.4);
  border-radius: 10px;
  color: white;
  float:right;
  max-width: 300px;
  margin-top:10px;
  margin-right:0px;
  margin-bottom:300px;
  display: flex;
}
label{
  width:100px;
  display: inline-block; 
}

ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #dddddd;
}
body {

background-repeat: no-repeat;
background-size: cover;
}

li {
  float: left;
}

li a {
  display: block;
  padding: 8px;
}
 </style>
<body background="blood.jpg">
<!-- <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About Us</a></li>
</ul> -->
<div class="login">
<form action="loginvalidate.php" method="post">
    <center>
            <label for="uid">UID(Aadhar): </label>
            <input type="text" name="uid" id="uid"> <br> <br>
            <label>Password: </label>
            <input type = "password" name = 'pwd' id="pwd"> <br> <br>
            <input type="checkbox" name="">Remember me <br> <br>
            <input type="submit" value="Login" name="login" ">
            <p>Not a user ? <a href="register.php">Register</a></p>
            
            <a href="forgotpassword.php">Forgot Password</a>
    </center>
        </form>
</div> 
</body>
</html>
<?php 
// if user sets remember me then data is displayed in textfields
if (isset($_COOKIE['uid']) && isset($_COOKIE['pwd'])) 
{
    $uid = $_COOKIE['uid'];
    $pass = $_COOKIE['pwd'];

    echo "<script>
    
    document.getElementById('uid').value = '$uid';
    document.getElementById('pwd').value = '$pass';

    </script>";
}

?>
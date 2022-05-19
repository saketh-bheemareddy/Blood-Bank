<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="blood.jpg">
<form action="loginvalidate.php" method="post">
            <label for="uid">Enter UID(Aadhar): </label>
            <input type="text" name="uid" id="uid"> <br> <br>
            <label>Password: </label>
            <input type = "password" name = 'pwd' id="pwd"> <br> <br>
            <input type="checkbox" name="">Remember me <br> <br>
            <input type="submit" value="Login" name="login">
            <p>Not a user ? <a href="register.php">Register here..</a></p>
            <br><br>
            <a href="forgotpassword.php">Forgot Password</a>
        </form> 
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
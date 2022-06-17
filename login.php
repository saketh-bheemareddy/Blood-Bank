<?php
if( isset( $_GET['wrong_pwd'] ) AND $_GET['wrong_pwd'] == 'true' ) {
  echo "<script>alert('Invalid login details');</script>";
}
if (isset($_GET['existing_user']) AND $_GET['existing_user'] == 'true')
{
  echo "<script>alert('User already Existed please Log in');</script>";
}
if (isset($_GET['password_update']) AND $_GET['password_update'] == 'true')
{
  echo "<script>alert('password updated successfully please Log in');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/login.css">
    <title>Blood Bank</title>
</head>
<body background="/images/login_page_bg.jpg">
<div class="body">
<div class="login">
<form action="loginvalidate.php" method="post">
            <label for="uid">Enter UID(Aadhar): </label>
            <input type="text" name="uid" id="uid"> <br> <br>
            <label>Password: </label>
            <input type = "password" name = 'pwd' id="pwd"> <br> <br>
            <input type="checkbox" name="">Remember me <br> <br>
            <input type="submit" value="Login" name="login" ">
            <p>Not a user ? <a href="register.php" class="button">Register</a></p>
            <a href="forgotpassword.php" class="pass">Forgot Password</a>
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
<?php include 'connection.php'?>
<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="uid">Enter Your Aadhar: </label>
        <input type="text" name="uid" required minlenght="12" maxlength="12" pattern="[2-9]{1}[0-9]{11}"> <br> <br>
        <label for="email">Enter Email: </label>
        <input type="email" name="email" id="email" required> <br> <br>
        <label for="password">New Password: </label>
        <input type = "password" name = 'pwd' required minlength="8"> <br> <br>
        <input type="submit" value="Change Password">
        </form>
    </body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $uid = $_POST['uid'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    // sql query to find user with uid and email-id
    $sql = "SELECT * from donar_details where uid = '$uid' and email = '$email'";
    $res = $conn->query($sql);
    if($res==TRUE)
    {
        // sql query to update passwordof the user
        
        $sql2 = "UPDATE donar_details SET userpassword='$pwd' where uid = '$uid'";
        $res2 = $conn->query($sql2);
        if($res2 == TRUE)
        {
            echo "password updated succesfully";
            echo "Please <a href='login.php'>Login</a>";
        }
    }
    else{
        echo "Invalid details Try again <br><br>";
        include 'forgotpassword.php';
    }
}
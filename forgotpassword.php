<?php include 'connection.php'?>
<?php
if(isset($_GET['wrong_details']) and $_GET['wrong_details'] == 'true'){
    echo "<script>alert('Invalid details please try again');</script>";
}?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/forgotpassword.css">
    </head>
    <body>
        <br>
        <div class="form">
        <div class="from-group">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <p class="text-center"><b>Enter your Details to change Password.</b></p>
            <label for="uid">Enter Your Aadhar: </label><br>
            <input class="form-control" type="text" name="uid" required minlenght="12" maxlength="12" pattern="[2-9]{1}[0-9]{11}"> <br>
            <label  for="email">Enter Email: </label><br>
            <input class="form-control" type="email" name="email" id="email" required> <br>
            <label for="password">New Password: </label><br>
            <input class="form-control" type = "password" name = 'pwd' required minlength="8"> <br>
            <div class="text-center">
            <button type="submit" class="btn btn-outline-success">Change password</button>
            </div>
            </form>
        </div>
        </div>
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
    if($res->num_rows > 0)
    {
        // sql query to update passwordof the user
        
        $sql2 = "UPDATE donar_details SET userpassword='$pwd' where uid = '$uid'";
        if($conn->multi_query($sql2)===TRUE)
        {
            header("Location:login.php?password_update = true");
        }
    }
    else{
        header("Location:forgotpassword.php?wrong_details=true");
    }
}
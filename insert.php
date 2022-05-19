<?php include 'connection.php'; ?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $uid=$_POST['uid'];
    $location=$_POST['location'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $group=$_POST['group'];
    $pwd =$_POST['pwd'];
    $uname = $_POST['uname'];
    $sql2 = "SELECT uid from donar_details where uid= '$uid'";
    $res = $conn->query($sql2);
    try{
        $sql="INSERT INTO donar_details VALUES('$uid','$uname','$pwd','$email','$contact','$group','$location')";
        if($conn->multi_query($sql)===TRUE){
            echo "Registered successfully","<br>";
            echo "<a href='login.php'>Login</a>","<br>";
        }
        throw new Exception();
        
    }
    catch(Exception $e)
    {
        if($e->getCode() == 1062)
        {
            echo "<center>";
            echo "<h4>User Already Exists</h4>";
            echo "please <a href='login.php'>Login</a> Here","<br>";
            echo "</center>";
        }
    }
    
}
?>
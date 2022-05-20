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

    //handing exceptions using a try-catch block
    try{
        //sql to insert the details of donar into the table

        $sql="INSERT INTO donar_details VALUES('$uid','$uname','$pwd','$email','$contact','$group','$location')";
        
        if($conn->multi_query($sql)===TRUE){
            echo "Registered successfully","<br>";
            echo "<a href='login.php'>Login</a>","<br>";
        }
        throw new Exception();
    }
    //catching the sql exceptions
    catch(Exception $e)
    {
        //sql duplicate for primary key wxception handling
        if($e->getCode() == 1062)
        {
            header("Location:login.php?existing_user=true");
        }
    }
    
}
?>
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
    
}
$sql="INSERT INTO donar_details VALUES('$uid','$uname','$pwd','$email','$contact','$group','$location')";
if($conn->multi_query($sql)===TRUE){
    echo "Registered successfully","<br>";
    echo "<a href='login.php'>Login</a>","<br>";
    
}
else{
    echo "Error: " .$sql . "<br>" . $conn->error;
}
?>
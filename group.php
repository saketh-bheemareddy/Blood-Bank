<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<a href="welcome.php">Home</a> &nbsp; <a href="logout.php">Log out</a> <br> <br>
<h1>Welcome <?php echo $_SESSION['uname'] ?></h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h3>Select blood group</h3>
            <select name="group">
            <option value="select">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select> 
            <input type="submit" value="view">
</form>
</body>
</html>              
<?php include 'connection.php'; ?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $group=$_POST['group'];
    
}
$sql="SELECT * FROM donar_details WHERE blood_group='$group';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br>UID: " , $row["uid"], " - location: " , $row["Location"]," - contact number: " , $row["phone"]," - email: " , $row["email"], " - blood group: " , $row["blood_group"], "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
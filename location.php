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
<h1>Welcome <?php echo $_COOKIE['uname'] ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h3>Select Location</h3>
            <select name="location">
              <option value="select">Select</option>
                <option  value="Hyderabad">Hyderabad</option>
                <option value="Warangal">Warangal</option>
                <option value="Nizambad">Nizambad</option>   
                <option value="Karimnagar">Karimnagar</option> 
                <option value="Adilabad">Adilabad</option> 
                <option value="Khammam">Khammam</option>       
            </select>
            <input type="submit" value="view">
</form>
</body>
</html>             
<?php include 'connection.php'; ?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $location=$_REQUEST['location'];
}
$sql="SELECT * FROM donar_details WHERE Location='$location';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "UID: " , $row["uid"], " - location: " , $row["Location"]," - contact number: " , $row["phone"]," - email: " , $row["email"], " - blood group: " , $row["blood_group"], "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
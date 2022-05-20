<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BY blood Group</title>
  <link rel="stylesheet" href="group_page.css">
</head>
<style>
  body{
  
    background-repeat: no-repeat;
    background-size: cover;
  }
  </style>
<body background="loc.jpg">
<a href="welcome.php">Home</a> &nbsp; <a href="logout.php">Log out</a> <br> <br>
          <!-- using session to get the user name -->
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

    // sql query to find all donars with required blood group

    $sql="SELECT * FROM donar_details WHERE blood_group='$group';";
    $result = $conn->query($sql);

?>
<br><br>
<!-- create table to diplay output -->
<table style = "width:75%; margin-left:auto; margin-right:auto" > 
  <tr>
    <th>Aadhar</th>
    <th>Name</th>
    <th>E-mail</th>
    <th>Contact</th>
    <th>Location</th>
  </tr>
<?php
  if ($result->num_rows > 0) {
    // output data of each row in form of table
    while($row = $result->fetch_assoc()) 
    {
      echo '<tr><td>',$row["uid"],'</td><td>',$row["username"],'</td><td>',$row["email"],'</td><td>',$row["phone"],'</td><td>',$row["Location"],'</td></tr>';
    }
  }
  // if no user found with that blood group display no results found. 
  else 
  {
    echo "<tr><td colspan='5'>No Results Found</td></tr>";
  }
$conn->close();
}
?>
</table>
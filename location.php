<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="location_page.css">
</head>
<body>
<header>
  <div class="nav-menu">
    <a href="welcome.php">Home</a> &nbsp; &nbsp; &nbsp; <a href="logout.php">Log out</a> <br> <br>
  </div>
  <br>
  <h1>Welcome <?php echo $_SESSION['uname'] ?></h1>
</header>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h3>Select Location to view</h3>
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

    //sql query to find all donars of specific location.
    $sql="SELECT * FROM donar_details WHERE Location='$location';";

  $result = $conn->query($sql);
?>
<br><br>
<!-- creating a table to display output -->
<table style = "width:75%; margin-left:auto; margin-right:auto" >
  <tr>
    <th>Aadhar</th>
    <th>Name</th>
    <th>E-mail</th>
    <th>Contact</th>
    <th>Blood Group</th>
  </tr>
<?php
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
      echo '<tr><td>',$row["uid"],'</td><td>',$row["username"],'</td><td>',$row["email"],'</td><td>',$row["phone"],'</td><td>',$row["blood_group"],'</td></tr>';
    }
  } 
  else 
  {
    echo "<tr><td colspan='5'>No Results Found</td></tr>";
  }
}
$conn->close();
?>
</table>
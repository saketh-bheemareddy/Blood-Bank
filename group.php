<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BY blood Group</title>
  <link rel="stylesheet" href="group_page.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
  body{
    background-position: fixed;
    background-repeat: no-repeat;
    background-size: cover;
  }
  </style>
<body background="b1.jpeg">
  <div class="container">
  <div class="font-weight-bold">
  <a href="welcome.php">Home</a> &nbsp; <a href="logout.php">Log out</a> <br> <br>
  </div>
          <!-- using session to get the user name -->
<h1 class="text-center">Welcome <?php echo $_SESSION['uname'] ?></h1>
  </div>
  <h5>Select blood group</h5>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="input-group  w-25 justify-content-center">
            <select name="group" class="form-control"  required>
            <option value="select">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            </select> &nbsp;
            <button type="submit" class="btn btn-primary">View</button>
            </div>
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
<table style = "width:75%; margin-left:auto; margin-right:auto" class="table-hover"> 
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
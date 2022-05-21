<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>By Location</title>
  <link rel="stylesheet" href="location_page.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<style>
  body {
<<<<<<< HEAD
    background-image: url("loc.jpg");
=======
    background-image: url("b1.jpeg");
>>>>>>> 1113752ed87944ebc4f9d6b88eaeaaa85cc84dcc
background-position: fixed;
background-repeat: no-repeat;
background-size: cover;

}
<<<<<<< HEAD

=======
table{
background-color: rgba(0, 0, 0, 0.2);
}
>>>>>>> 1113752ed87944ebc4f9d6b88eaeaaa85cc84dcc
  </style>
<body>
  <div class="nav-menu">
    <br>
    <a href="welcome.php">Home</a> &nbsp; &nbsp; &nbsp; <a href="logout.php">Log out</a> 
  </div>
  <br> <br>
  <h1 class="text-center">Welcome <?php echo $_SESSION['uname'] ?></h1>
  </div>
<div class="form">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h5>Select Location to view</h5>
            <div class="input-group  w-25 justify-content-center">
            <select class="form-control" name="location" style="width: 150px;">
              <option value="select">Select</option>
                <option  value="Hyderabad">Hyderabad</option>
                <option value="Warangal">Warangal</option>
                <option value="Nizambad">Nizambad</option>   
                <option value="Karimnagar">Karimnagar</option> 
                <option value="Adilabad">Adilabad</option> 
                <option value="Khammam">Khammam</option>       
            </select> &nbsp;
            <button class="btn btn-primary" type="submit">View</button>
            </div>
</form>
</div>
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
<div class="tab">
<table style = "width:75%; margin-left:auto; margin-right:auto" class="table-hover">
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
</div>
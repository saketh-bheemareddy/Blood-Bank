<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link rel="stylesheet" href="welcome.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body background="loc.jpg">
<div class="container">
  <div class="font-weight-bold">
  <a href="logout.php">Log out</a> 
  </div>
  <h1 class="text-center">Welcome <?php echo $_SESSION['uname'] ?></h1>
  </div>
  <br>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <div class="d-flex justify-content-center">
      <div class="btn-group btn-group-lg">
      <button class="btn btn-dark" name = "location" type="submit">View By Location</button>
      <button class="btn btn-dark" name="group" type="submit">View By Blood Group</button>
      </div>
      
    </div>
  </form>
  <br> <br> <br>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['location']))
  {
    include 'location.php';
  }
  if(isset($_POST['group']))
  {
    include 'group.php';
  }
}
?>
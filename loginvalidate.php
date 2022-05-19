<?php include 'connection.php'; ?>
<?php
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

//sql query to find user in database usinf uid.
$sql = "SELECT * FROM donar_details where uid ='$uid';";

$result = $conn->query($sql);
$rows = $result->fetch_assoc();
if (!empty($_POST['rem'])) {
  // setting the cookies
    setcookie('uid', $uid, time()+60*60*7);
    setcookie('pwd', $pwd, time()+60*60*7);
}
if ($result->num_rows > 0) {
  // check if password is correct or not.
  if($rows["userpassword"] == $pwd)
  {
    //if password is correct.
    $uname = $rows['username'];
    session_start();
    $_SESSION['uname'] = $uname;
    $_SESSION['uid'] = $uid;
    header('location:welcome.php');
  }
  else
  {
    // if password is incorrect
    echo "<h3><b>Invalid password!!</b> Try Again</h3>";
    include 'login.php';
  }
}
else {
  // if user is not registerd.
  echo "<h3><b>No user found !! Please Register</b></h3><br>";
  include 'login.php';
}
$conn->close();
?>
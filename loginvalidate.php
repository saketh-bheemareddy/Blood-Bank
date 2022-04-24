<?php include 'connection.php'; ?>
<?php
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
$sql = "SELECT * FROM donar_details where uid ='$uid' and userpassword = '$pwd';";
$result = $conn->query($sql);
$rows = $result->fetch_assoc();

if (!empty($_POST['rem'])) {
    setcookie('uid', $uid, time()+60*60*7);
    setcookie('pwd', $pwd, time()+60*60*7);
}
if ($result->num_rows > 0) {
  $uname = $rows['username'];
  session_start();
$_SESSION['uname'] = $uname;
  header('location:welcome.php');
} 
else {
  echo "<h3><b>No user found or Invalid login</b></h3><br>";
  include 'login.php';
}
$conn->close();
?>
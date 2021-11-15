<?php include 'connection.php'; ?>
<?php
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
$sql = "SELECT * FROM donar_details where uid ='$uid' and userpassword = '$pwd';";
$result = $conn->query($sql);
$rows = $result->fetch_assoc();
$uname = $rows['username'];
if (!empty($_POST['rem'])) {
    setcookie('uid', $uid, time()+60*60*7);
    setcookie('pwd', $pwd, time()+60*60*7);
}
session_start();
$_SESSION['uname'] = $uname;
if ($result->num_rows > 0) {
  header('location:welcome.php');
} 
else {
  echo "No user found or Invalid login";
}
$conn->close();
?>
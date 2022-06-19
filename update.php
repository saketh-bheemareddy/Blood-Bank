<?php include 'connection.php' ?>
<?php
$uid = $_POST['uid'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$group = $_POST['group'];
$location = $_POST['location'];

$sql = "UPDATE donar_details SET email='$email',phone='$phone',blood_group='$group',Location='$location' WHERE uid = '$uid'";
if($conn->query($sql)){
    header('location:Welcome.php?$profile_updated = true');
}
?>
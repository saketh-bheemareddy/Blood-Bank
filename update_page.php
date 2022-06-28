<?php include 'connection.php' ?>
<?php session_start(); ?>
<?php 
$uid = $_SESSION['uid'];
$sql = "SELECT * FROM donar_details WHERE uid = '$uid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Update Profile</title>
    <link rel="stylesheet" href="styles/update_page.css">
</head>
<body background="images/update_bg.png" style="background-repeat: no-repeat; background-size: 100%;">
    <center>
    <div class="profile">
        <h5><b>Edit Your Profile</b></h5>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td class="left"><label for="uid">UID(Aadhar) </label></td>
                    <td><input class="non-edit" type="text" name="uid" id="" value="<?php echo $row['uid'];?>" required minlenght="12" maxlength="12" pattern="[2-9]{1}[0-9]{11}"></td>
                </tr>
                <tr>
                    <td class="left"><label for="uname">Name </label></td>
                    <td><input class="non-edit" type="text" name="uname" id="" value="<?php echo $row['username'];?>" required pattern="[A-Z][a-z]{,29}"></td>
                </tr>
                <tr>
                    <td class="left"><label for="email">E-mail </label></td>
                    <td><input type="email" name="email" id="" value="<?php echo $row['email'];?>" required></td>
                </tr>
                <tr>
                    <td class="left"><label for="phone">Phone </label></td>
                    <td><input type="text" name="phone" id="" value="<?php echo $row['phone'];?>" required minlength="10" maxlength="10" pattern="[6-9]{1}[0-9]{9}"></td>
                </tr>
                <tr>
                    <td class="left"><label for="group">Blood Group </label></td>
                    <td><input type="text" name="group" id="" value="<?php echo $row['blood_group'];?>" required pattern="([A|B|O]|[A][B])[\+-]"></td>
                </tr>
                <tr>
                    <td class="left"><label for="location">Location</label></td>
                    <td><select name="location" required>
                        <option value="">Select Location</option>
                        <option  value="Hyderabad">Hyderabad</option>
                        <option value="Warangal">Warangal</option>
                        <option value="Nizambad">Nizambad</option>   
                        <option value="Karimnagar">Karimnagar</option> 
                        <option value="Adilabad">Adilabad</option> 
                        <option value="Khammam">Khammam</option>       
                    </select> </td>
                </tr>
                <tr><td class="center" colspan="2"><button class="btn btn-secondary" type="submit">Update</button></td></tr>
            </table>
        </form>
    </center>
</body>
</html>

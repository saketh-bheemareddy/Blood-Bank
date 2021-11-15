<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name = 'uid'> <br> <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $uid = $_POST['uid'];
    $sql = "SELECT uid from donar_details WHERE uid=$uid";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        $row = $res->fetch_assoc();
        echo $row['uid'];
    }
    else{
        echo "data not found";
    }
}

?>
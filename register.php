<?php
if( isset( $_GET['not_a_user'] ) AND $_GET['not_a_user'] == 'true' ) {
  echo "<script>alert('User Not Registered please register');</script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles/register.css">
</head>
<style>
 body {
background-position: center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;
}
.register {
            width: auto;
            height: 250 px;
            margin: auto;
            padding: 20px 30px;
            background: #fd5c63;
            
            /* border-radius: 10px; */
            color: white;
            float:left;
            max-width: 350px;
        margin-top:150px;
        margin-right:150px;
        margin-left:100px;
        margin-bottom:300px;
        display: flex;
        }
        table{
        display: table; 
        } 
        label { 
          width:100px;
          display: inline-block; }
          .button {
            background-color: black;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
}


  </style>

<body background="images/register_page_bg.jpg" scroll="no" style="overflow: hidden">
  <div class="register">
<form action="insert.php" method="post">
            <label for="uid">Uid(Aadhar): </label>
            <input type="text" name="uid" required minlenght="12" maxlength="12" pattern="[2-9]{1}[0-9]{11}"> <br> <br>
            <label for="uname">Full Name: </label>
            <input type="text" name="uname" required pattern="[A-Z][a-z]{,29}"> <br> <br>
            <label>Password:<small>(min 8 characters)</small> </label>
            <input type = "password" name = 'pwd' required minlength="8"> <br> <br>
            <label for="phone">Phone: </label>
            <input type="text" name="contact" required minlength="10" maxlength="10" pattern="[6-9]{1}[0-9]{9}"> <br> <br>
            <label for="email">Email: </label>
            <input type="email" name="email" required> <br> <br>
            <label for="bld">Blood Group: </label>
            <input type="text" name="group" required pattern="([A|B|O]|[A][B])[\+-]"> <br> <br>
            <label for="location">Location: </label>
            <select name="location" required>
              <option value="" >Select Location</option>
                <option  value="Hyderabad">Hyderabad</option>
                <option value="Warangal">Warangal</option>
                <option value="Nizambad">Nizambad</option>   
                <option value="Karimnagar">Karimnagar</option> 
                <option value="Adilabad">Adilabad</option> 
                <option value="Khammam">Khammam</option>       
            </select> 
            <p id="loactionerr"></p><br> 
            <center><button class="button" type="submit" name="send">Submit</button><center>
            </form>
</div>
</body>
</html>

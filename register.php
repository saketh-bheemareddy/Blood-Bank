<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
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
            <p id="loactionerr"></p><br> <br>
            <button type="submit" name="send">Submit</button>
        </form>
</body>
</html>
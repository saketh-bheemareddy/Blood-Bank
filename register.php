<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="insert.php" method="post">
            <label for="uid">Uid(Aadhar): </label>
            <input type="text" name="uid" required> <br> <br>
            <label for="uname">User Name: </label>
            <input type="text" name="uname" required> <br> <br>
            <label>Password: </label>
            <input type = "password" name = 'pwd' required> <br> <br>
            <label for="phone">Phone: </label>
            <input type="text" name="contact" required> <br> <br>
            <label for="email">Email: </label>
            <input type="email" name="email" required> <br> <br>
            <label for="bld">Blood Group: </label>
            <input type="text" name="group" required> <br> <br>
            <label for="location">Location: </label>
            <select name="location">
              <option value="select">Select</option>
                <option  value="Hyderabad">Hyderabad</option>
                <option value="Warangal">Warangal</option>
                <option value="Nizambad">Nizambad</option>   
                <option value="Karimnagar">Karimnagar</option> 
                <option value="Adilabad">Adilabad</option> 
                <option value="Khammam">Khammam</option>       
            </select> <br> <br>
            <input type="submit" value="submit">
        </form>
</body>
</html>
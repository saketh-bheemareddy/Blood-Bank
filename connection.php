<?php
$servername="localhost";
$username="root";
$password="";
$dbname="blood_donation";
//create connection
$conn=new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error){
    //it will print and come out of the page==use of die function
    die("Connection failed: " . $conn->connect_error);
} 

?>
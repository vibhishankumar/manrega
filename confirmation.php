<?php
$userid = $_POST["username"];
$passw =$_POST["password"] ;
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, "manregaDB");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
$query = "SELECT * FROM registration WHERE email = '$userid'AND password ='$passw'";
$data = mysqli_query($conn, $query);
 if(mysqli_num_rows($data))
 {
 	echo "hello";
 }
?>
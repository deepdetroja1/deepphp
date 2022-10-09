<?php
$servername = "localhost";
$username = "root";
$password = "";
$datbase = "mytourism1";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
    echo "connection was successfull <br> ";
}


$sql = "CREATE DATABASE mytourism1";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);



?>
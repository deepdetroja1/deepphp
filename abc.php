<?php
$servername = "localhost";
$username = "root";
$password = "";
$datbase = "deep";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
    echo "connection was successfull <br> ";
}

$sql = "SELECT * FROM `mytour` WHERE `lastname` = `detroja` ";
$result = mysqli_query($conn , $sql);
$num = mysqli_num_rows($result);
echo $num;
echo "<br>";


?>
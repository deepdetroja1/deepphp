<p>welcome in php database</p>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="dbdeep2";


$conn = mysqli_connect($servername, $username, $password , $dbme);
$sql ="CREATE DATABASE dbdeep2";
mysqli_query($conn,$sql);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
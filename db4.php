<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb2";

// Create connection

// Check connection


// Create database
$sql = "CREATE DATABASE mydb2";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

$sql = "CREATE TABLE Mytour (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

$sql = "INSERT INTO Mytour (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>            
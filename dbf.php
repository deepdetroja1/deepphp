<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Contact Us</title>
  </head>
  <body>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];





$servername = "localhost";
$username = "root";
$password = "";
$database = "forms";


$conn = mysqli_connect($servername , $username ,  $password , $database);

if(!$conn){
    die("didnt connected");
}else{
    $sql = "INSERT INTO `user` (`firstname`, `email`, `course`) VALUES ('$name', '$email', '$course')"; 
    $result  = mysqli_query($conn , $sql);

    if($result){

        echo "added sucessfully";
    }else{
        echo "not to added";
    }
}
}
$query="select * from info";  
 $connect=mysqli_query($conn,$query);  
 $num=mysqli_num_rows($connect); 
?>

<h1>enter your details here</h1>
<form action="dbf.php" method = "post">
<label for="name">Name</label>
<input type="text" id = "name" name = "name"><br><br>
<label for="email">Email</label>
<input type="email" id = "email" name = "email"><br><br>
<label for="course">Course</label>
<input type="text" id = "course" name = "course"><br><br>
<button type = "submit">Submit</button>



</form>



</body>
</html>
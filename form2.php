<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .error{
        color: red;
    }
    .form{
        margin-left: 32%;
        width: 25%;
        border: 1px solid black;
    }
    .part{
        margin-left: 33%;
    }
</style>
<body>
    <?php
    $user = $pass = "";
    $userErr = $passErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $userErr = "Username is required";
        }else{
            $user = deep($_POST["name"]);  
            if (!preg_match("/^[a-zA-Z-' ]*$/",$user)) {  
              $userErr = "Only letters and white space allowed";  
            }  
        }
        if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
            $pass = deep($_POST["password"]);
            $cpassword = deep($_POST["cpassword"]);
            if (strlen($_POST["password"]) <= '8') {
                $passwordErr = "Your Password Must Contain At Least 8 Characters!";
            }
            elseif(!preg_match("#[0-9]+#",$password)) {
                $passwordErr = "Your Password Must Contain At Least 1 Number!";
            }
            elseif(!preg_match("#[A-Z]+#",$password)) {
                $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
            }
            elseif(!preg_match("#[a-z]+#",$password)) {
                $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
            } else {
                $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
            }
        }
        
    }
    function deep($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form"> 
    <h3 >Log in form</h3>

    Username : <input type="text" value= "<?php echo $user;?>" name="name" placeholder="username" width="">
    <span class="error">* <?php echo $userErr;?></span>
    <br><br>
    Password :  <input type="text" value= "<?php echo $pass;?>" name="pass"> 
    <span class="error">* <?php echo $passErr;?></span>
    <br><br>
    <input type="submit" value=submit>
    <br><br>
    </form>
    <div class="part">
    <?php
    echo "<h2> Your input : </h2>";
    echo $user;
    echo "<br>";
    echo $pass;
    echo "<br>";
    ?>
    </div>
</body>
</html>
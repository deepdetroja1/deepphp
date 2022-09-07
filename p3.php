<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .error {
        color: #001255;
    }
</style>

<body>
    <?php
    $usernameErr = $passwordErr = $agreeErr = "";
    $username = $password = $agree = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["user"])) {
            $usernameErr = "Username is required";
        } else {
            $username = deep($_POST["user"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $username="admin")) {
                $usernameErr = "Only alphabets and white space are allowed";
            }
        }
        if (empty($_POST["pass"])) {
            $passwordErr = "Password is required";
        } else {
            $password = deep($_POST["pass"]);
            if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $password)) {
                $passwordErr = "Your password is not good.";
            }
        }
        if (!isset($_POST['agree'])) {
            $agreeErr = "Accept terms of services before submit.";
        } else {
            $agree = deep($_POST["agree"]);
        }
    }
    function deep($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>Registration Form</h2>
    <span class="error">* required field </span>
    <br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Username:
        <input type="text" value="<?php echo $username; ?>" name="user" placeholder="Username">
        <span class="error">*<?php echo $usernameErr; ?></span>
        <br><br>
        Password :
        <input type="password" value="<?php echo $password; ?>" name="pass" id="pass" placeholder="Password">
        <span class="error">*<?php echo $passwordErr; ?></span>
        <input type="checkbox" id="check" onclick="showPass();"/>Show Password
        <br><br>
        Agree to Terms of Service:
        <input type="checkbox" name="agree">
        <span class="error">* <?php echo $agreeErr; ?> </span>
        <br><br>
        <input type="submit" value="submit">
    </form>
    <script>
        function showPass() {
            var x = document.getElementById("pass");
            if(document.getElementById('check').checked)
                {
                    pass.setAttribute('type','text');
                }else{
                    pass.setAttribute('type','password');
                }
        }
    </script>
    <?php
    echo "<h2> Successfully logged</h2>";
    echo $username;
    echo "<br>";
    echo $password;
    echo "<br>";
    ?>

</body>

</html>
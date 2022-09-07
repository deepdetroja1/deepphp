<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = $email = $website = $comment = $gender = " ";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = deep($_POST["name"]);
        $email = deep($_POST["email"]);
        $website = deep($_POST["website"]);
        $comment = deep($_POST["comment"]);
        $gender = deep($_POST["gender"]);
    }
    function deep($detail)
    {
        $detail = trim($detail);
        $detail = stripslashes($detail);
        $detail = htmlspecialchars($detail);
        return ($detail);
    }
    ?>
    <h2> FORM VALIDATION</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name :- <input type=" text" name="name"><br><br>
        Email :- <input type="text" name="email"><br><br>
        Website :- <input type="text" name="website"><br><br>
        Comment :- <input type="text" name="comment"><br><br>
        Gender:
        <input type="radio" name="gender" value="Male">Male<br>
        <input type="radio" name="gender" value="Female">Female<br>
        <input type="radio" name="gender" value="Gender">Other<br>
        <input type="submit" value="submit">
    </form>
    <?php
    echo "<h2> Your Input </h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>




    </form>
</body>

</html>
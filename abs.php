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
    abstract class deep{
        abstract protected function add($name);
}
  class childclass extends deep{
    public function add ($name) {
        if($name =="deep"){
        $pref = "Mr.";
    } elseif ($name == "detroja") {
        $pref = "Mrs.";
    }
    return "{$pref} {$name}";
  } 
}
$cls = new childclass();
echo $cls->add("deep");
echo "<br>";
echo $cls-> add("detroja");



    ?>
    
</body>
</html>
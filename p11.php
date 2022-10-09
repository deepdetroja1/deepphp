<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name , $color){
    $this->name = $name; 
     $this->color = $color; 
  }
  function get() {
    return $this->name . " ". $this->color;
  }
}

$apple = new Fruit("Apple", "red");
echo $apple->get();
?>
 
</body>
</html>
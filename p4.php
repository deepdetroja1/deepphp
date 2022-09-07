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
    class school{
        public $std;
        public $div;
        public $num;
        function set_std($std){
            $this->std=$std;
        }
        function get_std(){
            return $this->std;
        }
        function set_div($div){
            $this->div =$div;
        }
        function get_div(){
            return $this->div;
        }
        function set_num($num){
            $this->num =$num;
        }
        function get_num(){
            return $this->num;
        }
    }
    $scl  =new school();
    $scl ->set_std("10");
    $scl-> set_div("A");
    $scl -> set_num("10");
    echo "Standard :" .$scl->get_std();
    echo "<br>";
    echo "division :" .$scl->get_div();
    echo"<br>";
    echo "number :" .$scl->get_num();
    ?>
</body>
</html>
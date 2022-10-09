<?php
//   class school{
//     public $student;
//     public $fees;

//         function __construct($student , $fees){
//             $this->student = $student;
//             $this->fees = $fees;

//     }
//     function get_name(){
//         return $this->student;
//     }
//     function get_fees(){
//         return $this->fees;
//     }
    
//   } 
//   $sita= new school("pass" , "done");
//   echo  $sita->get_name();
//   echo "<br>";
//   echo $sita -> get_fees();


// class scl{
//     public $std;
//     public $fees;

//     function __construct($std , $fees)
//     {
//         $this->std = $std;
//         $this->fees =$fees;
//     }
//     function __destruct()
//     {
//         echo "the class of {$this->std} and its fees is {$this->fees}. ";
//     }
// }

// $angel = new scl(10 , "done");



// class fruit{
//     public $name;
//     public $color;

//     function __construct($name , $color){
//     $this->name = $name;
//     $this->color = $color;
//     }
//         public function intro(){
//             echo "the fruit is{$this->name} and its color is{$this->color}";

//     }
// }
//   class apple extends fruit{
//     public function msg(){
//         echo "am i fruit or vegetables";
//     }
//   }
//   $deep = new apple('apple' , "red");
//   $deep ->msg();
//   $deep->intro();


class school{
  public $teach;
  public $sir;

  function __construct($teach,$sir){
    $this->teach = $teach;
    $this->sir = $sir;
  }
  public function intro(){
    echo "he is teach {$this->teach} and his name is {$this->sir}";
  }
  
}
class std extends school{
public function msg(){
  echo "is he perfect or not?";
}
}
$deep   =  new std("english" , "deep sir");
$deep->msg();
$deep->intro();



?>
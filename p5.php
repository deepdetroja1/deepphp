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
        public $subject;
        public $batch;
        function __construct($subject,$batch){
            $this->subject = $subject;
            $this->batch = $batch;
        }
        function get_subject(){
            return $this->subject;
            
        }
        function get_batch(){
            return $this->batch;
        }
      }
      $archana = new school("archana" , "10th");
      echo $archana->get_subject();
      echo "<br>";
      echo $archana->get_batch();
    ?>
</body>
</html>
<?php   
 $conn=mysqli_connect("localhost","root","","contacts");   

 if ($conn) {  
      echo "Connection successfully";  
 }else{  
      echo "Error";  
 }  
  
 $query="select * from contactus";  
 $connect=mysqli_query($conn,$query);  
 $num=mysqli_num_rows($connect); 
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>How to Select Data from Database in PHP & Display in Table Format</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                width: 100%;  
                min-height: 100vh;  
                background-color: #5d6d7d;  
           }  
           .container{  
                max-width: 900px;  
                margin: 100px auto;  
                width: 100%;  
           }  
           table{  
                border-collapse: collapse;  
                width: 100%;  
           }  
           table th{  
                background-color: red;  
                color: #fff;  
                padding: 10px;  
           }  
           table td{  
                padding: 12px;  
                color: #fff;  
                font-size: 1em;  
                text-align: center;  
           }  
           table tr:nth-child(odd){  
                background-color: #797676;  
           }  
      </style>  
 </head>  
 <body>  
 <div class="container">  
      <table border="1">  
           <tr>  
                <th>id</th>  
                <th>name</th>  
                <th>roll</th>  
                <th>date</th>  
           </tr>  
           <?php   
                if ($num>0) {  
                     while($data=mysqli_fetch_assoc($connect)){  
                          echo "  
                               <tr>  
                               <td>".$data['id']."</td>  
                               <td>".$data['name']."</td>  
                               <td>".$data['roll']."</td>  
                               <td>".$data['date']."</td>  
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
      </table>  
 </div>  
 </body>  
 </html>  
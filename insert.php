<?php  
 //insert.php  
 $connect = mysqli_connect("localhost","root","","login");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $first_name = mysqli_real_escape_string($connect, $data->firstname);       
      $last_name = mysqli_real_escape_string($connect, $data->lastname);  
      $query = "INSERT INTO tbl_user(first_name, last_name) VALUES ('$first_name', '$last_name')";  
      if(mysqli_query($connect, $query))  
      {  
           echo "Data Inserted...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
 ?>  
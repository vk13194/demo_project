<?php
 $conn=mysqli_connect("localhost","root","","testing") or die("not connect: " .mysqli_connect_error());
 if(isset($_POST['submit']))
 {
   $username=$_POST['email'];
   $userpass=$_POST['pwd'];
   $q="INSERT INTO login(email, pass) VALUE('$username','$userpass')";
   $query=mysqli_query($conn,$q);
   if($query)
   {
     echo "data will be inserted";
   }
   else
   {
     echo "data will be not inserted";
   }
   
 }

    
    
?>
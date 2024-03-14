<?php
   
   include("config/one.php");

   $sql = "insert into users (name , email , password) values('Dexter' , 'dexter@gmail.com' , 'dexter@123')";
   $result =$conn->query($sql);

   if($result == true){
    echo "<br> Your Record Inserted Successfully!";
   }
   else{
    echo "<br> Your Record Not Inserted!";
   }

   

?>
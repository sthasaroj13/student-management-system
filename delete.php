<?php
 require "sub.php";

 $id=$_GET['id'];
 $query = "DELETE FROM  register where id ='$id'";
 $data = mysqli_query($conn,$query);
 if($data){
    
    //  echo  "deleted";
     ?>
 <meta http-equiv ="refresh" content ="0; url =http://localhost/student/dis.php"/>
 <?php
}

 else{
    echo"error";
 }



?>
     
    
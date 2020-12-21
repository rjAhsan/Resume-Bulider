<?php
$user=$_SESSION["user_id"];

if(isset($_SESSION["email"])){
    include ('db.php');
    
  $sql = "SELECT fname,lname,email,address,phone,link FROM profiles WHERE user_id='$user'";
  $result = $conn->query($sql);
   
   if( mysqli_num_rows($result) > 0){
    while ($rows = $result->fetch_assoc()) {
      $fname=$rows['fname'];
      $lname=$rows['lname'];
      $emai=$rows['email'];
      $address=$rows['address'];
      $phone=$rows['phone'];
      $link=$rows['link'];
      
   }
 
    }
   else{
       echo "now recode found ";
   }

}

else{
    echo "No Email";
}


  




?>
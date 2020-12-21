<?php

$user=$_SESSION["user_id"];

if(isset($_SESSION["email"])){
    include ('db.php');
    
  $sql = "SELECT InstName,degree,grade,sdate,edate,status FROM educations WHERE user_id='$user'";
  $result = $conn->query($sql);
   //   $newresult = (array) $result;

   
    
   
   if( mysqli_num_rows($result) > 0){
    $counter = 0;
    while ($rows = $result->fetch_assoc()) {
      $instName[$counter]=$rows['InstName'];
      $degree[$counter]=$rows['degree'];
      $grade[$counter]=$rows['grade'];
      $sdate[$counter]=$rows['sdate'];
      $edate[$counter]=$rows['edate'];
      $stats[$counter]=$rows['status'];
        
    $counter++;

   }
   
//    foreach( $instName as $data){
//        echo $data ."<br>" ;
//    }

    }
   else{
       echo "now recode found ";
   }

}

else{
    echo "No Email";
}


  




?>
<?php

$user=$_SESSION["user_id"];

if(isset($_SESSION["email"])){
    include ('db.php');
    
  $sql = "SELECT CName,DName,sdate,edate,jobsummry FROM experience WHERE user_id='$user'";
 
  $result = $conn->query($sql);
   
   if( mysqli_num_rows($result) > 0){
       $counter=0;
    while ($rows = $result->fetch_assoc()) {
      $CName[$counter]=$rows['CName'];
      $DName[$counter]=$rows['DName'];
      $jobsdate[$counter]=$rows['sdate'];
      $jobedate[$counter]=$rows['edate'];
      $jobsummary[$counter]=$rows['jobsummry'];
      
      $counter++;
      
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
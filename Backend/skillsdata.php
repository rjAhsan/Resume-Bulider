<?php


$user=$_SESSION["user_id"];

if(isset($_SESSION["email"])){
    include ('db.php');
    
  $sql = "SELECT * FROM skills WHERE user_id='$user'";
  $result = $conn->query($sql);
    
   if( mysqli_num_rows($result) > 0){
       $counter =0;
    while ($rows = $result->fetch_assoc()) {
            $SkillName[$counter]=$rows['SName'] ;
            $SkillLevel[$counter]=$rows['skilllevel'];
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
<?php
//  Education
session_start();
 
 $userid= $_SESSION["user_id"];




 $instName=$_REQUEST['InstName'];
 $degree=$_REQUEST['degree'];
 $grade=$_REQUEST['grade'];
 $startdate=$_REQUEST['sdate'];
 $enddate=$_REQUEST['edate'];
 $status=$_REQUEST['status'];


 include('db.php');

 $sql = "INSERT INTO educations (InstName,degree,grade,sdate,edate,status,user_id)
 VALUES ('$instName','$degree','$grade','$startdate','$enddate','$status','$userid')";
 
 
 include('db2.php');




?>
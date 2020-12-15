<?php
session_start();
$userid= $_SESSION["user_id"];

$SKillName=$_REQUEST['SName'] ;
$Level=$_REQUEST['skilllevel'] ;

include('db.php');

 $sql = "INSERT INTO skills (SName,skilllevel,user_id)
 VALUES ('$SKillName','$Level',$userid)";
 
 
 
 include('db2.php');




?>
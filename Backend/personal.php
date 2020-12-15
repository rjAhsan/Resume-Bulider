<?php

session_start();
 
$userid= $_SESSION["user_id"];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$phone=$_REQUEST['phone'];
$link=$_REQUEST['link'];



include('db.php');

$sql = "INSERT INTO profiles (fname,lname,email,address,phone,link,user_id)
VALUES ('$fname','$lname','$email','$address','$phone','$link','$userid')";


include('db2.php');




?>
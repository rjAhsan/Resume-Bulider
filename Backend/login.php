<?php

// login

$name=$_REQUEST['email'];
$password=$_REQUEST['password'];

include('db.php');

$sql = "INSERT INTO users (email , password)
VALUES ('$name','$password')";


include('db2.php');





?>
<?php
session_start();
 
$userid= $_SESSION["user_id"];


 $CompanyName=$_REQUEST['CName'] ;
 $DesignitionName=$_REQUEST['DName'];
 $sdate=$_REQUEST['sdate'];
 $edate=$_REQUEST['edate'];
 $Jobsummry=$_REQUEST['Jobsummry'];




 include('db.php');

 $sql = "INSERT INTO experience (CName,DName,sdate,edate,Jobsummry,user_id)
 VALUES ('$CompanyName','$DesignitionName','$sdate','$edate','$Jobsummry','$userid')";
 
 
 include('db2.php');


?>
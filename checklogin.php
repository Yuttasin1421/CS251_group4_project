<?php  
session_start();
require('connect.php');
$logincheck=$_SESSION['loginid'];
$query = ""
if($_SESSION['ses_loginid']=="") {  
   echo "<META HTTP-EQUIV=Refresh content=0;URL=login.php>";  
 }  
?> 
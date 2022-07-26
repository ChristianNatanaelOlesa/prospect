
<?php
error_reporting(0);
session_start();

if($_SESSION["user"]!="" && $_SESSION["pass"]!=""){
include 'koneksi.php';
$get=$_GET['page'];



switch ($get) {
  case ($get=='dashboard'):
	include ('master/dashboardadmin.php');
   break;	 

  case ($get=='prospect'):
    include ('master/prospectadmin.php');
    break;
 
  case ($get=='pracost'):
    include ('master/pracosadmin.php');
  break;
	
  
}}
?>

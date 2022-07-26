<?php
error_reporting(0);
session_start();

if($_SESSION["user"]!="" && $_SESSION["pass"]!=""){
include 'koneksi.php';
$get=$_GET['page'];



switch ($get) {
  //case ($get=='dashboard'):
	//include ('master/dashboardengineer.php');
  // break;	 

  case ($get=='prospect'):
    include ('master/prospectengineer.php');
    break;
 
  case ($get=='pracost'):
    include ('master/pracostengineer.php');
  break;
	
  
}}
?>

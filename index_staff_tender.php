<?php
error_reporting(0);
session_start();

if($_SESSION["user"]!="" && $_SESSION["pass"]!=""){
include 'koneksi.php';
$get=$_GET['page'];



switch ($get) {
  case ($get=='dashboard'):
	include ('master/dashboard_staff_tender.php');
   break;	 

  case ($get=='prospect'):
    include ('master/prospect_staff_tender.php');
    break;
 
  
  
}}
?>

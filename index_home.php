<?php

error_reporting(0);
include 'koneksi.php';
$get=$_GET['page'];

switch ($get) {
  case ($get=='dashboard'):
	include ('master/dashboard.php');
    break;	 

  case ($get=='prospect'):
    include ('master/prospect.php');
    break;
	
  case ($get=='tambah_propect'):
	include ('master/tambah_prospect.php');
  break;	
 
  case ($get=='pracost'):
    include ('master/pracost.php');
  break;
	
  case ($get=='quotation'):
    include ('master/quotation.php');
    break;
  case ($get=='user'):
    include ('master/data_user.php');
    break;
}

?>
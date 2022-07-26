<?php
error_reporting(0);
session_start();

if($_SESSION["user"]!="" && $_SESSION["pass"]!=""){
include 'koneksi.php';
$get=$_GET['page'];



switch ($get) {
  case ($get=='dashboard'):
	include ('master/dashboardsales.php');
    break;	 
case ($get=='prospect_open'):
    include ('master/prospect_open.php');
    break;

case ($get=='prospect_wait_klari'):
    include ('master/prospect_wait_klari.php');
    break; 

case ($get=='prospect_sudah_klari'):
    include ('master/prospect_sudah_klari.php');
    break; 

case ($get=='prospect_proses_drawing'):
    include ('master/prospect_proses_drawing.php');
    break; 

case ($get=='prospect_ready'):
    include ('master/prospect_ready.php');
    break; 

case ($get=='prospect_reject_customer'):
    include ('master/prospect_reject_customer.php');
    break; 

case ($get=='prospect_disapprove_customer'):
    include ('master/prospect_disapprove_customer.php');
    break; 

case ($get=='prospect_tunggu_pracost'):
    include ('master/prospect_tunggu_pracost.php');
    break; 		
	
	
	
	

  case ($get=='prospect'):
    include ('master/prospectsales.php');
    break;
	
  case ($get=='tambah_propect'):
	include ('master/tambah_prospect.php');
  break;	
 
  case ($get=='pracost'):
    include ('master/pracostsales.php');
  break;
	
  case ($get=='quotation'):
    include ('master/quotation.php');
    break;
  case ($get=='klarifikasi'):
    include ('master/klarifikasi.php');
    break;
 case ($get=='formspec_ready'):
    include ('master/formspec_ready.php');
    break;
 case ($get=='formspec_close'):
    include ('master/formspec_close.php');
    break;
case ($get=='progress'):
    include ('master/progress.php');
    break;
case ($get=='prospect_pracost'):
    include ('master/prospect_pracost.php');
    break;
case ($get=='prospect_harga'):
    include ('master/prospect_harga.php');
    break;
case ($get=='prospect_quote'):
    include ('master/prospect_quote.php');
    break;
case ($get=='formspec_disetujui'):
    include ('master/formspec_disetujui.php');
    break;
case ($get=='quotation_draft'):
    include ('master/quotation_draft.php');
    break;
case ($get=='quotation_tunggu'):
    include ('master/quotation_tunggu.php');
    break;
case ($get=='quotation_siap'):
    include ('master/quotation_siap.php');
    break;
case ($get=='quotation_aktif'):
    include ('master/quotation_aktif.php');
    break;
}}
?>

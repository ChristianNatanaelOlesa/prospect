
<?php
if($_GET["noprospect"]){
session_start();
include ("theme/header.php");
include_once("library/koneksi.php");
$madu = mysqli_query($GLOBALS["___mysqli_ston"], "select * from h_rpospect where noprospect='".$_GET["noprospect"]."'");
$maduDb = mysqli_fetch_assoc($madu);
$noprospect=$maduDb["noprospect"];
$tanggal=$maduDb['tgl_prospect'];
$tglbaru = date('d-m-Y', strtotime($tanggal ));

$oil = mysqli_query($GLOBALS["___mysqli_ston"], "select * from oil_prospect where noprospect='".$_GET["noprospect"]."'");
$oilDb = mysqli_fetch_assoc($oil);
$nopracost=$oilDb["id"];
?>

<!DOCTYPE html>
	<link rel="stylesheet" href="bootsrap/css/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap/css/main.css" />
    <link rel="stylesheet" href="bootstrap/css/theme.css" />
    <link rel="stylesheet" href="bootstrap/css/MoneAdmin.css" />
    <link rel="stylesheet" href="bootstrap/css/font-awesome.css" />
	<link rel="stylesheet" href="bootsrtap/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	
<head>
<title>Trafoindo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <style>
	h2 {
	text-align: left;
	}
	h3 {
	text-align: left;
	}
	</style>	
	<script src="bootstrap/js/jquery.min.js"></script>
	
</head>

<body>
<div class="panel panel-default">
<div class="box">
	<div class="panel-heading">
		<h2 style="border: 0px solid rgb(104, 204, 204); padding: 1px; display: block; background-color: #1EB887; text-align: center;">Prospect / Data Teknis</h2>
	</div>
	<div class="table-responsive" >
	<table width="100%" border="1" class="table table-striped table-bordered table-hover">
 
  <tr>
    <td width ="32%">Nomor Prospect</td>
    <td width="68%">: <?php echo $maduDb["noprospect"];?></td>
  </tr>
  <tr>
    <td width ="32%">Tanggal Prospect</td>
    <td width="68%">: <?php echo $tglbaru;?></td>
  </tr>
   <tr>
    <td width ="32%">Nama Sales</td>
    <td width="68%">: <?php echo $maduDb["sales"];?></td>
  </tr>
    <tr>
    <td width ="32%">Segment Penjualan</td>
    <td width="68%">: <?php echo $maduDb["segment"];?></td>
  </tr>
    <tr>
    <td width ="32%">Sub Segment </td>
    <td width="68%">: <?php echo $maduDb["sub_segment"];?></td>
  </tr>
    </tr>
    <tr>
    <td width ="32%">Customer </td>
    <td width="68%">: <?php echo $maduDb["customer"];?></td>
  </tr>  
   <tr>
    <td width ="32%">Status Prospect </td>
    <td width="68%">: <?php echo $maduDb["status"];?></td>
  </tr>
					<div class="table-responsive" >
  
					<table width="100%" border="2"  class="table table-striped table-bordered table-hover">
					<tr>		
						<td width="2px"><div align="left"><strong>No Sub Prospect</strong></div></td>
						<td width="10px"><div align="left"><strong>Jenis</strong></div></td>
						<td width="10px"><div align="left"><strong>Catagory</strong></div></td>
						<td width="10px"><div align="left"><strong>Service Condition </strong></div></td>
						<td width="10px"><div align="left"><strong>Int Standard</strong></div></td>
						<td width="10px"><div align="left"><strong>Action</strong></div></td>
						<?php
						$pasienSql = "select * from oil_prospect where noprospect='$noprospect'";
						$pasienQry = mysqli_query( $server, $pasienSql)  or die ("Query pasien salah : ".mysqli_error($GLOBALS["___mysqli_ston"]));
						$nomor  = 0; 
						while ($pasien = mysqli_fetch_array($pasienQry)) {
						$nomor++;	
						$botol=$pasien['tipeprospect'];
						
							switch ($botol) {
								case ($botol=='OIL'):
									$link="detail_prospect_tender.php";
									break;	
								case ($botol=='DRY'):
									$link="detail_prospect_dry_tender.php";
									break;	
								case ($botol=='CTVT'):
									$link="detail_prospect_ctvt_tender.php";
									break;	
							}									
						?>
					<tr>
						<td><?php echo $pasien['nopracost'];?></td>  
						<td><?php echo $pasien['tipeprospect'];?></td>						
						<td><?php echo $pasien['category'];?></td>
						<td><?php echo $pasien['service_condition'];?></td>
						<td><?php echo $pasien['standarisasi'];?></td>  
						
						<td>	
						<!--<a href="detail_prospect.php?id=<?php echo $pasien['id']; ?>" class="btn btn-xs btn-primary tipsy-kiri-atas" title='Detail'> Detail </a> -->
						<a href="<?php echo $link; ?>?id=<?php echo $pasien['id']; ?>" class="btn btn-xs btn-primary tipsy-kiri-atas" title='Detail'> Detail </a>
						<!--<a href="?menu=edit_data_memo&aksi=edit&nmr=<?php echo $pasien['nomemo']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> Edit </a>	-->
						<!--<a href="hapus_detail_prospect.php?sender=hapus&nopracost=<?php echo $oilDb['nopracost']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Hapus'> Hapus </a>-->	
						
						</td>
					</tr>
					<?php } ?>        
					</table>
					</div>
					
					
					 <div class="box-header with-border">
					<!--<h3 class="box-title"> <a href="tambah_prospect_oil.php?noprospect=<?php echo $noprospect;?>"  class="btn btn-info"><li class="fa fa-plus"></li> OIL</a></h3>-->
					<!--<h3 class="box-title"> <a href="tambah_prospect_dry2.php"  class="btn btn-info"><li class="fa fa-plus"></li> DRY</a></h3>-->
				<!--	<h3 class="box-title"> <a href="tambah_prospect2.php"  class="btn btn-info"><li class="fa fa-plus"></li> CTVT</a></h3> -->
				 <!--   <h3 class="box-title"> <a href="tambah_prospect2.php"  class="btn btn-info"><li class="fa fa-plus"></li> SERVICE</a></h3> -->
					<a href="index_tender.php?page=prospect"align = "20px" class="btn btn-warning">CLOSE</a>
					<div class="box-tools pull-right">
					</div>
					</div>
					


</body>
</html>
	
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4"></script>
<script type="text/javascript" src="bootstrap/js/poper-min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap/js/slim-min.js"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>   
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/savy.min.js"></script>
</body>
</html>	
</div>
<?php } ?>
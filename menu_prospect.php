
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
	
		<h2 style="border: 0px solid rgb(104, 204, 204); padding: 1px; display: block; background-color: #1EB887; text-align: center;">Prospect / Data Teknis</h2>
	
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
    <td width ="32%">Project </td>
    <td width="68%">: <?php echo $maduDb["project"];?></td>
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
						<td width="10px"><div align="left"><strong>Double Winding Position </strong></div></td>
						<td width="10px"><div align="left"><strong>Int Standard</strong></div></td>
						<td width="10px"><div align="left"><strong>Action</strong></div></td>
						<?php
						$pasienSql = "select * from oil_prospect where noprospect='$noprospect' and (status=0 or status=2)";
						$pasienQry = mysqli_query( $server, $pasienSql)  or die ("Query pasien salah : ".mysqli_error($GLOBALS["___mysqli_ston"]));
						$nomor  = 0; 
						while ($pasien = mysqli_fetch_array($pasienQry)) {
						$nomor++;	
						$botol 		= $pasien['tipeprospect'];	
						$botal 		= $pasien['winding_position'];
						$kategori = $pasien['category'];

							switch ($botol) {
							case (($botol=='OIL') and ($botal=='') and ($kategori == 'Non Standard')):
								$link="detail_prospect.php";
								$link2="edit_prospect_oil.php";
								$link3="copy_prospect_oil.php";
								break;	
							case (($botol=='DRY') and ($botal=='') and ($kategori == 'Non Standard')):
								$link="detail_prospect_dry.php";
								$link2="edit_prospect_dry.php";
								$link3="copy_prospect_dry.php";
								break;	
							case (($botol=='CTVT') and ($botal=='') and ($kategori == 'Non Standard')):
								$link="detail_prospect_ctvt.php";
								$link2="edit_prospect_ctvt.php";
								$link3="copy_prospect_ctvt.php";
								break;
							case (($botol=='OIL') and ($botal<>'') and ($kategori == 'Non Standard')):
								$link="detail_prospect_oil_3w.php";
								$link2="edit_prospect_oil_3w.php";
								$link3="copy_prospect_oil_3w.php";
								break;	
							case (($botol=='DRY') and ($botal<>'') and ($kategori == 'Non Standard')):
								$link="detail_prospect_dry_3w.php";
								$link2="edit_prospect_dry_3w.php";
								$link3="copy_prospect_dry_3w.php";
								break;
							case (($botol=='OIL') and ($botal=='') and ($kategori == 'Standard')):
								$link="detail_prospect.php";
								$link2="edit_prospect_oil.php";
								$link3="copy_prospect_oil_std.php";
								break;	
							case (($botol=='DRY') and ($botal=='') and ($kategori == 'Standard')):
								$link="detail_prospect_dry.php";
								$link2="edit_prospect_dry.php";
								$link3="copy_prospect_dry_std.php";
								break;	
							case (($botol=='CTVT') and ($botal=='') and ($kategori == 'Standard')):
								$link="detail_prospect_ctvt.php";
								$link2="edit_prospect_ctvt.php";
								$link3="copy_prospect_ctvt_std.php";
								break;
							case (($botol=='OIL') and ($botal<>'') and ($kategori == 'Standard')):
								$link="detail_prospect_oil_3w.php";
								$link2="edit_prospect_oil_3w.php";
								$link3="copy_prospect_oil_3w_std.php";
								break;	
							case (($botol=='DRY') and ($botal<>'') and ($kategori == 'Standard')):
								$link="detail_prospect_dry_3w.php";
								$link2="edit_prospect_dry_3w.php";
								$link3="copy_prospect_dry_3w_std.php";
								break;
							}
						?>
					<tr>
						<td><?php echo $pasien['nopracost'];?></td>  
						<td><?php echo $pasien['tipeprospect'];?></td>						
						<td><?php echo $pasien['category'];?></td>
						<td><?php echo $pasien['winding_position'];?></td>
						<td><?php echo $pasien['standarisasi'];?></td>  
						
						<td>					
						<a href="<?php echo $link; ?>?id=<?php echo $pasien['id']; ?>" class="btn btn-xs btn-primary tipsy-kiri-atas" title='Detail'> Detail </a>
						<a href="hapus_detail_prospect.php?sender=hapus&nopracost=<?php echo $pasien['nopracost']; ?>" onclick="return confirm('Yakin mau dihapus? ')" class="btn btn-xs btn-danger tipsy-kiri-atas" title='Hapus'> Hapus </a>	
						<a href="<?php echo $link2; ?>?id=<?php echo $pasien['id']; ?>" class="btn btn-xs btn-warning tipsy-kiri-atas" title='Detail'> Edit </a>
						<a href="<?php echo $link3; ?>?id=<?php echo $pasien['id']; ?>&noprospect=<?php echo $noprospect;?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Detail'> Copy </a>
					</tr>
					<?php } ?>        
					</table>
					</div>
				</div>
</div>
					
					
				<div class="box-header with-border">
					<h3 class="box-title"> <a href="tambah_prospect_oil.php?noprospect=<?php echo $noprospect;?>"  class="btn btn-primary"><li class="fa fa-plus"></li> OIL NON STD</a></h3> &nbsp;&nbsp;
					
					<h3 class="box-title"> <a href="tambah_prospect_oil_std.php?noprospect=<?php echo $noprospect;?>"  class="btn btn-success"><li class="fa fa-plus"></li> OIL Standard</a></h3>&nbsp;&nbsp;
					
					<h3 class="box-title"> <a href="tambah_prospect_oil2_3w.php?noprospect=<?php echo $noprospect;?>"  class="btn btn-danger"><li class="fa fa-plus"></li> OIL 3 WINDING</a></h3>&nbsp;&nbsp;&nbsp;&nbsp;
					
					<h3 class="box-title"> <a href="tambah_prospect_dry2.php?noprospect=<?php echo $noprospect;?>"  class="btn btn-primary"><li class="fa fa-plus"></li> DRY NON STD</a></h3>&nbsp;&nbsp;
					
					<h3 class="box-title"> <a href="tambah_prospect_dry2_std.php?noprospect=<?php echo $noprospect;?>"  class="btn btn-success"><li class="fa fa-plus"></li> DRY Standard</a></h3>&nbsp;&nbsp;
					
					<h3 class="box-title"> <a href="tambah_prospect_dry2_std.php?noprospect=<?php echo $noprospect;?>"  class="btn btn-danger"><li class="fa fa-plus"></li> DRY 3 WINDING</a></h3>&nbsp;&nbsp;
				
					<a href="index_sales.php?page=prospect"align = "20px" class="btn btn-warning">CLOSE</a>
					<div class="box-tools pull-right"></div>
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
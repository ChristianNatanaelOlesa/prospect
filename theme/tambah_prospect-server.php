
<?php
session_start();
include_once("library/koneksi.php");
include ("theme/header.php");
echo $_SESSION["namalengkap"]; 
$tgl = date("Y-m-d H:i:s");

	if($_POST["pasien"]){
			global $nomorbaru; 								
							$tahun     = date ('Y');
							$tahunan = substr($tahun,2);
							$nomor     = "P".$tahunan."-";							
							$gendut = mysqli_query($GLOBALS["___mysqli_ston"], "select * from urutso ");
							$gendutDb = mysqli_fetch_assoc($gendut);
							$komeng = $gendutDb['tahun'];
							   if ($tahun == $komeng){
							      $nobuktibaru=$gendutDb['nomor']+1;
							      }
								  else {
								  $nobuktibaru=1; 
								  }
									  
							$kode =  sprintf("%04s", $nobuktibaru);
							$nomorbaru = $nomor.$kode;		
			
			mysqli_query($GLOBALS["___mysqli_ston"], "insert into h_rpospect set noprospect='$nomorbaru',tgl_prospect='$tgl',tahun='$tahun',sales='".$_POST["sales"]."',segment='".$_POST["segment"]."',customer='".$_POST["customer"]."',project='".$_POST["project"]."',priority='".$_POST["priority"]."'");
			mysqli_query($GLOBALS["___mysqli_ston"], "insert into oil_prospect set noprospect='$nomorbaru',service_condition='".$_POST["service_condition"]."',altitude='".$_POST["altitude"]."',ambient_temp='".$_POST["ambient_temp"]."',standarisasi='".$_POST["standarisasi"]."',category='".$_POST["category"]."',type_trafo='".$_POST["type_trafo"]."',rate_capacity='".$_POST["rate_capacity"]."',no_phase='".$_POST["no_phase"]."',frequency='".$_POST["frequency"]."',primary_voltage='".$_POST["primary_voltage"]."',secondary_voltage='".$_POST["secondary_voltage"]."',vektor_group='".$_POST["vektor_group"]."',type_winding='".$_POST["type_winding"]."',temp_rise='".$_POST["temp_rise"]."',type_cooling='".$_POST["type_cooling"]."',tap_charger='".$_POST["tap_charger"]."',no_tap='".$_POST["no_tap"]."',type_oil='".$_POST["type_oil"]."',safety_device='".$_POST["safety_device"]."',temp_indicator='".$_POST["temp_indicator"]."',oil_indicator='".$_POST["oil_indicator"]."',presure_device='".$_POST["presure_device"]."',winding_indicator='".$_POST["winding_indicator"]."',presure_relay='".$_POST["presure_relay"]."',buccholz_relay='".$_POST["buccholz_relay"]."',vacuum_gauge='".$_POST["vacuum_gauge"]."',enclosure='".$_POST["enclosure"]."',notes1='".$_POST["notes1"]."',notes2='".$_POST["notes2"]."',notes3='".$_POST["notes3"]."'");
			mysqli_query($GLOBALS["___mysqli_ston"], "update urutso set nomor='$nobuktibaru', noprospect='$nomorbaru', lastno='".$gendutDb['nomor']."' where tahun='$tahun'"); 
		
			echo"<script>alert('Data Sukses tersimpan');window.location.href='tambah_prospect.php'</script>";?>
			
			<div class="alert alert-success" role="alert">
				<b>Berhasil menambah user ke database!! </b>
				</div>
			<?php
	}else if(isset($_POST["pasien"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
?>




<!DOCTYPE html>
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
</head>

<body>

<ol class="breadcrumb">
<li><a href="index_sales.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="./index_sales.php?page=prospect">Prospect</a></li>
<li class="active">Prospect Baru</li>  
</ol>
  

<div class="box">

	<header>
		<h2><strong> <font color="red">&nbsp;&nbsp;PROSPECT SALES</font></strong></h2>	
	</header>
		
		
		
		<div class="body">
			<form action="" method="post" class="form-horizontal" name='orangtua'>
				<center><div class="form-group">								
							<label  class="control-label col-lg-3">Tahun Prospect</label> 
							<div class="col-lg-4">								
								 <input type="text" readonly name="Tahun" autofocus required class="form-control" value=" <?php echo date("Y"); ?>"  />								  
							</div>	
				</div>			
				<div class="form-group">	
							<label class="control-label col-lg-3">Nama Sales</label>																					
							<div class="col-lg-4">
								<input type="text" Readonly name="sales" autofocus required class="form-control"value=  "<?php echo $_SESSION["namalengkap"] ?> " />
							</div>	
				</div>
				<div class="form-group">	
							<label class="control-label col-lg-3">Segmen Penjualan </label>
							<div class="col-lg-4">															
								<select name='segment' id = "segment" autofocus required class="form-control"  />
								<option value=''></option>	
								<option value='Energy'>Energy</option>		
								<option value='Mining Oil Gas'>Mining Oil Gas</option>	
								<option value='Infrastructure'>Infrastructure</option>		
								<option value='Industry'>Industry</option>	
								<option value='Building'>Building</option>	
								<option value='Export'>Export</option>		
								<option value='Other'>Other</option>	
								</select>	
							</div>	
				</div>
				
				<div class="form-group">
							<label class="control-label col-lg-3">Customer </label>
							<div class="col-lg-4">
								<input type="text" name="customer" autofocus required class="form-control" placeholder="Nama Customer" />
							</div>	
				</div>
				
				
				<div class="form-group">								
							<label class="control-label col-lg-3">Project</label>
							<div class="col-lg-8">
								<input type="text" name="project" autofocus required class="form-control" placeholder="Project" />
							</div>								
				</div>
				
				<div class="form-group">						
							<label class="control-label col-lg-3">Status Stage</label>
							<div class="col-lg-4">															
								<select name='priority' id = "priority" autofocus required class="form-control"  />
								<option value='Low'>Low</option>		
								<option value='High'>High</option>								
								</select>	
							</div>							
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">No Id </label>
							<div class="col-lg-4">
								<input type="text" Readonly name="noprospect" autofocus required class="form-control" placeholder="Nomor Prospect" />
							</div>	
				</div>
			
			<h3><strong> <font color="blue">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GENERAL CONDITION</font></strong></H3>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Service Condition</label>
								<div class="col-lg-4">															
								<select name='service_condition' id = "service_condition" autofocus required class="form-control"  />
								<option value='Outdoor'>Outdoor</option>		
								<option value='Indoor'>Indoor</option>								
								</select>	
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Altitude</label>
								<div class="col-lg-4">
								<input type="text"  name="altitude" autofocus required class="form-control" placeholder="mdpl" />
							</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Ambient Temp</label>
								<div class="col-lg-4">
								<input type="text" name="ambient_temp" autofocus required class="form-control" placeholder="Celcius" />
							</div>
				</div>
				<br>
				
				<div class="form-group">
							<label class="control-label col-lg-3">Standard</label>
								<div class="col-lg-4">
								<input type="text"  name="standarisasi" autofocus required class="form-control" placeholder="Standard" />
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Catagory</label>
								<div class="col-lg-4">															
								<select name='catagory' id = "catagory" autofocus required class="form-control"  />
								<option value='Non Standard'>Non Standard</option>		
								<option value='Standard'>Standard</option>														
								</select>	
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Type of Transformer</label>
								<div class="col-lg-4">															
								<select name='type_trafo' id = "type_trafo" autofocus required class="form-control"  />
								<option value='Hermetically Sealed - Corrugated'>Hermetically Sealed - Corrugated</option>		
								<option value='Conservator - Corrugated'>Conservator - Corrugated</option>	
								<option value='Conservator - Panel'>Conservator - Panel</option>	
								<option value='Nitrogen Type'>Nitrogen Type</option>	
								<option value='Dry Cast Resin'>Dry Cast Resin</option>
								<option value='Dry NOn Resin'>Dry Non Resin</option>					
								</select>	
								</div>	
				</div>			
							
			
				<h3><font color="brown">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ELECTRICAL CHARATERISTIC</font></H3>
				<div class="form-group">
							<label class="control-label col-lg-3">Rate Capacity</label>
								<div class="col-lg-4">
								<input type="text"  name="rate_capacity" autofocus required class="form-control" placeholder="Rate Capacity" />
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">No Of Phase</label>
								<div class="col-lg-4">															
								<select name='no_phase' id = "no_phase" autofocus required class="form-control"  />
								<option value='Single Phase'>Single Phase</option>		
								<option value='Three Phase'>Three Phase</option>														
								</select>	
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Frequency</label>
								<div class="col-lg-4">
								<input type="text"  name="frequency" autofocus required class="form-control" placeholder="Frequency" />
								</div>							
				</div>
				
				<div class="form-group">
							<label class="control-label col-lg-3">Primary Voltage</label>
								<div class="col-lg-4">
								<input type="text"  name="primary_voltage" autofocus required class="form-control" placeholder="Primary Voltage" />
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Secondary Voltage&nbsp</label>
								<div class="col-lg-4">
								<input type="text"  name="secondary_voltage" autofocus required class="form-control" placeholder="Secondary Voltage" />
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Vektor Group</label>
								<div class="col-lg-4">															
								<select name='vektor_group' id = "vektor_group" autofocus required class="form-control"  />
								<option value='Dd-0'>Dd-0</option>	
								<option value='Dd-0'>Dd-2</option>
								<option value='Dd-0'>Dd-4</option>	
								<option value='Dd-0'>Dd-6</option>
								<option value='Dd-0'>Dd-8</option>	
								<option value='Dd-0'>Dd-10</option>
								<option value='Dy-1'>Dy-1</option>
								<option value='Dy-3'>Dy-3</option>
								<option value='Dy-5'>Dy-5</option>
								<option value='Dy-7'>Dy-7</option>
								<option value='Dy-11'>Dy-11</option>
								<option value='Dyn-1'>Dyn-1</option>
								<option value='Dyn-5'>Dyn-5</option>
								<option value='Dyn-11'>Dyn-11</option>
								<option value='Dz-0'>Dz-0</option>
								<option value='Dz-2'>Dz-2</option>
								<option value='Dz-4'>Dz-4</option>
								<option value='Dz-6'>Dz-6</option>
								<option value='Dz-8'>Dz-8</option>
								<option value='Dzn-0'>Dzn-0</option>
								<option value='Dzn-2'>Dzn-2</option>
								<option value='Dzn-4'>Dzn-4</option>
								<option value='Dzn-6'>Dzn-6</option>
								<option value='Dzn-8'>Dzn-8</option>
								<option value='Yd-1'>Yd-1</option>
								<option value='Yd-5'>Yd-5</option>
								<option value='Yd-7'>Yd-7</option>
								<option value='Yd-11'>Yd-11</option>
								<option value='YNd-1'>YNd-1</option>
								<option value='YNd-5'>YNd-5</option>
								<option value='YNd-7'>YNd-7</option>
								<option value='YNd-11'>YNd-11</option>
								<option value='Yz-1'>Yz-1</option>
								<option value='Yz-5'>Yz-5</option>
								<option value='Yz-7'>Yz-7</option>
								<option value='Yz-11'>Yz-11</option>
								<option value='Yzn-1'>Yzn-1</option>
								<option value='Yzn-5'>Yzn-5</option>
								<option value='Yzn-7'>Yzn-7</option>
								<option value='Yzn-11'>Yzn-11</option>
								<option value='Yy-0'>Yy-0</option>
								<option value='Yy-6'>Yy-6</option>
								<option value='Yyn-0'>Yyn-0</option>
								<option value='Yyn-6'>Yyn-6</option>										
								<option value='Ii-0 (CSP)'>Ii-0 (CSP)</option>
								<option value='Ii-0 (Non CSP)'>Ii-0 (Non CSP)</option>
								<option value='Zy-11'>Zy-11</option>
								<option value='ZNyn-11'>ZNyn-11</option>
								<option value='Yna-0'>Yna-0</option>
								<option value='Ya-0'>Ya-0</option>
								<option value='Zn-0'>Zn-0</option>
								<option value='Scott'>Scott</option>
								<option value='Dyn-5 & Dyn-5'>Dyn-11 & Dyn-11</option>
								<option value='Dyn-11 & Dyn-11'>Dyn-11 & Dyn-11</option>
								<option value='Dyn-6 & dd-0'>Dyn-6 & dd-0</option>
								<option value='YNyn-0 & YNyn-0'>YNyn-0 & YNyn-0</option>
								<option value='YNyn-6 & YNyn-6'>YNyn-6 & YNyn-6</option>
								<option value='dD-0 & dYN-1'>dD-0 & dYN-1</option>
								<option value='Dyn-11 & Dd-0'>Dyn-11 & Dd-0</option>
								<option value='Dd-0 & Dy-1'>Dd-0 & Dy-1</option>
								<option value='Dd-0 & Dyn-11'>Dd-0 & Dyn-11</option>
								<option value='Dd-0 & Dyn-5'>Dd-0 & Dyn-5</option>
								<option value='Dd-0 & Dy-5'>Dd-0 & Dy-5</option>
								<option value='Dy-11 & Dyd-0'>Dd-0 & Dy-5</option>
								<option value='YNy0 (d5)'>YNy0 (d5)</option>
								<option value='Dd-0 & Dy-11 & Dyn-11'>Dd-0 & Dy-11 & Dyn-11</option>
								<option value='Yd-5 & Yyn-0'>Yd-5 & Yyn-0</option>
								<option value='Dd-0 & Dy-11'>Dd-0 & Dy-11</option>
								<option value='Dyn-1 & Dyn-1'>Dyn-1 & Dyn-1</option>
								<option value='Yy-0 & yd-11'>Yy-0 & yd-11</option>
								<option value='Dy-11 & Yy-0'>'Dy-11 & Yy-0</option>
								<option value='Yd-11 & Yd-11'>Yd-11 & Yd-11</option>
								
								<option value='Dyn-1 & Dd-0'>Dyn-1 & Dd-0</option>
								<option value='dYN-5'>dYN-5</option>
								<option value='dYN-11'>dYN-11</option>
								<option value='Dd-0 & Dyn-11'>Dd-0 & Dyn-11</option>
								<option value='Dd-0 & Dy-5'>Dd-0 & Dy-5</option>

								</select>
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Type of Winding</label>
								<div class="col-lg-4">															
								<select name='type_winding' id = "type_winding" autofocus required class="form-control"  />
								<option value='Cu-Cu'>Cu-Cu</option>	
								<option value='Cu-Al'>Cu-Al</option>
								<option value='Al-Al'>Al-Al</option>	
								<option value='Al-Cu'>Al-Cu</option>
								</select>
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Temperature Rise</label>
								<div class="col-lg-4">													
								<input type="text"  name="temp_rise" autofocus required class="form-control" placeholder="Temperature Rise" />
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Type of Cooling</label>
								<div class="col-lg-4">															
								<select name='type_cooling' id = "type_cooling" autofocus required class="form-control"  />
								<option value='ONAN'>ONAN</option>	
								<option value='ONAN/ONAF'>ONAN/ONAF</option>
								<option value='KHAN'>KHAN</option>	
								<option value='KHAN/KNAF'>KHAN/KNAF</option>
								<option value='OFAF'>OFAF</option>
								<option value='KFAF'>KFAF</option>	
								<option value='AN'>AN</option>
								<option value='ANAF'>ANAF</option>
								</select>
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Tap Charger</label>
								<div class="col-lg-4">															
								<select name='tap_changer' id = "tap_charger" autofocus required class="form-control"  />
								<option value='Off Load Tap Changer'>Off Load Tap Changer</option>	
								<option value='On Load Tap Changer'>On Load Tap Changer</option>								
								</select>
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">No Of Tap</label>
								<div class="col-lg-4">													
								<input type="text"  name="no_tap" autofocus required class="form-control" placeholder="No Of Tap" />
								</div>
				</div>
					<div class="form-group">
							<label class="control-label col-lg-3">Type Of Oil</label>
								<div class="col-lg-4">															
								<select name='type_oil' id = "type_oil" autofocus required class="form-control"  />
								<option value='Mineral Oil'>Mineral Oil</option>	
								<option value='Silicone Oil'>Silicone Oil</option>	
								<option value='Synthetic Ester'>Synthetic Ester</option>	
								<option value='Natural Ester'>Natural Ester</option>									
								</select>
								</div>
				</div>
			<h3> <font color="blue">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROTECTION & ACCESORIES</font></H3>
			<center><div class="form-group">
							<label class="control-label col-lg-3">Integrated Safety Device</label>
								<div class="col-lg-4">															
								<select name='safety_device' id = "safety_device" autofocus required class="form-control"  />
								<option value='DGPT-2'>DGPT-2</option>	
								<option value='DMCR'>DMCR</option>	
								<option value='RIS'>RIS</option>	
								</select>
								</div>
				</div>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Temperature Indicator</label>
								<div class="col-lg-4">															
								<select name='temp_indicator' id = "temp_indicator" autofocus required class="form-control"  />
								<option value='Yamamoto SUS-304 w/o Contact'>Yamamoto SUS-304 w/o Contact</option>	
								<option value='Yamamoto S75X0/120CX.90MM c/w contact'>Yamamoto S75X0/120CX.90MM c/w contac</option>	
								<option value='TESS Y-100'>TESS Y-100</option>	
								<option value='TESS Y-150'>TESS Y-150</option>
								<option value='Messko MT-ST160SK(TT) 4/2m 01-402'>Messko MT-ST160SK(TT) 4/2m 01-402</option>
								<option value='Messko MT-ST160SK(TT) 4 02-402-000704'>Messko MT-ST160SK(TT) 4 02-402-000704</option>
								<option value='Messko MT-ST160SK(TT) 4 18-402-050704'>Messko MT-ST160SK(TT) 4 18-402-050704</option>
								<option value='Messko MT-ST160SK(TT) 2 01-202-0507'>Messko MT-ST160SK(TT) 2 01-202-0507</option>
								<option value='Messko MT-ST160SK(TT) 2 02-202-0507'>Messko MT-ST160SK(TT) 2 02-202-0507</option>	
								</select>
								</div>
				</div>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Oil Level Indicator</label>
								<div class="col-lg-4">															
								<select name='oil_indicator' id = "oil_indicator" autofocus required class="form-control"  />
								<option value='Qualitrol 035-020-01'>Qualitrol 035-020-01</option>	
								<option value='Qualitrol 035-037-01-CS30132'>Qualitrol 035-037-01-CS30132</option>	
								<option value='Qualitrol 015-001-01'>Qualitrol 015-001-01</option>	
								<option value='Comem LB14XON / NFG 2 ANY2CC2C05'>Comem LB14XON / NFG 2 ANY2CC2C05</option>	
								<option value='Qualitrol 030-016-01 (1-30 SR)'>Qualitrol 030-016-01 (1-30 SR)</option>	
								<option value='Oil Level MTO-STF160'>Oil Level MTO-STF160</option>	
								<option value='Oil Level MTO-ST160 4-2mA Option 4'>Oil Level MTO-ST160 4-2mA Option 4</option>	
								<option value='Oil Level C-0011-1'>Oil Level C-0011-1</option>	
								<option value='Oil Level C-0011-2'>Oil Level C-0011-2</option>	
								<option value='Oil Level Eye Indicator'>Oil Level Eye Indicator</option>	
								<option value='Oil Level Indicator Type: 60 ST'>Oil Level Indicator Type: 60 ST</option>	
								<option value='Qualitrol LA22XON'>Qualitrol LA22XON</option>	
								<option value='Qualitrol LB22XON'>Qualitrol LB22XON</option>	
								<option value='Qualitrol 049-100-03'>Qualitrol 049-100-03</option>	
								
								</select>
								</div>
				</div>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Presure Device</label>
								<div class="col-lg-4">															
								<select name='presure_device' id = "presure_device" autofocus required class="form-control"  />
								<option value='PRV 1/4" 35KPA'>PRV 1/4" 35KPA</option>	
								<option value='PRV R1/50KPA'>PRV R1/50KPA</option>	
								<option value='Comem 50T'>Comem 50T</option>
								<option value='Comem 80T'>Comem 80T</option>	
								<option value='Comem 125T'>Comem 125T</option>	
								<option value='Qualitrol 208-60V (8Psi)'>Qualitrol 208-60V (8Psi)</option>
								<option value='Qualitrol 208-60Z (8Psi) c/w Contact'>Qualitrol 208-60Z (8Psi) c/w Contact</option>	
								<option value='Qualitrol 208-60F (10Psi) c/w Contact'>Qualitrol 208-60F (10Psi) c/w Contact</option>	
								<option value='MAIER MPRV 50'>MAIER MPRV 50</option>
								<option value='MAIER MPRV 80'>MAIER MPRV 80</option>
								</select>
								</div>
				</div>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Winding Temperature Indicator</label>
								<div class="col-lg-4">															
								<select name='winding_indicator' id = "winding_indicator" autofocus required class="form-control"  />
								<option value='Messko MT-ST160W 4 19-402 c/w pocket c/w BCT'>Messko MT-ST160W 4 19-402 c/w pocket c/w BCT</option>	
								<option value='Messko MT-ST160W 2 02-202 c/w pocket c/w BCT'>Messko MT-ST160W 2 02-202 c/w pocket c/w BCT</option>	
								<option value='Messko MT-ST160W 4/2m 01-402 c/w pocket c/w BCT'>Messko MT-ST160W 4/2m 01-402 c/w pocket c/w BCT</option>	
								<option value='Messko MT-ST160W 4/2m 20-402 c/w pocket c/w BCT'>Messko MT-ST160W 4/2m 20-402 c/w pocket c/w BCT</option>									
								</select>
								</div>
				</div>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Sudden Presure Relay</label>
								<div class="col-lg-4">															
								<select name='presure_relay' id = "presure_relay" autofocus required class="form-control"  />
								<option value='Qualitrol 910-006-03 (Gas) CON-630-8 c/w SIR 909-300-02'>Qualitrol 910-006-03 (Gas) CON-630-8 c/w SIR 909-300-02</option>	
								<option value='Qualitrol 900-003-02 (Oli) CON-630-8 c/w SIR 909-300-02'>Qualitrol 900-003-02 (Oli) CON-630-8 c/w SIR 909-300-02</option>									
								</select>
								</div>
				</div>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Buccholz Relay</label>
								<div class="col-lg-4">															
								<select name='buccholz_relay' id = "buccholz_relay" autofocus required class="form-control"  />
								<option value='C1 MAO / HAO MAIER'>C1 MAO / HAO MAIER</option>	
								<option value='Buccholz Relay  BS 50'>Buccholz Relay  BS 50</option>	
								<option value='Buccholz Relay  BS 80'>Buccholz Relay  BS 80</option>	
								</select>
								</div>
				</div>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Pressure Vacuum Gauge</label>
								<div class="col-lg-4">															
								<select name='vacuum_gauge' id = "vacuum_gauge" autofocus required class="form-control"  />
								<option value='Qualitrol 050 - 35E C-0064 c/w Bleeder 351-2A'>Qualitrol 050 - 35E C-0064 c/w Bleeder 351-2A</option>	
								<option value='Qualitrol 050 - 35E C-0064'>Qualitrol 050 - 35E C-0064</option>	
								<option value='Qualitrol Bleeder 351-2A'>Qualitrol Bleeder 351-2A</option>	
								</select>
								</div>
				</div>
					<center><div class="form-group">
							<label class="control-label col-lg-3">Enclosure / Housing IP</label>
								<div class="col-lg-4">															
								<select name='enclosure' id = "enclosure" autofocus required class="form-control"  />
								<option value='IP-00'>IP-00</option>	
								<option value='IP-10'>IP-10</option>	
								<option value='IP-11'>IP-11</option>
								<option value='IP-12'>IP-12</option>	
								<option value='IP-13'>IP-13</option>	
								<option value='IP-15'>IP-15</option>
								<option value='IP-20'>IP-20</option>	
								<option value='IP-21'>IP-21</option>	
								<option value='IP-22'>IP-22</option>
								<option value='IP-23'>IP-23</option>	
								<option value='IP-24'>IP-24</option>	
								<option value='IP-25'>IP-25</option>
								<option value='IP-30'>IP-30</option>	
								<option value='IP-31'>IP-31</option>	
								<option value='IP-32'>IP-32</option>
								<option value='IP-33'>IP-33</option>	
								<option value='IP-34'>IP-34</option>	
								<option value='IP-35'>IP-35</option>
								<option value='IP-40'>IP-40</option>	
								<option value='IP-41'>IP-41</option>	
								<option value='IP-42'>IP-42</option>
								<option value='IP-43'>IP-43</option>	
								<option value='IP-44'>IP-44</option>	
								<option value='IP-45'>IP-45</option>
								<option value='IP-50'>IP-50</option>	
								<option value='IP-51'>IP-51</option>	
								<option value='IP-52'>IP-52</option>
								<option value='IP-53'>IP-53</option>	
								<option value='IP-54'>IP-54</option>	
								<option value='IP-55'>IP-55</option>
								<option value='IP-56'>IP-56</option>	
								
								</select>
								</div>
				</div>
			<h3> <font color="blue">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOTES 1</font></H3>
			<div class="form-group">
							<label class="control-label col-lg-3">Catatan 1</label>
								<div class="col-lg-4">
								<textarea  id ="notes1" name="notes1" autofocus required class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
								</div>	
			</div>
			<div class="form-group">
							<label class="control-label col-lg-3">Catatan 2</label>
								<div class="col-lg-4">
								<textarea  id ="notes2" name="notes2" autofocus required class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
								</div>	
			</div>
			<div class="form-group">
							<label class="control-label col-lg-3">Catatan 3</label>
								<div class="col-lg-4">
								<textarea  id ="notes3" name="notes3" autofocus required class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
								</div>	
			</div>

			
			
			
			
			<div class="form-actions no-margin-bottom"  style="text-align:left;">
			<input type="submit" name="pasien" value="SELESAI" class="btn btn-primary" />   <!-- <a href="?menu=data_memo" class="btn btn-primary" >Selesai</a>		-->								
			</div>		
				
							
				
						
	</div>
	
	


  


</body>
</html>


    
    


    

<script type="text/javascript">   
    <?php echo $jsArray; ?> 
    function changeValue(no_pasien){ 
    document.getElementById('nm').value = dtMhs[no_pasien].nama; 
    document.getElementById('jrsn').value = dtMhs[no_pasien].jrsn; 
    }; 
    </script> 		
	
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4"></script>
<script type="text/javascript" src="bootstrap/js/poper-min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap/js/slim-min.js"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>   
</body>
</html>	


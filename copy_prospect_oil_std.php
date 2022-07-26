
<?php
session_start();
include_once("library/koneksi.php");
include_once("library/koneksi2.php");
include ("theme/header.php");
$tgl 	= date("Y-m-d H:i:s");
$no 	= $_GET['noprospect'];
$id 	= $_GET['id'];

$header_query 	= mysqli_query($GLOBALS["___mysqli_ston"], "select * from h_rpospect where noprospect='$no' ");
$data_header 	= mysqli_fetch_assoc($header_query);
$sales 			= $data_header['sales'];

$detail_query 	= mysqli_query($GLOBALS["___mysqli_ston"], "select * from oil_prospect where noprospect='$no' and id='$id' ");
$data_detail 	= mysqli_fetch_assoc($detail_query);

if (isset($_POST["pasien"]))
{
	if($_POST["pasien"]){
		$godekan = mysqli_query($GLOBALS["___mysqli_ston"], "select * from urutprospect where noprospect='$no'");
		$godekanDb = mysqli_fetch_assoc($godekan);						
		$kome = $godekanDb['noprospect'];
		$butut = $godekanDb['nomor'];
		   if ($no == $kome){
		      $nomorurutan=$godekanDb['nomor']+1;
			  mysqli_query($GLOBALS["___mysqli_ston"], "update urutprospect set nomor='$nomorurutan', noprospect='$no', lastno='$butut' where noprospect='$kome'"); 
		      }
		   else {
			  $nomorurutan=1; 								  
			  mysqli_query($GLOBALS["___mysqli_ston"], "insert into urutprospect (nomor, noprospect) values ('$nomorurutan','$no') ");								  
			  }
			$nopracost=	$no."-".$nomorurutan;

		// GENERAL CONDITION

		$category 		= "Standard";
		$type_trafo 	= "Hermetically Sealed Type - Corrugated Radiator";

		$service_condition = $_POST['service_condition'];

		$standarisasi 	= "IEC 60076";
		$altitude 		= "<1000";
		$ambient_temp 	= "<40";

		// ELECTRICAL CHARACTERISTIC

		$winding_temp 		= "65";
		$oil_temp 			= "60";
		$type_cooling 		= "ONAN";
		$type_cooling1 		= "ONAN";
		$type_cooling2 		= "";

		$rate_capacity = $_POST['rate_capacity'];

		$rate_capacity2 	= "";
		$no_phase 			= "3";
		$frequency 			= "50";
		$primary_voltage 	= "20000";
		$secondary_voltage 	= "400";

		$vektor_group = $_POST['vektor_group'];
		$type_winding = $_POST['type_winding'];

		$tap_changer 		= "Off Load Tap Changer";
		$no_tap 			= "5";
		$type_oil 			= "Mineral Oil";

		// PROTECTION & ACCESORIES

		$safety_device = $_POST['safety_device'];

		if ($_POST["temp_indicators"] == "") {
			$temp_indicator = $data_detail["temp_indicator"];
		} else if ($_POST["temp_indicators"] == "YES") {							
			$temp_indicator = $_POST["temp_indicator"];								
		} else {
			$temp_indicator = "N/A";									
		}

		if ($_POST["oil_indicators"] == "") {
			$oil_indicator = $data_detail["oil_indicator"];
		} else if ($_POST["oil_indicators"] == "YES") {							
			$oil_indicator = $_POST["oil_indicator"];								
		} else {
			$oil_indicator = "N/A";									
		}

		if ($_POST["presure_devices"] == "") {
			$presure_device = $data_detail["presure_device"];
		} else if ($_POST["presure_devices"] == "YES") {							
			$presure_device = $_POST["presure_device"];								
		} else {
			$presure_device = "N/A";									
		}

		if ($_POST["winding_indicators"] == "") {
			$winding_indicator = $data_detail["winding_indicator"];
		} else if ($_POST["winding_indicators"] == "YES") {							
			$winding_indicator = $_POST["winding_indicator"];								
		} else {
			$winding_indicator = "N/A";									
		}

		if ($_POST["presure_relays"] == "") {
			$presure_relay = $data_detail["presure_relay"];
		} else if ($_POST["presure_relays"] == "YES") {							
			$presure_relay = $_POST["presure_relay"];								
		} else {
			$presure_relay = "N/A";									
		}

		if ($_POST["buccholz_relays"] == "") {
			$buccholz_relay = $data_detail["buccholz_relay"];
		} else if ($_POST["buccholz_relays"] == "YES") {							
			$buccholz_relay = $_POST["buccholz_relay"];								
		} else {
			$buccholz_relay = "N/A";									
		}

		if ($_POST["vacuum_gauges"] == "") {
			$vacuum_gauge = $data_detail["vacuum_gauge"];
		} else if ($_POST["vacuum_gauges"] == "YES") {							
			$vacuum_gauge = $_POST["vacuum_gauge"];								
		} else {
			$vacuum_gauge = "N/A";									
		}

		if ($_POST["enclosures"] == "") {
			$enclosure = $data_detail["enclosure"];
		} else if ($_POST["enclosures"] == "YES") {							
			$enclosure = $_POST["enclosure"];								
		} else {
			$enclosure = "N/A";									
		}

		// TRANSFORMER TESTING - SPECIAL TEST
		$sp_dga = $_POST['sp_dga'];
		$sp_sfra = $_POST['sp_sfra'];
		$sp_delta = $_POST['sp_delta'];
		$sp_pd = $_POST['sp_pd'];
		$sp_zero = $_POST['sp_zero'];

		// TRANSFORMER TESTING - TYPE TEST
		$test_temp_rise = $_POST['test_temp_rise'];
		$test_impulse = $_POST['test_impulse'];
		$test_noise = $_POST['test_noise'];

		//NOTES
		$notes1 = $_POST['notes1'];
		$notes2 = $_POST['notes2'];
		$notes3 = $_POST['notes3'];
		
		mysqli_query($GLOBALS["___mysqli_ston"], "insert into oil_prospect set noprospect='$no', category='$category', type_trafo='$type_trafo', service_condition='$service_condition', altitude='$altitude', ambient_temp='$ambient_temp', standarisasi='$standarisasi',  winding_temp='$winding_temp', oil_temp='$oil_temp', type_cooling='$type_cooling', rate_capacity='$rate_capacity', rate_capacity2='$rate_capacity2', type_cooling1='$type_cooling1', type_cooling2='$type_cooling2', no_phase='$no_phase', frequency='$frequency', primary_voltage='$primary_voltage', secondary_voltage='$secondary_voltage', vektor_group='$vektor_group', type_winding='$type_winding',  tap_changer='$tap_changer', no_tap='$no_tap', type_oil='$type_oil', safety_device='$safety_device', temp_indicator='$temp_indicator', oil_indicator='$oil_indicator', presure_device='$presure_device', winding_indicator='$winding_indicator', presure_relay='$presure_relay', buccholz_relay='$buccholz_relay', vacuum_gauge='$vacuum_gauge', enclosure='$enclosure', sp_dga='$sp_dga', sp_sfra='$sp_sfra', sp_delta='$sp_delta', sp_pd='$sp_pd', sp_zero='$sp_zero', test_temp_rise='$test_temp_rise', test_impulse='$test_impulse', test_noise='$test_noise', notes1='$notes1', notes2='$notes2', notes3='$notes3', tipepracost='A', nopracost='$nopracost', tipeprospect='OIL'");
			                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       			
		echo"<script>alert('Data Sukses tersimpan');window.location.href='menu_prospect.php?noprospect=$no '</script>";?>

			
			<div class="alert alert-success" role="alert">
				<b>Berhasil menambah user ke database!! </b>
				</div>
			<?php
	}else if(isset($_POST["pasien"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
}}
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
	<script src="bootstrap/js/jquery.min.js"></script>
</head>

<body>

	<ol class="breadcrumb">
		<li><a href="index_sales.php"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="index_sales.php?page=prospect">Prospect</a></li>
		<li class="active">Prospect Baru</li>  
	</ol>
  

<div class="box">

	<div class="container">
		<header>
			<h2><strong> <font color="red">PROSPECT TRAFO OIL</font></strong></h2>	
		</header>
	</div>
		
	
	<form action="" method="post" class="form-horizontal" name='orangtua'>

		<div class="container">
			<div class="form-group">
				<label class="control-label col-lg-3">No Prospect </label>
				<div class="col-lg-4">
					<strong><input type="text" Readonly name="noprospect" autofocus required class="form-control" value="<?php echo $no; ?> "/></strong>
				</div>	
			</div>

			<div class="form-group">								
				<label  class="control-label col-lg-3">Tahun Prospect</label> 
				<div class="col-lg-4">								
					<strong>	 <input type="text" readonly name="Tahun" autofocus required class="form-control" value="<?php echo $data_header['tahun'];  ?>"/></strong>
				</div>	
			</div>

			<div class="form-group">	
				<label class="control-label col-lg-3">Nama Sales</label>																					
				<div class="col-lg-4">
					<strong><input type="text" Readonly name="sales"  class="form-control" value= " <?php echo $sales; ?>  "/></strong>
				</div>	
			</div>
			
			<div class="form-group">	
				<label class="control-label col-lg-3">Segmen Penjualan </label>
				<div class="col-lg-4">
					<strong>	<input type="text" Readonly name="segment" autofocus required class="form-control" value="<?php echo $data_header['segment']; ?>"  /> </strong>
				</div>	
			</div>

			<div class="form-group">	
				<label class="control-label col-lg-3">Sub Segmen Penjualan </label>
				<div class="col-lg-4">															
					<strong><input type="text" Readonly name="sub_segment" autofocus required class="form-control" value="<?php echo $data_header['sub_segment']; ?> " />	</strong>
				</div>	
			</div>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Customer </label>
				<div class="col-lg-4">
					<strong><input type="text" name="customer" readonly required class="form-control" value="<?php echo $data_header['customer']; ?> " /> </strong>
				</div>	
			</div>
			
			
			<div class="form-group">								
				<label class="control-label col-lg-3">Project</label>
				<div class="col-lg-8">
					<strong><input type="text" name="project" readonly class="form-control" value="<?php echo $data_header['project']; ?> " /></strong>
				</div>								
			</div>
			
			<div class="form-group">						
				<label class="control-label col-lg-3">Status Stage</label>
				<div class="col-lg-4">															
					<strong><input type="text" name="priority" readonly class="form-control" value="<?php echo $data_header['priority']; ?> " /></strong>	
				</div>							
			</div>
		</div>
			
		<div class="container">
			<h3><strong> <font color="blue">GENERAL CONDITION</font></strong></h3>
		
			<div class="form-group">
				<label class="control-label col-lg-3">Catagory</label>
				<div class="col-lg-4">		
					<strong><input type="text" name="category" required class="form-control" value="Standard" readonly /></strong>
				</div>	
			</div>
			<div class="form-group">				
				<label class="control-label col-lg-3">Type of Transformer</label>
				<div class="col-lg-4">
					<strong><input type="text" name="type_trafo" readonly class="form-control" value="Hermetically Sealed Type - Corrugated Radiator" /></strong>
				</div>	
			</div>							
			<div class="form-group">
				<label class="control-label col-lg-3">Service Condition</label>
				<div class="col-lg-4">
					<select name='service_condition' id = "service_condition" autofocus class="form-control"  >
						<option value='<?php echo $data_detail['service_condition'] ?>' selected='selected'><?php echo $data_detail['service_condition'] ?></option>
						<option value='Outdoor'>Outdoor</option>		
						<option value='Indoor'>Indoor</option>								
					</select>	
				</div>	
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">International Standard</label>	
				<div class="col-lg-3">
					<strong><input type="text" name="standarisasi" required class="form-control" value="IEC 60076" readonly /></strong>
				</div>
			</div>
		</div>
			
		<div class="container">
			<h3><font color="brown"><strong>ELECTRICAL CHARATERISTIC</strong></font></h3>
			
			
			<div class="form-group">
				<label class="control-label col-lg-3">Winding Temperature</label>
				<div class="col-lg-1">
					<strong><input type="text"  name="winding_temp" value="<?php echo $data_detail['winding_temp'] ?>" autofocus required class="form-control" readonly /></strong>
				</div>
				<div class="col-lg-1">
					<span class="form-control" style="color: RED; background-color: white;"><strong>Celcius</strong></span>
				</div>
			</div>					
			
			<div class="form-group">
				<label class="control-label col-lg-3">Oil Temperature</label>
				<div class="col-lg-1">	
					<strong><input type="text"  name="oil_temp" value="<?php echo $data_detail['oil_temp'] ?>" autofocus required class="form-control" readonly /></strong>
				</div>
				<div class="col-lg-1">
					<span class="form-control" style="color: RED; background-color: white;"><strong>Celcius</strong></span>
				</div>				
			</div>	
			
			<div class="form-group">
				<label class="control-label col-lg-3">Type of Cooling</label>
				<div class="col-lg-4">
					<strong><input type="text" name="type_cooling" value="ONAN" autofocus required class="form-control" readonly /></strong>
				</div>
			</div>
			
			<div class="form-group">				 
				<label class="control-label col-lg-3">Rate Capacity</label>
				<div class="col-lg-2">
					<select name="rate_capacity" min="1"  class="form-control" required >
						<option value='<?php echo $data_detail['rate_capacity'] ?>' selected='selected'><?php echo $data_detail['rate_capacity'] ?></option>
						<option value='200'>200</option>		
						<option value='250'>250</option>
						<option value='315'>315</option>		
						<option value='400'>400</option>
						<option value='500'>500</option>		
						<option value='630'>630</option>
						<option value='800'>800</option>		
						<option value='1000'>1000</option>
						<option value='1250'>1250</option>		
						<option value='1600'>1600</option>
						<option value='2000'>2000</option>
						<option value='2500'>2500</option>
						<option value='3000'>3000</option>
						<option value='3150'>3150</option>
						<option value='3500'>3500</option>
						<option value='4000'>4000</option>
					</select>
				</div>
				 <div class="col-lg-1">
					<span class="form-control" style="color: RED; background-color: white;"><strong>KVA</strong></span>
				</div>
				<div class="col-lg-1">								
					<strong><input type="text"  name='duadua' id = "duadua"  value="ONAN" disabled class="form-control" readonly /></strong>
				</div>
			</div>	

			<div class="form-group">
				<label class="control-label col-lg-3">No Of Phase</label>
				<div class="col-lg-1">
					<strong><input type="text"  name='no_phase' id = "no_phase"  value="3" disabled class="form-control" /></strong>
				</div>	
				<div class="col-lg-1">
					<span class="form-control" style="color: RED; background-color: white;"><strong>Phase</strong></span>
				</div>	
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Frequency</label>
				<div class="col-lg-1">
					<strong><input type="text"  id="selectBoxon" name="selectBoxon" value="50" disabled class="form-control" /></strong>
				</div> 
				<div class="col-lg-1">
					<span class="form-control" style="color: RED; background-color: white;"><strong>Hz</strong></span>
				</div>	
			</div>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Primary Voltage</label>
				<div class="col-lg-1">
					<strong><input type="text"  name="primary_voltage" value="20000" autofocus required class="form-control" disabled /></strong>
				</div>	
				<div class="col-lg-1">
					<span class="form-control" style="color: RED; background-color: white;"><strong>Volt</strong></span>
				</div>	
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Secondary Voltage&nbsp</label>
				<div class="col-lg-1">
					<strong><input type="number"  name="secondary_voltage" value="400" disabled autofocus required class="form-control" /></strong>
				</div>	
				<div class="col-lg-1">
					<span class="form-control" style="color: RED; background-color: white;"><strong>Volt</strong></span>
				</div>	
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Vektor Group</label>								
				<div class="col-lg-2">
					<select name='vektor_group'  autofocus required class="form-control"  >
						<option value='<?php echo $data_detail['vektor_group'] ?>' selected='selected'><?php echo $data_detail['vektor_group'] ?></option>
						<option value='Dyn-1'>Dyn-1</option>	
						<option value='Dyn-5'>Dyn-5</option>	
						<option value='Dyn-7'>Dyn-7</option>	
						<option value='Dyn-11'>Dyn-11</option>
					</select>									
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Type of Winding</label>
				<div class="col-lg-2">
					<select name='type_winding' id = "type_winding" autofocus class="form-control"  >
						<option value='<?php echo $data_detail['type_winding'] ?>' selected='selected'><?php echo $data_detail['type_winding'] ?></option>
						<option value='Cu-Cu'>Cu-Cu</option>	
						<option value='Cu-Al'>Cu-Al</option>
						<option value='Al-Al'>Al-Al</option>	
						<option value='Al-Cu'>Al-Cu</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Tap Changer</label>
				<div class="col-lg-2">	
					<strong><input type="text"  name='tap_changer' id = "tap_changer"  value="Off Load Tap Changer" disabled  class="form-control" /></strong>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">No Of Tap</label>
				<div class="col-lg-1">													
					<strong><input type="number" min="1" name="no_tap" id="txt_no_tap" disabled class="form-control" value="5" /></strong>
				</div>
				<div class="col-lg-1">
					<span class="form-control" style="color: RED; background-color: white;"><strong>Taps</strong></span>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Type Of Oil</label>
				<div class="col-lg-2">	
					<strong><input type="text" name='type_oil' disabled class="form-control" value="Mineral Oil" /></strong>
				</div>
			</div>
		</div>
		
		<div class="container">
			<h3> <font color="blue">PROTECTION & ACCESORIES</font></h3>
	
			<div class="form-group">
				<label class="control-label col-lg-3"id="isd_label" >Integrated Safety Device</label>							
				<div class="col-lg-1">								
					<input type="text" name="device" id="ddlModels"  disabled class="form-control" value="YES" />
				</div> 
				<div class="col-lg-3">
					<select name = "safety_device" id="txtOther" class="form-control" >
						<option value='<?php echo $data_detail['safety_device'] ?>' selected='selected'><?php echo $data_detail['safety_device'] ?></option>
						<option value="DMCR">DMCR (Default)</option>	
						<option value="DGPT-2">DGPT-2</option>
						<option value="RIS">RIS</option>
					</select>								
				</div>							
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" >Temperature Indicator</label>
				<div class="col-lg-1">															
					<select name="temp_indicators" id="ddlModels1"  class="form-control" >
						<option value=""></option>	
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>
				<div class="col-lg-3">
					<select name = "temp_indicator" id="txtOther1" disabled="disabled" class="form-control" >
						<option value='<?php echo $data_detail['temp_indicator'] ?>' selected='selected'><?php echo $data_detail['temp_indicator'] ?></option>
						<option value="C/W Contact">With C/W Contact</option>								
						<option value="NO Contact">NO Contact</option>
					</select>								
				</div>		
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Oil Level Indicator</label>
				<div class="col-lg-1">													
				 	<select name="oil_indicators" id="ddlModels2"  class="form-control" >
				 		<option value=""></option>	
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>
				<div class="col-lg-3">
					<select name = "oil_indicator" id="txtOther2" disabled="disabled" class="form-control" >
						<option value='<?php echo $data_detail['oil_indicator'] ?>' selected='selected'><?php echo $data_detail['oil_indicator'] ?></option>
						<option value="C/W Contact">With C/W Contact</option>								
						<option value="NO Contact">NO Contact</option>
					</select>								
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Presure Device</label>
				<div class="col-lg-1">													
					<select name="presure_devices" id="ddlModels3" class="form-control" >
						<option value=""></option>	
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>
				<div class="col-lg-3">
					<select name = "presure_device" id="txtOther3" disabled="disabled" class="form-control" >
						<option value='<?php echo $data_detail['presure_device'] ?>' selected='selected'><?php echo $data_detail['presure_device'] ?></option>	
						<option value="C/W Contact">With C/W Contact</option>								
						<option value="NO Contact">NO Contact</option>
					</select>								
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Winding Temperature Indicator</label>
				<div class="col-lg-1">														
			 	    <select name="winding_indicators" id="ddlModels4"  class="form-control" >
						<option value="NO">NO</option>								
					</select>
				</div>
				<div class="col-lg-3">
					<select name = "winding_indicator" id="txtOther4"  disabled="disabled"  class="form-control" >
						<option value='<?php echo $data_detail['winding_indicator'] ?>' selected='selected'><?php echo $data_detail['winding_indicator'] ?></option>
						<option value="C/W Contact">With C/W Contact</option>								
						<option value="NO Contact">NO Contact</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Sudden Presure Relay</label>
				<div class="col-lg-1">
					<select name="presure_relays" id="ddlModels5"  class="form-control" >
						<option value="NO">NO</option>								
					</select>
				</div>
				<div class="col-lg-3">
					<select name = "presure_relay" id="txtOther5"  disabled="disabled"  class="form-control" >
						<option value='<?php echo $data_detail['presure_relay'] ?>' selected='selected'><?php echo $data_detail['presure_relay'] ?></option>
				</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" id="buc_label">Buccholz Relay</label>
				<div class="col-lg-1">
					<select name="buccholz_relays" id="ddlModels6"  class="form-control" >
						<option value="NO">NO</option>								
					</select>
				</div>
				<div class="col-lg-3">
					<select name = "buccholz_relay_u" id="txtOther6"  disabled="disabled"  class="form-control" >
						<option value='<?php echo $data_detail['buccholz_relay'] ?>' selected='selected'><?php echo $data_detail['buccholz_relay'] ?></option>
					</select>								
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" id="vacuum_label" >Pressure Vacuum Gauge</label>
				<div class="col-lg-1">														
					<select name="vacuum_gauges" id="ddlModels8"  class="form-control" >
						<option value="NO">NO</option>								
					</select>
				</div>
				<div class="col-lg-3">
					<select name = "vacuum_gauge_u" id="txtOther8"  disabled="disabled"  class="form-control" >
						<option value='<?php echo $data_detail['vacuum_gauge'] ?>' selected='selected'><?php echo $data_detail['vacuum_gauge'] ?></option>	
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">HV/LV Cable Box</label>
				<div class="col-lg-1">														
					<select name="enclosures" id="ddlModels7" class="form-control" >								
						<option value="NO">NO</option>								
					</select>
				</div>
				<div class="col-lg-3">
					<select name = "enclosure_u" id="txtOther7"  disabled="disabled"  class="form-control" >
						<option value='<?php echo $data_detail['enclosure'] ?>' selected='selected'><?php echo $data_detail['enclosure'] ?></option>		
					</select>								
				</div>	
			</div>	
		</div>

		<div class="container">
			<h3> <font color="blue">TRANSFORMER TESTING </font></h3>	

			<div class="form-group">
				<label class="control-label col-lg-3"><font color="blue">SPECIAL TEST</font></label>
			</div>			
			<div class="form-group">
				<label class="control-label col-lg-3">DISSOLVE GASS ANALYSIS (DGA)</label>
				<div class="col-lg-1">
					<select name="sp_dga" class="form-control"  >	
						<option value='<?php echo $data_detail['sp_dga'] ?>' selected='selected'><?php echo $data_detail['sp_dga'] ?></option>		
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	
			<div class="form-group">
				<label class="control-label col-lg-3">SWEEP FREQUENCY RESPONSE (SFRA) </label>
				<div class="col-lg-1">
					<select name="sp_sfra" class="form-control" >		
						<option value='<?php echo $data_detail['sp_sfra'] ?>' selected='selected'><?php echo $data_detail['sp_sfra'] ?></option>			
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	
			<div class="form-group">
				<label class="control-label col-lg-3">DISSIPATION FACTOR (TAN DELTA) </label>
				<div class="col-lg-1">
					<select name="sp_delta" class="form-control" >									
						<option value='<?php echo $data_detail['sp_delta'] ?>' selected='selected'><?php echo $data_detail['sp_delta'] ?></option>	
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	
			<div class="form-group">
				<label class="control-label col-lg-3">PARTIAL DISCHARGER </label>
				<div class="col-lg-1">
					<select name="sp_pd" class="form-control" >									
						<option value='<?php echo $data_detail['sp_pd'] ?>' selected='selected'><?php echo $data_detail['sp_pd'] ?></option>		
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	
			<div class="form-group">
				<label class="control-label col-lg-3">ZERO SEQUENCE IMPEDANCE</label>
					<div class="col-lg-1">
						<select name="sp_zero" class="form-control" >									
							<option value='<?php echo $data_detail['sp_zero'] ?>' selected='selected'><?php echo $data_detail['sp_zero'] ?></option>	
							<option value="NO">NO</option>								
							<option value="YES">YES</option>
						</select>
					</div>							
			</div>	
			<div class="form-group">
				<label class="control-label col-lg-3"><font color="RED">TYPE TEST</font></label>
			</div>		

			<div class="form-group">
				<label class="control-label col-lg-3">TEMPERATURE RISE</label>
				<div class="col-lg-1">
					<select name="test_temp_rise" class="form-control" >	
				     	<option value='<?php echo $data_detail['test_temp_rise'] ?>' selected='selected'><?php echo $data_detail['test_temp_rise'] ?></option>									
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	
			<div class="form-group">
				<label class="control-label col-lg-3">LIGHTNING IMPULSE</label>
				<div class="col-lg-1">
					<select name="test_impulse" class="form-control" >
					    <option value='<?php echo $data_detail['test_impulse'] ?>' selected='selected'><?php echo $data_detail['test_impulse'] ?></option>																	
				 		<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	
			<div class="form-group">
				<label class="control-label col-lg-3">SOUND LEVEL(NOISE) </label>
				<div class="col-lg-1">
					<select name="test_noise" class="form-control" >	
				        <option value='<?php echo $data_detail['test_noise'] ?>' selected='selected'><?php echo $data_detail['test_noise'] ?></option>		
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	
		</div>
			
		<div class="container">
			<h3> <font color="blue">NOTES </font></h3>
	
			<div class="form-group">
				<label class="control-label col-lg-3">Catatan 1</label>
				<div class="col-lg-4">
					<textarea  id ="notes1" name="notes1"  class="form-control" placeholder="Catatan" rows="4" cols="50" ><?php echo $data_detail['notes1'] ?></textarea>
				</div>	
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Catatan 2</label>
				<div class="col-lg-4">
					<textarea  id ="notes2" name="notes2"  class="form-control" placeholder="Catatan" rows="4" cols="50" ><?php echo $data_detail['notes2'] ?></textarea>
				</div>	
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Catatan 3</label>
				<div class="col-lg-4">
					<textarea  id ="notes3" name="notes3"  class="form-control" placeholder="Catatan" rows="4" cols="50" ><?php echo $data_detail['notes3'] ?></textarea>
				</div>	
			</div>
		</div>

		<div class="container">
			<div class="form-actions"  style="text-align:center;">
				<input type="submit" name="pasien" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SELESAI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="btn btn-primary" />
			</div>	
		</div>	
		<br><br>
	</form>			
</div>
</body>
  
<script type="text/javascript">
	$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "get_segment.php",
          	cache: false, 
          	success: function(msg){
              $("#segment").html(msg);
            }
        });
 
      	$("#segment").change(function(){
      	var segment = $("#segment").val();
          	$.ajax({
          		type: 'POST',
              	url: "get_sub_segment.php",
              	data: {segment: segment},
              	cache: false,
              	success: function(msg){
                  $("#sub_segment").html(msg);
                }
            });
        });
      });
</script>

<script type="text/javascript">
function changeFunc() {
var selectBox = document.getElementById("selectBox");
var selectedValue = selectBox.options[selectBox.selectedIndex].value;
if (selectedValue=="other"){
$('#textboxes').show();
$('#textboxes').focus();
$("#textboxes").removeAttr("disabled");
document.getElementById('textboxes').setAttribute('required','required')
}
else {
<!--alert("Error"); -->
$('#textboxes').hide();
$("#textboxes").attr("disabled", "disabled"); 
document.getElementById('textboxes').removetAttribute('required','required')

}
}
</script>

<script type="text/javascript">
function changeFunction() {
var selectBoxes = document.getElementById("selectBoxes");
var selectedValues= selectBoxes.options[selectBoxes.selectedIndex].value;
if (selectedValues=="other"){
$('#textboxess').show();
$('#textboxess').focus();
$("#textboxess").removeAttr("disabled");
document.getElementById('textboxess').setAttribute('required','required')
}
else {
<!--alert("Error"); -->
$('#textboxess').hide();
$("#textboxess").attr("disabled", "disabled"); 
document.getElementById('textboxess').removetAttribute('required','required')
}
}
</script>

<script type="text/javascript">
function changeFunctional() {
var selectBoxes = document.getElementById("selectBoxal");
var selectedValues= selectBoxes.options[selectBoxes.selectedIndex].value;

var tes = document.getElementById("selectBoxal").value;
		if (tes=="SPLN D3")
		{ var tos = "50/55";
		var win ="55";
		var oil ="50";
		$('#topi1').hide();
		$('#topi2').hide();
		$('#topi3').hide();
		$('#topi4').hide();
		$('#dvPassport91').hide();
		$("#dvPassport90").hide();
		$("#dvPassport90").attr("disabled", "disabled"); 
		$("#dvPassport91").attr("disabled", "disabled"); 
		$('#topi5').hide();
		}
		else if (tes=="ANSI / IEEE C57")
		{ var tos = "50/55";
		var win ="55";
		var oil ="50";
		$('#topi1').show();
		$('#topi2').show();
		$('#topi3').show();
		$('#topi4').show();
		$('#dvPassport91').hide();
		$("#dvPassport90").hide();
		$("#dvPassport90").attr("disabled", "disabled"); 
		$("#dvPassport91").attr("disabled", "disabled"); 
		$('#topi5').hide();
		}
		else if (tes=="IEC 60076")
		{ var tos = "60/65";
		  var win ="65";
		  var oil ="60";
		  $('#topi1').show();
		  $('#topi2').show();
		  $('#topi3').show();
		  $('#topi4').show();
		  $('#dvPassport91').hide();
		  $("#dvPassport90").hide();
		  $("#dvPassport90").attr("disabled", "disabled");  
		  $("#dvPassport91").attr("disabled", "disabled"); 
		  $('#topi5').hide();
		 
		}
		else if (tes=="other")
		{ var tos = "Other";
		  var win ="Other";
		  var oil ="Other";
		  $('#topi1').hide();
		  $('#topi2').hide();
		  $('#topi3').hide();
		  $('#topi4').hide();
		  $('#dvPassport91').hide();
		  $("#dvPassport90").hide();
		  $("#dvPassport90").attr("disabled", "disabled"); 
		  $("#dvPassport91").attr("disabled", "disabled"); 
		  $('#topi5').show();
	
		}
       
		document.getElementById("winding_temp").value=win;
		document.getElementById("oil_temp").value=oil;

if (selectedValues=="other"){
$('#textboxal').show();
$('#textboxal').focus();
$('#textboxal1').show();
$('#textboxal2').show();
<!--$('#textboxar').show();  -->


}
else {
<!--alert("Error"); -->
$('#textboxal').hide();
<!--$('#textboxar').hide();-->
$('#textboxal1').hide();
$('#textboxal2').hide();
}
}
</script>

<script type="text/javascript">
function Fuckpop() {
var selectBoxs = document.getElementById("selectBoxon");
var selectedValues= selectBoxs.options[selectBoxs.selectedIndex].value;
if (selectedValues=="Other"){
$('#textboxon').show();
$('#textboxon').focus();

}
else {
<!--alert("Error"); -->
$('#textboxon').hide();
}
}
</script>

<script type="text/javascript">
	$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "get_vektor_group.php",
          	cache: false, 
          	success: function(msg){
              $("#vektor_group").html(msg);
            }
	})});
</script>


<script type="text/javascript">
    $(function () {
        $("#ddlModels").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther").removeAttr("disabled");
				document.getElementById('txtOther').setAttribute('required','required')
				$("#txtOther").show();
				$("#txtOther11").show();
                $("#txtOther").focus();
				$('#ddlModels6').hide();
				$('#txtOther6').hide();
				$('#txtOther9').hide();
				$('#buc_label').hide();
				$('#ddlModels8').hide();
				$('#txtOther8').hide();
				$('#txtOther10').hide();
				$('#vacuum_label').hide();
            } else {
                $("#txtOther").attr("disabled", "disabled"); 
				$("#txtOther").hide();
				$("#txtOther11").hide(); 
				$('#ddlModels8').show();
				$('#txtOther8').show();
				$('#txtOther10').show();
				$('#vacuum_label').show();
				$('#ddlModels6').show();
				$('#txtOther6').show();
				$('#txtOther9').show();
				$('#buc_label').show();
				
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $("#ddlModels1").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther1").removeAttr("disabled");
				document.getElementById('txtOther1').setAttribute('required','required')
				$("#txtOther1").show();
                $("#txtOther1").focus();
            } else {
                $("#txtOther1").attr("disabled", "disabled"); 
				$("#txtOther1").hide(); 				
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#ddlModels2").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther2").removeAttr("disabled");
				document.getElementById('txtOther2').setAttribute('required','required')
				$("#txtOther2").show();
                $("#txtOther2").focus();
            } else {
                $("#txtOther2").attr("disabled", "disabled"); 
				$("#txtOther2").hide(); 				
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#ddlModels3").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther3").removeAttr("disabled");
				document.getElementById('txtOther3').setAttribute('required','required')
				$("#txtOther3").show();
                $("#txtOther3").focus();
            } else {
                $("#txtOther3").attr("disabled", "disabled"); 
				$("#txtOther3").hide(); 				
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#ddlModels4").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther4").removeAttr("disabled");
				document.getElementById('txtOther4').setAttribute('required','required')
				$("#txtOther4").show();
                $("#txtOther4").focus();
            } else {
                $("#txtOther4").attr("disabled", "disabled"); 
				$("#txtOther4").hide(); 				
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#ddlModels5").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther5").removeAttr("disabled");
				document.getElementById('txtOther5').setAttribute('required','required')
				$("#txtOther5").show();
                $("#txtOther5").focus();
            } else {
                $("#txtOther5").attr("disabled", "disabled"); 
				$("#txtOther5").hide(); 				
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#ddlModels6").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther6").removeAttr("disabled");
				document.getElementById('txtOther6').setAttribute('required','required')
				$("#txtOther6").show();
                $("#txtOther6").focus();
				$("#isd_label").hide(); 
				$("#txtOther").hide(); 
				$("#ddlModels").hide(); 
				$("#vacuum_label").hide(); 
				$("#ddlModels8").hide(); 
				$("#txtOther8").hide();
				$("#txtOther10").hide();  
				
				
            } else {
                $("#txtOther6").attr("disabled", "disabled"); 				
				$("#txtOther6").hide(); 	
				$("#isd_label").show();
				$("#txtOther").show(); 
				$("#ddlModels").show(); 
				$("#vacuum_label").show(); 
				$("#ddlModels8").show(); 
				$("#txtOther8").show();
				$("#txtOther10").hide(); 
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#ddlModels7").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther7").removeAttr("disabled");
				$("#txtOther7").show();
                $("#txtOther7").focus();
            } else {
                $("#txtOther7").attr("disabled", "disabled"); 
				$("#txtOther7").hide(); 				
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#ddlModels8").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther8").removeAttr("disabled");
				$("#txtOther8").show();
                $("#txtOther8").focus();
				$("#isd_label").hide(); 
				$("#txtOther").hide(); 
				$("#ddlModels").hide(); 
				$("#buc_label").hide(); 
				$("#ddlModels6").hide(); 
				$("#txtOther6").hide();
				
				
            } else {
                $("#txtOther8").attr("disabled", "disabled"); 
				$("#txtOther8").hide();
				$("#txtOther10").hide(); 
				$("#isd_label").show(); 
				$("#txtOther").show(); 
				$("#ddlModels").show(); 
				$("#buc_label").show(); 
				$("#ddlModels6").show(); 
				$("#txtOther6").show(); 
				
            }
        });
    });
</script>

<script type="text/javascript">   
    <?php echo $jsArray; ?> 
    function changeValue(no_pasien){ 
    document.getElementById('nm').value = dtMhs[no_pasien].nama; 
    document.getElementById('jrsn').value = dtMhs[no_pasien].jrsn; 
    }; 

</script> 	
<script type="text/javascript">
    $(function () {
        $("#tap_changer").change(function () {
            if ($(this).val() == "No Tapping") {
            	$("#txt_no_tap").attr("disabled", "disabled"); 
            	document.getElementById('txt_no_tap').value = 0;
            } else {
                $("#txt_no_tap").removeAttr("disabled");
                $("#txt_no_tap").focus();				
            }
        });
    });
</script>

<script type="text/javascript">
function somay() {
var selectbotol = document.getElementById("type_cooling");
var selectedValues= selectbotol.options[selectbotol.selectedIndex].value;

var satu = document.getElementById("type_cooling").value;
		if (satu=="ONAN")
		{ var dua = "ONAN";
		var tiga ="";
		$('#tigatiga').hide();	
		$('#rc2').hide();	
		$("#rc2").attr("disabled", "disabled"); 
		}
		else if (satu=="KNAN")
		{ var dua = "KNAN";
		var tiga ="";
		$('#tigatiga').hide();	
		$('#rc2').hide();
		$("#rc2").attr("disabled", "disabled"); 
		}
		else if (satu=="ONAN/ONAF")
		{ var dua = "ONAN";
		var tiga ="ONAF";
		$('#tigatiga').show();	
		$('#rc2').show();
		$("#rc2").removeAttr("disabled");
		}
		
		else if (satu=="KNAN/KNAF")
		{ var dua = "KNAN";
		var tiga ="KNAF";
		$('#tigatiga').show();	
		$('#rc2').show();
		$("#rc2").removeAttr("disabled");
		}
		
		else if (satu=="OFAF")
		{ var dua = "OF";
		var tiga ="KF";
		$('#tigatiga').show();	
		$('#rc2').show();
		$("#rc2").removeAttr("disabled");
		}
		
		else if (satu=="KFAF")
		{ var dua = "KF";
		var tiga ="AF";
		$('#tigatiga').show();	
		$('#rc2').show();
		$("#rc2").removeAttr("disabled");
		}
		
       
		document.getElementById("duadua").value=dua;
		document.getElementById("tigatiga").value=tiga;
}
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport90]").click(function () {
            if ($(this).val() == "Kustom") {
                $("#dvPassport90").show();
				 $("#kustom_winding_temp").focus();
				 document.getElementById('kustom_winding_temp').setAttribute('required','required')
            } else {
                $("#dvPassport90").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport91]").click(function () {
            if ($(this).val() == "Kustom") {
                $("#dvPassport91").show();
				 $("#dvPassport91").focus();
				 document.getElementById('kustom_oil_temp').setAttribute('required','required')
            } else {
                $("#dvPassport91").hide();
            }
        });
    });
</script>


	
	
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4"></script>
<script type="text/javascript" src="bootstrap/js/poper-min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap/js/slim-min.js"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>   
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/savy.min.js"></script>
</body>
</html>	


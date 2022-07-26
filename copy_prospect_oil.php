
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

		$category="Non Standard";

		if ($_POST['type_trafo_u'] == '') {
			$type_trafo = $data_detail['type_trafo'];
		} else {
			$type_trafo = $_POST['type_trafo_u'];
		}

		if ($_POST['service_condition_u'] == '') {
			$service_condition = $data_detail['service_condition'];
		} else {
			$service_condition = $_POST['service_condition_u'];
		}

		if ($_POST['altitude_u'] == '') {
			$altitude = $data_detail['altitude'];
		} else if ($_POST["altitude_master"]=="other")   {								
			$altitude = $_POST["altitude_o"];
		} else {
			$altitude = '<1000';
		}

		if ($_POST['ambient_temp_u'] == '') {
			$ambient_temp = $data_detail['ambient_temp'];
		} else if ($_POST["ambient_temp_master"]=="other")   {								
			$ambient_temp = $_POST["ambient_temp_o"];
		} else {
			$ambient_temp = '<40';
		}

		if ($_POST['standarisasi_u'] == '') {
			$standarisasi = $data_detail['standarisasi'];
		} else if ($_POST["selectBoxal"]=="other")   {								
			$standarisasi = $_POST["standarisasi_o"];
		} else {
			$standarisasi = $_POST["selectBoxal"];
		}

		// ELECTRICAL CHARACTERISTIC

		if ($_POST['winding_temp_u'] == '') {
			$winding_temp = $data_detail['winding_temp'];
		} else if ($_POST["winding_temp"]=="Other")   {								
			$winding_temp = $_POST["winding_temp2"];
		} else if ($_POST["kustom_winding_temp"]<>"") {
			$winding_temp = $_POST["kustom_winding_temp"];
		} else {
			$winding_temp = $_POST["winding_temp"];
		}

		if ($_POST['oil_temp_u'] == '') {
			$oil_temp = $data_detail['oil_temp'];
		} else if ($_POST["oil_temp"] == "Other")   {								
			$oil_temp = $_POST["oil_temp2"];
		} else if ($_POST["kustom_oil_temp"] <> "") {
			$oil_temp = $_POST["kustom_oil_temp"];
		} else {
			$oil_temp = $_POST["oil_temp"];
		}

		if ($_POST["type_cooling_u"] == "") {
			$type_cooling = $data_detail["type_cooling"];
			$type_cooling1 = $data_detail["type_cooling1"];
			$type_cooling2 = $data_detail["type_cooling2"];
			$rate_capacity = $data_detail['rate_capacity'];
			$rate_capacity2 = $data_detail['rate_capacity2'];
		} else if ($_POST["type_cooling_u"] == "ONAN"){
			$type_cooling = $_POST["type_cooling_u"];
			$type_cooling1 = $_POST["type_cooling"];
			$type_cooling2 = "";
			$rate_capacity = $_POST['rate_capacity'];
			$rate_capacity2 = "";
		} else if ($_POST["type_cooling_u"] == "KNAN"){
			$type_cooling = $_POST["type_cooling_u"];
			$type_cooling1 = $_POST["type_cooling"];
			$type_cooling2 = "";
			$rate_capacity = $_POST['rate_capacity'];
			$rate_capacity2 = "";
		} else if ($_POST["type_cooling_u"] == "ONAN/ONAF"){
			$type_cooling = $_POST["type_cooling_u"];
			$type_cooling1 = "ONAN";
			$type_cooling2 = "ONAF";
			$rate_capacity = $_POST['rate_capacity'];
			$rate_capacity2 = $_POST['rate_capacity2'];
		} else if ($_POST["type_cooling_u"] == "KNAN/KNAF"){
			$type_cooling = $_POST["type_cooling_u"];
			$type_cooling1 = "KNAN";
			$type_cooling2 = "KNAF";
			$rate_capacity = $_POST['rate_capacity'];
			$rate_capacity2 = $_POST['rate_capacity2'];
		} else if ($_POST["type_cooling_u"] == "OFAF"){
			$type_cooling = $_POST["type_cooling_u"];
			$type_cooling1 = "OF";	
			$type_cooling2 = "AF";
			$rate_capacity = $_POST['rate_capacity'];
			$rate_capacity2 = $_POST['rate_capacity2'];
		} else if ($_POST["type_cooling_u"] == "KFAF"){
			$type_cooling = $_POST["type_cooling_u"];
			$type_cooling1 = "KF";
			$type_cooling2 = "AF";
			$rate_capacity = $_POST['rate_capacity'];
			$rate_capacity2 = $_POST['rate_capacity2'];
		}

		if ($_POST['no_phase_u'] == '') {
			$no_phase = $data_detail['no_phase'];
		} else {
			$no_phase = $_POST['no_phase_u'];
		}

		if ($_POST['selectBoxon'] == '') {
			$frequency = $data_detail['frequency'];
		} else if ($_POST["selectBoxon"] == "Other")   {								
			$frequency = $_POST["frequency_o"];
		} else {
			$frequency = $_POST["selectBoxon"];
		}

		if ($_POST['primary_voltage_u'] == '') {
			$primary_voltage = $data_detail['primary_voltage'];
		} else {
			$primary_voltage = $_POST['primary_voltage_u'];
		}

		if ($_POST['secondary_voltage_u'] == '') {
			$secondary_voltage = $data_detail['secondary_voltage'];
		} else {
			$secondary_voltage = $_POST['secondary_voltage_u'];
		}

		if ($_POST['vektor_group_u'] == '') {
			$vektor_group = $data_detail['vektor_group'];
		} else {
			$vektor_group = $_POST['vektor_group_u'];
		}

		if ($_POST['type_winding_u'] == '') {
			$type_winding = $data_detail['type_winding'];
		} else {
			$type_winding = $_POST['type_winding_u'];
		}

		if ($_POST['tap_changer_u'] == '') {
			$tap_changer = $data_detail['tap_changer'];
		} else {
			$tap_changer = $_POST['tap_changer_u'];
		}

		if ($_POST['no_tap_u'] == '') {
			$no_tap = $data_detail['no_tap'];
		} else {
			$no_tap = $_POST['no_tap_u'];
		}

		if ($_POST['type_oil_u'] == '') {
			$type_oil = $data_detail['type_oil'];
		} else {
			$type_oil = $_POST['type_oil_u'];
		}

		// PROTECTION & ACCESORIES

		if ($_POST["device"] == "") {
			$safety_device = $data_detail["safety_device"];
		} else if ($_POST["device"] == "YES") {							
			$safety_device = $_POST["safety_device"];								
		} else {
			$safety_device = "N/A";									
		}

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

		if ($_POST['sp_dga_u'] == '') {
			$sp_dga = $data_detail['sp_dga'];
		} else {
			$sp_dga = $_POST['sp_dga_u'];
		}

		if ($_POST['sp_sfra_u'] == '') {
			$sp_sfra = $data_detail['sp_sfra'];
		} else {
			$sp_sfra = $_POST['sp_sfra_u'];
		}

		if ($_POST['sp_delta_u'] == '') {
			$sp_delta = $data_detail['sp_delta'];
		} else {
			$sp_delta = $_POST['sp_delta_u'];
		}

		if ($_POST['sp_pd_u'] == '') {
			$sp_pd = $data_detail['sp_pd'];
		} else {
			$sp_pd = $_POST['sp_pd_u'];
		}

		if ($_POST['sp_zero_u'] == '') {
			$sp_zero = $data_detail['sp_zero'];
		} else {
			$sp_zero = $_POST['sp_zero_u'];
		}

		// TRANSFORMER TESTING - TYPE TEST

		if ($_POST['test_temp_rise_u'] == '') {
			$test_temp_rise = $data_detail['test_temp_rise'];
		} else {
			$test_temp_rise = $_POST['test_temp_rise_u'];
		}

		if ($_POST['test_impulse_u'] == '') {
			$test_impulse = $data_detail['test_impulse'];
		} else {
			$test_impulse = $_POST['test_impulse_u'];
		}

		if ($_POST['test_noise_u'] == '') {
			$test_noise = $data_detail['test_noise'];
		} else {
			$test_noise = $_POST['test_noise_u'];
		}

		//NOTES


		if ($_POST['notes1_u'] == '') {
			$notes1 = $data_detail['notes1'];
		} else {
			$notes1 = $_POST['notes1_u'];
		}

		if ($_POST['notes2_u'] == '') {
			$notes2 = $data_detail['notes2'];
		} else {
			$notes2 = $_POST['notes2_u'];
		}

		if ($_POST['notes3_u'] == '') {
			$notes3 = $data_detail['notes3'];
		} else {
			$notes3 = $_POST['notes3_u'];
		}

		
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
					<strong><input type="text" name="category" required class="form-control" value="Non Standard" readonly /></strong>								
				</div>	
			</div>
			<div class="form-group">				
				<label class="control-label col-lg-3">Type of Transformer</label>
				<div class="col-lg-4">
					<strong><input type="text" name="type_trafo" required class="form-control" value="<?php echo $data_detail['type_trafo'] ?>" readonly /></strong>
					<select name='type_trafo_u' id = "type_trafo" autofocus class="form-control" >
						<option value=''></option>
						<option value='Hermetically Sealed Type - Corrugated Radiator'>Hermetically Sealed Type - Corrugated Radiator</option>		
						<option value='Conservator Type - Corrugated Radiator'>Conservator Type - Corrugated Radiator</option>	
						<option value='Conservator Type - Panel Radiator'>Conservator Type - Panel Radiator</option>	
						<option value='Nitrogen Cushion Type'>Nitrogen Cushion Type</option>			
					</select>	
				</div>	
			</div>							
			<div class="form-group">
				<label class="control-label col-lg-3">Service Condition</label>
				<div class="col-lg-4">
					<strong><input type="text" name="service_condition" required class="form-control" value="<?php echo $data_detail['service_condition'] ?>" readonly /></strong>
					<select name='service_condition_u' id = "service_condition" autofocus class="form-control"  >
						<option value=''></option>
						<option value='Outdoor'>Outdoor</option>		
						<option value='Indoor'>Indoor</option>								
					</select>	
				</div>	
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Altitude</label>
				<div class="col-lg-3">
					<strong><input type="text" name="altitude" required class="form-control" value="<?php echo $data_detail['altitude'] ?>" readonly /></strong>
					<select name="altitude_master" id="selectBox" onchange="changeFunc();"class="form-control">
						<option value=''></option>
						<option value="Standard">Standard &nbsp;&lt&nbsp;1000</option>								
						<option value="other">Other</option>
					</select>
				</div> 
				<div class="col-lg-1">
					<input name="altitude"  placeholder="Mdpl" class="form-control" type="text" style="display: none" id="textboxes">
				</div>								
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Ambient Temp</label>	
				<div class="col-lg-3">
					<strong><input type="text" name="ambient_temp" required class="form-control" value="<?php echo $data_detail['ambient_temp'] ?>" readonly /></strong>
					<select name="ambient_temp_master" id="selectBoxes" onchange="changeFunction();"class="form-control" >
						<option value=''></option>
						<option value="Standard">Standard&nbsp;&lt&nbsp;40&deg;&nbsp;C</option>
						<option value="other">Other</option>
					</select>
				</div> 
				<div class="col-lg-1">
					<input name="ambient_temp"  placeholder="Celcius" class="form-control" type="text" style="display: none" id="textboxess">
				</div>	
							
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">International Standard</label>	
				<div class="col-lg-3">
					<strong><input type="text" name="standarisasi" required class="form-control" value="<?php echo $data_detail['standarisasi'] ?>" readonly /></strong>
					<select id="selectBoxal" name="selectBoxal" onchange="changeFunctional();"class="form-control" >
						<option value=''></option>
						<option value='IEC 60076'>IEC 60076</option>		
						<option value='SPLN D3'>SPLN D3</option>	
						<option value='ANSI / IEEE C57'>ANSI / IEEE C57</option>								
						<option value="other">Other</option>
					</select>
				</div>
				<div class="col-lg-3">
					<input name="standarisasi_o" id="topi5" placeholder="Please Write" class="form-control" type="text" style="display: none" id="textboxal">
				</div>	
			</div>
		</div>
			
		<div class="container">
			<h3><font color="brown"><strong>ELECTRICAL CHARATERISTIC</strong></font></h3>
			
			
			<div class="form-group">
				<label class="control-label col-lg-3">Winding Temperature</label>
				<div class="col-lg-1">
					<strong><input type="text"  name="winding_temp" value="<?php echo $data_detail['winding_temp'] ?>" autofocus required class="form-control" readonly /></strong>
					<input type="text"  id="winding_temp"  name="winding_temp_u" autofocus class="form-control" readonly />
				</div>
				<div class="col-lg-1">
					<input name="winding_temp2"  placeholder="Please Write" class="form-control" type="text" style="display: none" id="textboxal1">
				</div>
				<div class="col-lg-2">
					<input type="button" id="topi1" value="Kustom" name = "btnPassport90" class="btn btn-primary" />
					<input type="button" id="topi2" value="Batal" name = "btnPassport90" class="btn btn-info" />
				</div>
				<div class="col-lg-1" id="dvPassport90" style="display: none">	
					<input type="text"  name="kustom_winding_temp"  autofocus class="form-control" placeholder = "Ubah "/>
				</div>
			</div>					
			
			<div class="form-group">
				<label class="control-label col-lg-3">Oil Temperature</label>
				<div class="col-lg-1">	
					<strong><input type="text"  name="oil_temp" value="<?php echo $data_detail['oil_temp'] ?>" autofocus required class="form-control" readonly /></strong>
					<input type="text"  id="oil_temp"  name="oil_temp_u" autofocus class="form-control" readonly />
				</div>
				<div class="col-lg-1">
					<input name="oil_temp2"  placeholder="Please Write" class="form-control" type="text" style="display: none" id="textboxal2">
				</div>
				<div class="col-lg-2">
					<input type="button" id="topi3" value="Kustom" name = "btnPassport91" class="btn btn-primary" />
					<input type="button" id="topi4" value="Batal" name = "btnPassport91" class="btn btn-info" />
				</div>
				<div class="col-lg-1" id="dvPassport91" style="display: none">	
					<input type="text"  id="kustom_oil_temp" name="kustom_oil_temp"  autofocus class="form-control" placeholder = "Ubah "/>
				</div>
								
			</div>	
			
			<div class="form-group">
				<label class="control-label col-lg-3">Type of Cooling</label>
				<div class="col-lg-4">
					<input type="text" name="type_cooling" value="<?php echo $data_detail['type_cooling'] ?>" autofocus required class="form-control" readonly />
					<select name='type_cooling_u' id = "type_cooling" onchange="somay();"  autofocus class="form-control"  >
						<option value=''></option>
						<option value='ONAN'>ONAN</option>	
						<option value='ONAN/ONAF'>ONAN/ONAF</option>
						<option value='KNAN'>KNAN</option>	
						<option value='KNAN/KNAF'>KNAN/KNAF</option>
						<option value='OFAF'>OFAF</option>
						<option value='KFAF'>KFAF</option>								
					</select>
				</div>
			</div>
			
			<div class="form-group">				 
				<label class="control-label col-lg-3">Rate Capacity</label>
				<div class="col-lg-2">								
					<input type="number" min="1" name="rate_capacity" value="<?php echo $data_detail['rate_capacity']; ?>" autofocus class="form-control" placeholder="KVA" />
				</div>
				<div class="col-lg-2">								
					<input type="text"  id="duadua" class="form-control" placeholder="KVA" value="<?php echo $data_detail['type_cooling1']; ?>" readonly>
				</div>
			</div>		
			<div class="form-group">
				<div class="col-lg-3">	
				</div>								
				<div class="col-lg-2">
				<?php if ($data_detail['type_cooling'] == 'ONAN/ONAF' || $data_detail['type_cooling'] == 'KNAN/KNAF' || $data_detail['type_cooling'] == 'AFAF' || $data_detail['type_cooling'] == 'OFAF') { ?>
					<input type="number" min="1" name="rate_capacity2" id="rc2" value="<?php echo $data_detail['rate_capacity2']; ?>" autofocus  class="form-control" placeholder="KVA" />
				<?php } else { ?>				
					<input type="number" min="1" name="rate_capacity2" id="rc2" value="<?php echo $data_detail['rate_capacity2']; ?>" autofocus  class="form-control" placeholder="KVA" style="display: none"  />
				<?php } ?>
				</div>
				<div class="col-lg-2">
				<?php if ($data_detail['type_cooling'] == 'ONAN/ONAF' || $data_detail['type_cooling'] == 'KNAN/KNAF' || $data_detail['type_cooling'] == 'AFAF' || $data_detail['type_cooling'] == 'OFAF') { ?>							
					<input type="text"  id="tigatiga" class="form-control" placeholder="KVA" value="<?php echo $data_detail['type_cooling2']; ?>" readonly>
				<?php } else { ?>
					<input type="text"  id="tigatiga" class="form-control" placeholder="KVA" value="<?php echo $data_detail['type_cooling2']; ?>" style="display: none" readonly>
				<?php } ?>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">No Of Phase</label>
				<div class="col-lg-4">
					<input type="text" name="no_phase" value="<?php echo $data_detail['no_phase'] ?>" autofocus required class="form-control" readonly />
					<select name='no_phase_u' id = "no_phase" autofocus class="form-control"  >
						<option value=''></option>
						<option value='1'>1 (Single) </option>		
						<option value='3'>3 (Three) </option>														
					</select>	
				</div>	
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Frequency</label>
				<div class="col-lg-3">
					<input type="text" name="frequency" value="<?php echo $data_detail['frequency'] ?>" autofocus required class="form-control" readonly />
					<select id="selectBoxon" name="selectBoxon" onchange="Fuckpop();"class="form-control" >
						<option value=''></option>
						<option value="50">50 Hz</option>	
						<option value="60">60 Hz</option>									
						<option value="Other">Other</option>
					</select>
				</div> 
				<div class="col-lg-1">
					<input name="frequency_o" class="form-control" type="text" style="display: none" id="textboxon" placeholder="Hz" />
				</div>	
			</div>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Primary Voltage</label>
				<div class="col-lg-4">
					<input type="text" name="primary_voltage" value="<?php echo $data_detail['primary_voltage'] ?>" autofocus required class="form-control" readonly />
					<input type="number" min="1" name="primary_voltage_u" autofocus class="form-control" placeholder="Volt" />
				</div>	
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Secondary Voltage&nbsp</label>
				<div class="col-lg-4">
					<input type="text" name="secondary_voltage" value="<?php echo $data_detail['secondary_voltage'] ?>" autofocus required class="form-control" readonly />
					<input type="number"  min="1" name="secondary_voltage_u" autofocus class="form-control" placeholder="Volt" />
				</div>	
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Vektor Group</label>								
				<div class="col-lg-4">
					<input type="text" name="vektor_group" value="<?php echo $data_detail['vektor_group'] ?>" autofocus required class="form-control" readonly />
					<select name='vektor_group_u' id = "vektor_group" autofocus class="form-control"  >
						<option value=''></option>	
					</select>									
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Type of Winding</label>
				<div class="col-lg-4">
					<input type="text" name="type_winding" value="<?php echo $data_detail['type_winding'] ?>" autofocus required class="form-control" readonly />
					<select name='type_winding_u' id = "type_winding" autofocus class="form-control"  >
						<option value=''></option>
						<option value='Cu-Cu'>Cu-Cu</option>	
						<option value='Cu-Al'>Cu-Al</option>
						<option value='Al-Al'>Al-Al</option>	
						<option value='Al-Cu'>Al-Cu</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Tap Changer</label>
				<div class="col-lg-4">
					<input type="text" name="tap_changer" value="<?php echo $data_detail['tap_changer'] ?>" autofocus required class="form-control" readonly />
					<select name='tap_changer_u' id = "tap_changer" autofocus class="form-control"  >
						<option value=''></option>
						<option value='Off Load Tap Changer'>Off Load Tap Changer</option>	
						<option value='On Load Tap Changer'>On Load Tap Changer</option>
						<option value='No Tapping'>No Tapping</option>	
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">No Of Tap</label>
				<div class="col-lg-4">
					<input type="text" name="no_tap" value="<?php echo $data_detail['no_tap'] ?>" autofocus required class="form-control" readonly />
					<input type="number" min="1" name="no_tap_u" id="txt_no_tap" autofocus class="form-control" placeholder="No Of Tap" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Type Of Oil</label>
				<div class="col-lg-4">
					<input type="text" name="type_oil" value="<?php echo $data_detail['type_oil'] ?>" autofocus required class="form-control" readonly />
					<select name='type_oil_u' id = "type_oil" autofocus class="form-control"  >
						<option value=''></option>
						<option value='Mineral Oil'>Mineral Oil</option>	
						<option value='Silicone Oil'>Silicone Oil</option>	
						<option value='Synthetic Ester'>Synthetic Ester</option>	
						<option value='Natural Ester'>Natural Ester</option>									
					</select>
				</div>
			</div>
		</div>
		
		<div class="container">
			<h3> <font color="blue">PROTECTION & ACCESORIES</font></h3>
	
			<div class="form-group">
				<label class="control-label col-lg-3"id="isd_label" >Integrated Safety Device</label>							
				<div class="col-lg-1">								
					<select name="device" id="ddlModels"  class="form-control" >
						<option value=""></option>	
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div> 
				<div class="col-lg-3">
					<input type="text" name="safety_device" id="txtOther11" value="<?php echo $data_detail['safety_device'] ?>" autofocus required class="form-control" readonly />
					<select name = "safety_device_u" id="txtOther"  disabled="disabled"  class="form-control" >
						<option value=""></option>	
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
					<input type="text" name="temp_indicator" value="<?php echo $data_detail['temp_indicator'] ?>" autofocus required class="form-control" readonly />
					<select name = "temp_indicator_u" id="txtOther1"  disabled="disabled"  class="form-control" >
						<option value=""></option>	
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
					<input type="text" name="oil_indicator" value="<?php echo $data_detail['oil_indicator'] ?>" autofocus required class="form-control" readonly />
					<select name = "oil_indicator_u" id="txtOther2"  disabled="disabled"  class="form-control" >
						<option value=""></option>	
						<option value="C/W Contact">With C/W Contact</option>								
						<option value="NO Contact">NO Contact</option>
					</select>								
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Presure Device</label>
				<div class="col-lg-1">													
					<select name="presure_devices" id="ddlModels3"  class="form-control" >
						<option value=""></option>	
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>
				<div class="col-lg-3">
					<input type="text" name="presure_device" value="<?php echo $data_detail['presure_device'] ?>" autofocus required class="form-control" readonly />
					<select name = "presure_device_u" id="txtOther3"  disabled="disabled"  class="form-control" >
						<option value=""></option>	
						<option value="C/W Contact">With C/W Contact</option>								
						<option value="NO Contact">NO Contact</option>
					</select>								
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Winding Temperature Indicator</label>
				<div class="col-lg-1">														
			 	    <select name="winding_indicators" id="ddlModels4"  class="form-control" >
			 	    	<option value=""></option>	
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>
				<div class="col-lg-3">
					<input type="text" name="winding_indicator" value="<?php echo $data_detail['winding_indicator'] ?>" autofocus required class="form-control" readonly />
					<select name = "winding_indicator_u" id="txtOther4"  disabled="disabled"  class="form-control" >
						<option value=""></option>	
						<option value="C/W Contact">With C/W Contact</option>								
						<option value="NO Contact">NO Contact</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Sudden Presure Relay</label>
				<div class="col-lg-1">
					<select name="presure_relays" id="ddlModels5"  class="form-control" >
						<option value=""></option>	
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>
				<div class="col-lg-3">
					<input type="text" name="presure_relay" value="<?php echo $data_detail['presure_relay'] ?>" autofocus required class="form-control" readonly />
					<select name = "presure_relay_u" id="txtOther5"  disabled="disabled"  class="form-control" >
						<option value=""></option>	
						<option value="C/W Contact">With C/W Contact</option>								
						<option value="NO Contact">NO Contact</option>
				</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" id="buc_label">Buccholz Relay</label>
				<div class="col-lg-1">
					<select name="buccholz_relays" id="ddlModels6"  class="form-control" >
						<option value=""></option>	
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>
				<div class="col-lg-3">
					<input type="text" name="buccholz_relay" id="txtOther9" value="<?php echo $data_detail['buccholz_relay'] ?>" autofocus required class="form-control" readonly />
					<select name = "buccholz_relay_u" id="txtOther6"  disabled="disabled"  class="form-control" >
						<option value=""></option>	
						<option value="C/W Contact">With C/W Contact</option>								
						<option value="NO Contact">NO Contact</option>
					</select>								
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" id="vacuum_label" >Pressure Vacuum Gauge</label>
				<div class="col-lg-1">														
					<select name="vacuum_gauges" id="ddlModels8"  class="form-control" >
						<option value=""></option>	
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>
				<div class="col-lg-3">
					<input type="text" name="vacuum_gauge" id="txtOther10" value="<?php echo $data_detail['vacuum_gauge'] ?>" autofocus required class="form-control" readonly />
					<select name = "vacuum_gauge_u" id="txtOther8"  disabled="disabled"  class="form-control" >
						<option value=""></option>	
						<option value="C/W Contact">With C/W Contact</option>								
						<option value="NO Contact">NO Contact</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">HV/LV Cable Box</label>
				<div class="col-lg-1">														
					<select name="enclosures" id="ddlModels7" class="form-control" >
						<option value=""></option>									
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>
				<div class="col-lg-3">
					<input type="text" name="enclosure" value="<?php echo $data_detail['enclosure'] ?>" autofocus required class="form-control" readonly />
					<select name = "enclosure_u" id="txtOther7"  disabled="disabled"  class="form-control" >
						<option value=""></option>	
						<option value="HV+LV CB">HV+LV CB</option>
						<option value="HV CB">HV CB</option>								
						<option value="LV CB">LV CB</option>
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
					<input type="text" name="sp_dga" value="<?php echo $data_detail['sp_dga'] ?>" autofocus required class="form-control" readonly />
					<select name="sp_dga_u" class="form-control"  >	
						<option value=""></option>		
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	
			<div class="form-group">
				<label class="control-label col-lg-3">SWEEP FREQUENCY RESPONSE (SFRA) </label>
				<div class="col-lg-1">
					<input type="text" name="sp_sfra" value="<?php echo $data_detail['sp_sfra'] ?>" autofocus required class="form-control" readonly />
					<select name="sp_sfra_u" class="form-control" >		
						<option value=""></option>		
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	
			<div class="form-group">
				<label class="control-label col-lg-3">DISSIPATION FACTOR (TAN DELTA) </label>
				<div class="col-lg-1">
					<input type="text" name="sp_delta" value="<?php echo $data_detail['sp_delta'] ?>" autofocus required class="form-control" readonly />
					<select name="sp_delta_u" class="form-control" >									
						 <option value=""></option>		
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	
			<div class="form-group">
				<label class="control-label col-lg-3">PARTIAL DISCHARGER </label>
				<div class="col-lg-1">
					<input type="text" name="sp_pd" value="<?php echo $data_detail['sp_pd'] ?>" autofocus required class="form-control" readonly />
					<select name="sp_pd_u" class="form-control" >									
						 <option value=""></option>		
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	
			<div class="form-group">
				<label class="control-label col-lg-3">ZERO SEQUENCE IMPEDANCE</label>
					<div class="col-lg-1">
						<input type="text" name="sp_zero" value="<?php echo $data_detail['sp_zero'] ?>" autofocus required class="form-control" readonly />
						<select name="sp_zero_u" class="form-control" >									
							<option value=""></option>	
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
					<input type="text" name="test_temp_rise" value="<?php echo $data_detail['test_temp_rise'] ?>" autofocus required class="form-control" readonly />
					<select name="test_temp_rise_u" class="form-control" >	
				     	<option value=""></option>									
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	
			<div class="form-group">
				<label class="control-label col-lg-3">LIGHTNING IMPULSE</label>
				<div class="col-lg-1">
					<input type="text" name="test_impulse" value="<?php echo $data_detail['test_impulse'] ?>" autofocus required class="form-control" readonly />
					<select name="test_impulse_u" class="form-control" >
					    <option value=""></option>																
				 		<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	
			<div class="form-group">
				<label class="control-label col-lg-3">SOUND LEVEL(NOISE) </label>
				<div class="col-lg-1">
					<input type="text" name="test_noise" value="<?php echo $data_detail['test_noise'] ?>" autofocus required class="form-control" readonly />
					<select name="test_noise_u" class="form-control" >	
				        <option value=""></option>	
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
					<input type="text" name="notes1" value="<?php echo $data_detail['notes1'] ?>" autofocus required class="form-control" readonly />
					<textarea  id ="notes1" name="notes1_u"  class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
				</div>	
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Catatan 2</label>
				<div class="col-lg-4">
					<input type="text" name="notes2" value="<?php echo $data_detail['notes2'] ?>" autofocus required class="form-control" readonly />
					<textarea  id ="notes2" name="notes2_u" class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
				</div>	
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Catatan 3</label>
				<div class="col-lg-4">
					<input type="text" name="notes3" value="<?php echo $data_detail['notes3'] ?>" autofocus required class="form-control" readonly />
					<textarea  id ="notes3" name="notes3_u" class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
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


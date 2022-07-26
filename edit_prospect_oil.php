<?php
session_start();
include_once("library/koneksi.php");
include_once("library/koneksi2.php");
include ("theme/header.php");
$tgl = date("Y-m-d H:i:s");
$id=$_GET['id'];

$guk = mysqli_query($GLOBALS["___mysqli_ston"], "select * from oil_prospect where id ='$id' ");
$gukDb = mysqli_fetch_assoc($guk);

$no=$gukDb['noprospect'];

$meong = mysqli_query($GLOBALS["___mysqli_ston"], "select * from h_rpospect where noprospect='$no' ");
$meongDb = mysqli_fetch_assoc($meong);
$sales= $meongDb['sales'];



if (isset($_POST["pasien"]))
{
	if($_POST["pasien"]){

		if ($_POST['category_u']=="") {
			$category = $gukDb['category'];
		}else{
			$category = $_POST['category_u'];
		}

		if ($_POST['type_trafo_u']=="") {
			$type_trafo = $gukDb['type_trafo'];
		}else{
			$type_trafo = $_POST['type_trafo_u'];
		}	

		if ($_POST['service_condition_u']=="") {
			$service_condition = $gukDb['service_condition'];
		}else{
			$service_condition = $_POST['service_condition_u'];
		}

		if ($_POST['altitude_u']=="") {
			$altitude = $gukDb['altitude'];
		}else{
			$altitude = $_POST['altitude_u'];
		}

		if ($_POST['ambient_temp_u']=="") {
			$ambient_temp = $gukDb['ambient_temp'];
		}else if ($_POST['ambient_temp_u']=="other") {
			$ambient_temp = $_POST['ambient_temp_o'];
		}else{
			$ambient_temp = $_POST['ambient_temp_u'];
		}

		if ($_POST['standarisasi_u']=="") {
			$standarisasi = $gukDb['standarisasi'];
		}else if ($_POST['standarisasi_u']=="other") {
			$standarisasi = $_POST['standarisasi_o'];
		}else{
			$standarisasi = $_POST['standarisasi_u'];
		}

		if ($_POST['winding_temp1']=="") {
			$winding_temp = $gukDb['winding_temp'];
		}else if ($_POST['winding_temp1']=="Other") {
			$winding_temp = $_POST['winding_temp2'];
		}else{
			$winding_temp = $_POST['winding_temp1'];
		}

		if ($_POST['oil_temp1']=="") {
			$oil_temp = $gukDb['oil_temp'];
		}else if ($_POST['oil_temp1']=="Other") {
			$oil_temp = $_POST['oil_temp2'];
		}else{
			$oil_temp = $_POST['oil_temp1'];
		}

		if ($_POST['rate_capacity_u']=="") {
			$rate_capacity = $gukDb['rate_capacity'];
		}else{
			$rate_capacity = $_POST['rate_capacity_u'];
		}

		if ($_POST['no_phase_u']=="") {
			$no_phase = $gukDb['no_phase'];
		}else{
			$no_phase = $_POST['no_phase_u'];
		}

		if ($_POST['selectBoxon_u']=="") {
			$frequency = $gukDb['frequency'];
		}else if ($_POST['selectBoxon_u']=="Other") {
			$frequency = $_POST['frequency_o'];
		}else{
			$frequency = $_POST['selectBoxon_u'];
		}

		if ($_POST['primary_voltage_u']=="") {
			$primary_voltage = $gukDb['primary_voltage'];
		}else{
			$primary_voltage = $_POST['primary_voltage_u'];
		}

		if ($_POST['secondary_voltage_u']=="") {
			$secondary_voltage = $gukDb['secondary_voltage'];
		}else{
			$secondary_voltage = $_POST['secondary_voltage_u'];
		}


		if ($_POST['vektor_group_u']=="") {
			$vektor_group = $gukDb['vektor_group'];
		}else{
			$vektor_group = $_POST['vektor_group_u'];
		}


		if ($_POST['type_winding_u']=="") {
			$type_winding = $gukDb['type_winding'];
		}else{
			$type_winding = $_POST['type_winding_u'];
		}


		if ($_POST['type_cooling_u']=="") {
			$type_cooling = $gukDb['type_cooling'];
		}else{
			$type_cooling = $_POST['type_cooling_u'];
		}


		if ($_POST['tap_changer_u']=="") {
			$tap_changer = $gukDb['tap_changer'];
		}else{
			$tap_changer = $_POST['tap_changer_u'];
		}


		if ($_POST['no_tap_u']=="") {
			$no_tap = $gukDb['no_tap'];
		}else{
			$no_tap = $_POST['no_tap_u'];
		}


		if ($_POST['type_oil_u']=="") {
			$type_oil = $gukDb['type_oil'];
		}else{
			$type_oil = $_POST['type_oil_u'];
		}

		if ($_POST["device"]=="YES") {							
			$safety_device = $_POST["safety_device_u"];								
		}else if($_POST["device"]==""){
			$safety_device = $gukDb["safety_device"];
		}
		else
		{
			$safety_device="N/A";									
		}
		
		if ($_POST["temp_indicators"]=="YES") {							
			$temp_indicator = $_POST["temp_indicator_u"];								
		}else if($_POST["temp_indicators"]==""){
			$temp_indicator = $gukDb["temp_indicator"];
		}
		else
		{
			$temp_indicator="N/A";									
		}
		if ($_POST["oil_indicators"]=="YES") {							
			$oil_indicator = $_POST["oil_indicator_u"];								
		}else if($_POST["oil_indicators"]==""){
			$oil_indicator = $gukDb["oil_indicator"];
		}
		else
		{
			$oil_indicator="N/A";									
		}
		if ($_POST["presure_devices"]=="YES") {							
			$presure_device = $_POST["presure_device_u"];								
		}else if($_POST["presure_devices"]==""){
			$presure_device = $gukDb["presure_device"];
		}
		else
		{
			$presure_device="N/A";									
		}
		if ($_POST["winding_indicators"]=="YES") {							
			$winding_indicator = $_POST["winding_indicator_u"];								
		}else if($_POST["winding_indicators"]==""){
			$winding_indicator = $gukDb["winding_indicator"];
		}
		else
		{
			$winding_indicator="N/A";									
		}
		if ($_POST["presure_relays"]=="YES") {							
			$presure_relay = $_POST["presure_relay_u"];								
		}else if($_POST["presure_relays"]==""){
			$presure_relay = $gukDb["presure_relay"];
		}
		else
		{
			$presure_relay="N/A";									
		}
		if ($_POST["enclosures"]=="YES") {							
			$enclosure = $_POST["enclosure_u"];								
		}else if($_POST["enclosures"]==""){
			$enclosure = $gukDb["enclosure"];
		}
		else
		{
			$enclosure="N/A";									
		}
		if ($_POST["vacuum_gauges"]=="YES") {							
			$vacuum_gauge = $_POST["vacuum_gauge_u"];								
		}else if($_POST["vacuum_gauges"]==""){
			$vacuum_gauge = $gukDb["vacuum_gauge"];
		}
		else
		{
			$vacuum_gauge="N/A";									
		}
		if ($_POST["buccholz_relays"]=="YES") {							
			$buccholz_relay = $_POST["buccholz_relay_u"];								
		}else if($_POST["buccholz_relays"]==""){
			$buccholz_relay = $gukDb["buccholz_relay"];
		}
		else
		{
			$buccholz_relay="N/A";									
		}


		if ($_POST['notes1_u']=="") {
			$notes1 = $gukDb['notes1'];
		}else{
			$notes1 = $_POST['notes1_u'];
		}


		if ($_POST['notes2_u']=="") {
			$notes2 = $gukDb['notes2'];
		}else{
			$notes2 = $_POST['notes2_u'];
		}


		if ($_POST['notes3_u']=="") {
			$notes3 = $gukDb['notes3'];
		}else{
			$notes3 = $_POST['notes3_u'];
		}


		mysqli_query($GLOBALS["___mysqli_ston"], "update oil_prospect set category='$category', type_trafo='$type_trafo', service_condition='$service_condition', altitude='$altitude', ambient_temp='$ambient_temp', standarisasi='$standarisasi', winding_temp='$winding_temp', oil_temp='$oil_temp', rate_capacity='$rate_capacity', no_phase='$no_phase', frequency='$frequency', primary_voltage='$primary_voltage', secondary_voltage='$secondary_voltage', vektor_group='$vektor_group', type_winding='$type_winding', type_cooling='$type_cooling', tap_changer='$tap_changer', no_tap='$no_tap', type_oil='$type_oil', safety_device='$safety_device', temp_indicator='$temp_indicator', oil_indicator='$oil_indicator', presure_device='$presure_device', winding_indicator='$winding_indicator', presure_relay='$presure_relay', buccholz_relay='$buccholz_relay', vacuum_gauge='$vacuum_gauge', enclosure='$enclosure', notes1='$notes1', notes2='$notes2', notes3='$notes3' where id='$id'" );   
			
			echo"<script>alert('Data Berhasil di Edit');window.location.href='menu_prospect.php?noprospect=$no '</script>";?>

			
			<div class="alert alert-success" role="alert">
				<b>Berhasil Edit Data Prospect </b>
				</div>
			<?php
	}else if(isset($_POST["pasien"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal Edit Data Prospect!!</b>
			</div><center>";
}}
?>

<!DOCTYPE html>
<head>

<title>Trafoindo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	
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
	<li class="active">Edit Prospect</li>  
</ol>


	<div class="box">

		<div class="container">
			<header>
				<h2><strong> <font color="red">PROSPECT TRAFO OIL</font></strong></h2>	
			</header>
		</div>
				
		<form action="" method="post" class="form-horizontal" name='orangtua'>
			<div class="container"> <!-- BAGIAN HEADER -->
				<div class="form-group">
					<label class="control-label col-lg-3">No Prospect </label>
					<div class="col-lg-4">
						<strong><input type="text" Readonly name="noprospect" autofocus required class="form-control" value="<?php echo $no; ?> "/></strong>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3">No Sub Prospect </label>
					<div class="col-lg-4">
						<strong><input type="text" Readonly name="nopracost" autofocus required class="form-control" value="<?php echo $gukDb['nopracost'];?> "/></strong>
					</div>
				</div>

				<div class="form-group">								
					<label  class="control-label col-lg-3">Tahun Prospect</label> 
					<div class="col-lg-4">								
					<strong><input type="text" readonly name="Tahun" autofocus required class="form-control" value="<?php echo $meongDb['tahun'];  ?>"/></strong>								  
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
						<strong><input type="text" Readonly name="segment" autofocus required class="form-control" value=<?php echo $meongDb['segment']; ?>> </strong>
					</div>	
				</div>

				<div class="form-group">	
					<label class="control-label col-lg-3">Sub Segmen Penjualan </label>
					<div class="col-lg-4">															
						<strong><input type="text" Readonly name="sub_segment" autofocus required class="form-control" value="<?php echo $meongDb['sub_segment']; ?> ">	</strong>
					</div>	
				</div>
				
				<div class="form-group">
					<label class="control-label col-lg-3">Customer </label>
					<div class="col-lg-4">
						<strong><input type="text" name="customer" readonly required class="form-control" value="<?php echo $meongDb['customer']; ?> "> </strong>
					</div>	
				</div>
				
				<div class="form-group">								
					<label class="control-label col-lg-3">Project</label>
					<div class="col-lg-8">
						<strong><input type="text" name="project" readonly class="form-control" value="<?php echo $meongDb['project']; ?> "></strong>
					</div>								
				</div>
				
				<div class="form-group">						
					<label class="control-label col-lg-3">Status Stage</label>
					<div class="col-lg-4">															
						<strong><input type="text" name="priority" readonly class="form-control" value="<?php echo $meongDb['priority']; ?> "></strong>	
					</div>							
				</div>

				<h3><strong> <font color="blue">GENERAL CONDITION</font></strong></h3><!-- BAGIAN GENERAL CONDITION -->
				<div class="form-group">
					<label class="control-label col-lg-3">Catagory</label>
					<div class="col-lg-4">	
						<strong><input type="text" name="category" readonly class="form-control" value="<?php echo $gukDb['category']; ?> " /></strong>												
						<select name='category_u' id = "category" autofocus class="form-control">
							<option value='Non Standard'>Non Standard</option>		
							<option value='Standard'>Standard</option>														
						</select>	
					</div>	
				</div>

				<div class="form-group">				
					<label class="control-label col-lg-3">Type of Transformer</label>
					<div class="col-lg-4">
					<strong><input type="text" name="type_trafo" readonly class="form-control" value="<?php echo $gukDb['type_trafo']; ?> " /></strong>									
						<select name='type_trafo_u' id = "type_trafo" autofocus class="form-control">
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
					<strong><input type="text" name="service_condition" readonly class="form-control" value="<?php echo $gukDb['service_condition']; ?> " /></strong>															
						<select name='service_condition_u' id = "service_condition" autofocus class="form-control">
							<option value=''></option>
							<option value='Outdoor'>Outdoor</option>		
							<option value='Indoor'>Indoor</option>								
						</select>	
					</div>	
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3">Altitude</label>
					<div class="col-lg-3">
						<strong><input type="text" name="altitude" readonly class="form-control" value="<?php echo $gukDb['altitude']; ?> " /></strong>	
						<select name="altitude" id="selectBox" onchange="changeFunc();"class="form-control" >
							<option value=''></option>
							<option value="Standard">Standard</option>								
							<option value="other">Other</option>
						</select>
					</div> 

					<div class="col-lg-1">
						<input name="altitude_u"  placeholder="Mdpl" class="form-control" type="text" style="display: none" id="textboxes">
					</div>								
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3">Ambient Temp</label>	
					<div class="col-lg-3">
						<strong><input type="text" name="ambient_temp" readonly class="form-control" value="<?php echo $gukDb['ambient_temp']; ?> " /></strong>	
						<select name="ambient_temp_u" id="selectBoxes" onchange="changeFunction();"class="form-control" >
							<option value=''></option>
							<option value="Standard&nbsp;&lt&nbsp;40&deg &nbsp;C">Standard&nbsp;&lt&nbsp;40&deg;&nbsp;C</option>	
							<option value="other">Other</option>
						</select>
					</div> 

					<div class="col-lg-1">
						<input name="ambient_temp_o"  placeholder="Celcius" class="form-control" type="text" style="display: none" id="textboxess">
					</div>	
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3">International Standard</label>	
					<div class="col-lg-3">
						<strong><input type="text" name="standarisasi" readonly class="form-control" value="<?php echo $gukDb['standarisasi']; ?> " /></strong>
						<select name="standarisasi_u" id="selectBoxal" name="selectBoxal" onchange="changeFunctional();"class="form-control" >
							<option value=''></option>
							<option value='IEC 60076'>IEC 60076</option>		
							<option value='SPLN D3'>SPLN D3</option>	
							<option value='ANSI / IEEE C57'>ANSI / IEEE C57</option>								
							<option value="other">Other</option>
						</select>
					</div>
						
					<div class="col-lg-3">
					<input name="standarisasi_o"  placeholder="Please Write" class="form-control" type="text" style="display: none" id="textboxal">
					</div>				
				</div> <!-- BAGIAN AKHIR GENERAL CONDITION -->

			
				<h3><font color="brown">ELECTRICAL CHARATERISTIC</font></h3>
				<div class="form-group">
					<label class="control-label col-lg-3">Winding Temperature</label>
					<div class="col-lg-1">	
						<strong><input type="text" name="winding_temp" readonly class="form-control" value="<?php echo $gukDb['winding_temp']; ?> " /></strong>
					</div>

					<div class="col-lg-1">													
						<input type="text"  name="winding_temp1" id="winding_temp"  autofocus class="form-control" readonly>
					</div>

					
					<div class="col-lg-2">
						<input name="winding_temp2"  placeholder="Please Write" class="form-control" type="text" style="display: none" id="textboxal1">
					</div>				
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3">Oil Temperature</label>
					<div class="col-lg-1">													
						<strong><input type="text" name="oil_temp" readonly class="form-control" value="<?php echo $gukDb['oil_temp']; ?> " /></strong>	
					</div>
					<div class="col-lg-1">													
						<input type="text"  id="oil_temp"  name="oil_temp1" autofocus class="form-control" readonly>
					</div>
					<div class="col-lg-2">
						<input name="oil_temp2" placeholder="Please Write" class="form-control" type="text" style="display: none" id="textboxal2">
					</div>			
				</div>	
		
				<div class="form-group">
					<label class="control-label col-lg-3">Rate Capacity</label>
					<div class="col-lg-4">
						<strong><input type="text" name="rate_capacity" readonly class="form-control" value="<?php echo $gukDb['rate_capacity']; ?> " /></strong>
						<input type="number"  name="rate_capacity_u" autofocus class="form-control" placeholder="KVA">
					</div>	
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3">No Of Phase</label>
					<div class="col-lg-4">
						<strong><input type="text" name="no_phase" readonly class="form-control" value="<?php echo $gukDb['no_phase']; ?> " /></strong>														
						<select name='no_phase_u' id = "no_phase" autofocus class="form-control">
							<option value=''></option>
							<option value='Single Phase'>Single Phase</option>		
							<option value='Three Phase'>Three Phase</option>														
						</select>	
					</div>	
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3">Frequency</label>
					<div class="col-lg-3">
						<strong><input type="text" name="frequency" readonly class="form-control" value="<?php echo $gukDb['frequency']; ?> " /></strong>						
						<select id="selectBoxon" name="selectBoxon_u" onchange="Fuckpop();"class="form-control" >
							<option value=''></option>
							<option value="50">50 Hz</option>	
							<option value="60">60 Hz</option>									
							<option value="Other">Other</option>
						</select>
					</div> 

					<div class="col-lg-1">
						<input name="frequency_o"   class="form-control" type="text" style="display: none" id="textboxon" placeholder="Hz" >
					</div>	
				</div>
				
				<div class="form-group">
					<label class="control-label col-lg-3">Primary Voltage</label>
					<div class="col-lg-4">
						<strong><input type="text" name="primary_voltage" readonly class="form-control" value="<?php echo $gukDb['primary_voltage']; ?> " /></strong>
						<input type="number"  name="primary_voltage_u" autofocus class="form-control" placeholder="Volt">
					</div>	
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3">Secondary Voltage&nbsp</label>
					<div class="col-lg-4">
						<strong><input type="text" name="secondary_voltage" readonly class="form-control" value="<?php echo $gukDb['secondary_voltage']; ?> " /></strong>
						<input type="number"  name="secondary_voltage_u" autofocus class="form-control" placeholder="Volt">
					</div>	
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3">Vektor Group</label>								
					<div class="col-lg-4">
						<strong><input type="text" name="vektor_group" readonly class="form-control" value="<?php echo $gukDb['vektor_group']; ?> " /></strong>														
						<select name='vektor_group_u' id = "vektor_group" autofocus class="form-control">
							<option value=''></option>	
						</select>									
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3">Type of Winding</label>
					<div class="col-lg-4">	
						<strong><input type="text" name="type_winding" readonly class="form-control" value="<?php echo $gukDb['type_winding']; ?> " /></strong>																
						<select name='type_winding_u' id = "type_winding" autofocus class="form-control">
							<option value=''></option>
							<option value='Cu-Cu'>Cu-Cu</option>	
							<option value='Cu-Al'>Cu-Al</option>
							<option value='Al-Al'>Al-Al</option>	
							<option value='Al-Cu'>Al-Cu</option>
						</select>
					</div>
				</div>
			
		
			
				<div class="form-group">
					<label class="control-label col-lg-3">Type of Cooling</label>
					<div class="col-lg-4">
						<strong><input type="text" name="type_cooling" readonly class="form-control" value="<?php echo $gukDb['type_cooling']; ?> " /></strong>															
						<select name='type_cooling_u' id = "type_cooling" autofocus class="form-control">
							<option value=''></option>
							<option value='ONAN'>ONAN</option>	
							<option value='ONAN/ONAF'>ONAN/ONAF</option>
							<option value='KHAN'>KNAN</option>	
							<option value='KHAN/KNAF'>KNAN/KNAF</option>
							<option value='OFAF'>OFAF</option>
							<option value='KFAF'>KFAF</option>	
							<option value='AN'>AN</option>
							<option value='ANAF'>ANAF</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3">Tap Changer</label>
					<div class="col-lg-4">
						<strong><input type="text" name="tap_changer" readonly class="form-control" value="<?php echo $gukDb['tap_changer']; ?> " /></strong>															
						<select name='tap_changer_u' id = "tap_changer" autofocus class="form-control">
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
						<strong><input type="text" name="no_tap" readonly class="form-control" value="<?php echo $gukDb['no_tap']; ?> " /></strong>													
						<input type="number"  name="no_tap_u" id="txt_no_tap" autofocus class="form-control" placeholder="No Of Tap">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3">Type Of Oil</label>
					<div class="col-lg-4">
						<strong><input type="text" name="type_oil" readonly class="form-control" value="<?php echo $gukDb['type_oil']; ?> " /></strong>														
						<select name='type_oil_u' id = "type_oil" autofocus class="form-control">
							<option value=''></option>
							<option value='Mineral Oil'>Mineral Oil</option>	
							<option value='Silicone Oil'>Silicone Oil</option>	
							<option value='Synthetic Ester'>Synthetic Ester</option>	
							<option value='Natural Ester'>Natural Ester</option>									
						</select>
					</div>
				</div>


				<h3><font color="blue">PROTECTION & ACCESORIES</font></h3>
				<div class="form-group">
					<label class="control-label col-lg-3" id="label0">Integrated Safety Device</label>							
								<div class="col-lg-1">								
								<select name="device" id="ddlModels0"  class="form-control" >
							<option value=''></option>
							<option value="NO">NO</option>								
							<option value="YES">YES</option>
						</select>
					</div> 

					<div class="col-lg-3">
						<strong><input type="text" name="safety_device" id="hasil0" readonly class="form-control" value="<?php echo $gukDb['safety_device']; ?> " /></strong>
						<select name = "safety_device_u" id="txtOther0"  disabled="disabled"  class="form-control" >
							<option value="DMCR">DMCR</option>	
							<option value="DGPT-2">DGPT-2</option>	
							<option value="RIS">RIS</option>
						</select>								
					</div>							
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3" id="label1">Temperature Indicator</label>
						<div class="col-lg-1">															
						<select name="temp_indicators" id="ddlModels1"  class="form-control" >
							<option value=''></option>
							<option value="NO">NO</option>								
							<option value="YES">YES</option>
						</select>
					</div>

					<div class="col-lg-3">
						<strong><input type="text" name="temp_indicator" id="hasil1" readonly class="form-control" value="<?php echo $gukDb['temp_indicator']; ?> " /></strong>	
						<select name = "temp_indicator_u" id="txtOther1"  disabled="disabled"  class="form-control" >
							<option value="C/W Contact">With C/W Contact</option>								
							<option value="No C/W Contact">NO Contact</option>
						</select>								
					</div>						
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3" id="label2">Oil Level Indicator</label>
						<div class="col-lg-1">													
						 	<select name="oil_indicators" id="ddlModels2" class="form-control" >
							<option value=''></option>
							<option value="NO">NO</option>								
							<option value="YES">YES</option>
						</select>
					</div>

					<div class="col-lg-3">
						<strong><input type="text" name="oil_indicator" id="hasil2" readonly class="form-control" value="<?php echo $gukDb['oil_indicator']; ?> " /></strong>	
						<select name = "oil_indicator_u" id="txtOther2"  disabled="disabled"  class="form-control" >
							<option value="C/W Contact">With C/W Contact</option>								
							<option value="No C/W Contact">NO Contact</option>
						</select>								
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3" id="label3">Presure Device</label>
					<div class="col-lg-1">													
						<select name="presure_devices" id="ddlModels3"  class="form-control" >
							<option value=''></option>
							<option value="NO">NO</option>								
							<option value="YES">YES</option>
						</select>
					</div>

					<div class="col-lg-3">
						<strong><input type="text" name="presure_device" id="hasil3" readonly class="form-control" value="<?php echo $gukDb['presure_device']; ?> " /></strong>	
						<select name = "presure_device_u" id="txtOther3"  disabled="disabled"  class="form-control" >
							<option value="C/W Contact">With C/W Contact</option>								
							<option value="No C/W Contact">NO Contact</option>
						</select>								
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3" id="label4">Winding Temperature Indicator</label>
					<div class="col-lg-1">														
				 	    <select name="winding_indicators" id="ddlModels4"  class="form-control" >
							<option value=''></option>
							<option value="NO">NO</option>								
							<option value="YES">YES</option>
						</select>
					</div>

					<div class="col-lg-3">
						<strong><input type="text" name="winding_indicator" id="hasil4" readonly class="form-control" value="<?php echo $gukDb['winding_indicator']; ?> " /></strong>
						<select name = "winding_indicator_u" id="txtOther4"  disabled="disabled"  class="form-control" >
							<option value="C/W Contact">With C/W Contact</option>								
							<option value="No C/W Contact">NO Contact</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3" id="label5">Sudden Presure Relay</label>
					<div class="col-lg-1">
						<select name="presure_relays" id="ddlModels5"  class="form-control" >
							<option value=''></option>
							<option value="NO">NO</option>								
							<option value="YES">YES</option>
						</select>
					</div>

					<div class="col-lg-3">
						<strong><input type="text" name="presure_relay" id="hasil5" readonly class="form-control" value="<?php echo $gukDb['presure_relay']; ?> " /></strong>
						<select name = "presure_relay_u" id="txtOther5"  disabled="disabled"  class="form-control" >
							<option value="C/W Contact">With C/W Contact</option>								
							<option value="No C/W Contact">NO Contact</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3" id="label6">Buccholz Relay</label>
					<div class="col-lg-1">
						<select name="buccholz_relays" id="ddlModels6"  class="form-control" >
							<option value=''></option>
							<option value="NO">NO</option>								
							<option value="YES">YES</option>
						</select>
					</div>

					<div class="col-lg-3">
						<strong><input type="text" name="buccholz_relay" id="hasil6" readonly class="form-control" value="<?php echo $gukDb['buccholz_relay']; ?> " /></strong>	
						<select name = "buccholz_relay_u" id="txtOther6"  disabled="disabled"  class="form-control" >
							<option value="C/W Contact">With C/W Contact</option>								
							<option value="No C/W Contact">NO Contact</option>
						</select>								
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3" id="label7">Pressure Vacuum Gauge</label>
					<div class="col-lg-1">														
						<select name="vacuum_gauges" id="ddlModels7"  class="form-control" >
							<option value=''></option>
							<option value="NO">NO</option>								
							<option value="YES">YES</option>
						</select>
					</div>

					<div class="col-lg-3">
						<strong><input type="text" name="vacuum_gauge" id="hasil7"  readonly class="form-control" value="<?php echo $gukDb['vacuum_gauge']; ?> " /></strong>
						<select name = "vacuum_gauge_u" id="txtOther7"  disabled="disabled"  class="form-control" >
							<option value="C/W Contact">With C/W Contact</option>								
							<option value="No C/W Contact">NO Contact</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3" id="label8">HV/LV Cable Box</label>
					<div class="col-lg-1">														
						<select name="enclosures" id="ddlModels8" class="form-control" >
							<option value=''></option>
							<option value="NO">NO</option>								
							<option value="YES">YES</option>
						</select>
					</div>

					<div class="col-lg-3">
						<strong><input type="text" name="enclosure" id="hasil8" readonly class="form-control" value="<?php echo $gukDb['enclosure']; ?> " /></strong>
						<select name = "enclosure_u" id="txtOther8"  disabled="disabled"  class="form-control" >
							<option value="HV+LV CB">HV+LV CB</option>
							<option value="HV CB">HV CB</option>								
							<option value="LV CB">LV CB</option>
						</select>								
					</div>	
				</div>

				

				<h3> <font color="blue">NOTES </font></h3>
				<div class="form-group">
					<label class="control-label col-lg-3">Catatan 1</label>
					<div class="col-lg-4">
						<strong><input type="text" name="notes1" readonly class="form-control" value="<?php echo $gukDb['notes1']; ?> " /></strong>
						<textarea  id ="notes1" name="notes1_u"  class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
					</div>	
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3">Catatan 2</label>
					<div class="col-lg-4">
						<strong><input type="text" name="notes2" readonly class="form-control" value="<?php echo $gukDb['notes2']; ?> " /></strong>
						<textarea  id ="notes2" name="notes2_u" class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
					</div>	
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3">Catatan 3</label>
					<div class="col-lg-4">
						<strong><input type="text" name="notes3" readonly class="form-control" value="<?php echo $gukDb['notes3']; ?> " /></strong>
						<textarea  id ="notes3" name="notes3_u" class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
					</div>	
				</div>
			
				<div class="form-actions no-margin-bottom"  style="text-align:left;">
					<input type="submit" name="pasien" value="SELESAI" class="btn btn-primary"><!-- <a href="?menu=data_memo" class="btn btn-primary" >Selesai</a>		-->							
				</div>
			</div>
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
}
else {
<!--alert("Error"); -->
$('#textboxes').hide();
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
}
else {
<!--alert("Error"); -->
$('#textboxess').hide();
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
		}
		else if (tes=="ANSI / IEEE C57")
		{ var tos = "50/55";
		  var win ="55";
		  var oil ="50";
		}
		else if (tes=="IEC 60076")
		{ var tos = "60/65";
		  var win ="65";
		  var oil ="60";
		}
		else if (tes=="other")
		{ var tos = "Other";
		  var win ="Other";
		  var oil ="Other";
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
        $("#ddlModels0").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther0").removeAttr("disabled");
                $("#hasil0").show();
				$("#txtOther0").show();
                $("#txtOther0").focus();
                $('#label6').hide(); 
				$('#ddlModels6').hide();
				$('#hasil6').hide();
				$('#txtOther6').hide();
				$('#label7').hide();
				$('#ddlModels7').hide();
				$('#hasil7').hide();
				$('#txtOther7').hide();
				
            }else if ($(this).val() == "") {
                $("#txtOther0").removeAttr("disabled");
                $("#hasil0").show();
                $("#hasil0").focus();
                $("#txtOther0").hide();
                $('#label6').show(); 
				$('#ddlModels6').show();
				$('#hasil6').show();
				$('#txtOther6').show();
				$('#label7').show();
				$('#ddlModels7').show();
				$('#hasil7').show();
				$('#txtOther7').show();

            } else {
                $("#txtOther0").attr("disabled", "disabled");
                $("#hasil0").hide();
				$("#txtOther0").hide();
				$('#label6').show(); 
				$('#ddlModels6').show();
				$('#hasil6').show();
				$('#txtOther6').show();
				$('#label7').show();
				$('#ddlModels7').show();
				$('#hasil7').show();
				$('#txtOther7').show();
				
				
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $("#ddlModels1").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther1").removeAttr("disabled");
                $("#hasil1").show();
				$("#txtOther1").show();
                $("#txtOther1").focus();

            }else if ($(this).val() == "") {
                $("#txtOther1").attr("disabled", "disabled"); 
				$("#txtOther1").hide(); 
				$("#hasil1").show();
                $("#hasil1").focus();
				
            } else {
                $("#txtOther1").attr("disabled", "disabled");
                $("#hasil1").hide();
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
                $("#hasil2").show();
				$("#txtOther2").show();
                $("#txtOther2").focus();

            }else if ($(this).val() == "") {
                $("#txtOther2").attr("disabled", "disabled"); 
				$("#txtOther2").hide(); 
				$("#hasil2").show();
                $("#hasil2").focus();
				
            } else {
                $("#txtOther2").attr("disabled", "disabled");
                $("#hasil2").hide(); 
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
                $("#hasil3").show();
				$("#txtOther3").show();
                $("#txtOther3").focus();

            }else if ($(this).val() == "") {
                $("#txtOther3").attr("disabled", "disabled"); 
				$("#txtOther3").hide(); 
				$("#hasil3").show();
                $("#hasil3").focus();
				
            } else {
                $("#txtOther3").attr("disabled", "disabled");
                $("#hasil3").hide();
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
                $("#hasil4").show();
				$("#txtOther4").show();
                $("#txtOther4").focus();
            
            }else if ($(this).val() == "") {
                $("#txtOther4").attr("disabled", "disabled"); 
				$("#txtOther4").hide(); 
				$("#hasil4").show();
                $("#hasil4").focus();
				
            } else {
                $("#txtOther4").attr("disabled", "disabled");
                $("#hasil4").hide(); 
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
                $("#hasil5").show();
				$("#txtOther5").show();
                $("#txtOther5").focus();
            
            }else if ($(this).val() == "") {
                $("#txtOther5").attr("disabled", "disabled"); 
				$("#txtOther5").hide(); 
				$("#hasil5").show();
                $("#hasil5").focus();
				
            } else {
                $("#txtOther5").attr("disabled", "disabled");
                $("#hasil5").hide(); 
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
                $("#hasil6").show();
				$("#txtOther6").show();
                $("#txtOther6").focus();
				$("#label0").hide();
				$("#ddlModels0").hide();
				$("#hasil0").hide();
				$("#txtOther0").hide(); 
				$("#label7").hide(); 
				$("#ddlModels7").hide();
				$("#hasil7").hide(); 
				$("#txtOther7").hide(); 
				
            }else if ($(this).val() == "") {
                $("#txtOther6").attr("disabled", "disabled"); 
				$("#txtOther6").hide(); 
				$("#hasil6").show();
                $("#hasil6").focus();
				
            }else {
                $("#txtOther6").attr("disabled", "disabled"); 
                $("#hasil6").hide();
				$("#txtOther6").hide(); 	
				$("#label0").show();
				$("#ddlModels0").show();
				$("#hasil0").show();
				$("#txtOther0").show(); 
				$("#label7").show(); 
				$("#ddlModels7").show();
				$("#hasil7").show(); 
				$("#txtOther7").show();	
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $("#ddlModels7").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther7").removeAttr("disabled");
                $("#hasil7").show();
				$("#txtOther7").show();
                $("#txtOther7").focus();

            }else if ($(this).val() == "") {
                $("#txtOther7").attr("disabled", "disabled"); 
				$("#txtOther7").hide(); 
				$("#hasil7").show();
                $("#hasil7").focus();
				
            } else {
                $("#txtOther7").attr("disabled", "disabled"); 
                $("#hasil7").hide();
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
                $("#hasil8").show();
				$("#txtOther8").show();
                $("#txtOther8").focus();
				
            }else if ($(this).val() == "") {
                $("#txtOther8").attr("disabled", "disabled"); 
				$("#txtOther8").hide(); 
				$("#hasil8").show();
                $("#hasil8").focus();
				
            } else {
                $("#txtOther8").attr("disabled", "disabled");
                $("#hasil8").hide();
				$("#txtOther8").hide(); 
				$("#label").show(); 
				$("#txtOther").show(); 
				$("#ddlModels").show(); 

				
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
            	$("#txt_no_tap").attr("readonly", "readonly"); 
            	document.getElementById('txt_no_tap').value = 0;
            } else {
                $("#txt_no_tap").removeAttr("disabled");
                $("#txt_no_tap").focus();				
            }
        });
    });
</script>



	
	
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4"></script>
<script type="text/javascript" src="bootstrap/js/poper-min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap/js/slim-min.js"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>   
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/savy.min.js"></script>
</html>	


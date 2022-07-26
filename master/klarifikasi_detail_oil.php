<?php
if($_GET["nopracost"]){	
	session_start();
	include ("sambung.php");
	$oil = mysqli_query($GLOBALS["___mysqli_ston"], "select * from oil_prospect where nopracost='".$_GET["nopracost"]."'");
	$oilDb = mysqli_fetch_assoc($oil);
	$noprospect=$oilDb["noprospect"];
	$nopracost=$oilDb["nopracost"];
	

	$madu = mysqli_query($GLOBALS["___mysqli_ston"], "select * from h_rpospect where noprospect='$noprospect'");
	$maduDb = mysqli_fetch_assoc($madu);
	$tanggal=$maduDb['tgl_prospect'];
	$tglbaru = date('d-m-Y', strtotime($tanggal ));
	$tanggal_sekarang = date('Y-m-d');
	
	

	if(isset($_POST["pasien"])){		
		include_once("sambung.php");

		//GENERAL CONDITION

		//CATEGORY

		if ($oilDb['category_klari']==""){
			$category=$_POST["category"];
		}
		elseif ($oilDb['category_klari']!="" and $_POST["category1"]=="")
		{
			$category=$_POST["category"];
		}
		else
		{
			$category=$_POST["category1"];
		}

		//Type of Transformer

		if ($oilDb['type_trafo_klari']==""){
			$type_trafo=$_POST["type_trafo"];
		}
		elseif ($oilDb['type_trafo_klari']!="" and $_POST["type_trafo1"]=="")
		{
			$type_trafo=$_POST["type_trafo"];
		}
		else
		{
			$type_trafo=$_POST["type_trafo1"];
		}

		//Service Condition

		if ($oilDb['service_condition_klari']==""){
			$service_condition=$_POST["service_condition"];
		}
		elseif ($oilDb['service_condition_klari']!="" and $_POST["service_condition1"]=="")
		{
			$service_condition=$_POST["service_condition"];
		}
		else
		{
			$service_condition=$_POST["service_condition1"];
		}

		//Altitude

		if ($oilDb['altitude_klari']=="") {
			$altitude=$_POST["altitude"];
		}
		elseif ($oilDb['altitude_klari'] != "" and $_POST["tulip"]=="other")
		{
			$altitude=$_POST["altitude1"];

		}
		elseif ($oilDb['altitude_klari']!="" and $_POST["tulip"]=="")
		{
			$altitude=$_POST["altitude"];
		}
		else
		{
			$altitude=$_POST["tulip"];
		}

		//Ambient Temp

		if ($oilDb['ambient_temp_klari']=="") {
			$ambient_temp=$_POST["ambient_temp"];
		}
		elseif ($oilDb['ambient_temp_klari']!="" and $_POST["mawar"]=="other")
		{
			$ambient_temp=$_POST["ambient_temp1"];
		}
		elseif ($oilDb['ambient_temp_klari']!="" and $_POST["mawar"]=="")
		{
			$ambient_temp=$_POST["ambient_temp"];
		}
		else
		{
			$ambient_temp=$_POST["mawar"];
		}

		//ELECTRICAL CHARATERISTIC

		//International Standard - Winding Temperature - Oil Temperature - Temperature Rise

		if ($oilDb['standarisasi_klari']=="") {
			$standarisasi=$_POST["standarisasi"];
			$winding_temp=$_POST["winding_temp"];
			$oil_temp=$_POST["oil_temp"];
			$temp_rise=$_POST["temp_rise"];
		}
		elseif ($oilDb['standarisasi_klari']!="" and $_POST["selectBoxal"]=="other") {								
			$standarisasi=$_POST["standarisasi1"];
			$winding_temp=$_POST["winding_temp2"];
			$oil_temp=$_POST["oil_temp2"];
			$temp_rise=$_POST["temp_rise1"];
		}

		elseif ($oilDb['standarisasi_klari']!="" and $_POST["selectBoxal"]!="other") {								
			$standarisasi=$_POST["selectBoxal"];
			$winding_temp=$_POST["winding_temp1"];
			$oil_temp=$_POST["oil_temp1"];
			$temp_rise=$_POST["temp_rise1"];
		}

		//Type Cooling
		if ($oilDb['type_cooling_klari']==""){
			$type_coolingx=$_POST["type_cooling"]; //legacy
			$type_cooling1=$_POST["type_cooling11"]; //new
				if ($_POST["type_cooling21"]=="")      //jika type of cooling 2 kosong
				{
					$type_cooling2=$_POST["type_cooling21"]; 
				}
				else 
				{
				$type_cooling2=$_POST["type_cooling21"];
				}
							}
		else
			{
				$type_coolingx=$_POST["type_coolingx"];								
				$type_cooling1=$_POST["type_cooling11"];
				$type_cooling2=$_POST["type_cooling21"];								
			}
						
							
		if ( $_POST['rate_capacity1']=="")   //ok
			{ $rate_capacity1=$_POST['rate_capacity']; }
		else
			{$rate_capacity1=$_POST['rate_capacity1']; }

	
		if ($type_cooling2=="ONAF" or $type_cooling2=="KNAF" or $type_cooling2=="AF") {
			if ( $_POST['rate_capacity21']=="")
				{ $rate_capacity2=$_POST['rate_capacity2']; }
			else
				{$rate_capacity2=$_POST['rate_capacity21']; }}
		else
			{$rate_capacity2="";}


		// No of Phase
		
		if ($oilDb['no_phase_klari']=="") {
			$no_phase=$oilDb["no_phase"];
		}
		elseif ($oilDb['no_phase_klari']!="" and $_POST["no_phase1"]=="")
		{
			$no_phase=$oilDb["no_phase"];
		}
		else
		{
			$no_phase=$_POST["no_phase1"];
		}

		// Freqency

		if ($oilDb['frequency_klari']=="") {
			$frequency=$oilDb["frequency"];
		}
		elseif ($oilDb['frequency_klari']!="" and $_POST["selectBoxon"]=="Other")
		{
			$frequency=$_POST["frequency1"];									
		}
		else
		{
			$frequency=$_POST["selectBoxon"];
		}
					
		//Primary Voltage
						
		if ($oilDb['primary_voltage_klari']=="") {
			$primary_voltage=$oilDb["primary_voltage"];
		}
		elseif ($oilDb['primary_voltage_klari']!="" and $_POST["primary_voltage1"]=="")
		{
			$primary_voltage=$_POST["primary_voltage1"];									
		}
		else
		{
			$primary_voltage=$_POST["primary_voltage1"];
		}
		
		//Secondary Voltage
		
		if ($oilDb['secondary_voltage_klari']=="") {
			$secondary_voltage=$oilDb["secondary_voltage"];
		}
		elseif ($oilDb['secondary_voltage_klari']!="" and $_POST["secondary_voltage1"]=="")
		{
			$secondary_voltage=$_POST["secondary_voltage1"];									
		}
		else
		{
			$secondary_voltage=$_POST["secondary_voltage1"];
		}

		//Vektor Group
		
		if ($oilDb['vektor_group_klari']=="") {
			$vektor_group=$oilDb["vektor_group"];
		}
		elseif ($oilDb['vektor_group_klari']!="" and $_POST["vektor_group1"]=="")
		{
			$vektor_group=$_POST["vektor_group1"];									
		}
		else
		{
			$vektor_group=$_POST["vektor_group1"];
		}

		// Type of Winding
			
		if ($oilDb['type_winding_klari']==""){
			$type_winding=$oilDb["type_winding"];
		}
		elseif ($oilDb['type_winding_klari']!="" and $_POST["type_winding1"]=="")
		{
			$type_winding=$_POST["type_winding1"];									
		}
		else
		{
			$type_winding=$_POST["type_winding1"];
		}
		
		// Tap Changer
		
		if ($oilDb['tap_changer_klari']==""){
			$tap_changer=$oilDb["tap_changer"];
		}
		elseif ($oilDb['tap_changer_klari']!="" and $_POST["tap_changer1"]=="")
		{
			$tap_changer=$_POST["tap_changer1"];									
		}
		else
		{
			$tap_changer=$_POST["tap_changer1"];
		}

		// No of Tap
		
		if ($oilDb['no_tap_klari']==""){
			$no_tap=$oilDb["no_tap"];
		}
		elseif ($oilDb['no_tap_klari']!="" and $_POST["no_tap1"]=="")
		{
			$no_tap=$_POST["no_tap1"];									
		}
		else
		{
			$no_tap=$_POST["no_tap1"];
		}

		// Type of Oil

		if ($oilDb['type_oil_klari']==""){
			$type_oil=$oilDb["type_oil"];
		}
		elseif ($oilDb['type_oil_klari']!="" and $_POST["type_oil1"]=="")
		{
			$type_oil=$_POST["type_oil1"];									
		}
		else
		{
			$type_oil=$_POST["type_oil1"];
		}

		//PROTECTION & ACCESORIES

		//Integrated Safety Device

		if ($oilDb['safety_device_klari']==""){
			$safety_device=$oilDb["safety_device"];
		}
		elseif ($oilDb['safety_device_klari']!="" and $_POST["device"] == "YES")
		{
			$safety_device=$_POST["safety_device1"];
		}
		else
		{
			$safety_device="N/A";									
		}

		//Temperature Indicator
		
		if ($oilDb['temp_indicator_klari']==""){
			$temp_indicator=$oilDb["temp_indicator"];
		}
		elseif ($oilDb['temp_indicator_klari']!="" and $_POST["temp_indicators"]=="YES") {							
			$temp_indicator=$_POST["temp_indicator1"];								
		}
		else
		{
			$temp_indicator="N/A";									
		}

		//Oil Level Indicator

		if ($oilDb['oil_indicator_klari']==""){
			$oil_indicator=$oilDb["oil_indicator"];
		}
		elseif ($oilDb['oil_indicator_klari']!="" and $_POST["oil_indicators"]=="YES")
		{
			$oil_indicator=$_POST["oil_indicator1"];
		}
		else
		{
			$oil_indicator="N/A";									
		}
		
		// Presure Device

		if ($oilDb['presure_device_klari']==""){
			$presure_device=$oilDb["presure_device"];
		}
		elseif ($oilDb['presure_device_klari']!="" and $_POST["presure_devices"]=="YES")
		{
			$presure_device=$_POST["presure_device1"];
		}
		else
		{
			$presure_device="N/A";									
		}

		// Winding Temperature Indicator

		if ($oilDb['winding_indicator_klari']==""){
			$winding_indicator=$oilDb["winding_indicator"];
		}
		elseif ($oilDb['winding_indicator_klari']!="" and $_POST["winding_indicators"]=="YES")
		{
			$winding_indicator=$_POST["winding_indicator1"];
		}
		else
		{
			$winding_indicator="N/A";									
		}

		// Sudden Presure Relay

		if ($oilDb['presure_relay_klari']==""){
			$presure_relay=$oilDb["presure_relay"];
		}
		elseif ($oilDb['presure_relay_klari']!="" and $_POST["presure_relays"]=="YES")
		{
			$presure_relay=$_POST["presure_relay1"];	
		}
		else
		{
			$presure_relay="N/A";									
		}

		// Buccholz Relay

		if ($oilDb['buccholz_relay_klari']==""){
			$buccholz_relay=$oilDb["buccholz_relay"];
		}
		elseif ($oilDb['buccholz_relay_klari']!="" and $_POST["buccholz_relays"]=="YES")
		{
			$buccholz_relay=$_POST["buccholz_relay1"];
		}
		else
		{
			$buccholz_relay="N/A";									
		}

		// Pressure Vacuum Gauge

		if ($oilDb['vacuum_gauge_klari']==""){
			$vacuum_gauge=$oilDb["vacuum_gauge"];
		}
		elseif ($oilDb['vacuum_gauge_klari']!="" and $_POST["vacuum_gauges"]=="YES")
		{
			$vacuum_gauge=$_POST["vacuum_gauge1"];
		}
		else
		{
			$vacuum_gauge="N/A";									
		}

		// HV/LV Cable Box

		if ($oilDb['enclosure_klari']==""){
			$enclosure=$oilDb["enclosure"];
		}
		elseif ($oilDb['enclosure_klari']!="" and $_POST["enclosures"]=="YES")
		{
			$enclosure=$_POST["enclosure1"];
		}
		else
		{
			$enclosure="N/A";									
		}

		// TRANSFORMER TESTING (SPECIAL TEST)

		// DISSOLVE GASS ANALYSIS (DGA)

		if ($oilDb['sp_dga_klari']==""){
			$sp_dga=$oilDb["sp_dga"];
		}
		elseif ($oilDb['sp_dga_klari']!="" and $_POST["sp_dga1"]=="")
		{
			$sp_dga=$_POST["sp_dga"];
		}
		else
		{
			$sp_dga=$_POST["sp_dga1"];
		}

		// SWEEP FREQUENCY RESPONSE (SFRA)
		
		if ($oilDb['sp_sfra_klari']==""){
			$sp_sfra=$oilDb["sp_sfra"];
		}
		elseif ($oilDb['sp_sfra_klari']!="" and $_POST["sp_sfra1"]=="")
		{
			$sp_sfra=$_POST["sp_sfra"];
		}
		else
		{
			$sp_sfra=$_POST["sp_sfra1"];
		}

		// DISSIPATION FACTOR (TAN DELTA)
		
		if ($oilDb['sp_delta_klari']==""){
			$sp_delta=$oilDb["sp_delta"];
		}
		elseif ($oilDb['sp_delta_klari']!="" and $_POST["sp_delta1"]=="")
		{
			$sp_delta=$_POST["sp_delta"];
		}
		else
		{
			$sp_delta=$_POST["sp_delta1"];
		}

		// PARTIAL DISCHARGER
		
		if ($oilDb['sp_pd_klari']==""){
			$sp_pd=$oilDb["sp_pd"];
		}
		elseif ($oilDb['sp_pd_klari']!="" and $_POST["sp_pd1"]=="")
		{
			$sp_pd=$_POST["sp_pd"];
		}
		else
		{
			$sp_pd=$_POST["sp_pd1"];
		}

		// ZERO SEQUENCE IMPEDANCE
		
		if ($oilDb['sp_zero_klari']==""){
			$sp_zero=$oilDb["sp_zero"];
		}
		elseif ($oilDb['sp_zero_klari']!="" and $_POST["sp_zero1"]=="")
		{
			$sp_zero=$_POST["sp_zero"];
		}
		else
		{
			$sp_zero=$_POST["sp_zero1"];
		}

		// TRANSFORMER TESTING (TYPE TEST)

		// TEMPERATURE RISE
		
		if ($oilDb['test_temp_rise_klari']==""){
			$test_temp_rise=$oilDb["test_temp_rise"];
		}
		elseif ($oilDb['test_temp_rise_klari']!="" and $_POST["test_temp_rise1"]=="")
		{
			$test_temp_rise=$_POST["test_temp_rise"];
		}
		else
		{
			$test_temp_rise=$_POST["test_temp_rise1"];
		}
		
		// LIGHTNING IMPULSE

		if ($oilDb['test_impulse_klari']==""){
			$test_impulse=$oilDb["test_impulse"];
		}
		elseif ($oilDb['test_impulse_klari']!="" and $_POST["test_impulse1"]=="")
		{
			$test_impulse=$_POST["test_impulse"];
		}
		else
		{
			$test_impulse=$_POST["test_impulse1"];
		}

		// SOUND LEVEL(NOISE)

		if ($oilDb['test_noise_klari']==""){
			$test_noise=$oilDb["test_noise"];
		}
		elseif ($oilDb['test_noise_klari']!="" and $_POST["test_noise1"]=="")
		{
			$test_noise=$_POST["test_noise"];
		}
		else
		{
			$test_noise=$_POST["test_noise1"];
		}

		// NOTES

		// Catatan 1

		if ($oilDb['notes1_klari']==""){
			$notes1=$oilDb["notes1"];
		}
		else
		{
			$notes1=$_POST["notes1_1"];
		}

		// Catatan 2
		
		if ($oilDb['notes2_klari']==""){
			$notes2=$oilDb["notes2"];
		}
		else
		{
			$notes2=$_POST["notes2_1"];
		}

		// Catatan 2

		if ($oilDb['notes3_klari']==""){
			$notes3=$oilDb["notes3"];
		}
		else
		{
			$notes3=$_POST["notes3_1"];
		}


		mysqli_query($GLOBALS["___mysqli_ston"], "update oil_prospect set category='$category', type_trafo='$type_trafo', service_condition='$service_condition', altitude='$altitude', ambient_temp='$ambient_temp', standarisasi='$standarisasi', winding_temp='$winding_temp', oil_temp='$oil_temp', temp_rise='$temp_rise', type_cooling='$type_coolingx', type_cooling1='$type_cooling1', type_cooling2='$type_cooling2', rate_capacity='$rate_capacity1', rate_capacity2='$rate_capacity2', no_phase='$no_phase', frequency='$frequency', primary_voltage='$primary_voltage', secondary_voltage='$secondary_voltage', vektor_group='$vektor_group', type_winding='$type_winding', tap_changer='$tap_changer', no_tap='$no_tap', type_oil='$type_oil', safety_device='$safety_device', temp_indicator='$temp_indicator', oil_indicator='$oil_indicator', presure_device='$presure_device', winding_indicator='$winding_indicator', presure_relay='$presure_relay', buccholz_relay='$buccholz_relay', vacuum_gauge='$vacuum_gauge', enclosure='$enclosure', sp_dga='$sp_dga',sp_sfra='$sp_sfra',sp_delta='$sp_delta',sp_pd='$sp_pd',sp_zero='$sp_zero',test_temp_rise='$test_temp_rise',test_impulse='$test_impulse',test_noise='$test_noise', notes1='$notes1', notes2='$notes2', notes3='$notes3', status=2, tgl_resp_klari='$tanggal_sekarang' where nopracost='$nopracost'");
				

	mysqli_query($GLOBALS["___mysqli_ston"], "update h_rpospect set status=2 where noprospect='$noprospect'");
	echo"<script>alert('Data Sukses tersimpan');window.location.href='../index_sales.php?page=klarifikasi'</script>";					

	}
		else if(isset($_POST["pasien"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
             <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			<b>Gagal menambah ke database!!</b>
		</div><center>";
		}
	
	?>

<!DOCTYPE html>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../bootstrap/css/main.css" />
    <link rel="stylesheet" href="../bootstrap/css/theme.css" />
    <link rel="stylesheet" href="../bootstrap/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../bootstrap/css/font-awesome.css" />
	<link rel="stylesheet" href="../bootstrap/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="../../dist/sweetalert.css">	
<head>
<title>Trafoindo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />	
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
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
<div class="panel panel-default">
		<script src="../bootstrap/js/jquery.min.js"></script>	
		<section class="content-header">		
        <h2><center><strong><font color="RED">
        KLARIFIKASI DETAIL PROSPECT  OIL
        </font></strong></center></h2>
          <ol class="breadcrumb">
			<li><a href="../index_sales.php"><i class="fa fa-dashboard"></i><strong> Home</strong></a></li>
			<li><a href="../index_sales.php?page=klarifikasi"><strong>Permintaan Klarifikasi</strong></a></li>
		           
          </ol>
        </section>
<div class="box">
	<header>
		<h3 class="alert alert-danger text-center" role="alert"><strong>GENERAL INFORMATION</strong></h3>
	</header>	

	</br></br>
	<div class="body">
	<form action="" method="post" class="form-horizontal" name='pasien'>
			<div class="form-group">
				<label class="control-label col-lg-3">No Prospect </label>
				<div class="col-lg-3">
				<strong><input type="text" Readonly  autofocus required class="form-control" value="<?php echo $noprospect; ?>"/></strong>
			</div>			
			</div>		
			<div class="form-group">
				<label class="control-label col-lg-3">No Sub Prospect </label>
				<div class="col-lg-3">
				<strong><input type="text" Readonly  autofocus required class="form-control" value="<?php echo $nopracost;  ?> "/></strong>
				</div>	
			</div>
			<div class="form-group">								
				<label  class="control-label col-lg-3">Tahun Prospect</label> 
				<div class="col-lg-3">								
				<input type="text" readonly  autofocus required class="form-control" value="<?php echo $maduDb['tahun'];  ?>"/></strong>								  
				</div>	
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3">Nama Sales</label>																					
				<div class="col-lg-3">
				<strong>	<input type="text" Readonly   class="form-control" value= " <?php echo $maduDb['sales']; ?>  "/></strong>
				</div>	
			</div>
			<div class="form-group">	
				<label class="control-label col-lg-3">Segmen Penjualan </label>
				<div class="col-lg-3">
				<strong>	<input type="text" Readonly  autofocus required class="form-control" value=<?php echo $maduDb['segment']; ?>  /> </strong>
				</div>			
			</div>
			<div class="form-group">	
				<label class="control-label col-lg-3">Sub Segmen Penjualan </label>
				<div class="col-lg-3">															
				<strong>	<input type="text" Readonly  autofocus required class="form-control" value="<?php echo $maduDb['sub_segment']; ?> " />	</strong>
				</div>	
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Customer </label>
				<div class="col-lg-3">
				<strong>	<input type="text"  readonly required class="form-control" value="<?php echo $maduDb['customer']; ?> " /> </strong>
				</div>	
			</div>
			<div class="form-group">						
				<label class="control-label col-lg-3">Status Stage</label>
				<div class="col-lg-3">															
				<strong>	<input type="text"  readonly class="form-control" value="<?php echo $maduDb['priority']; ?> " /></strong>	
				</div>							
			</div>
		
			<header>
			<h3 class="alert alert-danger text-center" role="alert"><STRONG>GENERAL CONDITION</STRONG></h3>
			</header>

			</br></br>
		
			<div class="form-group">
				<label class="control-label col-lg-3">Catagory</label>
				<div class="col-lg-3">															
				<strong><input type="text" name="category" readonly class="form-control" value="<?php echo $oilDb['category']; ?> " /></strong>			
				</div>
			
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport" class="btn btn-primary" />
				</div>
				<div class="col-lg-3" id="dvPassport" style="display: none">
				<select name='category1' id = "category1" autofocus class="form-control"  />									
								<option value='Non Standard'>Non Standard</option>		
								<option value='Standard'>Standard</option>														
				</select>
				</div>
			</div>
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text"  readonly class="form-control" value="<?php echo $oilDb['category_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">				
				<label class="control-label col-lg-3">Type of Transformer</label>
				<div class="col-lg-3">			
				<strong><input type="text" name="type_trafo" readonly class="form-control" value="<?php echo $oilDb['type_trafo']; ?> " /></strong>				
				</div>
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport1" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport1" class="btn btn-primary" />
				</div>		
								<div class="col-lg-3" id="dvPassport1" style="display: none">								
								<select name='type_trafo1' id = "type_trafo1" autofocus class="form-control"  />							
								<option value='Hermetically Sealed Type - Corrugated Radiator'>Hermetically Sealed Type - Corrugated Radiator</option>		
								<option value='Conservator Type - Corrugated Radiator'>Conservator Type - Corrugated Radiator</option>	
								<option value='Conservator Type - Panel Radiator'>Conservator Type - Panel Radiator</option>	
								<option value='Nitrogen Cushion Type'>Nitrogen Cushion Type</option>			
								</select>	
								</div>	
			</div>			
			<div class="form-group" id="cat_klari">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text"  readonly class="form-control" value="<?php echo $oilDb['type_trafo_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			
			<div class="form-group">
				<label class="control-label col-lg-3">Service Condition</label>
				<div class="col-lg-3">															
				<strong><input type="text" name="service_condition" readonly class="form-control" value="<?php echo $oilDb['service_condition']; ?> " /></strong>			
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport2" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport2" class="btn btn-primary" />
				</div>		
								<div class="col-lg-3" id="dvPassport2" style="display: none">								
								<select name='service_condition1' id = "service_condition11" autofocus  class="form-control"  />
								<option value='Outdoor'>Outdoor</option>		
								<option value='Indoor'>Indoor</option>				
								</select>	
								</div>	
			</div>
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text"  readonly class="form-control" value="<?php echo $oilDb['service_condition_klari']; ?> " /></strong>			
				</div>
			</div> </br> 
			
			<div class="form-group">
				<label class="control-label col-lg-3">Altitude</label>								
				<div class="col-lg-3">								
				<strong><input type="text"  name="altitude" readonly class="form-control" value="<?php echo $oilDb['altitude']; ?> " /></strong>			
				</div>	
				<div class="col-lg-2">
				<input type="button" value="Edit" name = "btnPassport3" class="btn btn-primary" />			
				<input type="button" value="No" name = "btnPassport3" class="btn btn-primary" />
				</div>		
				<div class="col-lg-2" id="dvPassport3" style="display: none">								
								<select id="selectBox" name="tulip" onchange="changeFunc();"class="form-control" >						
								<option value="&nbsp;&lt;&nbsp;1000">Standard &nbsp;&lt;&nbsp;1000</option>								
								<option value="other">Other</option>
								</select>	
				</div>					
								<div class="col-lg-1">
								<input name="altitude1"  placeholder="Mdpl" class="form-control" type="text" style="display: none" id="textboxes">
								</div>								
			</div>
		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" readonly class="form-control" value="<?php echo $oilDb['altitude_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Ambient Temp</label>																
				<div class="col-lg-3">								
				<strong><input type="text"  name="ambient_temp" readonly class="form-control" value="<?php echo $oilDb['ambient_temp']; ?> " /></strong>			
				</div>	
				<div class="col-lg-2">
				<input type="button" value="Edit" name = "btnPassport4" class="btn btn-primary" />			
				<input type="button" value="No" name = "btnPassport4" class="btn btn-primary" />
				</div>		
				<div class="col-lg-2" id="dvPassport4" style="display: none">								
								<select id="selectBoxes" name="mawar" onchange="changeFunction();"class="form-control" >							
								<option value="&nbsp;&lt&nbsp;40&deg &nbsp;C">Standard&nbsp;&lt&nbsp;40&deg;&nbsp;C</option>								
								<option value="other">Other</option>
								</select>
				</div> 
								<div class="col-lg-1">
								<input name="ambient_temp1"  placeholder="Celcius" class="form-control" type="text" style="display: none" id="textboxess">
								</div>
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text"  readonly class="form-control" value="<?php echo $oilDb['ambient_temp_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">International Standard</label>	
				<div class="col-lg-3">
				<strong><input type="text" name="standarisasi" readonly class="form-control" value="<?php echo $oilDb['standarisasi']; ?> " /></strong>			
				</div>		
			<div class="col-lg-2">
				<input type="button" value="Edit" name = "btnPassport5" class="btn btn-primary" />			
				<input type="button" value="No" name = "btnPassport5" class="btn btn-primary" />
			</div>		
			<div class="col-lg-2" id="dvPassport5" style="display: none">								
								<select id="selectBoxal" name="selectBoxal" onchange="changeFunctional();"class="form-control" >
								<option value=''></option>	
								<option value='IEC 60076'>IEC 60076</option>		
								<option value='SPLN D3'>SPLN D3</option>	
								<option value='ANSI / IEEE C57'>ANSI / IEEE C57</option>								
								<option value="other">Other</option>
								</select>																
			</div>			
			<div class="col-lg-1">
								<input name="standarisasi1"  placeholder="Please Write" class="form-control" type="text" style="display: none" id="textboxal">
			</div>				
			</div>
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="standarisasi_klari" readonly class="form-control" value="<?php echo $oilDb['standarisasi_klari']; ?> " /></strong>			
				</div>
			</div> </br>

				<header>
			<h3 class="alert alert-danger text-center" role="alert"><strong>ELECTRICAL CHARATERISTIC</strong></h3>
			</header>

			</br></br>

			<div class="form-group">
				<label class="control-label col-lg-3">Winding Temperature </label>
				<div class="col-lg-3">													
				<strong><input type="text" name="winding_temp" readonly class="form-control" value="<?php echo $oilDb['winding_temp']; ?> " /></strong>			
				</div>	
				<div class="col-lg-2">													
				<input type="text"  id="winding_temp" name="winding_temp1" autofocus  class="form-control" readonly />								
				</div>
				<div class="col-lg-2">
					<input name="winding_temp2"  placeholder="Please Write" class="form-control" type="text" style="display: none" id="textboxal1">
				</div>
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" readonly class="form-control" value="<?php echo $oilDb['winding_temp_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Oil Temperature </label>
				<div class="col-lg-3">													
				<strong><input type="text" name="oil_temp" readonly class="form-control" value="<?php echo $oilDb['oil_temp']; ?> " /></strong>			
				</div>	
				<div class="col-lg-2">													
								<input type="text"  id="oil_temp" name="oil_temp1" autofocus  class="form-control" readonly />
				</div>
				<div class="col-lg-2">
								<input name="oil_temp2"  placeholder="Please Write" class="form-control" type="text" style="display: none" id="textboxal2">
				</div>
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" readonly class="form-control" value="<?php echo $oilDb['oil_temp_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Temperature Rise</label>
				<div class="col-lg-3">
				<?php if ($oilDb['temp_rise'] == "other") {
					echo '<strong><input type="text" name="temp_rise" readonly class="form-control" value="'.$oilDb['winding_temp'].'/'.$oilDb['oil_temp'].'" /></strong>';
				}else
				{
					echo '<strong><input type="text" name="temp_rise" readonly class="form-control" value="'.$oilDb['temp_rise'].'" /></strong>';
				} ?>														
							
				</div>	
				<div class="col-lg-2">													
								<input type="text"  id="temp_rise1" name="temp_rise1" autofocus  class="form-control" readonly />
				</div>
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" readonly class="form-control" value="<?php echo $oilDb['temp_rise_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Type of Cooling</label>
				<div class="col-lg-3">															
				<strong><input type="text" name="type_cooling" readonly class="form-control" value="<?php echo $oilDb['type_cooling']; ?> " /></strong>			
				</div>
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport13" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport13" class="btn btn-primary" />
				</div>				
				<div class="col-lg-2" id="dvPassport13" style="display: none">
								<select name='type_coolingx' id = "type_cooling1" onchange="somay();"  autofocus  class="form-control"  />		
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
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="type_cooling_klari" id="klarirc1" readonly class="form-control" value="<?php echo $oilDb['type_cooling_klari']; ?> " /></strong>			
				</div>
				</div> </br>
			
			
			
			<div class="form-group">
				<label class="control-label col-lg-3">Rate Capacity 1</label>
				<div class="col-lg-2">
				<strong><input type="text"  name="rate_capacity" readonly class="form-control" value="<?php echo $oilDb['rate_capacity']; ?> " /></strong>			
				</div>	
				<div class="col-lg-1">
				<input type="text"  readonly class="form-control" name="type_cooling11" id="duadua" value="<?php echo $oilDb['type_cooling1']; ?> " />
				</div>
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport6" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport6" class="btn btn-primary" />
				</div>				
				<div class="col-lg-3" id="dvPassport6" style="display: none">
								<input type="text"  name="rate_capacity1" id = "rc5" autofocus  class="form-control" placeholder="KVA" value="<?php echo $oilDb['rate_capacity']; ?> " />
				</div>							
			</div>

			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" id="klarirc1"  readonly class="form-control" value="<?php echo $oilDb['rate_capacity_klari']; ?> " /></strong>			
				</div>
			</div>	
			
			<div class="form-group">
				<label class="control-label col-lg-3" id="rate2a">Rate Capacity 2</label>
				<div class="col-lg-2">
				<strong><input type="text" id="rate2b" name="rate_capacity2" readonly class="form-control" value="<?php echo $oilDb['rate_capacity2']; ?> " /></strong>			
				</div>	
				<div class="col-lg-1">
				<input type="text"  name="type_cooling21" value="<?php echo $oilDb['type_cooling2']; ?>"  readonly class="form-control" id="tigatiga" />
				</div>
				<div class="col-lg-2">
					<input type="button" id="rate2c" value="Edit" name = "btnPassport7a" onclick="kebo()" class="btn btn-primary" />		
					<input type="button" id="rate2d" value="No" name = "btnPassport7a"   class="btn btn-primary" />
				</div>				
				<div class="col-lg-3" id="dvPassport7a" style="display: none">
								<input type="number" min="1" name="rate_capacity21" id="rc2"  disable  autofocus  class="form-control" placeholder="KVA" />
				</div>							
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3" id="rate2e" ><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text"  id="rate2f" readonly class="form-control" value="<?php echo $oilDb['rate_capacity2_klari']; ?> " /></strong>			
				</div>
			</div> </br>

			

			</br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">No Of Phase</label>
				<div class="col-lg-3">															
				<strong><input type="text" name="no_phase" readonly class="form-control" value="<?php echo $oilDb['no_phase']; ?> " /></strong>				
				</div>	
			<div class="col-lg-2">
				<input type="button" value="Edit" name = "btnPassport7" class="btn btn-primary" />			
				<input type="button" value="No" name = "btnPassport7" class="btn btn-primary" />
			</div>				
				<div class="col-lg-3" id="dvPassport7" style="display: none">
								<select name='no_phase1' id = "no_phase" autofocus class="form-control"  />								
								<option value='1'>1 (Single) </option>		
								<option value='3'>3 (Three) </option>														
								</select>
				</div>							
			</div>
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text"  readonly class="form-control" value="<?php echo $oilDb['no_phase_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			
			<div class="form-group">
				<label class="control-label col-lg-3">Frequency</label>								
				<div class="col-lg-3">
				<strong><input type="text" name="frequency" readonly class="form-control" value="<?php echo $oilDb['frequency']; ?> " /></strong>			
				</div>		
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport8" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport8" class="btn btn-primary" />
				</div>				
						<div class="col-lg-2" id="dvPassport8" style="display: none">
								<select id="selectBoxon" name="selectBoxon" onchange="Fuckpop();"class="form-control" >								
								<option value="50">50 Hz</option>	
								<option value="60">60 Hz</option>									
								<option value="Other">Other</option>
								</select>
						</div>
								<div class="col-lg-1">
								<input name="frequency1"   class="form-control" type="number" style="display: none" id="textboxon" placeholder="Hz" >
								</div>
			</div>		
		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text"  readonly class="form-control" value="<?php echo $oilDb['frequency_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Primary Voltage</label>
				<div class="col-lg-3">
				<strong><input type="text"  name="primary_voltage" readonly class="form-control" value="<?php echo $oilDb['primary_voltage']; ?> " /></strong>			
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport9" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport9" class="btn btn-primary" />
				</div>				
				<div class="col-lg-2" id="dvPassport9" style="display: none">
					<input type="number" min="1" id="primary_voltage1" name="primary_voltage1" autofocus class="form-control" placeholder="KV" />
				</div>				
			</div>		
		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" readonly class="form-control" value="<?php echo $oilDb['primary_voltage_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Secondary Voltage</label>
				<div class="col-lg-3">
				<strong><input type="text" name="secondary_voltage" readonly class="form-control" value="<?php echo $oilDb['secondary_voltage']; ?> " /></strong>			
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport10" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport10" class="btn btn-primary" />
				</div>				
				<div class="col-lg-2" id="dvPassport10" style="display: none">
					<input type="number" min="1" id="secondary" name="secondary_voltage1" autofocus  class="form-control" placeholder="KV" />
				</div>				
			</div>	
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="secondary_voltage_klari" id="secondary_voltage_klari" readonly class="form-control" value="<?php echo $oilDb['secondary_voltage_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Vektor Group</label>								
				<div class="col-lg-3">															
				<strong><input type="text" name="vektor_group" readonly class="form-control" value="<?php echo $oilDb['vektor_group']; ?> " /></strong>												
				</div>
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport11" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport11" class="btn btn-primary" />
				</div>				
				<div class="col-lg-2" id="dvPassport11" style="display: none">
					<select name='vektor_group1' id= "vektor_group1" autofocus  class="form-control"  />
					<option value=''></option>	
					</select>
				</div>				
			</div>	
		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="vektor_group_klari" readonly class="form-control" value="<?php echo $oilDb['vektor_group_klari']; ?> " /></strong>			
				</div>
			</div> </br>
		
			<div class="form-group">
				<label class="control-label col-lg-3">Type of Winding</label>
				<div class="col-lg-3">															
				<strong><input type="text" name="type_winding" readonly class="form-control" value="<?php echo $oilDb['type_winding']; ?> " /></strong>			
				</div>
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport12" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport12" class="btn btn-primary" />
				</div>				
				<div class="col-lg-2" id="dvPassport12" style="display: none">
								<select name='type_winding1' id = "type_winding1" autofocus  class="form-control"  />								
								<option value='Cu-Cu'>Cu-Cu</option>	
								<option value='Cu-Al'>Cu-Al</option>
								<option value='Al-Al'>Al-Al</option>	
								<option value='Al-Cu'>Al-Cu</option>
								</select>
				</div>				
			</div>	
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="type_winding_klari" readonly class="form-control" value="<?php echo $oilDb['type_winding_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			
				
			<div class="form-group">
				<label class="control-label col-lg-3">Tap Changer</label>
				<div class="col-lg-3">															
				<strong><input type="text" name="tap_changer" readonly class="form-control" value="<?php echo $oilDb['tap_changer']; ?> " /></strong>			
				</div>
				<div class="col-lg-2">
				<input type="button" value="Edit" name = "btnPassport14" class="btn btn-primary" />			
				<input type="button" value="No" name = "btnPassport14" class="btn btn-primary" />
				</div>				
				<div class="col-lg-2" id="dvPassport14" style="display: none">
								<select name='tap_changer1' id = "tap_changer1" autofocus  class="form-control"  />
								<option value='Off Load Tap Changer'>Off Load Tap Changer</option>	
								<option value='On Load Tap Changer'>On Load Tap Changer</option>
								<option value='No Tapping'>No Tapping</option>									
								</select>
				</div>				
			</div>	
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="tap_changer_klari" readonly class="form-control" value="<?php echo $oilDb['tap_changer_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">No Of Tap</label>
				<div class="col-lg-3">													
				<strong><input type="text" name="no_tap" readonly class="form-control" value="<?php echo $oilDb['no_tap']; ?> " /></strong>			
				</div>
				<div class="col-lg-2">
				<input type="button" value="Edit" name = "btnPassport15" class="btn btn-primary" />			
				<input type="button" value="No" name = "btnPassport15" class="btn btn-primary" />
				</div>				
				<div class="col-lg-2" id="dvPassport15" style="display: none">
					<input type="number" min="0"  id="no_tap1" name="no_tap1" autofocus  class="form-control" placeholder="No Of Tap" />								
				</div>				
			</div>	
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="no_tap_klari" readonly class="form-control" value="<?php echo $oilDb['no_tap_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Type Of Oil</label>
				<div class="col-lg-3">															
				<strong><input type="text" name="type_oil" readonly class="form-control" value="<?php echo $oilDb['type_oil']; ?> " /></strong>			
				</div>
			<div class="col-lg-2">
				<input type="button" value="Edit" name = "btnPassport16" class="btn btn-primary" />			
				<input type="button" value="No" name = "btnPassport16" class="btn btn-primary" />
			</div>				
				<div class="col-lg-2" id="dvPassport16" style="display: none">
								<select name='type_oil1' id = "type_oil1" autofocus  class="form-control"  />								
								<option value='Mineral Oil'>Mineral Oil</option>	
								<option value='Silicone Oil'>Silicone Oil</option>	
								<option value='Synthetic Ester'>Synthetic Ester</option>	
								<option value='Natural Ester'>Natural Ester</option>									
								</select>
				</div>				
			</div>	
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="type_oil_klari" readonly class="form-control" value="<?php echo $oilDb['type_oil_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			<header>
			<h3 class="alert alert-danger text-center" role="alert"><strong>PROTECTION & ACCESORIES</strong></h3>
			</header>

			</br></br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Integrated Safety Device</label>
				<div class="col-lg-3">
				<strong><input type="text" name="safety_device" readonly class="form-control" value="<?php echo $oilDb['safety_device']; ?> " /></strong>											
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport17" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport17" class="btn btn-primary" />
				</div>				
				<div class="col-lg-1" id="dvPassport17" style="display: none">
								<select name="device" id="ddlModels"  class="form-control" >								
								<option value="NO">NO</option>								
								<option value="YES">YES</option>
								</select>
				</div>	
				<div class="col-lg-2">
								<select name = "safety_device1" id="txtOther"  disabled="disabled" style="display: none" class="form-control" >
								<option value=""></option>							
								<option value="DGPT-2">DGPT-2</option>								
								<option value="DMCR">DMCR</option>
								<option value="RIS">RIS</option>
								</select>								
				</div>	
			</div>	
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="safety_device_klari" readonly class="form-control" value="<?php echo $oilDb['safety_device_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Temperature Indicator</label>									
				<div class="col-lg-3">
				<strong><input type="text" name="temp_indicator" readonly class="form-control" value="<?php echo $oilDb['temp_indicator']; ?> " /></strong>										
				</div>		
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport18" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport18" class="btn btn-primary" />
				</div>	
				<div class="col-lg-1" id="dvPassport18" style="display: none">
					<select name="temp_indicators" id="ddlModels1"  class="form-control" >									
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
					</select>
				</div>
				<div class="col-lg-2">
									<select name = "temp_indicator1" id="txtOther1"  disabled="disabled" style="display: none"  class="form-control" >
									<option value=""></option>	
									<option value="C/W Contact">With C/W Contact</option>								
									<option value="NO Contact">NO Contact</option>
									</select>								
				</div>
			</div>	
				<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="temp_indicator_klari" readonly class="form-control" value="<?php echo $oilDb['temp_indicator_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Oil Level Indicator</label>
				<div class="col-lg-3">
				<strong><input type="text" name="oil_indicator" readonly class="form-control" value="<?php echo $oilDb['oil_indicator']; ?> " /></strong>			
				</div>
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport19" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport19" class="btn btn-primary" />
				</div>	
				<div class="col-lg-1" id="dvPassport19" style="display: none">
					<select name="oil_indicators" id="ddlModels2"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
					</select>
				</div>
				<div class="col-lg-2">
									<select name = "oil_indicator1" id="txtOther2"  disabled="disabled" style="display: none"  class="form-control" >
									<option value=""></option>	
									<option value="C/W Contact">With C/W Contact</option>								
									<option value="NO Contact">NO Contact</option>
									</select>								
				</div>
			</div>	
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="oil_indicator_klari" readonly class="form-control" value="<?php echo $oilDb['oil_indicator_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Presure Device</label>
				<div class="col-lg-3">
				<strong><input type="text" name="presure_device" readonly class="form-control" value="<?php echo $oilDb['presure_device']; ?> " /></strong>										
				</div>
				<div class="col-lg-2">
				<input type="button" value="Edit" name = "btnPassport20" class="btn btn-primary" />			
				<input type="button" value="No" name = "btnPassport20" class="btn btn-primary" />
				</div>	
				<div class="col-lg-1" id="dvPassport20" style="display: none">
				<select name="presure_devices" id="ddlModels3"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
				</div>
				<div class="col-lg-2" >
									<select name = "presure_device1" id="txtOther3"  disabled="disabled" style="display: none"  class="form-control" >
									<option value=""></option>	
									<option value="C/W Contact">With C/W Contact</option>								
									<option value="NO Contact">NO Contact</option>
									</select>							
				</div>
			</div>	
		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="presure_device_klari" readonly class="form-control" value="<?php echo $oilDb['presure_device_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Winding Temperature Indicator</label>									
				<div class="col-lg-3">
				<strong><input type="text" name="winding_indicator" readonly class="form-control" value="<?php echo $oilDb['winding_indicator']; ?> " /></strong>			
				</div>
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport21" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport21" class="btn btn-primary" />
				</div>	
				<div class="col-lg-1" id="dvPassport21" style="display: none">
					<select name="winding_indicators" id="ddlModels4"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
				</div>
				<div class="col-lg-2" >
									<select name = "winding_indicator1" id="txtOther4"  disabled="disabled" style="display: none"  class="form-control" >
									<option value=""></option>	
									<option value="C/W Contact">With C/W Contact</option>								
									<option value="NO Contact">NO Contact</option>
									</select>							
				</div>
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="winding_indicator_klari" readonly class="form-control" value="<?php echo $oilDb['winding_indicator_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			
		
			<div class="form-group">
				<label class="control-label col-lg-3">Sudden Presure Relay</label>
				<div class="col-lg-3">
				<strong><input type="text" name="presure_relay" readonly class="form-control" value="<?php echo $oilDb['presure_relay']; ?> " /></strong>			
				</div>
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport22" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport22" class="btn btn-primary" />
				</div>	
				<div class="col-lg-1" id="dvPassport22" style="display: none">
									<select name="presure_relays" id="ddlModels5" class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
				</div>
				<div class="col-lg-2" >
									<select name = "presure_relay1" id="txtOther5"  disabled="disabled" style="display: none"  class="form-control" >
									<option value=""></option>	
									<option value="C/W Contact">With C/W Contact</option>								
									<option value="NO Contact">NO Contact</option>
									</select>							
				</div>
			</div>		
				<div class="form-group">	
					<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
					<div class="col-lg-8">															
					<strong><input type="text" name="presure_relay_klari" readonly class="form-control" value="<?php echo $oilDb['presure_relay_klari']; ?> " /></strong>			
					</div>
			</div> </br>
			
			<div class="form-group">
						<label class="control-label col-lg-3">Buccholz Relay</label>
						<div class="col-lg-3">
						<strong><input type="text" name="buccholz_relay" readonly class="form-control" value="<?php echo $oilDb['buccholz_relay']; ?> " /></strong>										
						</div>
						<div class="col-lg-2">
								<input type="button" value="Edit" name = "btnPassport23" class="btn btn-primary" />			
								<input type="button" value="No" name = "btnPassport23" class="btn btn-primary" />
						</div>	
						<div class="col-lg-1" id="dvPassport23" style="display: none">
									<select name="buccholz_relays" id="ddlModels6"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
						</div>
						<div class="col-lg-2" >
									<select name = "buccholz_relay1" id="txtOther6"  disabled="disabled" style="display: none"  class="form-control" >
									<option value=""></option>	
									<option value="C/W Contact">With C/W Contact</option>								
									<option value="NO Contact">NO Contact</option>
									</select>							
						</div>
				</div>		
				<div class="form-group">	
						<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
						<div class="col-lg-8">															
						<strong><input type="text" name="buccholz_relay_klari" readonly class="form-control" value="<?php echo $oilDb['buccholz_relay_klari']; ?> " /></strong>			
						</div>
				</div> </br>
		
				<div class="form-group">
					<label class="control-label col-lg-3">Pressure Vacuum Gauge</label>								
					<div class="col-lg-3">
					<strong><input type="text" name="vacuum_gauge" readonly class="form-control" value="<?php echo $oilDb['vacuum_gauge']; ?> " /></strong>			
					</div>
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport24" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport24" class="btn btn-primary" />
				</div>	
				<div class="col-lg-1" id="dvPassport24" style="display: none">
									<select name="vacuum_gauges" id="ddlModels7"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
				</div>
							<div class="col-lg-2" >
									<select name = "vacuum_gauge1" id="txtOther7"  disabled="disabled" style="display: none"  class="form-control" >
									<option value=""></option>	
									<option value="C/W Contact">With C/W Contact</option>								
									<option value="NO Contact">NO Contact</option>
									</select>							
							</div>
				</div>	
		
				<div class="form-group">	
					<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
					<div class="col-lg-8">															
					<strong><input type="text" name="vacuum_gauge_klari" readonly class="form-control" value="<?php echo $oilDb['vacuum_gauge_klari']; ?> " /></strong>			
					</div>
				</div> </br>
				
				<div class="form-group">
				<label class="control-label col-lg-3">HV/LV Cable Box</label>								
				<div class="col-lg-3">
				<strong><input type="text" name="enclosure" readonly class="form-control" value="<?php echo $oilDb['enclosure']; ?> " /></strong>										
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport25" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport25" class="btn btn-primary" />
				</div>	
					<div class="col-lg-1" id="dvPassport25" style="display: none">
									<select name="enclosures" id="ddlModels8"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
					</div>
					<div class="col-lg-2" >
									<select name = "enclosure1" id="txtOther8"  disabled="disabled" style="display: none"  class="form-control" >
									<option value=""></option>	
									<option value="HV+LV CB">HV+LV CB</option>
									<option value="HV CB">HV CB</option>								
									<option value="LV CB">LV CB</option>
									</select>							
					</div>
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="enclosure_klari" readonly class="form-control" value="<?php echo $oilDb['enclosure_klari']; ?> " /></strong>			
				</div>
			</div> 
			</br>
			<header>
			<h3 class="alert alert-danger text-center" role="alert"><strong>TRANSFORMER TESTING</strong></h3>
			</header>

			</br></br>
			
			<div class="form-group">
				<label class="control-label col-lg-3"><font color="RED">SPECIAL TEST</font></label>
			</DIV>
			<div class="form-group">
				<label class="control-label col-lg-3">DISSOLVE GASS ANALYSIS (DGA)</label>								
				<div class="col-lg-3">
				<strong><input type="text" name="sp_dga" readonly class="form-control" value="<?php echo $oilDb['sp_dga']; ?> " /></strong>										
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport30" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport30" class="btn btn-primary" />
				</div>	
					<div class="col-lg-1" id="dvPassport30" style="display: none">
									<select name='sp_dga1'  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
					</div>				
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="sp_dga_klari" readonly class="form-control" value="<?php echo $oilDb['sp_dga_klari']; ?> " /></strong>			
				</div>
			</div> 
			
			<div class="form-group">
				<label class="control-label col-lg-3">SWEEP FREQUENCY RESPONSE (SFRA)</label>								
				<div class="col-lg-3">
				<strong><input type="text" name="sp_sfra" readonly class="form-control" value="<?php echo $oilDb['sp_sfra']; ?> " /></strong>										
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport31" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport31" class="btn btn-primary" />
				</div>	
					<div class="col-lg-1" id="dvPassport31" style="display: none">
									<select name="sp_sfra1"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
					</div>				
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="sp_sfra_klari" readonly class="form-control" value="<?php echo $oilDb['sp_sfra_klari']; ?> " /></strong>			
				</div>
			</div> 
			<div class="form-group">
				<label class="control-label col-lg-3">DISSIPATION FACTOR (TAN DELTA) </label>								
				<div class="col-lg-3">
				<strong><input type="text" name="sp_delta" readonly class="form-control" value="<?php echo $oilDb['sp_delta']; ?> " /></strong>										
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport32" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport32" class="btn btn-primary" />
				</div>	
					<div class="col-lg-1" id="dvPassport32" style="display: none">
									<select name="sp_delta1"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
					</div>				
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="sp_delta_klari" readonly class="form-control" value="<?php echo $oilDb['sp_delta_klari']; ?> " /></strong>			
				</div>
			</div> 
			
			<div class="form-group">
				<label class="control-label col-lg-3">PARTIAL DISCHARGER </label>								
				<div class="col-lg-3">
				<strong><input type="text" name="sp_pd" readonly class="form-control" value="<?php echo $oilDb['sp_pd']; ?> " /></strong>										
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport33" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport33" class="btn btn-primary" />
				</div>	
					<div class="col-lg-1" id="dvPassport33" style="display: none">
									<select name="sp_pd1"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
					</div>				
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="sp_pd_klari" readonly class="form-control" value="<?php echo $oilDb['sp_pd_klari']; ?> " /></strong>			
				</div>
			</div> 
			
			<div class="form-group">
				<label class="control-label col-lg-3">ZERO SEQUENCE IMPEDANCE</label>								
				<div class="col-lg-3">
				<strong><input type="text" name="sp_zero" readonly class="form-control" value="<?php echo $oilDb['sp_zero']; ?> " /></strong>										
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport34" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport34" class="btn btn-primary" />
				</div>	
					<div class="col-lg-1" id="dvPassport34" style="display: none">
									<select name="sp_zero1"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
					</div>				
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="sp_zero_klari" readonly class="form-control" value="<?php echo $oilDb['sp_zero_klari']; ?> " /></strong>			
				</div>
			</div> 
			<div class="form-group">
				<label class="control-label col-lg-3"><font color="RED">TYPE TEST</font></label>
			</DIV>
			<div class="form-group">
				<label class="control-label col-lg-3">TEMPERATURE RISE</label>								
				<div class="col-lg-3">
				<strong><input type="text" name="test_temp_rise" readonly class="form-control" value="<?php echo $oilDb['test_temp_rise']; ?> " /></strong>										
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport35" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport35" class="btn btn-primary" />
				</div>	
					<div class="col-lg-1" id="dvPassport35" style="display: none">
									<select name="test_temp_rise1"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
					</div>				
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="test_temp_rise_klari" readonly class="form-control" value="<?php echo $oilDb['test_temp_rise_klari']; ?> " /></strong>			
				</div>
			</div> 
			
			<div class="form-group">
				<label class="control-label col-lg-3">LIGHTNING IMPULSE</label>								
				<div class="col-lg-3">
				<strong><input type="text" name="test_impulse" readonly class="form-control" value="<?php echo $oilDb['test_impulse']; ?> " /></strong>										
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport36" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport36" class="btn btn-primary" />
				</div>	
					<div class="col-lg-1" id="dvPassport36" style="display: none">
									<select name="test_impulse1"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
					</div>				
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="test_impulse_klari" readonly class="form-control" value="<?php echo $oilDb['test_impulse_klari']; ?> " /></strong>			
				</div>
			</div> 
			
			<div class="form-group">
				<label class="control-label col-lg-3">SOUND LEVEL(NOISE) </label>								
				<div class="col-lg-3">
				<strong><input type="text" name="test_noise" readonly class="form-control" value="<?php echo $oilDb['test_noise']; ?> " /></strong>										
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport37" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport37" class="btn btn-primary" />
				</div>	
					<div class="col-lg-1" id="dvPassport37" style="display: none">
									<select name="test_noise1"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
					</div>				
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="test_noise_klari" readonly class="form-control" value="<?php echo $oilDb['test_noise_klari']; ?> " /></strong>			
				</div>
			</div> 
			
			
			
			
			</br>
			
			<header>
			<h3 class="alert alert-success text-center" role="alert"><strong>NOTES</strong></h3>
			</header>

			</br></br>
		
			<div class="form-group">
				<label class="control-label col-lg-3">Catatan 1</label>
				<div class="col-lg-8">
				<strong><input type="text" name="notes1" readonly class="form-control" value="<?php echo $oilDb['notes1']; ?>" /></strong>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="notes1_klari" readonly class="form-control" value="<?php echo $oilDb['notes1_klari']; ?> " /></strong>			
				</div>			
			</div>
			<div class="form-group">
				<div class="control-label col-lg-3">
					<input type="button" value="Edit" name = "btnPassport26" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport26" class="btn btn-primary" />
				</div>
				<div class="col-lg-8" id="dvPassport26" style="display: none">
					<input type="text"  name="notes1_1" autofocus  class="form-control" placeholder="klarifkasi anda"  />
				</div>				
			</div>
			</br>
			
			
			
			<div class="form-group">
				<label class="control-label col-lg-3">Catatan 2</label>
				<div class="col-lg-8">
				<strong><input type="text" name="notes2" readonly class="form-control" value="<?php echo $oilDb['notes2']; ?> " /></strong>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="notes2_klari" readonly class="form-control" value="<?php echo $oilDb['notes2_klari']; ?> " /></strong>			
				</div>			
			</div>
			<div class="form-group">
				<div class="control-label col-lg-3">
					<input type="button" value="Edit" name = "btnPassport27" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport27" class="btn btn-primary" />
				</div>
				<div class="col-lg-8" id="dvPassport27" style="display: none">
					<input type="text"  name="notes2_1" autofocus  class="form-control" placeholder="klarifkasi anda"  />
				</div>				
			</div>
			</br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Catatan 3</label>
				<div class="col-lg-8">
				<strong><input type="text" name="notes3" readonly class="form-control" value="<?php echo $oilDb['notes3']; ?> " /></strong>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="notes3_klari" readonly class="form-control" value="<?php echo $oilDb['notes3_klari']; ?> " /></strong>			
				</div>			
			</div>
			<div class="form-group">
				<div class="control-label col-lg-3">
					<input type="button" value="Edit" name = "btnPassport28" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport28" class="btn btn-primary" />
				</div>
				<div class="col-lg-8" id="dvPassport28" style="display: none">
					<input type="text"  name="notes3_1" autofocus  class="form-control" placeholder="klarifkasi anda"  />
				</div>				
			</div>
		</br>
			
		
		<hr size="12px">
		<div class="form-actions margin-bottom" style="text-align:center;">
			<input type="submit" name="pasien" value="SELESAI" class="btn btn-danger" />         <a href="../index_sales.php?page=klarifikasi" class="btn btn-warning" >BATAL</a>
		</div>
		
	</form>
</body>
</html>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4"></script>
<script type="text/javascript" src="../bootstrap/js/poper-min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" src="../bootstrap/js/slim-min.js"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>   
<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/savy.min.js"></script>

<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport").show();
				 $("#dvPassport").focus();
            } else {
                $("#dvPassport").hide();
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport1]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport1").show();
				 $("#dvPassport1").focus();
            } else {
                $("#dvPassport1").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport2]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport2").show();
				 $("#dvPassport2").focus();
            } else {
                $("#dvPassport2").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport3]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport3").show();
				 $("#dvPassport3").focus();
            } else {
                $("#dvPassport3").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport4]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport4").show();
				 $("#dvPassport4").focus();
            } else {
                $("#dvPassport4").hide();
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport5]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport5").show();
				 $("#dvPassport5").focus();
				 document.getElementById('selectBoxal').setAttribute('required','required')
            } else {
                $("#dvPassport5").hide();
				document.getElementById('selectBoxal').removeAttribute('required')
            }
        });
    });
</script>



<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport6]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport6").show();
				 $("#dvPassport6").focus();
            } else {
                $("#dvPassport6").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport7]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport7").show();
				 $("#dvPassport7").focus();
            } else {
                $("#dvPassport7").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport7a]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport7a").show();
				 $("#dvPassport7a").focus();
            } else {
                $("#dvPassport7a").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport8]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport8").show();
				 $("#dvPassport8").focus();
            } else {
                $("#dvPassport8").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport9]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport9").show();
				 $("#dvPassport9").focus();
				  document.getElementById('primary_voltage1').setAttribute('required','required')
            } else {
                $("#dvPassport9").hide();
				document.getElementById('primary_voltage1').setAttribute('')
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport10]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport10").show();
				 $("#dvPassport10").focus();
				 document.getElementById('secondary').setAttribute('required','required')
            } else {
                $("#dvPassport10").hide();
				document.getElementById('secondary').setAttribute('')
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport11]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport11").show();
				 $("#dvPassport11").focus();
				  document.getElementById('vektor_group1').setAttribute('required','required')
            } else {
                $("#dvPassport11").hide();
				 document.getElementById('vektor_group1').setAttribute('')
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport12]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport12").show();
				 $("#dvPassport12").focus();
            } else {
                $("#dvPassport12").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport13]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport13").show();
				 $("#dvPassport13").focus();
				 document.getElementById('type_cooling1').setAttribute('required','required')
            } else {
                $("#dvPassport13").hide();
				 document.getElementById('type_cooling1').setAttribute('')
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport14]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport14").show();
				 $("#dvPassport14").focus();
            } else {
                $("#dvPassport14").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport15]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport15").show();
				 $("#dvPassport15").focus();
				  document.getElementById('no_tap1').setAttribute('required','required')
            } else {
                $("#dvPassport15").hide();
				 document.getElementById('no_tap1').setAttribute('')
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport16]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport16").show();
				 $("#dvPassport16").focus();
            } else {
                $("#dvPassport16").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport17]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport17").show();
				 $("#dvPassport17").focus();
            } else {
                $("#dvPassport17").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport18]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport18").show();
				 $("#dvPassport18").focus();
            } else {
                $("#dvPassport18").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport19]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport19").show();
				 $("#dvPassport19").focus();
            } else {
                $("#dvPassport19").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport20]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport20").show();
				 $("#dvPassport20").focus();
            } else {
                $("#dvPassport20").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport21]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport21").show();
				 $("#dvPassport21").focus();
            } else {
                $("#dvPassport21").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport22]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport22").show();
				 $("#dvPassport22").focus();
            } else {
                $("#dvPassport22").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport23]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport23").show();
				 $("#dvPassport23").focus();
            } else {
                $("#dvPassport23").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport24]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport24").show();
				 $("#dvPassport24").focus();
            } else {
                $("#dvPassport24").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport25]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport25").show();
				 $("#dvPassport25").focus();
            } else {
                $("#dvPassport25").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport26]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport26").show();
				 $("#dvPassport26").focus();
            } else {
                $("#dvPassport26").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport27]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport27").show();
				 $("#dvPassport27").focus();
            } else {
                $("#dvPassport27").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport28]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport28").show();
				 $("#dvPassport28").focus();
            } else {
                $("#dvPassport28").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport29]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport29").show();
				 $("#dvPassport29").focus();
            } else {
                $("#dvPassport29").hide();
            }
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
		{ var tos = "other";
		  var win ="Other";
		  var oil ="Other";
		}
        document.getElementById("temp_rise1").value=tos;
		document.getElementById("winding_temp").value=win;
		document.getElementById("oil_temp").value=oil;

if (selectedValues=="other"){
$('#textboxal').show();
$('#textboxal').focus();
$('#textboxar').show();  
$('#textboxal1').show();
$('#textboxal2').show();


}
else {
<!--alert("Error"); -->
$('#textboxal').hide();
$('#textboxar').hide();
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
    $(function () {
        $("#ddlModels").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther").removeAttr("disabled");
				document.getElementById('txtOther').setAttribute('required','required')
				$("#txtOther").show();
                $("#txtOther").focus();
            } else {
                $("#txtOther").attr("disabled", "disabled"); 
				$("#txtOther").hide(); 
				
				
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
            } else {
                $("#txtOther6").attr("disabled", "disabled"); 
				$("#txtOther6").hide(); 				
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#ddlModels7").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther7").removeAttr("disabled");
				document.getElementById('txtOther7').setAttribute('required','required')
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
				document.getElementById('txtOther8').setAttribute('required','required')
				$("#txtOther8").show();
                $("#txtOther8").focus();
            } else {
                $("#txtOther8").attr("disabled", "disabled"); 
				$("#txtOther8").hide(); 				
            }
        });
    });
</script>
<script type="text/javascript">
	$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "../get_vektor_group.php",
          	cache: false, 
          	success: function(msg){
              $("#vektor_group1").html(msg);
            }
	})});
</script>

<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport30]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport30").show();
				 $("#dvPassport30").focus();
            } else {
                $("#dvPassport30").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport31]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport31").show();
				 $("#dvPassport31").focus();
            } else {
                $("#dvPassport31").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport32]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport32").show();
				 $("#dvPassport32").focus();
            } else {
                $("#dvPassport32").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport33]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport33").show();
				 $("#dvPassport33").focus();
            } else {
                $("#dvPassport33").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport34]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport34").show();
				 $("#dvPassport34").focus();
            } else {
                $("#dvPassport34").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport35]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport35").show();
				 $("#dvPassport35").focus();
            } else {
                $("#dvPassport35").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport36]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport36").show();
				 $("#dvPassport36").focus();
            } else {
                $("#dvPassport36").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport37]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport37").show();
				 $("#dvPassport37").focus();
            } else {
                $("#dvPassport37").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport38]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport38").show();
				 $("#dvPassport38").focus();
            } else {
                $("#dvPassport38").hide();
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport39]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport39").show();
				 $("#dvPassport39").focus();
            } else {
                $("#dvPassport39").hide();
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport40]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport40").show();
				 $("#dvPassport40").focus();
            } else {
                $("#dvPassport40").hide();
            }
        });
    });
</script>


<script type="text/javascript">
function somay() {
var selectbotol = document.getElementById("type_cooling1");
var selectedValues= selectbotol.options[selectbotol.selectedIndex].value;

var satu = document.getElementById("type_cooling1").value;
		if (satu=="ONAN" )
		{ var dua = "ONAN";
		var tiga ="";	
		$('#tigatiga').hide();	
		$('#rc2').hide();
		$('#duaduadua').hide();
		$('#bacotan').hide();
		$("#rc2").attr("disabled", "disabled"); 
		$("#dvPassport7").attr("disabled", "disabled"); 
		$("#dvPassport7a").attr("disabled", "disabled"); 
		
		$('#dvPassport6').hide();	
		$('#dvPassport7a').hide();
		$('#rate2a').hide();
		$('#rate2b').hide();
		$('#rate2c').hide();
		$('#rate2d').hide();
		$('#rate2e').hide();
		$('#rate2f').hide();
		document.getElementById("duadua").value=dua;
		document.getElementById("tigatiga").value=tiga;
		}
		else if (satu=="KNAN" )
		{ var dua = "KNAN";
		var tiga ="";	
		$('#tigatiga').hide();	
		$('#rc2').hide();
		$('#duaduadua').hide();
		$('#bacotan').hide();
		$("#rc2").attr("disabled", "disabled"); 
		$("#dvPassport6").attr("disabled", "disabled"); 
		$("#dvPassport7a").attr("disabled", "disabled"); 
		
		$('#dvPassport6').hide();	
		$('#dvPassport7a').hide();
		$('#rate2a').hide();
		$('#rate2b').hide();
		$('#rate2c').hide();
		$('#rate2d').hide();
		$('#rate2e').hide();
		$('#rate2f').hide();
		document.getElementById("duadua").value=dua;
		document.getElementById("tigatiga").value=tiga;
		}
	
		else if (satu=="ONAN/ONAF")
		{ var dua = "ONAN";
		var tiga ="ONAF";
		var cool_fan ="YES";
		$('#tigatiga').show();
		$('#dvPassport6').show();	
		$('#dvPassport7a').show();		
		$('#rc2').show();
		$('#cool_fan').show();
		$('#bacotan').show();
		$("#cool_fan").attr("disabled", "disabled"); 
		$("#rc2").removeAttr("disabled");
		$("#dvPassport6").removeAttr("disabled");
		$('#dvPassport6').focus();
		$("#dvPassport7a").removeAttr("disabled");
		$('#dvPassport7a').focus();
		$('#rate2a').show();
		$('#rate2b').show();
		$('#rate2c').show();
		$('#rate2d').show();
		$('#rate2e').show();
		$('#rate2f').show();
		document.getElementById('rc2').setAttribute('required','required')
		document.getElementById("duadua").value=dua;
		document.getElementById("tigatiga").value=tiga;
		}
			else if (satu=="KNAN/KNAF")
		{ var dua = "KNAN";
		var tiga ="KNAF";
		var cool_fan ="YES";
		$('#tigatiga').show();
		$('#dvPassport6').show();	
		$('#dvPassport7a').show();		
		$('#rc2').show();
		$('#cool_fan').show();
		$('#bacotan').show();
		$("#cool_fan").attr("disabled", "disabled"); 
		$("#rc2").removeAttr("disabled");
		$("#dvPassport6").removeAttr("disabled");
		$('#dvPassport6').focus();
		$("#dvPassport7a").removeAttr("disabled");
		$('#dvPassport7a').focus();
		$('#rate2a').show();
		$('#rate2b').show();
		$('#rate2c').show();
		$('#rate2d').show();
		$('#rate2e').show();
		$('#rate2f').show();
		document.getElementById('rc2').setAttribute('required','required')
		document.getElementById("duadua").value=dua;
		document.getElementById("tigatiga").value=tiga;
		}
		
		else if (satu=="OFAF")
		{ var dua = "OF";
		var tiga ="AF";
		var cool_fan ="YES";
		$('#tigatiga').show();
		$('#dvPassport6').show();	
		$('#dvPassport7a').show();		
		$('#rc2').show();
		$('#cool_fan').show();
		$('#bacotan').show();
		$("#cool_fan").attr("disabled", "disabled"); 
		$("#rc2").removeAttr("disabled");
		$("#dvPassport6").removeAttr("disabled");
		$('#dvPassport6').focus();
		$("#dvPassport7a").removeAttr("disabled");
		$('#dvPassport7a').focus();
		$('#rate2a').show();
		$('#rate2b').show();
		$('#rate2c').show();
		$('#rate2d').show();
		$('#rate2e').show();
		$('#rate2f').show();
		document.getElementById('rc2').setAttribute('required','required')
		document.getElementById("duadua").value=dua;
		document.getElementById("tigatiga").value=tiga;
		}
		else if (satu=="KFAF")
		{ var dua = "KF";
		var tiga ="AF";
		var cool_fan ="YES";
		$('#tigatiga').show();
		$('#dvPassport6').show();	
		$('#dvPassport7a').show();		
		$('#rc2').show();
		$('#cool_fan').show();
		$('#bacotan').show();
		$("#cool_fan").attr("disabled", "disabled"); 
		$("#rc2").removeAttr("disabled");
		$("#dvPassport6").removeAttr("disabled");
		$('#dvPassport6').focus();
		$("#dvPassport7a").removeAttr("disabled");
		$('#dvPassport7a').focus();
		$('#rate2a').show();
		$('#rate2b').show();
		$('#rate2c').show();
		$('#rate2d').show();
		$('#rate2e').show();
		$('#rate2f').show();
		document.getElementById('rc2').setAttribute('required','required')
		document.getElementById("duadua").value=dua;
		document.getElementById("tigatiga").value=tiga;
		
		}
		document.getElementById("duadua").value=dua;
		document.getElementById("tigatiga").value=tiga;
		
}
</script>

</body>
</html>	
</div>
<?php } ?>
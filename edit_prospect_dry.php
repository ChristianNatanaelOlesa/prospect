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
		}else if ($_POST['altitude_u']=="Other") {
			$altitude = $_POST['altitude_o'];
		}else{
			$altitude = $_POST['altitude_u'];
		}

		if ($_POST['ambient_temp_u']=="") {
			$ambient_temp = $gukDb['ambient_temp'];
		}else if ($_POST['ambient_temp_u']=="Other") {
			$ambient_temp = $_POST['ambient_temp_o'];
		}else{
			$ambient_temp = $_POST['ambient_temp_u'];
		}

		if ($_POST['standarisasi_u']=="") {
			$standarisasi = $gukDb['standarisasi'];
		}else{
			$standarisasi = $_POST['standarisasi_u'];
		}

		if ($_POST['insulation_u']=="") {
			$insulation_thermal = $gukDb['insulation'];		
            $temp_rise = $gukDb['temp_rise'];			
		}else if ($_POST['insulation_u']=="Other") {
			$insulation_thermal = $_POST['insulation_o'];
			$temp_rise = $_POST['temp_rise_o'];
		}else{
			$insulation_thermal = $_POST['insulation_u'];
			$temp_rise = $_POST['temp_rise_u'];			
		}
	    
	

		if ($_POST['rate_capacity_u']=="") {
			$rate_capacity = $gukDb['rate_capacity'];
		}else{
			$rate_capacity = $_POST['rate_capacity_u'];
		}

		if ($_POST['tap_changer_u']=="") {
			$tap_changer = $gukDb['tap_changer'];
		}else{
			$tap_changer = $_POST['tap_changer_u'];
		}

		if ($_POST['no_phase_u']=="") {
			$no_phase = $gukDb['no_phase'];
		}else{
			$no_phase = $_POST['no_phase_u'];
		}


		if ($_POST['selectBoxon']=="") {
			$frequency = $gukDb['frequency'];
		}else if ($_POST['selectBoxon']=="Other") {
			$frequency = $_POST['frequency_o'];
		}else{
			$frequency = $_POST['selectBoxon'];
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


		if ($_POST['no_tap_u']=="") {
			$no_tap = $gukDb['no_tap'];
		}else{
			$no_tap = $_POST['no_tap_u'];
		}

		if ($_POST["dig_thermos"]=="YES") {							
			$dig_thermo = $_POST["dig_thermo_u"];								
		}else if($_POST["dig_thermos"]==""){
			$dig_thermo = $gukDb["dig_thermo"];
		}
		else{
			$dig_thermo = "N/A";									
		}
		
		if ($_POST["cool_fans_u"]=="") {							
			$cool_fans = $gukDb["cool_fans"];								
		}else{
			$cool_fans = $_POST["cool_fans_u"];									
		}

		if ($_POST["enclosures"]=="YES") {							
			$enclosure = $_POST["enclosure_u"];								
		}else if($_POST["enclosures"]==""){
			$enclosure = $gukDb["enclosure"];
		}else {
			$enclosure="N/A";									
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


		mysqli_query($GLOBALS["___mysqli_ston"], "update oil_prospect set category='$category', type_trafo='$type_trafo', service_condition='$service_condition', altitude='$altitude', ambient_temp='$ambient_temp', standarisasi='$standarisasi', insulation_thermal='$insulation_thermal', temp_rise='$temp_rise', rate_capacity='$rate_capacity', tap_changer='$tap_changer', no_phase='$no_phase', frequency='$frequency', primary_voltage='$primary_voltage', secondary_voltage='$secondary_voltage', vektor_group='$vektor_group', type_winding='$type_winding', type_cooling='$type_cooling', no_tap='$no_tap', dig_thermo='$dig_thermo', cool_fans='$cool_fans', enclosure='$enclosure', notes1='$notes1', notes2='$notes2', notes3='$notes3' where id='$id'" );   
			
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
		<li class="active">Prospect Baru</li>  
	</ol>
  

	<div class="box">

		<header>
			<h2><strong> <font color="red">&nbsp;&nbsp;PROSPECT SALES</font></strong></h2>	
		</header>

		
		<form action="" method="post" class="form-horizontal" name='orangtua'>
			<div class="form-group">
				<label class="control-label col-lg-3">No Prospect </label>
				<div class="col-lg-4">
					<input type="text" Readonly name="noprospect" autofocus required class="form-control "value="<?php echo $no; ?>" >
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
					 <input type="text" readonly name="Tahun" autofocus required class="form-control" value="<?php echo $meongDb['tahun'];  ?>" >								  
				</div>	
			</div>		

			<div class="form-group">	
						<label class="control-label col-lg-3">Nama Sales</label>																					
						<div class="col-lg-4">
							<input type="text" Readonly name="sales" autofocus required class="form-control" value="<?php echo $meongDb['sales'];  ?> ">
						</div>	
			</div>

			<div class="form-group">	
				<label class="control-label col-lg-3">Segmen Penjualan </label>
				<div class="col-lg-4">															
					<input type="text" readonly name='segment' id = "segment" autofocus required class="form-control" value="<?php echo $meongDb['segment'];  ?>">
						
				</div>	
			</div>

			<div class="form-group">	
				<label class="control-label col-lg-3">Sub Segmen Penjualan </label>
				<div class="col-lg-4">															
					<input type="text" readonly name='sub_segment' id = "sub_segment" autofocus required class="form-control" value="<?php echo $meongDb['sub_segment'];  ?>">	
				</div>	
			</div>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Customer </label>
				<div class="col-lg-4">
					<input type="text" readonly name='customer' id = "customer" autofocus required class="form-control" value="<?php echo $meongDb['customer'];  ?>">
				</div>	
			</div>
			
			
			<div class="form-group">								
				<label class="control-label col-lg-3">Project</label>
				<div class="col-lg-4">
					<input type="text" readonly name='project' id = "project" autofocus required class="form-control" value="<?php echo $meongDb['project'];  ?>">
				</div>								
			</div>
			
			<div class="form-group">						
				<label class="control-label col-lg-3">Status Stage</label>
				<div class="col-lg-4">															
					<input type="text" readonly name='priority' id = "priority" autofocus required class="form-control" value="<?php echo $meongDb['priority'];  ?>">
				</div>							
			</div>
			
		
			<h3><strong><font color="blue">GENERAL CONDITION</font></strong></h3>
			<div class="form-group">
				<label class="control-label col-lg-3">Catagory</label>
				<div class="col-lg-3">
					<strong><input type="text" name="category" readonly class="form-control" value="<?php echo $gukDb['category']; ?> "></strong>															
					<select name='category_u' id = "category" autofocus class="form-control" >
						<option value=''></option>	
						<option value='Non Standard'>Non Standard</option>		
						<option value='Standard'>Standard</option>														
					</select>	
				</div>	
			</div>

			<div class="form-group">				
				<label class="control-label col-lg-3">Type of Transformer</label>
				<div class="col-lg-3">
					<strong><input type="text" name="type_trafo" readonly class="form-control" value="<?php echo $gukDb['type_trafo']; ?> "></strong>	

					<select name='type_trafo_u' id = "type_trafo" autofocus class="form-control" >
						<option value=''></option>								
						<option value='Dry Cast Resin'>Dry Cast Resin</option> 
						<option value='Dry Non Resin'>Dry Non Resin</option>				
					</select>	
				</div>	
			</div>			
					
			<div class="form-group">
				<label class="control-label col-lg-3">Service Condition</label>
				<div class="col-lg-3">
					<strong><input type="text" name="service_condition" readonly class="form-control" value="<?php echo $gukDb['service_condition']; ?> "></strong>

					<select name='service_condition_u' id = "service_condition" autofocus class="form-control" >
						<option value=''></option>
						<option value='Outdoor'>Outdoor &lt Under Shelter &gt</option>		
						<option value='Indoor'>Indoor</option>								
					</select>	
				</div>	
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">Altitude</label>
				<div class="col-lg-3">
					<strong><input type="text" name="altitude" readonly class="form-control" value="<?php echo $gukDb['altitude']; ?> " /></strong>

					<select name="altitude_u" id="selectBox" onchange="changeFunc();"class="form-control" >
						<option value=''></option>
						<option value="Standard">Standard &nbsp;&lt&nbsp;1000</option>									
						<option value="Other">Other</option>
					</select>
				</div> 

				<div class="col-lg-1">
					<input name="altitude_o"  placeholder="Mdpl" class="form-control" type="text" style="display: none" id="textboxes">
				</div>								
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">Ambient Temp</label>	
				<div class="col-lg-3">
					<strong><input type="text" name="ambient_temp" readonly class="form-control" value="<?php echo $gukDb['ambient_temp']; ?> "></strong>

					<select name="ambient_temp_u" id="selectBoxes" onchange="changeFunction();"class="form-control" >
						<option value=''></option>
						<option value="Standard&nbsp;&lt&nbsp;40&deg &nbsp;C;">Standard&nbsp;&lt&nbsp;40&deg;&nbsp;C</option>
						<option value="Other">Other</option>
					</select>
				</div> 

				<div class="col-lg-1">
					<input name="ambient_temp_o" placeholder="Celcius" class="form-control" type="text" style="display: none" id="textboxess">
				</div>	
							
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">International Standard</label>	
				<div class="col-lg-3">
					<strong><input type="text" name="standarisasi"  readonly class="form-control" value="<?php echo $gukDb['standarisasi']; ?> "></strong>

					<select name='standarisasi_u' id = "standarisasi" autofocus onchange ="changeFunctional();" class="form-control" required>
						<option value=''></option>	
					</select>	
				</div>

			</div>
		
			<h3><font color="brown">ELECTRICAL CHARATERISTIC</font></h3>
			<div class="form-group">
				<label class="control-label col-lg-3"> Insulation System Thermal Class</label>
				<div class="col-lg-3">
					<strong><input type="text" name="insulation" readonly class="form-control" value="<?php echo $gukDb['insulation_thermal']; ?> "></strong>	

					<select id="insulation" name="insulation_u" onchange="changeFunctional();"class="form-control" required>
						<option value=''></option>							
					</select>
				</div>
				
				<div class="col-lg-1">
					<input name="insulation_o" class="form-control" type="text" style="display: none" id="textboxam">
				</div>
								
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">Temperature Rise</label>
				<div class="col-lg-1">
					<strong><input type="text" name="temp_rises" readonly class="form-control" value="<?php echo $gukDb['temp_rise']; ?> "></strong>
																	
					<input type="text" id="temp_rise" name="temp_rise_u" autofocus class="form-control" readonly>
				
				</div>

				<div class="col-lg-2">
					<input name="temp_rise_o" placeholder="Please Write" class="form-control" type="text" style="display: none" id="textboxal">
				</div>
								
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">Rate Capacity</label>
				<div class="col-lg-4">
					<strong><input type="text" name="rate_capacity" readonly class="form-control" value="<?php echo $gukDb['rate_capacity']; ?> "></strong>

					<input type="number"  name="rate_capacity_u" autofocus class="form-control" placeholder="VA">
				</div>	
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">Tap Changer</label>
				<div class="col-lg-4">	
					<strong><input type="text" name="tap_changer" readonly class="form-control" value="<?php echo $gukDb['tap_changer']; ?> "></strong>														

					<select name='tap_changer_u' id = "tap_changer" autofocus class="form-control" >
						<option value=''></option>
						<option value='Off Load Tap Changer'>Off Load Tap Changer</option>	
						<option value='On Load Tap Changer'>On Load Tap Changer</option>								
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">No Of Phase</label>
				<div class="col-lg-4">
					<strong><input type="text" name="no_phase" readonly class="form-control" value="<?php echo $gukDb['no_phase']; ?> "></strong>	

					<select name='no_phase_u' id = "no_phase" autofocus class="form-control" >
						<option value=''></option>
						<option value='Single Phase'>Single Phase</option>		
						<option value='Three Phase'>Three Phase</option>														
					</select>	
				</div>	
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">Frequency</label>
				<div class="col-lg-3">
					<strong><input type="text" name="frequency" readonly class="form-control" value="<?php echo $gukDb['frequency']; ?> "></strong>	

					<select id="selectBoxon" name="selectBoxon" onchange="Fuckpop();"class="form-control" >
						<option value=''></option>
						<option value="50">50 Hz</option>	
						<option value="60">60 Hz</option>									
						<option value="Other">Other</option>
					</select>
				</div> 

				<div class="col-lg-1">
					<input name="frequency_o" class="form-control" type="text" style="display: none" id="textboxon" placeholder="Hz">
				</div>	
							
			</div>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Primary Voltage</label>
				<div class="col-lg-4">
					<strong><input type="text" name="primary_voltage" readonly class="form-control" value="<?php echo $gukDb['primary_voltage']; ?> "></strong>

					<input type="number"  name="primary_voltage_u" autofocus class="form-control" placeholder="Volt">
				</div>	
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">Secondary Voltage&nbsp</label>
				<div class="col-lg-4">
					<strong><input type="text" name="secondary_voltage" readonly class="form-control" value="<?php echo $gukDb['secondary_voltage']; ?> "></strong>

					<input type="number"  name="secondary_voltage_u" autofocus class="form-control" placeholder="Volt">
				</div>	
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">Vektor Group</label>								
				<div class="col-lg-4">
					<strong><input type="text" name="vektor_group" readonly class="form-control" value="<?php echo $gukDb['vektor_group']; ?> "></strong>														
					<select name='vektor_group_u' id = "vektor_group" autofocus class="form-control" >
						<option value=''></option>	
					</select>									
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">Type of Winding</label>
				<div class="col-lg-4">
					<strong><input type="text" name="type_winding" readonly class="form-control" value="<?php echo $gukDb['type_winding']; ?> "></strong>														
					<select name='type_winding_u' id = "type_winding" autofocus class="form-control" >
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
					<strong><input type="text" name="type_cooling" readonly class="form-control" value="<?php echo $gukDb['type_cooling']; ?> "></strong>															
					<select name='type_cooling_u' id = "type_cooling" autofocus class="form-control" >
						<option value=''></option>
						<option value='AN < Air Natural >'>AN < Air Natural ></option>
						<option value='ANAF < Air Naural Air Force >'>ANAF < Air Naural Air Force ></option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-lg-3">No Of Tap</label>
				<div class="col-lg-4">
					<strong><input type="text" name="no_tap" readonly class="form-control" value="<?php echo $gukDb['no_tap']; ?> "></strong>

					<input type="number"  name="no_tap_u" autofocus class="form-control" placeholder="No Of Tap">
				</div>
			</div>
				
		<h3> <font color="blue">PROTECTION & ACCESORIES</font></h3>
			<div class="form-group">
				<label class="control-label col-lg-3">Digital Thermometer</label>
				<div class="col-lg-1">													
				 	<select name="dig_thermos" id="ddlModels1" class="form-control" required>
						<option value=''></option>
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>

				<div class="col-lg-3">
					<strong><input type="text" name="dig_thermo" id="hasil1" readonly class="form-control" value="<?php echo $gukDb['dig_thermo']; ?> "></strong>		
					<select name = "dig_thermo_u" id="txtOther1"  disabled="disabled"  class="form-control" >
						<option value="C/W Contact">With C/W Contact</option>								
						<option value="No C/W Contact">NO Contact</option>
					</select>								
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">Cooling Fans</label>
					<div class="col-lg-1">
						<strong><input type="text" name="cool_fans" readonly class="form-control" value="<?php echo $gukDb['cool_fans']; ?> " /></strong>											
					 	<select name="cool_fans_u" id="cool_fan" class="form-control" required>
							<option value=''></option>
							<option value="NO">NO</option>								
							<option value="YES">YES</option>
						</select>
				</div>

			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">Enclosure</label>
					<div class="col-lg-1">
					 	<select name="enclosures" id="ddlModels2" class="form-control">
						<option value=''></option>
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>

				<div class="col-lg-3">
					<strong><input type="text" name="enclosure" id="hasil2" readonly class="form-control" value="<?php echo $gukDb['enclosure']; ?> " /></strong>		
					<select name = "enclosure_u" id="txtOther2"  disabled="disabled"  class="form-control" >
						<option value=""></option>									
					</select>								
				</div>	
			</div>

			<h3><font color="blue">NOTES </font></h3>
			<div class="form-group">
				<label class="control-label col-lg-3">Catatan 1</label>
				<div class="col-lg-4">
					<strong><input type="text" name="notes1" readonly class="form-control" value="<?php echo $gukDb['notes1']; ?> "></strong>
				<textarea  id ="notes1" name="notes1_u"  class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
				</div>	
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">Catatan 2</label>
				<div class="col-lg-4">
					<strong><input type="text" name="notes2" readonly class="form-control" value="<?php echo $gukDb['notes2']; ?> "></strong>
					<textarea  id ="notes2" name="notes2_u" class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
				</div>	
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">Catatan 3</label>
				<div class="col-lg-4">
					<strong><input type="text" name="notes3" readonly class="form-control" value="<?php echo $gukDb['notes3']; ?> "></strong>
					<textarea  id ="notes3" name="notes3_u" class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
				</div>	
			</div>
		
			<div class="form-actions no-margin-bottom"  style="text-align:left;">
				<input type="submit" name="pasien" value="SELESAI" class="btn btn-primary">   <!-- <a href="?menu=data_memo" class="btn btn-primary" >Selesai</a>		-->								
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
if (selectedValue=="Other"){
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
if (selectedValues=="Other"){
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
            } else {
                $("#txtOther1").attr("disabled", "disabled"); 
				$("#txtOther1").hide();
				$("#hasil1").hide(); 			
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
            } else {
                $("#txtOther2").attr("disabled", "disabled"); 
				$("#txtOther2").hide(); 
				$("#hasil2").hide(); 				
            }
        });
    });
</script>

<script type="text/javascript">
	$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "get_int.php",
          	cache: false, 
          	success: function(msg){
              $("#standarisasi").html(msg);
            }
        });
 
      	
      });
	  $(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "get_insulation.php",
          	cache: false, 
          	success: function(msg){
              $("#insulation").html(msg);
            }
        });
 
      	
      });
</script>





<script type="text/javascript">
function changeFunctional() {
var selectBoxes = document.getElementById("standarisasi");
var selectedValues= selectBoxes.options[selectBoxes.selectedIndex].value;

var selectBoxess = document.getElementById("insulation");
var selectedValuess= selectBoxess.options[selectBoxess.selectedIndex].value;

var tes = document.getElementById("standarisasi").value;
var tas = document.getElementById("insulation").value;
		
		if ((tes=="ANSI/IEEE C57.12") && (tas=="Class F (155 C)"))
		{ var tos = "90";
		}
		else if ((tes=="ANSI/IEEE C57.12") && (tas=="Class H (180 C)"))
		{ var tos = "115";
		}
		else if ((tes=="IEC 60076") && (tas=="Class H (180 C)"))
		{ var tos = "125";
		}
		else if ((tes=="IEC 60076") && (tas=="Class F (155 C)"))
		{ var tos = "100";
		}
		else if ((tes=="IEC 60076") && (tas=="Other"))
		{ var tos = "Other";
		}
		else if ((tes=="ANSI/IEEE C57.12") && (tas=="Other"))
		{ var tos = "Other";
		}
		
		
        document.getElementById("temp_rise").value=tos;

if (selectedValuess=="Other"){
$('#textboxam').show();
$('#textboxam').focus();
$('#textboxal').show();
<!--$('#textboxal').focus(); -->



}
else {
<!--alert("Error"); -->
$('#textboxal').hide();
$('#textboxam').hide();
}
}
</script>





<script type="text/javascript">
	$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "get_enclosure.php",
          	cache: false, 
          	success: function(msg){
              $("#txtOther2").html(msg);
			  $('#txtOther2').focus();
            }
	})});
</script>



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
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/savy.min.js"></script>





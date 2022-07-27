
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

	//GENERAL CONDITION
	$category			= "Standard";
	$type_trafo 		= "Dry Cast Resin";
	$service_condition 	= $_POST['service_condition'];
	$altitude 			= "<1000";				
	$ambient_temp 		= "<40";
	$standarisasi 		= "IEC 60076";

	//ELECTRICAL CHARACTERISTIC
	$insulation_thermal 	= "Class F (155 C)";

	if ($_POST["kustom_temp_rise"]<>"") {
		$temp_rise = $_POST["kustom_temp_rise"];
	} else {
		$temp_rise = "100";								
	}

	$type_cooling 			= "AN";
	$type_cooling1 			= "AN";
	$type_cooling2 			= "";
	$rate_capacity 			= $_POST['rate_capacity'];
	$tap_changer 			= "Off Load Tap Changer";
	$no_tap 				= "5";
	$no_phase 				= "3";
	$frequency 				= "50";
	$primary_voltage 		= "20000";
	$secondary_voltage 		= "400";
	$vektor_group 			= $_POST['vektor_group'];	
	$type_winding 			= $_POST['type_winding'];

	//PROTECTION & ACCESORIES
	if ($_POST["dig_thermos"] == "") {	
		$dig_thermo = $data_detail["dig_thermo"];														
	} else if ($_POST["dig_thermos"] == "NO") {
		$dig_thermo = 'N/A';
	} else {
		$dig_thermo = $_POST["dig_thermo"];									
	}

	if ($_POST["enclosures"] == "") {	
		$enclosure = $data_detail["enclosure"];														
	} else if ($_POST["enclosures"] == "NO") {
		$enclosure = 'NO';
	} else {
		$enclosure = $_POST["enclosure_u"];									
	}

	$cool_fans 	= "NO";

	// TRANSFORMER TESTING - SPECIAL TEST
	$sp_slt 			= $_POST['sp_slt'];
	$sp_pd 				= $_POST['sp_pd'];
	$sp_zero 			= $_POST['sp_zero'];

	// TRANSFORMER TESTING - TYPE TEST
	$test_temp_rise 	= $_POST['test_temp_rise'];
	$test_impulse 		= $_POST['test_impulse'];

	//NOTES
	$notes1 = $_POST['notes1'];
	$notes2 = $_POST['notes2'];
	$notes3 = $_POST['notes3'];
			
	mysqli_query($GLOBALS["___mysqli_ston"], "insert into oil_prospect set noprospect='$no',service_condition='".$_POST["service_condition"]."',altitude='$altitude',ambient_temp='$ambient_temp',standarisasi='$standarisasi',category='$category',type_trafo='$type_trafo',rate_capacity='".$_POST["rate_capacity"]."',no_phase='$no_phase',frequency='$frequency',primary_voltage='$primary_voltage',secondary_voltage='$secondary_voltage',vektor_group='".$_POST["vektor_group"]."',type_winding='".$_POST["type_winding"]."',temp_rise='$temp_rise',type_cooling='$type_cooling',tap_changer='$tap_changer',no_tap='$no_tap',enclosure='$enclosure',notes1='".$_POST["notes1"]."',dig_thermo='$dig_thermo',cool_fans='$cool_fan',notes2='".$_POST["notes2"]."',notes3='".$_POST["notes3"]."',tipepracost='A',nopracost='$nopracost',tipeprospect='DRY', insulation_thermal='$insulation_thermal',type_cooling1='$type_cooling1',sp_slt='".$_POST["sp_slt"]."',sp_pd='".$_POST["sp_pd"]."',sp_zero='".$_POST["sp_zero"]."',test_temp_rise='".$_POST["test_temp_rise"]."',test_impulse='".$_POST["test_impulse"]."'");
			                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            			
			
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
		<h3><strong> <font color="blue">GENERAL CONDITION</font></strong></H3>
				<div class="form-group">
							<label class="control-label col-lg-3">Catagory</label>
								<div class="col-lg-4">															
									<input type="text" name="category" required class="form-control" value="Non Standard" disabled	/>
								</div>	
				</div>
				<div class="form-group">				
							<label class="control-label col-lg-3">Type of Transformer</label>
								<div class="col-lg-4">
								<input type="text" name='type_trafo' id = "type_trafo" required class="form-control" value="Dry Cast Resin" disabled	/>
								</div>	
				</div>			
						
				<center><div class="form-group">
							<label class="control-label col-lg-3">Service Condition</label>
								<div class="col-lg-4">															
								<select name='service_condition' id = "service_condition" autofocus required class="form-control" >
								<option value=''></option>
								<option value='Outdoor'>Outdoor &lt Under Shelter &gt</option>		
								<option value='Indoor'>Indoor</option>								
								</select>	
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Altitude</label>
								<div class="col-lg-3">
								<input type="text" name='altitude' id = "altitude" required class="form-control" value="Standard &nbsp;&lt&nbsp;1000" disabled	/>
								</div>								
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Ambient Temp</label>	
							<div class="col-lg-3">
								<input type="text" name='ambient' id = "ambient" required class="form-control" value="Standard&nbsp;&lt&nbsp;40" disabled	/>
								</div>	
								
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">International Standard</label>	
							<div class="col-lg-3">
							<input type="text" name="standarisasi"  disabled class="form-control" value="IEC 60076" disabled />	
								</div>
				</div>
				
				</div>
				<div class="container">
				<h3><font color="brown">ELECTRICAL CHARATERISTIC</font></H3>
				<div class="form-group">
							<label class="control-label col-lg-3"> Insulation System Thermal Class</label>
								<div class="col-lg-3">
								<input type="text" id="insulation" name="insulation"   disabled class="form-control" value="Class F (155 C)" disabled />
								</div>
									
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Temperature Rise</label>
								<div class="col-lg-1">													
								<input type="text"  id="temp_rise" name="temp_rise" autofocus required class="form-control" readonly value="100" />
								</div>
							
									<div class="col-lg-2">
									<input type="button" id="topi3" value="Kustom" name = "btnPassport91" class="btn btn-primary" />
									<input type="button" id="topi4" value="Batal" name = "btnPassport91" class="btn btn-info" />
									
								</div>
								<div class="col-lg-1" id="dvPassport91" style="display: none">	
									<input type="text"  id="kustom_temp_rise" name="kustom_temp_rise"  autofocus class="form-control" placeholder = "Ubah "/>
								</div>
									
				</div>
				
				
				<div class="form-group">
							<label class="control-label col-lg-3">Type of Cooling</label>
								<div class="col-lg-2">
								<input type="text"  name='type_cooling' id = "type_cooling"  autofocus class="form-control" value= "AN &nbsp;&lt&nbsp; Air Natural &nbsp;&gt;"/>
								</div>
				</div>
				
				<div class="form-group">
							<label class="control-label col-lg-3">Rate Capacity</label>
								<div class="col-lg-2">								
								<select name="rate_capacity" min="1"  class="form-control" required >
								<option value='<?php echo $data_detail['rate_capacity'] ?>' selected="selected">-- <?php echo $data_detail['rate_capacity'] ?> --</option>
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
								<input type="text"  readonly class="form-control" value="AN" >
								</div>
				</div>
			
				<div class="form-group">
							<label class="control-label col-lg-3">Tap Changer</label>
								<div class="col-lg-2">	
								<input type="text"  name='tap_changer' id = "tap_changer"  value="Off Load Tap Changer" disabled  class="form-control" />
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">No Of Tap</label>
								<div class="col-lg-1">													
								<input type="number"  name="no_tap" value="5" disabled id="txt_no_tap" autofocus required class="form-control" placeholder="No Of Tap" >
								</div>
								 <div class="col-lg-1">
									<span class="form-control" style="color: RED; background-color: white;"><strong>Taps</strong></span>
								</div>
								
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">No Of Phase</label>
							<div class="col-lg-1">
								<input type="text"  name='no_phase' id = "no_phase"  value="3" disabled class="form-control" />
								</div>	
								 <div class="col-lg-1">
									<span class="form-control" style="color: RED; background-color: white;"><strong>Phase</strong></span>
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Frequency</label>
								<div class="col-lg-1">
								<input type="text"  id="selectBoxon" name="selectBoxon" value="50" disabled class="form-control" />
								</div> 
								 <div class="col-lg-1">
									<span class="form-control" style="color: RED; background-color: white;"><strong>Hz</strong></span>
								</div>
								
				</div>
				
				<div class="form-group">
							<label class="control-label col-lg-3">Primary Voltage</label>
								<div class="col-lg-1">
								<input type="text"  name="primary_voltage" value="20000" autofocus required class="form-control" disabled />
								</div>	
								 <div class="col-lg-1">
									<span class="form-control" style="color: RED; background-color: white;"><strong>Volt</strong></span>
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Secondary Voltage&nbsp</label>
								<div class="col-lg-1">
								<input type="number"  name="secondary_voltage" value="400" disabled autofocus required class="form-control" />
								</div>	
								 <div class="col-lg-1">
									<span class="form-control" style="color: RED; background-color: white;"><strong>Volt</strong></span>
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Vektor Group</label>								
								<div class="col-lg-2">															
								<select name='vektor_group'  autofocus required class="form-control"  >
								<option value='<?php echo $data_detail['vektor_group'] ?>' selected="selected">-- <?php echo $data_detail['vektor_group'] ?> --</option>
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
								<select name='type_winding' id = "type_winding" autofocus required class="form-control"  >
								<option value='<?php echo $data_detail['type_winding'] ?>' selected="selected">-- <?php echo $data_detail['type_winding'] ?> --</option>
								<option value='Cu-Cu'>Cu-Cu</option>
								<option value='Al-Al'>Al-Al</option>
								</select>
								</div>
				</div>
				
			</div>	
			
		<div class="container">
		<h3><font color="blue">PROTECTION & ACCESORIES</font></h3>
			<div class="form-group">
				<label class="control-label col-lg-3">Digital Thermometer</label>
				<div class="col-lg-1">														
					<select name="dig_thermos" id="ddlModels5" class="form-control" >
						<option value=''></option>
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>
				<div class="col-lg-3">
					<select name = "dig_thermo" id="txtOther5"  disabled="disabled"  class="form-control" >
						<option value="<?php echo $data_detail['dig_thermo'] ?>" selected="selected">-- <?php echo $data_detail['dig_thermo'] ?> --</option>
						<option value="C/W Contact">With C/W Contact</option>								
						<option value="NO Contact">NO Contact</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">Enclosure</label>
				<div class="col-lg-1">														
					<select name="enclosures" id="ddlModels7" class="form-control" >
						<option value=''></option>
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>
				<div class="col-lg-3">
					<strong><input type="text" value="<?php echo $data_detail['enclosure'] ?>" autofocus required class="form-control" readonly /></strong>
					<select name = "enclosure_u" id="txtOther7"  disabled="disabled"  class="form-control" >
					</select>								
				</div>	
			</div>

			<div class="form-group">
				<label id="bacotan" class="control-label col-lg-3">Cooling Fans</label>
				<div class="col-lg-1">
					<strong><input type="text"  readonly  name="cool_fans" id="cool_fan" value="<?php echo $data_detail['cool_fans'] ?>" class="form-control" ></strong>
				</div>
			</div>
		</div>
		<div class="container">
		<h3><font color="blue">TRANSFORMER TESTING </font></h3>	
			<div class="form-group">
				<label class="control-label col-lg-3"><font color="blue">SPECIAL TEST</font></label>
			</div>	

			<div class="form-group">
				<label class="control-label col-lg-3">SOUND LEVEL TEST</label>
				<div class="col-lg-1">
					<select name="sp_slt"  required class="form-control" >	
						<option value="<?php echo $data_detail['sp_slt'] ?>" selected="selected"><?php echo $data_detail['sp_slt'] ?></option>		
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>
				
			<div class="form-group">
				<label class="control-label col-lg-3">PARTIAL DISCHARGER </label>
				<div class="col-lg-1">														
					<select name="sp_pd"  required class="form-control" >									
						<option value="<?php echo $data_detail['sp_pd'] ?>" selected="selected"><?php echo $data_detail['sp_pd'] ?></option>		
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	

			<div class="form-group">
				<label class="control-label col-lg-3">ZERO SEQUENCE IMPEDANCE</label>
				<div class="col-lg-1">														
					<select name="sp_zero"  required class="form-control" >									
						<option value="<?php echo $data_detail['sp_zero'] ?>" selected="selected"><?php echo $data_detail['sp_zero'] ?></option>	
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
					<select name="test_temp_rise"  required class="form-control" >	
				     	<option value="<?php echo $data_detail['test_temp_rise'] ?>" selected="selected"><?php echo $data_detail['test_temp_rise'] ?></option>
						<option value="NO">NO</option>								
						<option value="YES">YES</option>
					</select>
				</div>							
			</div>	

			<div class="form-group">
				<label class="control-label col-lg-3">LIGHTNING IMPULSE</label>
				<div class="col-lg-1">														
					<select name="test_impulse"  required class="form-control" >
					    <option value="<?php echo $data_detail['test_impulse'] ?>" selected="selected"><?php echo $data_detail['test_impulse'] ?></option>
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
					<textarea  id ="notes2" name="notes2" class="form-control" placeholder="Catatan" rows="4" cols="50" ><?php echo $data_detail['notes2'] ?></textarea>
				</div>	
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Catatan 3</label>
				<div class="col-lg-4">
					<textarea  id ="notes3" name="notes3" class="form-control" placeholder="Catatan" rows="4" cols="50" ><?php echo $data_detail['notes3'] ?></textarea>
				</div>	
			</div>
		</div>

		<div class="form-group">
			<div class="form-actions no-margin-bottom"  style="text-align:center;">
				<input type="submit" name="pasien" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIMPAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="btn btn-primary" />   
			</div>	
		</div>
		<br><br>		
					
	</div>
</div>
</body>
</html>


    
    
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
    $(function () {
        $("#ddlModels8").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther8").removeAttr("disabled");
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
    $(function () {
        $("#ddlModels").change(function () {
            if ($(this).val() == "YES") {
                $("#txtOther").removeAttr("disabled");
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
          	url: "get_enclosure.php",
          	cache: false, 
          	success: function(msg){
              $("#txtOther7").html(msg);
			  $('#txtOther7').focus();
            }
	})});
</script>








<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport91]").click(function () {
            if ($(this).val() == "Kustom") {
                $("#dvPassport91").show();
				 $("#dvPassport91").focus();			 
				 
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




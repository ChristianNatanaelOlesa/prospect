
<?php
session_start();
include_once("library/koneksi.php");
include_once("library/koneksi2.php");
include ("theme/header.php");
$tgl = date("Y-m-d H:i:s");
$no=$_GET['noprospect'];
$meong = mysqli_query($GLOBALS["___mysqli_ston"], "select * from h_rpospect where noprospect='$no' ");
$meongDb = mysqli_fetch_assoc($meong);
$sales= $meongDb['sales'];

if (isset($_POST["pasien"]))
{
	if($_POST["pasien"]){
							
							
							$godekan = mysqli_query($GLOBALS["___mysqli_ston"], "select * from urutprospect where noprospect='$no' ");
							$godekanDb = mysqli_fetch_assoc($godekan);						
							$kome = $godekanDb['noprospect'];
							$numenor = $godekanDb['nomor'];
							
							   if ($no == $kome){
							      $nomorurutan=$numenor+1;
								  mysqli_query($GLOBALS["___mysqli_ston"], "update urutprospect set nomor='$nomorurutan', noprospect='$no', lastno='$numenor' where noprospect='$kome'"); 
							      }
							   else {
								  $nomorurutan=1; 								  
								  mysqli_query($GLOBALS["___mysqli_ston"], "insert into urutprospect (nomor, noprospect) values ('$nomorurutan','$no') ");
								  
								  }
								$nopracost=	$no."-".$nomorurutan; 
									
							
							//problem//
							if ($_POST["altitude_master"]=="other")   {								
								$altitude=$_POST["altitude"];
							}
							else
							{
								$altitude='<1000';
							}
							
							if ($_POST["ambient_temp_master"]=="other") {								
								$ambient_temp=$_POST["ambient_temp"];
							}
							else
							{
								$ambient_temp='<40';
							}	

							//problem//
							
							$standarisasi=($_POST["standarisasi"]);
							
							
							if ($_POST["temp_rise"]=="Other") {							
								$temp_rise=($_POST["temp_rise2"]);
							}
							else if ($_POST["kustom_temp_rise"]=="") 
							{
								$temp_rise=($_POST["temp_rise"]);
							}
							else
							{
								$temp_rise=($_POST["kustom_temp_rise"]);							
							}
							
							
							
							if ($_POST["selectBoxon"]=="Other") {							
								$frequency=($_POST["frequency"]);								
							}
							else
							{
								$frequency=($_POST["selectBoxon"]);									
							}
							
							
							
							if ($_POST["dig_thermos"]=="YES") {							
								$dig_thermo=($_POST["dig_thermo"]);								
							}
							else
							{
								$dig_thermo="N/A";									
							}
							
							if ($_POST["insulation"]=="Other") {							
							$insulation_thermal=($_POST["insulation_thermal"]);
							}
							else
							{
								$insulation_thermal=($_POST["insulation"]);								
							}
							
							If ($_POST["type_cooling"]=="AN"){
								$type_cooling1="AN";	
								$type_cooling2="";	
								$cool_fan="NO";
								$rate_capacity2=0;
								}
						    if ($_POST["type_cooling"]=="ANAF"){
								$type_cooling1="AN";
								$type_cooling2="AF";
								$cool_fan="YES";
								$rate_capacity2=$_POST['rate_capacity2'];
							    }
								
							$category="Non Standard";	
							
							if ($_POST["enclosures"]=="NO") {							
								$enclosure="NO";								
							}
							else
							{
								$enclosure=($_POST["enclosure"]);									
							}
							$project=addslashes($_POST['project']);
							$customer=addslashes($_POST['customer']);
							$category="Non Standard";
			
			
			mysqli_query($GLOBALS["___mysqli_ston"], "insert into oil_prospect set noprospect='$no',service_condition='".$_POST["service_condition"]."',altitude='$altitude',ambient_temp='$ambient_temp',standarisasi='$standarisasi',category='$category',type_trafo='".$_POST["type_trafo"]."',rate_capacity='".$_POST["rate_capacity"]."',no_phase='".$_POST["no_phase"]."',frequency='$frequency',primary_voltage='".$_POST["primary_voltage"]."',secondary_voltage='".$_POST["secondary_voltage"]."',vektor_group='".$_POST["vektor_group"]."',type_winding='".$_POST["type_winding"]."',temp_rise='$temp_rise',type_cooling='".$_POST["type_cooling"]."',tap_changer='".$_POST["tap_changer"]."',no_tap='".$_POST["no_tap"]."',enclosure='$enclosure',notes1='".$_POST["notes1"]."',dig_thermo='$dig_thermo',cool_fans='$cool_fan',notes2='".$_POST["notes2"]."',notes3='".$_POST["notes3"]."',tipepracost='A',nopracost='$nopracost',tipeprospect='DRY', insulation_thermal='$insulation_thermal',type_cooling1='$type_cooling1',type_cooling2='$type_cooling2',rate_capacity2='$rate_capacity2',sp_slt='".$_POST["sp_slt"]."',sp_pd='".$_POST["sp_pd"]."',sp_zero='".$_POST["sp_zero"]."',test_temp_rise='".$_POST["test_temp_rise"]."',test_impulse='".$_POST["test_impulse"]."'");
			                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
			
			//mysqli_query($GLOBALS["___mysqli_ston"], "update urutso set nomor='$no', noprospect='$no', lastno='".$gendutDb['nomor']."' where tahun='$tahun'"); 
			
			
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
		<h2><strong> <font color="red">PROSPECT SALES TRAFO DRY NON STANDARD</font></strong></h2>	
	</header>
	</div>	
		
		
		<div class="body">
			<form action="" method="post" class="form-horizontal" name='orangtua'>
			<div class="container">
				<div class="form-group">
							<label class="control-label col-lg-3">No Id </label>
							<div class="col-lg-4">
								<input type="text" Readonly name="noprospect" autofocus required class="form-control "value="<?php echo $no; ?>"  >
							</div>	
				</div>
				<div class="form-group">								
							<label  class="control-label col-lg-3">Tahun Prospect</label> 
							<div class="col-lg-4">								
								 <input type="text" readonly name="Tahun" autofocus required class="form-control" value="<?php echo $meongDb['tahun'];  ?>"  >								  
							</div>	
				</div>			
				<div class="form-group">	
							<label class="control-label col-lg-3">Nama Sales</label>																					
							<div class="col-lg-4">
								<input type="text" Readonly name="sales" autofocus required class="form-control" value="<?php echo $meongDb['sales'];  ?> " >
							</div>	
				</div>
				<div class="form-group">	
							<label class="control-label col-lg-3">Segmen Penjualan </label>
							<div class="col-lg-4">															
								<input type="text" readonly name='segment' id = "segment" autofocus required class="form-control" value="<?php echo $meongDb['segment'];  ?>" >
									
							</div>	
				</div>
				<div class="form-group">	
							<label class="control-label col-lg-3">Sub Segmen Penjualan </label>
							<div class="col-lg-4">															
								<input type="text" readonly name='sub_segment' id = "sub_segment" autofocus required class="form-control" value="<?php echo $meongDb['sub_segment'];  ?>" >	
							</div>	
				</div>
				
				<div class="form-group">
							<label class="control-label col-lg-3">Customer </label>
							<div class="col-lg-4">
								<input type="text" readonly name='customer' id = "customer" autofocus required class="form-control" value="<?php echo $meongDb['customer'];  ?>" >
							</div>	
				</div>
				
				
				<div class="form-group">								
							<label class="control-label col-lg-3">Project</label>
							<div class="col-lg-8">
								<input type="text" readonly name='project' id = "project" autofocus required class="form-control" value="<?php echo $meongDb['project'];  ?>" >
							</div>								
				</div>
				
				<div class="form-group">						
							<label class="control-label col-lg-3">Status Stage</label>
							<div class="col-lg-4">															
								<input type="text" readonly name='priority' id = "priority" autofocus required class="form-control" value="<?php echo $meongDb['priority'];  ?>" >
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
								<select name='type_trafo' id = "type_trafo" autofocus required class="form-control"  >
								<option value=''></option>								
								<option value='Dry Cast Resin'>Dry Cast Resin</option> 
								<option value='Dry Non Resin'>Dry Non Resin</option>				
								</select>	
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
								<select name="altitude_master" id="selectBox" onchange="changeFunc();"class="form-control" required >
								<option value=''></option>
								<option value="<1000">Standard &nbsp;&lt&nbsp;1000</option>								
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
								<select name="ambient_temp_master" id="selectBoxes" onchange="changeFunction();"class="form-control" required >
								<option value=''></option>
								<option value="<40">Standard&nbsp;&lt&nbsp;40&deg;&nbsp;C</option>								
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
								
								<select name='standarisasi' id = "standarisasi" autofocus required onchange ="changeFunctional();" class="form-control"  >
								<option value=''></option>	
								</select>	
								</div>
				</div>
				</div>
				<div class="container">
				<h3><font color="brown">ELECTRICAL CHARATERISTIC</font></H3>
				<div class="form-group">
							<label class="control-label col-lg-3"> Insulation System Thermal Class</label>
								<div class="col-lg-3">
								<select id="insulation" name="insulation" onchange="changeFunctional();"class="form-control" required >
								<option value=''></option>							
								</select>
								</div>
								
								<div class="col-lg-1">
								<input name="insulation_thermal"   class="form-control" type="text" style="display: none" id="textboxam">
								</div>
									
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Temperature Rise</label>
								<div class="col-lg-1">													
								<input type="text"  id="temp_rise" name="temp_rise" autofocus required class="form-control" readonly />
								</div>
								<div class="col-lg-1">
								<input name="temp_rise2"  placeholder="Please Write" class="form-control" type="text" style="display: none" id="textboxal">
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
								<div class="col-lg-4">															
								<select name='type_cooling' id = "type_cooling" onchange="somay();"  autofocus required class="form-control"  >
								<option value=''></option>
									
								<option value='AN'>AN &nbsp;&lt&nbsp; Air Natural &nbsp;&gt;</option>
								<option value='ANAF'>ANAF &nbsp;&lt Air Naural Air Force &nbsp&gt;</option>
								</select>
								</div>
				</div>
				
				<div class="form-group">
							<label class="control-label col-lg-3">Rate Capacity</label>
								<div class="col-lg-2">								
								<input type="number" min="1" name="rate_capacity" autofocus required class="form-control" placeholder="KVA" >
								</div>
								<div class="col-lg-2">								
								<input type="text"  id="duadua" readonly class="form-control" placeholder="KVA" >
								</div>
				</div>
				<div class="form-group">
								<div class="col-lg-3">	
								</div>								
								<div class="col-lg-2">								
								<input type="number" min="1" name="rate_capacity2" id="rc2" required autofocus  class="form-control" placeholder="KVA" style="display: none"  />
								</div>
								<div class="col-lg-2">								
								<input type="text"  id="tigatiga" readonly class="form-control" placeholder="KVA" style="display: none" >
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Tap Changer</label>
								<div class="col-lg-4">															
								<select name='tap_changer' id = "tap_changer"  autofocus required class="form-control" required >
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
								<input type="number"  min="1" name="no_tap" id="txt_no_tap" autofocus required class="form-control" placeholder="No Of Tap" >
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">No Of Phase</label>
								<div class="col-lg-4">															
								<select name='no_phase' id = "no_phase" autofocus required class="form-control"  >
								<option value=''></option>
								<option value='1'>1 (Single) </option>		
								<option value='3'>3 (Three) </option>													
								</select>	
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Frequency</label>
								<div class="col-lg-3">								
								<select id="selectBoxon" name="selectBoxon" onchange="Fuckpop();"class="form-control" required >
								<option value=''></option>
								<option value="50">50 Hz</option>	
								<option value="60">60 Hz</option>									
								<option value="Other">Other</option>
								</select>
								</div> 
								<div class="col-lg-1">
								<input name="frequency"   class="form-control" type="text" style="display: none" id="textboxon" placeholder="Hz" >
								</div>	
								
				</div>
				
				<div class="form-group">
							<label class="control-label col-lg-3">Primary Voltage</label>
								<div class="col-lg-4">
								<input type="number" min="1" name="primary_voltage" autofocus required class="form-control" placeholder="Volt" >
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Secondary Voltage&nbsp</label>
								<div class="col-lg-4">
								<input type="number" min="1" name="secondary_voltage" autofocus required class="form-control" placeholder="Volt" >
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Vektor Group</label>								
								<div class="col-lg-4">															
								<select name='vektor_group' id = "vektor_group" autofocus required class="form-control"  >
								<option value=''></option>	
								</select>									
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Type of Winding</label>
								<div class="col-lg-4">															
								<select name='type_winding' id = "type_winding" autofocus required class="form-control"  >
								<option value=''></option>
								<option value='Cu-Cu'>Cu-Cu</option>	
								<option value='Cu-Al'>Cu-Al</option>
								<option value='Al-Al'>Al-Al</option>	
								<option value='Al-Cu'>Al-Cu</option>
								</select>
								</div>
				</div>
				
			
			
				
				
			</div>			
			<div class="container">
			<h3> <font color="blue">PROTECTION & ACCESORIES</font></H3>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Digital Thermometer</label>
								<div class="col-lg-1">														
								<select name="dig_thermos" id="ddlModels5" required class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
								</select>
								</div>
								<div class="col-lg-3">
									<select name = "dig_thermo" id="txtOther5"  disabled="disabled"  class="form-control" >
									<option value=""></option>
									<option value="C/W Contact">With C/W Contact</option>								
									<option value="NO Contact">NO Contact</option>
									</select>
								</div>
				</div>
						<center><div class="form-group">
							<label class="control-label col-lg-3">Enclosure</label>
								<div class="col-lg-1">														
								<select name="enclosures" id="ddlModels7" required class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
								</select>
								</div>
								<div class="col-lg-3">
									<select name = "enclosure" id="txtOther7"  disabled="disabled"  class="form-control" >
																	
								</select>								
								</div>	
				</div>
				<center><div class="form-group">
							<label id="bacotan" class="control-label col-lg-3">Cooling Fans</label>
								<div class="col-lg-1">														
								<input type="text"  readonly  name="kol" id="cool_fan"  class="form-control" >
								</div>
								
				</div>
			</div>
			<div class="container">
			<h3> <font color="blue">TRANSFORMER TESTING </font></H3>	
			<div class="form-group">
				<label class="control-label col-lg-3"><font color="blue">SPECIAL TEST</font></label>
			</DIV>			
				<div class="form-group">
							<label class="control-label col-lg-3">SOUND LEVEL TEST</label>
								<div class="col-lg-1">														
								<select name="sp_slt"  required class="form-control" >	
									 <option value=""></option>		
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
								</select>
								</div>							
				</div>
				
				<div class="form-group">
							<label class="control-label col-lg-3">PARTIAL DISCHARGER </label>
								<div class="col-lg-1">														
								<select name="sp_pd"  required class="form-control" >									
									 <option value=""></option>		
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
								</select>
								</div>							
				</div>	
						<div class="form-group">
							<label class="control-label col-lg-3">ZERO SEQUENCE IMPEDANCE</label>
								<div class="col-lg-1">														
								<select name="sp_zero"  required class="form-control" >									
									<option value=""></option>	
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
								</select>
								</div>							
				</div>	
				<div class="form-group">
				<label class="control-label col-lg-3"><font color="RED">TYPE TEST</font></label>
			</DIV>			
				<div class="form-group">
							<label class="control-label col-lg-3">TEMPERATURE RISE</label>
								<div class="col-lg-1">														
								<select name="test_temp_rise"  required class="form-control" >	
							     	<option value=""></option>									
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
								</select>
								</div>							
				</div>	
				<div class="form-group">
							<label class="control-label col-lg-3">LIGHTNING IMPULSE</label>
								<div class="col-lg-1">														
								<select name="test_impulse"  required class="form-control" >
								    <option value=""></option>																
							 		<option value="NO">NO</option>								
									<option value="YES">YES</option>
								</select>
								</div>							
				</div>	
			</DIV>
			
			
			<div class="container">
			<h3> <font color="blue">NOTES </font></H3>
			<div class="form-group">
							<label class="control-label col-lg-3">Catatan 1</label>
								<div class="col-lg-4">
								<textarea  id ="notes1" name="notes1"  class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
								</div>	
			</div>
			<div class="form-group">
							<label class="control-label col-lg-3">Catatan 2</label>
								<div class="col-lg-4">
								<textarea  id ="notes2" name="notes2" class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
								</div>	
			</div>
			<div class="form-group">
							<label class="control-label col-lg-3">Catatan 3</label>
								<div class="col-lg-4">
								<textarea  id ="notes3" name="notes3" class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea>
								</div>	
			</div>
			</div>
			<div class="form-group">
				<div class="form-actions no-margin-bottom"  style="text-align:center;">
				<input type="submit" name="pasien" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIMPAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="btn btn-primary" />   
				</div>	
			</div>
			</br></br>			
					
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
		$('#dvPassport91').hide();		
		var meong="";
		document.getElementById("kustom_temp_rise").value=meong;
		}
		else if ((tes=="ANSI/IEEE C57.12") && (tas=="Class H (180 C)"))
		{ var tos = "115";
		$('#dvPassport91').hide();		
		var meong="";
		document.getElementById("kustom_temp_rise").value=meong;
		}
		else if ((tes=="IEC 60076") && (tas=="Class H (180 C)"))
		{ var tos = "125";
		$('#dvPassport91').hide();	
		var meong="";
		document.getElementById("kustom_temp_rise").value=meong;
		}
		else if ((tes=="IEC 60076") && (tas=="Class F (155 C)"))
		{ var tos = "100";
		$('#dvPassport91').hide();	
		var meong="";
		document.getElementById("kustom_temp_rise").value=meong;
		}
		else if ((tes=="IEC 60076") && (tas=="Other"))
		{ var tos = "Other";
		$('#dvPassport91').hide();
		$("#kustom_temp_rise").attr("disabled", "disabled");  
		}
		else if ((tes=="ANSI/IEEE C57.12") && (tas=="Other"))
		{ var tos = "Other";
		$('#dvPassport91').hide();
		$("#kustom_temp_rise").attr("disabled", "disabled"); 
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
				document.getElementById('txtOther7').setAttribute('required','required')
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
          	url: "get_int.php",
          	cache: false, 
          	success: function(msg){
              $("#standarisasi").html(msg);
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
    <?php echo $jsArray; ?> 
    function changeValue(no_pasien){ 
    document.getElementById('nm').value = dtMhs[no_pasien].nama; 
    document.getElementById('jrsn').value = dtMhs[no_pasien].jrsn; 
    }; 

</script> 	


<script type="text/javascript">
function somay() {
var selectbotol = document.getElementById("type_cooling");
var selectedValues= selectbotol.options[selectbotol.selectedIndex].value;

var satu = document.getElementById("type_cooling").value;
		if (satu=="AN")
		{ var dua = "AN";
		var tiga ="";
		var cool_fan ="NO";
		$('#tigatiga').hide();	
		$('#rc2').hide();	
		$('#cool_fan').hide();
		$('#bacotan').hide();
		$("#rc2").attr("disabled", "disabled"); 
		}
	
		else if (satu=="ANAF")
		{ var dua = "AN";
		var tiga ="AF";
		var cool_fan ="YES";
		$('#tigatiga').show();	
		$('#rc2').show();
		$('#cool_fan').show();
		$('#bacotan').show();
		$("#cool_fan").attr("disabled", "disabled"); 
		$("#rc2").removeAttr("disabled");
		}
       
		document.getElementById("duadua").value=dua;
		document.getElementById("tigatiga").value=tiga;
		document.getElementById("cool_fan").value=cool_fan;
}
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
				document.getElementById('txt_no_tap').value = "";
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




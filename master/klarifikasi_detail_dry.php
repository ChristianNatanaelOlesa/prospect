<?php
if($_GET["nopracost"]){	
	session_start();
	include ("sambung.php");
	$oil = mysqli_query($GLOBALS["___mysqli_ston"], "select * from oil_prospect where nopracost='".$_GET["nopracost"]."'");
	$oilDb = mysqli_fetch_assoc($oil);
	$noprospect=$oilDb["noprospect"];
	$nopracost=$oilDb["nopracost"];
	$insul=trim($oilDb["insulation_thermal"]);
	$standardz=trim($oilDb["standarisasi"]);
	

	$madu = mysqli_query($GLOBALS["___mysqli_ston"], "select * from h_rpospect where noprospect='$noprospect'");
	$maduDb = mysqli_fetch_assoc($madu);
	$tanggal=$maduDb['tgl_prospect'];
	$tglbaru = date('d-m-Y', strtotime($tanggal ));
	$tanggal_sekarang = date('Y-m-d');
	

	if(isset($_POST["pasien"])){		
		include_once("sambung.php");
	
							
								
								
								
							
							if ($_POST["tulip"]=="other") {								
								$altitudex=($_POST["altitude1"]);
							}
							else
							{
								$altitudex="<1000";
							}
							
							if ($_POST["mawar"]=="other") {								
								$ambient_tempx=($_POST["ambient_temp1"]);
							}
							else
							{
								$ambient_tempx=($_POST["mawar"]);
							}
							if ($_POST["insulation"]=="Other") {							
								$insulationx=($_POST["insulation_thermal"]);
								$temp_risex=($_POST["temp_rise2"]);
							}
							else
							{
								$insulationx=($_POST["insulation"]);	
								$temp_risex=($_POST["temp_rise"]);									
							}
							
							
							
							
							if ($_POST["selectBoxon"]=="Other") {							
								$frequencyx=($_POST["frequency"]);								
							}
							else
							{
								$frequencyx=($_POST["selectBoxon"]);									
							}
							if ($_POST["dig_thermos"]=="YES") {							
								$dig_thermox=($_POST["dig_thermo1"]);								
							}
							else
							{
								$dig_thermox="N/A";									
							}
						
							
							if ($_POST["enclosures"]=="YES") {							
								$enclosurex=($_POST["enclosuret"]);								
							}
							else
							{
								$enclosurex="NO";									
							}
							if ($oilDb['enclosure_klari']==""){
								$enclosure=$oilDb["enclosure"];
							}
							else
							{
								$enclosure=$enclosurex;
							}
							
							
							
							//
							
							if ($oilDb['category_klari']==""){
								$category=$_POST["category"];
							}
							else
							{
								$category=$_POST["category1"];
							}
							if ($oilDb['type_trafo_klari']==""){
								$type_trafo=$_POST["type_trafo"];
							}
							else
							{
								$type_trafo=$_POST["type_trafo1"];
							}
							if ($oilDb['service_condition_klari']==""){
								$service_condition=$_POST["service_condition"];
							}
							else
							{
								$service_condition=$_POST["service_condition1"];
							}
							if ($oilDb['altitude_klari']=="") {
								$altitude=$_POST["altitude"];
							}
							else
							{
								$altitude=$altitudex;
							}
							
							if ($oilDb['ambient_temp_klari']=="") {
								$ambient_temp=$_POST["ambient_temp"];
							}
							else
							{
								$ambient_temp=$ambient_tempx;
							}
							
							if ($oilDb['standarisasi_klari']=="") {
								$standarisasi=$_POST["standarisasi0"];								
							}
							else
							{
								$standarisasi=$_POST["standarisasi"];
							}
							
							
							if ($oilDb['insulation_thermal_klari']=="") {
								$insulation=$_POST["insulation0"];
								
							}
							else
							{
								$insulation=$insulationx;
								
							}
							
							if ($_POST["temp_rise"]=="")
								{
								$temp_rise=$_POST["temp_rise0"];
								}
							else
								{
								$temp_rise=$temp_risex;
								}
							
							
							
							if ($oilDb['no_phase_klari']==""){
								$no_phase=$_POST["no_phase"];
							}
							else
							{
								$no_phase=$_POST["no_phase1"];
							}
							
							if ($oilDb['frequency_klari']==""){
								$frequency=$_POST["frequency"];
							}
							else
							{
								$frequency=$frequencyx;
							}
							
							if ($oilDb['primary_voltage_klari']=="") {
								$primary_voltage=$_POST["primary_voltage"];
							}
							else
							{
								$primary_voltage=$_POST["primary_voltage1"];
							}
							
							if ($oilDb['secondary_voltage_klari']=="") {
								$secondary_voltage=$_POST["secondary_voltage"];
							}
							else
							{
								$secondary_voltage=$_POST["secondary_voltage1"];
							}
							
							if ($oilDb['vektor_group_klari']=="") {
								$vektor_group=$_POST["vektor_group"];
							}
							else
							{
								$vektor_group=$_POST["vektor_group1"];
							}
							if ($oilDb['type_winding_klari']==""){
								$type_winding=$_POST["type_winding"];
							}
							else
							{
								$type_winding=$_POST["type_winding1"];
							}
													
						
							
							if ($oilDb['type_cooling_klari']==""){
								$type_coolingx=$_POST["type_cooling"];
								$type_cooling1=$_POST["type_cooling11"];
								if ($_POST["type_cooling21"]==""){
									$type_cooling2=$_POST["type_cooling21"];
								}
								else {
									$type_cooling2=$_POST["type_cooling21"];
								}
							}
							else
							{
								$type_coolingx=$_POST["type_coolingx"];								
								$type_cooling1=$_POST["type_cooling11"];
								$type_cooling2=$_POST["type_cooling21"];
								
							}
							
							
						
							 if ($_POST["cool_f"]==""){
								 $cool_fans=$oilDb['cool_fans'];
							    }
							 else {
								 $cool_fans=$_POST["cool_f"];
							 }
									
							
							
							
							
								if ( $_POST['rate_capacity1']=="")
									{ $rate_capacity1=$_POST['rate_capacity']; }
								else
									{$rate_capacity1=$_POST['rate_capacity1']; }

	
								if ($type_cooling2=="AF") {
									if ( $_POST['rate_capacity21']=="")
									{ $rate_capacity2=$_POST['rate_capacity2']; }
									else
									{$rate_capacity2=$_POST['rate_capacity21']; }}
								else
								{
									$rate_capacity2="";
								}

									
							
									
							
							
							
							if ($oilDb['tap_changer_klari']==""){
								$tap_changer=$_POST["tap_changer"];
							}
							else
							{
								$tap_changer=$_POST["tap_changer1"];
							}
							
							if ($oilDb['no_tap_klari']==""){
								$no_tap=$_POST["no_tap"];
							}
							else
							{
								$no_tap=$_POST["no_tap1"];
							}
							if ($oilDb['dig_thermo_klari']==""){
								$dig_thermo=$_POST["dig_thermo"];
							}
							else
							{
								$dig_thermo=$dig_thermox;
							}
							
						
							
							
							
							if ($oilDb['notes1_klari']==""){
								$notes1=$_POST["notes1"];
							}
							else
							{
								$notes1=$_POST["notes1_1"];
							}
							
							if ($oilDb['notes2_klari']==""){
								$notes2=$_POST["notes2"];
							}
							else
							{
								$notes2=$_POST["notes2_1"];
							}
							if ($oilDb['notes3_klari']==""){
								$notes3=$_POST["notes3"];
							}
							else
							{
								$notes3=$_POST["notes3_1"];
							}
						
				
				mysqli_query($GLOBALS["___mysqli_ston"], "update oil_prospect set category='$category',type_trafo='$type_trafo',service_condition='$service_condition',altitude='$altitude',ambient_temp='$ambient_temp',standarisasi='$standarisasi',insulation_thermal='$insulation',temp_rise='$temp_rise',rate_capacity='$rate_capacity1',rate_capacity2='$rate_capacity2',no_phase='$no_phase',frequency='$frequency',primary_voltage='$primary_voltage',secondary_voltage='$secondary_voltage',vektor_group='$vektor_group',type_winding='$type_winding',type_cooling='$type_coolingx',tap_changer='$tap_changer',no_tap='$no_tap',dig_thermo='$dig_thermo',cool_fans='$cool_fans',enclosure='$enclosure' ,notes1='$notes1',notes2='$notes2',notes3='$notes3',status=2,tgl_resp_klari='$tanggal_sekarang' ,type_cooling1='$type_cooling1',type_cooling2='$type_cooling2' where nopracost='$nopracost'");
					
				
				
				mysqli_query($GLOBALS["___mysqli_ston"], "update h_rpospect set status=2 where noprospect='$noprospect'");
				echo"<script>alert('.');window.location.href='../index_sales.php?page=klarifikasi'</script>";?>						
				<?php		
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
<body >
<div class="panel panel-default">
		<script src="../bootstrap/js/jquery.min.js"></script>	
		<section class="content-header">		
        <h2><center><strong><font color="RED">
        KLARIFIKASI DETAIL PROSPECT  DRY
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
			<h3 class="alert alert-warning text-center" role="alert"><STRONG>GENERAL CONDITION</STRONG></h3>
			</header>
			
			<div>
			<div class="form-group">
				<label class="control-label col-lg-3">Catagory</label>
				<div class="col-lg-3">															
				<strong><input type="text" name="category" readonly class="form-control" value="<?php echo $oilDb['category']; ?> " /></strong>			
				</div>
			
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport"   class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport"   class="btn btn-primary" />
				</div>
				<div class="col-lg-3" id="dvPassport" style="display: none">
				<select name='category1' id = "category1" autofocus class="form-control"   />									
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
			</div>
			
			<div class="form-group">				
				<label class="control-label col-lg-3">Type of Transformer</label>
				<div class="col-lg-3">			
				<strong><input type="text" name="type_trafo" readonly class="form-control" value="<?php echo $oilDb['type_trafo']; ?> " /></strong>				
				</div>
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport1"   class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport1"   class="btn btn-primary" />
				</div>		
								<div class="col-lg-3" id="dvPassport1" style="display: none">								
								<select name='type_trafo1' id = "type_trafo" autofocus  class="form-control"  />														
								<option value='Dry Cast Resin'>Dry Cast Resin</option> 
								<option value='Dry Non Resin'>Dry Non Resin</option>				
								</select>	
								</div>	
			</div>			
			<div class="form-group">	
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
					<input type="button" value="Edit" name = "btnPassport2"   class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport2"   class="btn btn-primary" />
				</div>		
								<div class="col-lg-3" id="dvPassport2" style="display: none">								
								<select name='service_condition1' id = "service_condition" autofocus  class="form-control"   />
								<option value='Outdoor'>Outdoor &lt Under Shelter &gt</option>		
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
				<input type="button" value="Edit" name = "btnPassport3" class="btn btn-primary"   />			
				<input type="button" value="No" name = "btnPassport3" class="btn btn-primary"   />
				</div>		
				<div class="col-lg-2" id="dvPassport3" style="display: none">								
								<select id="selectBox" name="tulip" onchange="changeFunc();"class="form-control" >						
								<option value="Standard &nbsp;&lt&nbsp;1000">Standard &nbsp;&lt&nbsp;1000</option>								
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
				<input type="button" value="Edit" name = "btnPassport4" class="btn btn-primary"   />			
				<input type="button" value="No" name = "btnPassport4" class="btn btn-primary"   />
				</div>		
				<div class="col-lg-2" id="dvPassport4" style="display: none">								
								<select id="selectBoxes" name="mawar" onchange="changeFunction();"class="form-control" >							
								<option value="Standard&nbsp;&lt&nbsp;40&deg &nbsp;C">Standard&nbsp;&lt&nbsp;40&deg;&nbsp;C</option>								
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
				<strong><input type="text" id="standarisasi0"  name="standarisasi0" readonly class="form-control" value="<?php echo $oilDb['standarisasi']; ?> " /></strong>			
				</div>		
			<div class="col-lg-2">
				<input type="button" value="Edit" name = "btnPassport5" class="btn btn-primary"    />			
				<input type="button" value="No" name = "btnPassport5" class="btn btn-primary"   />
			</div>		
			<div class="col-lg-2" id="dvPassport5" style="display: none">	
								<select name='standarisasi' id = "standarisasi" autofocus  onchange ="changeFunctional();" class="form-control"  />
								<option value=''></option>	
								</select>										
			</div>			
							
			</div>
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="standarisasi_klari" readonly class="form-control" value="<?php echo $oilDb['standarisasi_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Insulation System Thermal Class</label>																
				<div class="col-lg-3">								
				<strong><input type="text"  id="insul"  name="insulation0" readonly class="form-control" value="<?php echo $oilDb['insulation_thermal']; ?> " /></strong>			
				</div>	
				<div class="col-lg-2">
				<input type="button" value="Edit" name = "btnPassport6" class="btn btn-primary"   />			
				<input type="button" value="No" name = "btnPassport6" class="btn btn-primary"   />
				</div>		
				<div class="col-lg-2" id="dvPassport6" style="display: none">								
								<select id="insulation" name="insulation" onchange="changeFunctional();"class="form-control" >
								<option value=''></option>							
								</select>
				</div> 
								<div class="col-lg-1">
								<input name="insulation_thermal"   class="form-control" type="text" style="display: none" id="textboxam">								
								</div>
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text"  readonly class="form-control" value="<?php echo $oilDb['insulation_thermal_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			
			
			
			
			<div class="form-group">
				<label class="control-label col-lg-3">Temperature Rise</label>
				<div class="col-lg-3">													
				<strong><input type="text" name="temp_rise0" readonly class="form-control" value="<?php echo $oilDb['temp_rise']; ?> " /></strong>			
				</div>	
				<div class="col-lg-1">													
								<input type="text"  id="temp_rise" name="temp_rise"   class="form-control" readonly />
				</div>
				<div class="col-lg-1">
								<input name="temp_rise2"  placeholder="Please Write" class="form-control" type="text" style="display: none" id="textboxal">
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
					<input type="button" value="Edit" name = "btnPassport14" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport14" class="btn btn-primary" />
				</div>				
				<div class="col-lg-2" id="dvPassport14" style="display: none">
								<select name='type_coolingx'  id = "type_cooling1" onchange="somay();" autofocus class="form-control"  />	
								<option value='AN'>AN &nbsp;&lt&nbsp; Air Natural &nbsp;&gt;</option>
								<option value='ANAF'>ANAF &nbsp;&lt Air Naural Air Force &nbsp&gt;</option>
								</select>
				</div>				
			</div>	
				<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text"  name="type_cooling_klari" readonly class="form-control" value="<?php echo $oilDb['type_cooling_klari']; ?> " /></strong>			
				</div>
				</div> </br>
			
		
			<div class="form-group">
				<label class="control-label col-lg-3">Rate Capacity 1</label>
				<div class="col-lg-2">
				<strong><input type="text"  name="rate_capacity" readonly class="form-control" value="<?php echo $oilDb['rate_capacity']; ?> " /></strong>			
				</div>	
				<div class="col-lg-1">
				<input type="text"  readonly class="form-control" name="type_cooling11" value="<?php echo $oilDb['type_cooling1']; ?>"  id="duadua"  />
				</div>
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport7" class="btn btn-primary"   />			
					<input type="button" value="No" name = "btnPassport7" class="btn btn-primary"    />
				</div>				
				<div class="col-lg-3" id="dvPassport7" style="display: none">
								<input type="number" min="1" name="rate_capacity1"  id="rc5" autofocus disable  class="form-control" placeholder="KVA" />
				</div>							
			</div>		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text"  readonly class="form-control"  value="<?php echo $oilDb['rate_capacity_klari']; ?> " /></strong>	
				
				</div>
			</div> </br>
			<!-- batas -->
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
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text"   readonly class="form-control" value="<?php echo $oilDb['rate_capacity2_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			
			
			<div class="form-group">
				<label class="control-label col-lg-3">No Of Phase</label>
				<div class="col-lg-3">															
				<strong><input type="text" name="no_phase" readonly class="form-control" value="<?php echo $oilDb['no_phase']; ?> " /></strong>				
				</div>	
			<div class="col-lg-2">
				<input type="button" value="Edit" name = "btnPassport8" class="btn btn-primary"   />			
				<input type="button" value="No" name = "btnPassport8" class="btn btn-primary"   />
			</div>				
				<div class="col-lg-3" id="dvPassport8" style="display: none">
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
					<input type="button" value="Edit" name = "btnPassport9" class="btn btn-primary"   />			
					<input type="button" value="No" name = "btnPassport9" class="btn btn-primary"   />
				</div>				
						<div class="col-lg-2" id="dvPassport9" style="display: none">
								<select id="selectBoxon" name="selectBoxon" onchange="Fuckpop();"class="form-control" >								
								<option value="50">50 Hz</option>	
								<option value="60">60 Hz</option>									
								<option value="Other">Other</option>
								</select>
						</div>
								<div class="col-lg-1">
								<input name="frequency1"   class="form-control" type="text" style="display: none" id="textboxon" placeholder="Hz" >
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
					<input type="button" value="Edit" name = "btnPassport10" class="btn btn-primary"   />			
					<input type="button" value="No" name = "btnPassport10" class="btn btn-primary"    />
				</div>				
				<div class="col-lg-2" id="dvPassport10" style="display: none">
					<input type="number"  min="1" name="primary_voltage1" id="primary_voltage" autofocus class="form-control" placeholder="KV" />
				</div>				
			</div>		
		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" readonly class="form-control" value="<?php echo $oilDb['primary_voltage_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<div class="form-group">
				<label class="control-label col-lg-3">Secondary Voltage&nbsp;</label>
				<div class="col-lg-3">
				<strong><input type="text" name="secondary_voltage" readonly class="form-control" value="<?php echo $oilDb['secondary_voltage']; ?> " /></strong>			
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport11" class="btn btn-primary"   />			
					<input type="button" value="No" name = "btnPassport11" class="btn btn-primary"   />
				</div>				
				<div class="col-lg-2" id="dvPassport11" style="display: none">
					<input type="number"  name="secondary_voltage1" autofocus  class="form-control" placeholder="KV" />
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
					<input type="button" value="Edit" name = "btnPassport12" class="btn btn-primary"   />			
					<input type="button" value="No" name = "btnPassport12" class="btn btn-primary"   />
				</div>				
				<div class="col-lg-2" id="dvPassport12" style="display: none">
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
					<input type="button" value="Edit" name = "btnPassport13" class="btn btn-primary"  />			
					<input type="button" value="No" name = "btnPassport13" class="btn btn-primary"   />
				</div>				
				<div class="col-lg-2" id="dvPassport13" style="display: none">
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
				<input type="button" value="Edit" name = "btnPassport15" class="btn btn-primary"   />			
				<input type="button" value="No" name = "btnPassport15" class="btn btn-primary"   />
				</div>				
				<div class="col-lg-2" id="dvPassport15" style="display: none">
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
				<input type="button" value="Edit" name = "btnPassport16" class="btn btn-primary"   />			
				<input type="button" value="No" name = "btnPassport16" class="btn btn-primary"   />
				</div>				
				<div class="col-lg-2" id="dvPassport16" style="display: none">
					<input type="number" id="no_tap" min="0" name="no_tap1" autofocus  class="form-control" placeholder="No Of Tap" />								
				</div>				
			</div>	
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text"  name="no_tap_klari" readonly class="form-control" value="<?php echo $oilDb['no_tap_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			
			
			
			
			
			
			<div class="form-group">
				<label class="control-label col-lg-3">Digital Thermometer</label>
				<div class="col-lg-3">
				<strong><input type="text" name="dig_thermo" readonly class="form-control" value="<?php echo $oilDb['dig_thermo']; ?> " /></strong>			
				</div>
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport17" class="btn btn-primary"    />			
					<input type="button" value="No" name = "btnPassport17" class="btn btn-primary"   />
				</div>	
				<div class="col-lg-1" id="dvPassport17" style="display: none">
					<select name="dig_thermos" id="ddlModels1"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
					</select>
				</div>
				<div class="col-lg-2">
									<select name = "dig_thermo1" id="txtOther1"  disabled="disabled" style="display: none"  class="form-control" >
									<option value=''></option>
									<option value="C/W Contact">With C/W Contact</option>								
									<option value="NO Contact">NO Contact</option>
									</select>								
				</div>
			</div>	
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="dig_thermo_klari" readonly class="form-control" value="<?php echo $oilDb['dig_thermo_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
						
				
			<div class="form-group">
				<label class="control-label col-lg-3">Enclosure</label>								
				<div class="col-lg-3">
				<strong><input type="text" name="enclosure" readonly class="form-control" value="<?php echo $oilDb['enclosure']; ?> " /></strong>										
				</div>	
				<div class="col-lg-2">
					<input type="button" value="Edit" name = "btnPassport19" class="btn btn-primary"   />			
					<input type="button" value="No" name = "btnPassport19" class="btn btn-primary"   />
				</div>	
					<div class="col-lg-1" id="dvPassport19" style="display: none">
									<select name="enclosures" id="ddlModels7"  class="form-control" >
									<option value=''></option>
									<option value="NO">NO</option>								
									<option value="YES">YES</option>
									</select>
					</div>
					<div class="col-lg-2" >
									<select name = "enclosuret" id="txtOther7"   class="form-control" style="display: none" >
									<option value=""></option>									
									</select>							
					</div>
			</div>
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="enclosure_klari" readonly class="form-control" value="<?php echo $oilDb['enclosure_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			<div class="form-group">
				<label class="control-label col-lg-3">Cooling Fans</label>
				<div class="col-lg-3">
				<strong><input type="text" name="cool_fans" readonly class="form-control" value="<?php echo $oilDb['cool_fans']; ?> " /></strong>										
				</div>
				<div class="col-lg-2">
				
				</div>	
				<div class="col-lg-1"  style="display: none">
			
				</div>
				<div class="col-lg-1" >
							<strong><input type="text" name="cool_f" readonly class="form-control"id="cool_fan" /> </strong>								
				</div>
			</div>	
		
			<div class="form-group">	
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-8">															
				<strong><input type="text" name="cool_fans_klari" readonly class="form-control" value="<?php echo $oilDb['cool_fans_klari']; ?> " /></strong>			
				</div>
			</div> </br>
			
			<h3 class="alert alert-success text-center" role="alert"><strong>NOTES</strong></h3>
			</header>
		
			<div class="form-group">
				<label class="control-label col-lg-3">Catatan 1</label>
				<div class="col-lg-9">
				<strong><input type="text" name="notes1" readonly class="form-control" value="<?php echo $oilDb['notes1']; ?> " /></strong>
				</div>
			</div>		
			<div class="form-group">
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-9">															
				<strong><input type="text" name="notes1_klari" readonly class="form-control" value="<?php echo $oilDb['notes1_klari']; ?> " /></strong>			
				</div>			
			</div>
			<div class="form-group">
				<div class="control-label col-lg-3">
					<input type="button" value="Edit" name = "btnPassport20" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport20" class="btn btn-primary" />
				</div>
				<div class="col-lg-9" id="dvPassport20" style="display: none">
					<input type="text"  name="notes1_1" autofocus  class="form-control" placeholder="klarifkasi anda"  />
				</div>				
			</div>
			</br>
			
			
			
			<div class="form-group">
				<label class="control-label col-lg-3">Catatan 2</label>
				<div class="col-lg-9">								
				<strong><input type="text" name="notes2" readonly class="form-control" value="<?php echo $oilDb['notes2']; ?> " /></strong>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
				<div class="col-lg-9">															
				<strong><input type="text" name="notes2_klari" readonly class="form-control" value="<?php echo $oilDb['notes2_klari']; ?> " /></strong>			
				</div>
			</div>
			<div class="form-group">
				<div class="control-label col-lg-3">
					<input type="button" value="Edit" name = "btnPassport21" class="btn btn-primary" />			
					<input type="button" value="No" name = "btnPassport21" class="btn btn-primary" />
				</div>
				<div class="col-lg-9" id="dvPassport21" style="display: none">
					<input type="text"  name="notes2_1" autofocus  class="form-control" placeholder="klarifkasi anda"  />
				</div>				
			</div>
			</br>
			
			<div class="form-group">
			<label class="control-label col-lg-3">Catatan 3</label>
			<div class="col-lg-9">								
			<strong><input type="text" name="notes3" readonly class="form-control" value="<?php echo $oilDb['notes3']; ?> " /></strong>
			</div>	
		</div>
		<div class="form-group">
			<label class="control-label col-lg-3"><font color="blue">Engineer's notes</font></label>
			<div class="col-lg-9">															
			<strong><input type="text" name="notes3_klari" readonly class="form-control" value="<?php echo $oilDb['notes3_klari']; ?> " /></strong>			
			</div>
		</div>
		
		<div class="form-group">
			<div class="control-label col-lg-3">
				<input type="button" value="Edit" name = "btnPassport23" class="btn btn-primary" />			
				<input type="button" value="No" name = "btnPassport23" class="btn btn-primary" />
			</div>
			<div class="col-lg-9" id="dvPassport23" style="display: none">
					<input type="text"  name="notes3_1" autofocus  class="form-control" placeholder="klarifkasi anda"  />
			</div>				
		</div>
		</br>
			
		
		<hr size="12px">
		<div class="form-actions margin-bottom" style="text-align:center;">
			<input type="submit" name="pasien" value="SELESAI" class="btn btn-danger"  />         <a href="../index_sales.php?page=klarifikasi" class="btn btn-warning" >BATAL</a>
		</div>
		
	</form>


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
				  document.getElementById('standarisasi').setAttribute('required','required')				 
				  var tosa = "<?php echo $insul; ?>";
				  document.getElementById("insulation").value=tosa;
            } else {
                $("#dvPassport5").hide();				
				
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
				 document.getElementById('insulation').setAttribute('required','required')
				 var toba = "<?php echo $standardz; ?>";
				  document.getElementById("standarisasi").value=toba;
			
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
            } else {
                $("#dvPassport9").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnPassport10]").click(function () {
            if ($(this).val() == "Edit") {
                $("#dvPassport10").show();
				 $("#primary_voltage").focus();				
				 document.getElementById('primary_voltage').setAttribute('required','required')
            } else {
                $("#dvPassport10").hide();
				 document.getElementById('primary_voltage').setAttribute('')
				
				
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
            } else {
                $("#dvPassport11").hide();
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
				 document.getElementById('vektor_group1').setAttribute('required','required')
            } else {
                $("#dvPassport12").hide();
				 document.getElementById('vektor_group1').setAttribute('')
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
            } else {
                $("#dvPassport13").hide();
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
            } else {
                $("#dvPassport15").hide();
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
				document.getElementById('no_tap').setAttribute('required','required')
            } else {
                $("#dvPassport16").hide();
				 document.getElementById('no_tap').setAttribute('')
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


<script type="text/javascript"> <!--altitude-->
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

<script type="text/javascript"> <!--ambient temp-->
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
	$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "../get_int.php",
          	cache: false, 
          	success: function(msg){
              $("#standarisasi").html(msg);
            }
        });
 
      	
      });
	  $(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "../get_insulation.php",
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

		
		if ((tes=="ANSI/IEEE C57.12" ) && (tas=="Class F (155 C)"  ))
		{ var tos = "90";
		}
		else if ((tes=="ANSI/IEEE C57.12" ) && (tas=="Class H (180 C)" ))
		{ var tos = "115";
		}
		else if ((tes=="IEC 60076" ) && (tas=="Class H (180 C)" ))
		{ var tos = "125";
		}
		else if ((tes=="IEC 60076" ) && (tas=="Class F (155 C)" ))
		{ var tos = "100";
		}
		else if ((tes=="IEC 60076" ) && (tas=="Other" ))
		{ var tos = "Other";
		}
		else if ((tes=="ANSI/IEEE C57.12" ) && (tas=="Other" ))
		{ var tos = "Other";
		}
		
		
        document.getElementById("temp_rise").value=tos;

if (selectedValuess=="Other"){
$('#textboxam').show();
$('#textboxam').focus();
$('#textboxal').show();
document.getElementById('textboxam').setAttribute('required','required')
document.getElementById("temp_rise").value="Other";
document.getElementById('textboxal').setAttribute('required','required')

$('#textboxal').focus(); 



}
else {
<!--alert("Error"); -->
$('#textboxal').hide();
$('#textboxam').hide();
document.getElementById('textboxam').removeAttribute('required','required')
document.getElementById('textboxal').removeAttribute('required','required')
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
          	url: "../get_vektor_group.php",
          	cache: false, 
          	success: function(msg){
              $("#vektor_group1").html(msg);
            }
	})});
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
function somay() {
var selectbotol = document.getElementById("type_cooling1");
var selectedValues= selectbotol.options[selectbotol.selectedIndex].value;

var satu = document.getElementById("type_cooling1").value;
		if (satu=="AN")
		{ var dua = "AN";
		var tiga ="";
		var cool_fan ="NO";
		$('#tigatiga').hide();	
		$('#rc2').hide();	
		//$('#cool_fan').show();
		$('#duaduadua').hide();
		$('#bacotan').hide();
		$("#rc2").attr("disabled", "disabled"); 
		$("#dvPassport7").attr("disabled", "disabled"); 
		$("#dvPassport7a").attr("disabled", "disabled"); 
		
		$('#dvPassport7').hide();	
		$('#dvPassport7a').hide();
		$('#rate2a').hide();
		$('#rate2b').hide();
		$('#rate2c').hide();
		$('#rate2d').hide();
		}
	
		else if (satu=="ANAF")
		{ var dua = "AN";
		var tiga ="AF";
		var cool_fan ="YES";
		$('#tigatiga').show();
		$('#dvPassport7').show();	
		$('#dvPassport7a').show();		
		$('#rc2').show();
		$('#cool_fan').show();
		$('#bacotan').show();
		//$("#cool_fan").attr("disabled", "disabled"); 
		$("#rc2").removeAttr("disabled");
		$("#dvPassport7").removeAttr("disabled");
		$('#dvPassport7').focus();
		$("#dvPassport7a").removeAttr("disabled");
		$('#dvPassport7a').focus();
		$('#rate2a').show();
		$('#rate2b').show();
		$('#rate2c').show();
		$('#rate2d').show();
		document.getElementById('rc2').setAttribute('required','required')
		
		}
       
		document.getElementById("duadua").value=dua;
		document.getElementById("tigatiga").value=tiga;
		document.getElementById("cool_fan").value=cool_fan;
}
</script>

<script type="text/javascript">
function kebo() {
		document.getElementById('rc2').setAttribute('required','required')
				}
</script>
<script type="text/javascript">
	$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "../get_enclosure.php",
          	cache: false, 
          	success: function(msg){
              $("#txtOther7").html(msg);
			  $('#txtOther7').focus();
            }
	})});
</script>





	
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4"></script>
<script type="text/javascript" src="bootstrap/js/poper-min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap/js/slim-min.js"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>   
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/savy.min.js"></script>
</body>
</html>	
<?php } ?>

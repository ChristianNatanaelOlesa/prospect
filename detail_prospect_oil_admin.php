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
				?>
				<?php

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
<li><a href="index_admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="index_admin.php?page=prospect">Prospect</a></li>
<li class="active">Detail Prospect</li>  
</ol>
  

<div class="box">

	<header>
		<h2><strong> <font color="red">&nbsp;&nbsp;DETAIL PROSPECT SALES</font></strong></h2>	
	</header>
		
		
		
		<div class="body">
			<form action="" method="post" class="form-horizontal" name='orangtua'>
				<div class="form-group">
							<label class="control-label col-lg-3">No Prospect </label>
							<div class="col-lg-4">
								<strong><input type="text" Readonly name="noprospect" autofocus required class="form-control" value="<?php echo $no; ?> "/></strong>
							</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">No Sub Prospect </label>
							<div class="col-lg-4">
								<strong><input type="text" Readonly name="nopracost" autofocus required class="form-control" value="<?php echo $gukDb['nopracost'];  ?> "/></strong>
							</div>	
				</div>
				<center><div class="form-group">								
							<label  class="control-label col-lg-3">Tahun Prospect</label> 
							<div class="col-lg-4">								
							<strong>	 <input type="text" readonly name="Tahun" autofocus required class="form-control" value="<?php echo $meongDb['tahun'];  ?>"/></strong>								  
							</div>	
				</div>			
				<div class="form-group">	
							<label class="control-label col-lg-3">Nama Sales</label>																					
							<div class="col-lg-4">
							<strong>	<input type="text" Readonly name="sales"  class="form-control" value= " <?php echo $sales; ?>  "/></strong>
							</div>	
				</div>
				
				<div class="form-group">	
							<label class="control-label col-lg-3">Segmen Penjualan </label>
							<div class="col-lg-4">
							<strong>	<input type="text" Readonly name="segment" autofocus required class="form-control" value=<?php echo $meongDb['segment']; ?>  /> </strong>
							</div>	
				</div>
				<div class="form-group">	
							<label class="control-label col-lg-3">Sub Segmen Penjualan </label>
							<div class="col-lg-4">															
							<strong>	<input type="text" Readonly name="sub_segment" autofocus required class="form-control" value="<?php echo $meongDb['sub_segment']; ?> " />	</strong>
							</div>	
				</div>
				
				<div class="form-group">
							<label class="control-label col-lg-3">Customer </label>
							<div class="col-lg-4">
							<strong>	<input type="text" name="customer" readonly required class="form-control" value="<?php echo $meongDb['customer']; ?> " /> </strong>
							</div>	
				</div>
				
				
				<div class="form-group">								
							<label class="control-label col-lg-3">Project</label>
							<div class="col-lg-8">
							<strong>	<input type="text" name="project" readonly class="form-control" value="<?php echo $meongDb['project']; ?> " /></strong>
							</div>								
				</div>
				
				<div class="form-group">						
							<label class="control-label col-lg-3">Status Stage</label>
							<div class="col-lg-4">															
								<strong>	<input type="text" name="priority" readonly class="form-control" value="<?php echo $meongDb['priority']; ?> " /></strong>	
							</div>							
				</div>
				
			
			<h3><strong> <font color="blue">GENERAL CONDITION</font></strong></H3>
				<div class="form-group">
							<label class="control-label col-lg-3">Catagory</label>
								<div class="col-lg-4">															
								<strong><input type="text" name="category" readonly class="form-control" value="<?php echo $gukDb['category']; ?> " /></strong>			
								</div>	
				</div>
				<div class="form-group">				
							<label class="control-label col-lg-3">Type of Transformer</label>
								<div class="col-lg-4">			
								<strong><input type="text" name="type_trafo" readonly class="form-control" value="<?php echo $gukDb['type_trafo']; ?> " /></strong>				
								</div>			
				</div>		
				<center><div class="form-group">
							<label class="control-label col-lg-3">Service Condition</label>
								<div class="col-lg-4">															
								<strong><input type="text" name="service_condition" readonly class="form-control" value="<?php echo $gukDb['service_condition']; ?> " /></strong>			
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Altitude</label>
								
								<div class="col-lg-1">								
								<strong><input type="text" name="altitude" readonly class="form-control" value="<?php echo $gukDb['altitude']; ?> " /></strong>			
								</div>								
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Ambient Temp</label>																
								<div class="col-lg-1">								
								<strong><input type="text" name="ambient_temp" readonly class="form-control" value="<?php echo $gukDb['ambient_temp']; ?> " /></strong>			
								</div>	
								
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">International Standard</label>	
							<div class="col-lg-3">
							<strong><input type="text" name="standarisasi" readonly class="form-control" value="<?php echo $gukDb['standarisasi']; ?> " /></strong>			
							</div>	
									
								
				</div>
			
				<h3><font color="brown">ELECTRICAL CHARATERISTIC</font></H3>
				<div class="form-group">
							<label class="control-label col-lg-3">Temperature Rise</label>
								<div class="col-lg-3">													
								<strong><input type="text" name="temp_rise" readonly class="form-control" value="<?php echo $gukDb['temp_rise']; ?> " /></strong>			
								</div>
								
									
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Rate Capacity</label>
								<div class="col-lg-4">
								<strong><input type="text" name="rate_capacity" readonly class="form-control" value="<?php echo $gukDb['rate_capacity']; ?> " /></strong>			
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">No Of Phase</label>
								<div class="col-lg-4">															
								<strong><input type="text" name="no_phase" readonly class="form-control" value="<?php echo $gukDb['no_phase']; ?> " /></strong>				
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Frequency</label>								
								<div class="col-lg-3">
								<strong><input type="text" name=frequency" readonly class="form-control" value="<?php echo $gukDb['frequency']; ?> " /></strong>			
								</div>	
								
				</div>
				
				<div class="form-group">
							<label class="control-label col-lg-3">Primary Voltage</label>
								<div class="col-lg-4">
								<strong><input type="text" name="primary_voltage" readonly class="form-control" value="<?php echo $gukDb['primary_voltage']; ?> " /></strong>			
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Secondary Voltage&nbsp</label>
								<div class="col-lg-4">
								<strong><input type="text" name="secondary_voltage" readonly class="form-control" value="<?php echo $gukDb['secondary_voltage']; ?> " /></strong>			
								</div>	
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Vektor Group</label>								
								<div class="col-lg-4">															
								<strong><input type="text" name="vektor_group" readonly class="form-control" value="<?php echo $gukDb['vektor_group']; ?> " /></strong>												
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Type of Winding</label>
								<div class="col-lg-4">															
								<strong><input type="text" name="type_winding" readonly class="form-control" value="<?php echo $gukDb['type_winding']; ?> " /></strong>			
								</div>
				</div>
				
			
			
				<div class="form-group">
							<label class="control-label col-lg-3">Type of Cooling</label>
								<div class="col-lg-4">															
								<strong><input type="text" name="type_cooling" readonly class="form-control" value="<?php echo $gukDb['type_cooling']; ?> " /></strong>			
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">Tap Changer</label>
								<div class="col-lg-4">															
								<strong><input type="text" name="tap_changer" readonly class="form-control" value="<?php echo $gukDb['tap_changer']; ?> " /></strong>			
								</div>
				</div>
				<div class="form-group">
							<label class="control-label col-lg-3">No Of Tap</label>
								<div class="col-lg-4">													
								<strong><input type="text" name="no_tap" readonly class="form-control" value="<?php echo $gukDb['no_tap']; ?> " /></strong>			
								</div>
				</div>
					<div class="form-group">
							<label class="control-label col-lg-3">Type Of Oil</label>
								<div class="col-lg-4">															
								<strong><input type="text" name="type_oil" readonly class="form-control" value="<?php echo $gukDb['type_oil']; ?> " /></strong>			
								</div>
				</div>
			<h3> <font color="blue">PROTECTION & ACCESORIES</font></H3>
			<center><div class="form-group">
							<label class="control-label col-lg-3">Integrated Safety Device</label>
								<div class="col-lg-3">
								<strong><input type="text" name="safety_device" readonly class="form-control" value="<?php echo $gukDb['safety_device']; ?> " /></strong>											
								</div>							
			</div>
			<center><div class="form-group">
							<label class="control-label col-lg-3">Temperature Indicator</label>									
									<div class="col-lg-3">
									<strong><input type="text" name="temp_indicator" readonly class="form-control" value="<?php echo $gukDb['temp_indicator']; ?> " /></strong>										
									</div>						
													
				</div>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Oil Level Indicator</label>
									<div class="col-lg-3">
									<strong><input type="text" name="oil_indicator" readonly class="form-control" value="<?php echo $gukDb['oil_indicator']; ?> " /></strong>			
									</div>
				</div>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Presure Device</label>
									<div class="col-lg-3">
									<strong><input type="text" name="presure_device" readonly class="form-control" value="<?php echo $gukDb['presure_device']; ?> " /></strong>										
									</div>
				</div>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Winding Temperature Indicator</label>									
									<div class="col-lg-3">
									<strong><input type="text" name="winding_indicator" readonly class="form-control" value="<?php echo $gukDb['winding_indicator']; ?> " /></strong>			
								    </div>
				</div>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Sudden Presure Relay</label>
								<div class="col-lg-3">
									<strong><input type="text" name="presure_relay" readonly class="form-control" value="<?php echo $gukDb['presure_relay']; ?> " /></strong>			
								</div>
				</div>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Buccholz Relay</label>
								<div class="col-lg-3">
									<strong><input type="text" name="buccholz_relay" readonly class="form-control" value="<?php echo $gukDb['buccholz_relay']; ?> " /></strong>										
								</div>
				</div>
				<center><div class="form-group">
							<label class="control-label col-lg-3">Pressure Vacuum Gauge</label>								
								<div class="col-lg-3">
									<strong><input type="text" name="vacuum_gauge" readonly class="form-control" value="<?php echo $gukDb['vacuum_gauge']; ?> " /></strong>			
								</div>
				</div>
					<center><div class="form-group">
							<label class="control-label col-lg-3">HV/LV Cable Box</label>								
								<div class="col-lg-3">
									<strong><input type="text" name="enclosure" readonly class="form-control" value="<?php echo $gukDb['enclosure']; ?> " /></strong>										
								</div>	
				</div>
			<h3> <font color="blue">NOTES </font></H3>
			<div class="form-group">
							<label class="control-label col-lg-3">Catatan 1</label>
								<div class="col-lg-8">
								<!-- <textarea  id ="notes1" name="notes1"  class="form-control" placeholder="Catatan" rows="4" cols="50" value="<?php echo $gukDb['notes1']; ?> "></textarea> -->
								<strong><input type="text" name="notes1" readonly class="form-control" value="<?php echo $gukDb['notes1']; ?> " /></strong>
								</div>	
			</div>
			<div class="form-group">
							<label class="control-label col-lg-3">Catatan 2</label>
								<div class="col-lg-8">
								<!--<textarea  id ="notes2" name="notes2" class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea> -->
								<strong><input type="text" name="notes2" readonly class="form-control" value="<?php echo $gukDb['notes2']; ?> " /></strong>
							</div>	
			</div>
			<div class="form-group">
							<label class="control-label col-lg-3">Catatan 3</label>
								<div class="col-lg-8">
								<!--<textarea  id ="notes3" name="notes3" class="form-control" placeholder="Catatan" rows="4" cols="50" ></textarea> -->
								<strong><input type="text" name="notes3" readonly class="form-control" value="<?php echo $gukDb['notes3']; ?> " /></strong>
								</div>	
			</div>
			
			<div class="form-actions no-margin-bottom"  style="text-align:left;">
		<!--	<input type="submit" name="pasien" value="SELESAI" class="btn btn-primary" /> -->   <a href="menu_prospect_admin.php?noprospect=<?php echo $no; ?>"  class="btn btn-primary" >Back</a>										
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
function changeFunctional() {
var selectBoxes = document.getElementById("selectBoxal");
var selectedValues= selectBoxes.options[selectBoxes.selectedIndex].value;

var tes = document.getElementById("selectBoxal").value;
		if (tes=="SPLN D3")
		{ var tos = "50/55";
		}
		else if (tes=="ANSI / IEEE C57")
		{ var tos = "50/55";
		}
		else if (tes=="IEC 60076")
		{ var tos = "60/65";
		}
		else if (tes=="other")
		{ var tos = "Other";
		}
        document.getElementById("temp_rise").value=tos;

if (selectedValues=="other"){
$('#textboxal').show();
$('#textboxal').focus();
<!--$('#textboxar').show();  -->


}
else {
<!--alert("Error"); -->
$('#textboxal').hide();
$('#textboxar').hide();
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
</body>
</html>	

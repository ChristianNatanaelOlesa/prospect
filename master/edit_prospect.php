<?php
include("konekso.php");

$noprospect = $_GET['noprospect'];
//$Segment = $_GET['segment'];
//$sub_segment = $_GET['sub_segment'];
$customer= $_GET['customer'];
$project= $_GET['projectedit'];

//$air = mysqli_query($GLOBALS["___mysqli_ston"], "select * from ms_segment where id_segment='".$_GET["segment"]."'");
//$airDb = mysqli_fetch_assoc($air);						
//$seg = $airDb['nm_segment'];
							
							
//$api = mysqli_query($GLOBALS["___mysqli_ston"], "select * from ms_sub_segment where id_sub_segment='".$_GET["sub_segment"]."'");
//$apiDb = mysqli_fetch_assoc($api);						
//$sag = $apiDb['nm_sub_segment'];


//$query = "UPDATE h_rpospect SET segment='$segment' , sub_segment='$sub_segment', customer='$customer', project='$project' WHERE noprospect='$noprospect' ";
$query = "UPDATE h_rpospect SET  customer='$customer', project='$project' WHERE noprospect='$noprospect' ";
if (mysqli_query($GLOBALS["___mysqli_ston"], $query)) {
	# credirect ke page index
	echo $noprospect;
	header("location:index_sales.php");	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($GLOBALS["___mysqli_ston"]);
	echo $project;
}

//mysql_close($host);
?>

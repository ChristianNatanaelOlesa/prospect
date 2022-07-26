
<?php
	include 'library/koneksi2.php';
	$Device = $_POST['Device'];
 
	echo "<option value=''></option>"; 
	$query = "SELECT * FROM device where Device="YES" ";		
	$uyong = $db1->prepare($query);
	$uyong->execute();
	$res1 = $uyong->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['device'] . "'>" . $row['device'] . "</option>";
	}
	
	

?>



<?php
	include 'library/koneksi2.php';
 
	echo "<option value=''></option>"; 
	$query = "SELECT * FROM pilihan ORDER BY pilihan ASC";		
	$uyong = $db1->prepare($query);
	$uyong->execute();
	$res1 = $uyong->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id'] . "'>" . $row['pilihan'] . "</option>";
	}
	
	

?>



<?php
	include 'library/koneksi2.php';
 
	echo "<option value=''></option>"; 
	$query = "SELECT * FROM ms_vektor_3 ORDER BY nm_vektor_group ASC";		
	$uyong = $db1->prepare($query);
	$uyong->execute();
	$res1 = $uyong->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['nm_vektor_group'] . "'>" . $row['nm_vektor_group'] . "</option>";
	}
	
	

?>


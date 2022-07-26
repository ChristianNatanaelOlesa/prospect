

<?php
	include 'library/koneksi2.php';
	$segment = $_POST['segment'];
 
	echo "<option value=''></option>";
 
	$query = "SELECT * FROM ms_sub_segment WHERE id_segment='$segment' ORDER BY nm_sub_segment ASC";
	$tejo = $db1->prepare($query);
	$tejo->bind_param("i", $provinsi);
	$tejo->execute();
	$res1 = $tejo->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_sub_segment'] . "'>" . $row['nm_sub_segment'] . "</option>";
	}
?>

<?php
session_start();


include_once("library/koneksi.php");
$id=$_GET['id'];	

	if($_GET["id"]){
		$del = "DELETE FROM login WHERE kd_user='".$_GET["id"]."'";
		$delDb = mysqli_query($server, $del) or die("Error hapus data ".mysqli_error($GLOBALS["___mysqli_ston"]));
		if($delDb){		
		 echo"<script>window.location.href='data_user.php'</script>"; 
		}
		
	}else{
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Data yang dihapus tidak ada!!</b>
			</div><center>";
	}

?>
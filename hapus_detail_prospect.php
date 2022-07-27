<?php
include 'koneksi.php';

$g=$_GET['sender'];



if($g=='hapus') {
			$malas=mysqli_query($config,"select FROM oil_prospect where nopracost='$_GET[nopracost]'");
			$malasDb = mysqli_fetch_assoc($malas);
			$nomor=$malasDb["noprospect"];
        	mysqli_query($config,"DELETE FROM oil_prospect where nopracost='$_GET[nopracost]'"); 	
		
			$racun=mysqli_query($config,"select FROM oil_prospect where noprospect='$nomor'");
			$racunDb = mysqli_fetch_assoc($racun);
			$timor=$racunDb['noprospect'];
			echo $timor;

			if (empty($timor))
			{
				mysqli_query($config,"DELETE FROM h_rpospect where noprospect='$nomor'");  
				
			}

			echo "<script LANGUAGE='JavaScript'>
				window.location.href='menu_prospect.php?noprospect=".$timor.";</script>";
		}
		
			
?>
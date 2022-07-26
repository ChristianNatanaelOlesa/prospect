<?php
include 'koneksi.php';

$g=$_GET['sender'];

if($g=='hapus')
    {
        mysqli_query($config,"DELETE FROM h_rpospect where noprospect='$_GET[noprospect]' and status=0");
		mysqli_query($config,"DELETE FROM oil_prospect where noprospect='$_GET[noprospect]'and status=0");         
         echo '<script LANGUAGE="JavaScript">
         
            window.location.href="index_sales.php?page=prospect";
            </script>';
    }
			
?>
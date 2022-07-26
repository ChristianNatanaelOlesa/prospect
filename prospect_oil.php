<?php
include 'koneksi.php';

$g=$_GET['sender'];
if($g=='prospect')
{
    $sql="INSERT INTO h_rpospect (noprospect, tgl_pros,  nm_cust,  proyek, segment, status,kd_sales,nm_sales,alamat,kd_cust)
        VALUES
        ('$_POST[noprospect]',
         '$_POST[tanggal]',
		 '$_POST[customer]',
		 '$_POST[proyek]',
		 '$_POST[segment]',
		 1,
		 'SLS03',
		 'Christine',
		 'Serawak',
		 'CUST08'
		 
		 )";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("Prospect baru dengan nama :('.$_POST[nama].') Tersimpan")
            window.location.href="index.php?page=prospect";
            </script>'; 
    }
    else{
        echo "Error : ".$sql.". ".mysqli_error($config);
    }
     //header('location:http://localhost/');
}

else 
    if($g=='edit')
    {
        mysqli_query($config,"UPDATE h_rpospect SET id='$_POST[id]',
            nama='$_POST[nama]',
                alamat='$_POST[alamat]' WHERE id='$_POST[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Anggota dengan nama :('.$_POST[nama].') Di Update")
            window.location.href="index.php?page=prospect";
            </script>';
    } 
else 
    if($g=='hapus')
    {
        mysqli_query($config,"DELETE FROM anggota where id='$_GET[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Anggota dengan Id :('.$_GET[id].') Di Terhapus")
            window.location.href="index.php?page=anggota";
            </script>';
    }
//End Aksi Anggota
?>

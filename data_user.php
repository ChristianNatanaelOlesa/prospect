<?php
include_once("library/koneksi.php");
include ("theme/header.php");
?>
		<ol class="breadcrumb">
            <li><a href="index_home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="panel panel-default">
			
	<br><br> 
	<div class="container">
	<a href='tambah_user.php' class="btn btn-warning">Tambah User</a> 
	</div>
	<div class="container">		
		<div class="table-responsive" >
        <table width="100%"  id="example1" class="table table-striped dataTable no-footer"> 
		  <tr>
		  <td ><div><strong>User</strong></div></td>
		  <td ><div><strong>Nama </strong></div></td>  
		  <td ><div><strong>Departement</strong></div></td>	
		  <td ><div><strong>Jabatan</strong></div></td>	
		  <td ><div><strong>Level</strong></div></td>			  
		  <td ><div><strong>Aksi</strong></div></td>
          </tr>
		  <?php
				$pasienSql = "SELECT * FROM login where level <>'it'";
				$pasienQry = mysqli_query( $server, $pasienSql)  or die ("Query pasien salah : ".mysqli_error($GLOBALS["___mysqli_ston"]));
				$nomor  = 0; 
				while ($pasien = mysqli_fetch_array($pasienQry)) {
				$nomor++;
		  ?>
          <tr>
		  <td><?php echo $pasien['username'];?></td>      
		  <td><?php echo $pasien['nama'];?></td>
		  <td><?php echo $pasien['bagian'];?></td>
		  <td><?php echo $pasien['jabatan'];?></td>
		  <td><?php echo $pasien['level'];?></td>
		
         
           
		<td> 	
		<a href="edit_user.php?nmr=<?php echo $pasien['kd_user']; ?>" class="btn btn-success"><li class="fa fa-fencil"></li> Edit</a> 		
		<a href="hapus_user.php?id=<?php echo $pasien['kd_user']; ?>" class="btn btn-danger"><li class="fa fa-fencil"></li> Delate</a> 
		
		</tr>
			<?php } ?>
  
		 </table>
		  
		</div>
	</div>
	<div class="container">
	<a href='tambah_user.php' class="btn btn-warning">Tambah User</a> 
	</div>
	<br><br>
</div>

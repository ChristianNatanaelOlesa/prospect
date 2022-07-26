<?php
include_once("library/koneksi.php");
include_once("library/koneksi.php");
include ("theme/header.php");

//session_start();
	
?>
<ol class="breadcrumb">
<li><a href="index_home.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="data_user.php"><i class="fa fa-dashboard"></i> Data User</a></li>

</ol>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="box">

			<div class="body">
			<form action="" method="post" class="form-horizontal">
			
			<div class="form-group">
							<label class="control-label col-lg-4">User Name</label>
							<div class="col-lg-4">
								 <input type="text" name="username" autofocus required class="form-control" placeholder="User" required />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">Password</label>
							<div class="col-lg-4">
								  <input type="text" name="password" autofocus required class="form-control" placeholder="Password" required />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">Nama</label>
							<div class="col-lg-4">
								<input type="text" name="nama" autofocus required class="form-control" placeholder="Nama Lengkap" required />
							</div>
						</div>
							<div class="form-group">
							<label class="control-label col-lg-4">No HP</label>
							<div class="col-lg-4">
								<input type="number" name="nohp" autofocus required class="form-control" placeholder="Nomor HP/Telegram" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Departemen</label>
							<div class="col-lg-4">		
							<select name='bagian'autofocus required class="form-control"  />									
								<option value='Sales Swasta'>Sales Swasta</option>	
								<option value='Sales BUMN'>Sales BUMN</option>	
								<option value='Sales PLN'>Sales PLN</option>	
								<option value='Sales Export'>Sales Export</option>	
								<option value='Engineer'>Engineer</option>	
								<option value='Admin'>Administrator</option>		
								<option value='IT'>IT</option>
								</select>
								</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Jabatan</label>
							<div class="col-lg-4">								
								<select name='jabatan'autofocus required class="form-control"  />									
								<option value='Staff'>Staff</option>	
								<option value='Supervisor'>Supervisor</option>
								<option value='Manager'>Manager</option>	
								<option value='Direktur'>Direktur</option>	
								<option value='Dirut'>Direktur Utama</option>
								<option value='Special'>Special</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Level</label>
							<div class="col-lg-4">																						
								<select name='level'autofocus required class="form-control"  />									
								<option value='sales'>Sales</option>	
								<option value='engineer'>Engineer</option>	
								<option value='estimator'>Estimator</option>	
								<option value='tender'>Tender</option>	
								<option value='admin'>Administrator</option>		
								<option value='it'>IT</option>														
								</select>								
							</div>
						</div> 

						
						
						
											
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="SIMPAN" class="btn btn-primary" />          <a href="data_user.php" class="btn btn-primary" >Batal</a>
						</div>

					</form>
	</div>
	
<?php
if($_POST["pasien"]){
			include_once("library/koneksi.php");
			
			switch ($_POST["bagian"])
					{ case'Sales BUMN': 
					  $manager="Rudi Taan";
					  $direktur="Hari Bambang";					
					  $dirut="Freddie Wibowo";
					
					  break;
					 case'Sales Swasta': 
					  $manager="Christiana S Dewi";
					  $direktur="Hendra Sunarya";
					  $dirut="Freddie Wibowo";
					
					  break;
					  case'Sales PLN': 
					  $manager="Adrianus Sigit";
					  $direktur="Hari Bambang";
					  $dirut="Freddie Wibowo";
					
					  break;
					 case'Sales Export': 
					  $manager="Marshal Nauli";
					  $direktur="David Limputra";
					  $dirut="Freddie Wibowo";
					
					  break;
					  case'Engineering': 
					  $manager="Tejo Wahono";
					  $direktur="Ekora";
					  $dirut="Freddie Wibowo";
					
					  break;
					  }
			
			mysqli_query($GLOBALS["___mysqli_ston"], "insert into login set  username='".$_POST["username"]."',  password='".md5($_POST["password"])."', nama='".$_POST["nama"]."',bagian='".$_POST["bagian"]."',jabatan='".$_POST["jabatan"]."',level='".$_POST["level"]."',manager='$manager',direktur='$direktur',dirut='$dirut',nohp='".$_POST["$nohp"]."'");
			 echo"<script>alert('Data Sukses tersimpan');window.location.href='data_user.php'</script>";?>
			
				<!--<div class="alert alert-success" role="alert">
				<b>Berhasil menambah user ke database!! </b>
				</div> -->
			<?php
	}else if(isset($_POST["pasien"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}

?>

<script type="text/javascript">   
    <?php echo $jsArray; ?> 
    function changeValue(no_pasien){ 
    document.getElementById('nm').value = dtMhs[no_pasien].nama; 
    document.getElementById('jrsn').value = dtMhs[no_pasien].jrsn; 
    }; 
    </script> 